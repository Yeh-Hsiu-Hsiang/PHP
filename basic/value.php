<?php

echo "這是整數 10 <br/>";
$thisInt = 10;
var_dump($thisInt);
echo "<br/>";
echo "這是字串 10, echo 不能用數值<br/>";
# Echo只能對字串做處理，所以當遇到數值會將型別自動轉成字串。
echo $thisInt;
echo "<br/>";

echo "這是負數 -2 <br/>";
$thisIsInt = -2;
var_dump($thisIsInt);
echo "<br/>";
echo $thisIsInt;
echo "<br/>";

echo "這是浮點數 Float";
echo "<br/>";
$thisIsFloat = 3.1415926;
var_dump($thisIsFloat);
echo "<br/>";

echo "這是四捨五入 Round";
echo "<br/>";
$thisIsFloat1 = round($thisIsFloat);
var_dump($thisIsFloat1);
echo "<br/>";

echo "這是無條件進位 ceil";
echo "<br/>";
$thisIsFloat2 = ceil($thisIsFloat);
var_dump($thisIsFloat2);
echo "<br/>";

echo "這是無條件捨去 floor";
echo "<br/>";
$thisIsFloat3 = floor($thisIsFloat);
var_dump($thisIsFloat3);
echo "<br/>";

echo "這是將浮點轉整數 intval(無條件捨去)";
echo "<br/>";
$thisIsFloat4 = intval($thisIsFloat);
var_dump($thisIsFloat4);
echo "<br/>";

echo "這是將整數轉浮點數 floatval";
echo "<br/>";
$thisIsFloat5 = floatval($thisIsFloat4);
var_dump($thisIsFloat5);
echo "<br/>";

?>
