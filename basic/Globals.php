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
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
$name = $_REQUEST['fname'];
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
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
$name = $_POST['fname'];
echo $name;
?>

</body>
</html>

<?php
echo "<hr>";
echo "$ _GET 用於收集提交 method = 'get' 的 HTML 表單數據, 也可收集 URL 中的發送的數據";
echo "<br>";
?>
