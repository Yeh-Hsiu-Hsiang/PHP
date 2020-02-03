<?php

$str = "";
# 強制傳成 boolean
$data = (bool)$str;
var_dump($data);
echo "<br/>";

$var = 10;
$var = "";

if($var){
  echo "Hello, World";
  echo "<br/>";
}else{
  echo "Oh, No!!!";
  echo "<br/>";
}

?>
