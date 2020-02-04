<?php

for($i = 0; $i <= 7; $i++){
  echo $i;
  echo "<br/>";
}

echo "foreach 循環只適用於陣列，並用於陣列中每對鍵/值。"."<br>";
$color = array("yellow", "blue", "red");
foreach($color as $value){
  echo "$value <br>";
}
?>
