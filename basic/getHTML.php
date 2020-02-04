<?php

# GET –  是HTTP方法中的一個，通常用來取得頁面，可以額外帶參數。
# POST – 是HTTP方法中的一個，通常用來傳遞資料給網站。常見搭配HTTP <form> 一起使用。不過只要是想要傳遞資料給網站都可以用它。
# 取資料用GET，送資料用POST。

if ($_GET["recipe"] == null){
  //使用者甚麼都沒輸入
  echo "<h1>請到下一頁Form搜尋</h1>";

}else{

  echo "<h1>您搜尋的是：" . $_GET["recipe"] . "</h1>";

  if ($_GET["recipe"] == "炒麵"){

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
