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
```$變數名稱```  
#### Ex:
```
$title = "Name";
$number = 1;
```
<hr>

* 設定函數  
```  function(輸入值){}```  
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
