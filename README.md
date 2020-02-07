### **這裡是 PHP 初學者練習**  

> **常用語法**  

* 基本輸出  
```echo``` 輸出一個或者多個字串  
```print``` 只能列印出簡單型別變數的值(如int,string)   

  #### Ex:
  ```  
  echo "Hello, World";
  print "Hello, World";
  ```
<hr>

* 輸出陣列  
```print_r``` 可以列印出複雜型別變數的值(如陣列,物件)    
  #### Ex:
  ```  
  $Name = array('Berry'=>'10', 'Orange'=>'6', 'Elle'=>'3', 'Ice'=>'7', 'Apple'=>'9', 'Kitty'=> '2');
  ```
  ```
  print_r($Name);
  ```
<hr>  

* 宣告變數  
```
$變數名稱
```  
#### Ex:  
  ```
  $title = "Name";
  $number = 1;
  ```  
<hr>

* 設定函數  
```  function(輸入值){}```  
  #### Ex:  
  ```
  function Hi(){
    print "Hello, World";
  }
  ```
  ```
  Hi();
  ```
<hr>

* 換行  
```echo "<br>";```  
<hr>

* 清單  
> ```"<ul>"裡面包"<li>" ```  

#### Ex:  
  ```  
  echo "<ul>";
    echo "<li> </li>";
    echo "<li> </li>";
  echo "</ul>";
  ```  
<hr>

* 分隔線  
```echo "<hr/>";```  
<hr>

* 印出變數的相關資訊(ex:變數種類or值)  
```var_dump(要判斷的變數)```  
  #### Ex:
  ```var_dump($title);```  
<hr>  

 #### GET vs. POST  
 GET 和 POST 都創建陣列（例如，array( key => value, key2 => value2, key3 => value3, ...)）。此陣列包含鍵 / 值對，其中的鍵是表單控制項的名稱，而值是來自使用者的輸入資料。  
 * GET 和 POST 被視作 $_GET 和 $_POST。  
 * 它們是全域變數，能夠從任何函數、類或檔訪問它們。  

 * $_GET 是通過 URL 參數傳遞到當前腳本的變數陣列。  
 * $_POST 是通過 HTTP POST 傳遞到當前腳本的變數陣列。

 #### GET的使用時機  
 * 通過 GET 方法從表單發送的資訊對任何人都可以看見
 （所有變數名和值都會顯示在 URL 中）。  
 * GET 對所發送資訊的數量限制在大約 2000 個字元。  
 * 由於變數顯示在 URL 中，把頁面添加到書簽中也更為方便。
 * GET 可用於發送非敏感的資料。    
 ###### **絕不能使用 GET 來發送密碼或其他敏感資訊**  

 #### POST 的使用時機  
 * 通過 POST 方法從表單發送的資訊對外是看不見的
 （所有名稱 / 值會被嵌入 HTTP 請求的主體中）。
 * 對所發送資訊的數量無限制。
 * POST 支持高階功能，比如在向伺服器上傳檔時進行 multi-part 二進位輸入。
 * 由於變數未顯示在 URL 中，也就無法將頁面添加到書簽。
 ###### **開發者偏愛 POST 來發送表單數據**

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
