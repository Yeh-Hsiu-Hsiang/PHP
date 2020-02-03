<?php

$number = 10;

if($number > 5){
  echo $number." > 5 ";
  echo "<br/>";
}else{
  echo $number." not > 5 ";
  echo "<br/>";
}

$string = "I'm string";

if($string == "Hello, World"){
  print $string." >_O ";
  print "<br/>";
}else{
  print "We're different Z_Z ";
  print "<br/>";
}

$number = 20;
$string = "20";
echo "數值".$number."和字串".$string."相同";
echo "<br/>";

if($number == $string){
  echo "same";
  echo "<br/>";
}else{
  echo "not same";
  echo "<br/>";
}

# 嚴謹等於 ===
echo "但是如果使用 === 的話 ... ";
echo "<br/>";
if($number === $string){
  echo "same >_O";
  echo "<br/>";
}else{
  echo "not same U_U";
  echo "<br/>";
}

# != , <>
echo "使用 !=";
echo "<br/>";
if($number != 0){
  echo $number."不等於 0 ";
  echo "<br/>";
}else{
  echo $number."等於 0 ";
  echo "<br/>";
}

echo "使用 <>";
echo "<br/>";
if($number <> 10){
  echo $number."不等於 10 ";
  echo "<br/>";
}else{
  echo $number."等於 10 ";
  echo "<br/>";
}

# !== 完全不等於(連型態一起比較)
echo "使用 !== 完全不等於(會比較型態)";
echo "<br/>";
$number = 5;
$string = "5";
if($number !== $string){
  echo "Ohhh, yes";
  echo "<br/>";
  echo var_dump($number)."not same".var_dump($string);
  echo "<br/>";
}else{
  echo "Oh, No";
  echo "<br/>";
  echo var_dump($number)."same".var_dump($string);
  echo "<br/>";
}

# 邏輯運算子
echo "這是邏輯運算";
echo "<br/>";
$money = 100;
$price = 50;
if($money >= $price && $price < $money){
  echo "我有錢, 買買買!!!";
  echo "<br/>";
}else{
  echo "看什麼看, 吃土啦!!!";
  echo "<br/>";
}

echo "<ul>";
echo "<li> && 邏輯運算子比較</li>";
echo "<li>".(true and true)."</li>";   //條件成立，輸出結果→1
echo "<li>".(true and false)."</li>";  //條件不成立，輸出結果→  (什麼都沒有)
echo "<li>".(true && true)."</li>";    //條件成立，輸出結果→1
echo "<br/>";

echo "<li> || 邏輯運算子比較</li>";
echo "<li>".(true or true)."</li>";    //條件成立，輸出結果→1
echo "<li>".(true or false)."</li>";   //條件成立，輸出結果→1
echo "<li>".(false or false)."</li>";  //條件不成立，輸出結果→  (什麼都沒有)
echo "<li>".(false || false)."</li>";  //條件不成立，輸出結果→  (什麼都沒有)
echo "<br/>";

echo "<li> xor 邏輯運算子比較</li>";
echo "<li>".(true xor true)."</li>";   //條件不成立，輸出結果→  (什麼都沒有)
echo "<li>".(true xor false)."</li>";  //條件成立，輸出結果→1
echo "<li>".(false xor true)."</li>";  //條件成立，輸出結果→1
echo "<li>".(false xor false)."</li>"; //條件不成立，輸出結果→  (什麼都沒有)
echo "<br/>";

?>
