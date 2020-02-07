<?php
$Name = array('Berry'=>'10', 'Orange'=>'6', 'Elle'=>'3', 'Ice'=>'7', 'Apple'=>'9', 'Kitty'=> '2');
$number = array('0' => 2, "4"=>8, "5"=>10, "3"=>6);
echo "Name = ";
print_r($Name);
print "<br>";
echo "number = ";
print_r($number);
print "<br>";

echo "sort() - 升序 (key 會錯亂)<br>";
sort($Name);
foreach($Name as $key => $value){
  echo '$Name['.$key.']'.":".$Name[$key]."<br>";
}
sort($number);
foreach($number as $key => $value){
  echo '$number['.$key.']'.":".$number[$key]."<br>";
}

echo "rsort() - 降序 (key 會錯亂) <br>";
rsort($Name);
foreach($Name as $key => $value){
  echo '$Name['.$key.']'.":".$Name[$key]."<br>";
}
rsort($number);
foreach($number as $key => $value){
  echo '$number['.$key.']'.":".$number[$key]."<br>";
}

echo "asort() - 根據值對陣列進行升序。<br>";
asort($Name);
foreach($Name as $key => $value){
  echo '$Name['.$key.']'.":".$Name[$key]."<br>";
}
asort($number);
foreach($number as $key => $value){
  echo '$number['.$key.']'.":".$number[$key]."<br>";
}

echo "arsort() - 根據值對陣列進行降序。<br>";
arsort($Name);
foreach($Name as $key => $value){
  echo '$Name['.$key.']'.":".$Name[$key]."<br>";
}
arsort($number);
foreach($number as $key => $value){
  echo '$number['.$key.']'.":".$number[$key]."<br>";
}

echo "ksort() - 根據鍵對陣列進行升序。 <br>";
ksort($Name);
foreach($Name as $key => $value){
  echo '$Name['.$key.']'.":".$Name[$key]."<br>";
}
ksort($number);
foreach($number as $key => $value){
  echo '$number['.$key.']'.":".$number[$key]."<br>";
}


echo "krsort() - 根據鍵對陣列進行降序。 <br>";
krsort($Name);
foreach($Name as $key => $value){
  echo '$Name['.$key.']'.":".$Name[$key]."<br>";
}
krsort($number);
foreach($number as $key => $value){
  echo '$number['.$key.']'.":".$number[$key]."<br>";
}

?>
