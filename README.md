### **這裡是 PHP 初學者練習**  

> **常用語法**  

* 基本輸出  
```echo``` 輸出一個或者多個字串  
```print``` 只能列印出簡單型別變數的值(如int,string)   

  #### Ex:
  ```php  
  <?php
  echo "Hello, World";
  print "Hello, World";
  ?>
  ```
<hr>

* 輸出陣列  
```print_r``` 可以列印出複雜型別變數的值(如陣列,物件)    
  #### Ex:
  ```php  
  <?php
  $Name = array('Berry'=>'10', 'Orange'=>'6', 'Elle'=>'3', 'Ice'=>'7', 'Apple'=>'9', 'Kitty'=> '2');

  print_r($Name);
  ?>
  ```
<hr>  

* 宣告變數  
```$變數名稱```  

#### Ex:  

```php
<?php
  $title = "Name";
  $number = 1;
?>
```  
<hr>

* 設定函數  
```  function(輸入值){}```  

  #### Ex:  

  ```php
  <?php
  function Hi(){
    print "Hello, World";
  }

  Hi();
  ?>
  ```
<hr>

* 換行  
```php
<?php
echo "<br>";
?>
```

<hr>

* 清單  
> ```"<ul>"裡面包"<li>" ```  

#### Ex:

```  php
<?php
  echo "<ul>";
    echo "<li> </li>";
    echo "<li> </li>";
  echo "</ul>";
?>
```  
<hr>

* 分隔線  
```php
<?php
echo "<hr/>";
?>
```  

<hr>

* 印出變數的相關資訊(ex:變數種類or值)  
```var_dump(要判斷的變數)```  

  #### Ex:

  ```php
  <?php
  var_dump($title);
  ?>
  ```  
<hr>  

> **進階知識 & 語法**

 #### GET vs. POST  
```$_GET["name"];```   
```$_POST["name"];```    
```<form action="fileName" method="get">```  使用 GET 方法傳遞值  
```<form action="fileName" method="post">```  使用 POST 方法傳遞值  

#### Ex:

* PHP
```php
<?php
if ($_POST["recipe"] == null){
  //使用者甚麼都沒輸入
  echo "<h1>請到下一頁Form搜尋</h1>";
}else{
  echo "<h1>您搜尋的是：" . $_POST["recipe"] . "</h1>";

  if ($_POST["recipe"] == "炒麵"){
    echo "標題：阿嬤的炒麵<br/>";
    echo "步驟：<br/>";
    echo "1： 找一個阿嬤<br/>";
    echo "2： 請她幫你煮<br/>";
  }else{
    echo "您的要求太過於複雜<br/>";
    echo "叫外送可能會比較實際一點<br/>";
  }
}
?>
```

* HTML :
```html
<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>

    <h1>HtmlForm</h1>

    <form method="post" action="./getHTML.php">
      <!--當使用者按下送出表單之後所傳送到的頁面。-->
      <input type="text" name="recipe" placeholder="請輸入食譜名稱" />
      <!-- 參數名稱必須和「getHTML」中的 $_POST ["yourName"]  陣列裡的值完全一致才會讀取成功。
            placeholder = "" => 輸入欄位提示訊息 -->
      <button type="submit">
        送出
      </button>
    </form>
  </body>
</html>
```

 GET 和 POST 都創建陣列（例如，array( key => value, key2 => value2, key3 => value3, ...)）。此陣列包含鍵 / 值對，其中的鍵是表單控制項的名稱，而值是來自使用者的輸入資料。  
 * GET 和 POST 被視作 $_GET 和 $_POST。  
 * 它們是**全域變數**，能夠從任何函數、類或檔訪問它們。  

 * $_GET 是通過 URL 參數傳遞到當前腳本的變數陣列。  
 * $_POST 是通過 HTTP POST 傳遞到當前腳本的變數陣列。

#### GET的使用時機  
 * 通過 GET 方法從表單發送的資訊對**任何人都可以看見**
 （所有變數名和值都會顯示在 URL 中）。  
 * GET 對所發送資訊的數量限制在大約 2000 個字元。  
 * 由於變數顯示在 URL 中，把頁面添加到書簽中也更為方便。
 * GET 可用於發送非敏感的資料。    
 ###### **絕不能使用 GET 來發送密碼或其他敏感資訊**  

#### POST 的使用時機  
 * 通過 POST 方法從表單發送的資訊**對外是看不見的**
 （所有名稱 / 值會被嵌入 HTTP 請求的主體中）。
 * 對所發送資訊的數量無限制。
 * POST 支持高階功能，比如在向伺服器上傳檔時進行 multi-part 二進位輸入。
 * 由於變數未顯示在 URL 中，也就無法將頁面添加到書簽。
 ###### **開發者偏愛 POST 來發送表單數據**

<hr>

### include vs. require
* include  
```echo include 'filename';```  

* require  
```echo require 'filename';```

可以將 PHP 檔的內容插入另一個 PHP 檔（在伺服器執行它之前）。  
include 和 require 語句是相同的，除了錯誤處理方面：
* require 會生成**致命錯誤**（E_COMPILE_ERROR）並**停止程式**。
* include 只生成**警告**（E_WARNING），並且**程式會繼續**。

#### include 的使用時機  
當**檔案不是必需的**，且應用程式在檔案未找到時還能繼續運作時。  
#### require 的使用時機  
當檔案被應用程式請求時。也就是說該**檔案是必需品**，沒有他整個程式會停止運作。

<hr>

#### 文件 readfile()   
#### Ex:
```php
<?php
echo readfile("webdictionary.txt");
?>
```

<hr>

#### 開啟及讀取文件
* fopen()  開啟文件
* fread() - 讀取文件  
* fclose() - 關閉文件
* fgets() - 讀取單行文件
#### Ex:
```php
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("webdictionary.txt"));
echo fgets($myfile);
fclose($myfile);
?>
```

模式  |  描述    
--:-- | --:--  
r | read，從文件起始開始。 |    
w | write，從文件起始開始。 |  
a | write，文件中的現有數據會被保留。從文件結尾開始。如果文件不存在的話，會創建新的文件。 |  
x | 創新文件，write。如果文件已存在，返回 FALSE 和錯誤。 |  
r+ | read & write，從文件起始開始。 |  
w+ | read & write，能夠刪除或新建文件。從文件起始開始。 |  
a+ | read & write，文件中的已有數據會被保留。從文件結尾開始。如果文件不存在的話，會創建新的文件。 |  
x+ | 創新文件，read & write。如果文件已存在，返回 FALSE 和錯誤。 |  

#### 檢查文件是否全部讀取完畢 - End-Of-File 。
```feof() ```  
* 檢查文件是否 "end-of-file" (EOF)。
* 對於**未知長度**的文件非常有用。
#### Ex:
```php
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
```

#### 讀取單字符
```fgetc()```
* 用於從文件中讀取單個字符。  

#### Ex:
```php
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgetc($myfile);
  echo "<br>";
}
fclose($myfile);
?>
```


<hr>

* [PHP 表單處理](https://www.w3school.com.cn/php/php_forms.asp)    
* [PHP MySQL連接](https://www.w3school.com.cn/php/php_mysql_connect.asp)  
<hr>   

#### 實用練習範例
[Array.php](https://github.com/Yeh-Hsiu-Hsiang/PHP/blob/master/basic/Array.php)  
[for 跟 foreach 的用法](https://github.com/Yeh-Hsiu-Hsiang/PHP/blob/master/basic/For.php)  
[HtmlForm.html ( 跟 getHTML.php 一起使用 )](https://github.com/Yeh-Hsiu-Hsiang/PHP/blob/master/basic/HtmlForm.html)  
[getHTML.php ( 跟 HtmlForm.html 一起使用 )](https://github.com/Yeh-Hsiu-Hsiang/PHP/blob/master/basic/getHTML.php)  

<hr>

#### 參考網站  
[【PHP】01. PHP語言學習與開發環境介紹](https://progressbar.tw/posts/142)  
[XAMPP v7.3.6-2 網頁伺服器自動架站機](https://briian.com/18718/)  
[php教學：想用程式寫網站嗎？學會php的程式範例](https://www.twhappy.com/index.php?action=blog&category=6)  
[[PHP網站建立教學][3] – 編寫第一個網頁(PHP + HTML +CSS + Javascript)](https://twosheng.com/php%E7%B6%B2%E7%AB%99%E5%BB%BA%E7%AB%8B%E6%95%99%E5%AD%B83-%E7%B7%A8%E5%AF%AB%E7%AC%AC%E4%B8%80%E5%80%8B%E7%B6%B2%E9%A0%81php-html-css-javascript/)  
[W3school](https://www.w3school.com.cn/php/index.asp)  
