<?php

$person = array("Tina", "1997", "Sanchong");
echo "My Name is $person[0], I born in $person[1], from $person[2]."."<br>";

##
$arrlength = count($person);
echo "array 長度為 : $arrlength <br>";

##
for ($i = 0; $i < $arrlength; $i++){
  echo $person[$i];
  echo "<br>";
}
echo "<br>";

##
echo "give value : <br>";
$age = array("Tina"=> "17", "Nana" =>"23", "Joe"=>"25");
$from["Tina"]="Luzhou";
$from["Nana"]="Sanchong";
$from["Joe"]="Wugu";

echo "Tina is". $age["Tina"] ." old, from ". $from["Tina"] ."<br>";
echo "<br>";

##
foreach($age as $x => $x_value){
  echo "key = ". $x . ", value = ". $x_value;
  echo "<br>";
}
echo "<br>";

foreach($from as $y => $y_value){
  echo "key = ". $y . ", value = ". $y_value;
  echo "<br>";
}
?>
