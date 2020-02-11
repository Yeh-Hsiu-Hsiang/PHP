<?php
echo "全域變數 $ GLOBALS";
echo "<br>";

$x = 75;
$y = 25;

function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
echo "<hr>";

echo "$ _SERVER 保存關於表頭、路徑、和腳本位置的訊息";
echo "<br>";
echo "Ex:";
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<hr>";

echo "$ _REQUEST 收集 HTML 表單提交的數據。";
echo "<br>";
echo "Ex:";
?>

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="REQname">
<input type="submit">
</form>

<?php
$name = $_REQUEST['REQname'];
echo $name;
?>

</body>
</html>

<?php
echo "<hr>";
echo "$ _POST 用於收集提交 method = 'post' 的 HTML 表單數據, 也常用於傳遞變量";
echo "<br>";
echo "Ex:";
?>

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="POSTname">
<input type="submit">
</form>

<?php
$name = $_POST['POSTname'];
echo $name;
?>

</body>
</html>

<?php
echo "<hr>";
echo "$ _GET 用於收集提交 method = 'get' 的 HTML 表單數據, 也可收集 URL 中的發送的數據";
echo "<br>";
echo "$ _SERVER['PHP_SELF'] 是一種超全域變數，將表單數據發送到頁面本身，而不是跳轉到另一張頁面。";
echo "<br>";
echo "htmlspecialchars() 函數把特殊字元轉換為 HTML 實體。這意味著 < 和 > 之類的 HTML 字元會被替換為 &lt; 和 &gt; 。這樣可防止攻擊者通過在表單中注入 HTML 或 JavaScript 代碼（跨網站腳本攻擊）對代碼進行利用。";
echo "<br>";
echo "<hr>";
?>

<?php
echo "簡易表格 (防止駭客擷取資訊)。";
echo "<br>";
?>

<?php
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<html>
<body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    Website: <input type="text" name="website">
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <br><br>
  <input type="submit" name="submit" value="提交">
  </form>
</body>
</html>

<?php
echo "<hr>";
echo "增加必填欄位顯示。";
echo "<br>";
?>

<?php
// 增加錯誤變數以判斷是否輸入錯誤
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website:
<input type="text" name="website">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
<label>Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<hr>";
echo "驗證 Name、E-mail 和 URL。";
echo "<br>";
 ?>
 <?php
 $nameErr = $emailErr = $genderErr = $websiteErr = "";
 $name = $email = $gender = $comment = $website = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // 檢查名字是否包含字母和空格
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed";
     }
   }

   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // 檢查 Email 是否有效
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       $emailErr = "Invalid email format";
     }
   }

   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     // 檢查 URL 地址是否有效
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%
     =~_|]/i",$website)) {
       $websiteErr = "Invalid URL";
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
 }
 ?>

 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 Name: <input type="text" name="name">
 <span class="error">* <?php echo $nameErr;?></span>
 <br><br>
 E-mail:
 <input type="text" name="email">
 <span class="error">* <?php echo $emailErr;?></span>
 <br><br>
 Website:
 <input type="text" name="website">
 <span class="error"><?php echo $websiteErr;?></span>
 <br><br>
 <label>Comment: <textarea name="comment" rows="5" cols="40"></textarea>
 <br><br>
 Gender:
 <input type="radio" name="gender" value="female">Female
 <input type="radio" name="gender" value="male">Male
 <span class="error">* <?php echo $genderErr;?></span>
 <br><br>
 <input type="submit" name="submit" value="Submit">
 </form>

 <?php
 echo "<hr>";
 echo "送出後保留表單中的值。";
 echo "<br>";
 ?>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo $website;?>">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br><br>
    Gender:
    <br><br>
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="female") echo "checked";?>
    value="female">Female
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="male") echo "checked";?>
    value="male">Male
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
 </form>
