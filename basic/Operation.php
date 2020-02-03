<?php

echo "這是加法";
echo "<br/>";
$number = 1;
echo "1 + 1 = ";
$value = $number + 1;
echo $value;
echo "<br/>";

echo "這是減法";
echo "<br/>";
$number = 20;
echo "20 - 10 = ";
$value = $number - 10;
echo $value;
echo "<br/>";

echo "這是浮點數運算";
echo "<br/>";
$number = 3.1415926;
echo $number." - 2 + 1.5 = ";
$value = $number - 2 + 1.5;
echo $value;
echo "<br/>";
var_dump($value);
echo "<br/>";

echo "這是乘法";
echo "<br/>";
$number = 20;
echo $number." * 5 = ";
$value = $number * 5;
echo $value;
echo "<br/>";
var_dump($value);
echo "<br/>";

$number = 20;
echo $number." * 0.5 = ";
$value = $number * 0.5;
echo $value;
echo "<br/>";
var_dump($value);
echo "<br/>";

echo "這是除法";
echo "<br/>";
$number = 20;
echo $number." / 5 = ";
$value = $number / 5;
echo $value;
echo "<br/>";
var_dump($value);
echo "<br/>";

$number = 20;
echo $number." / 0.5 = ";
$value = $number / 0.5;
echo $value;
echo "<br/>";
var_dump($value);
echo "<br/>";

echo "這是餘數";
echo "<br/>";
$number = 12;
echo $number." % 10 = ";
$value = $number % 10;
echo $value;
echo "<br/>";
var_dump($value);

?>
