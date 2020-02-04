<?php

function oh(){
  print "Hello, World";
}

oh();
echo "<br>";
echo "<br>";

##
echo "function input multiple value : <br>";
function Name($name, $birthyear, $like){
  echo "$name Born in $birthyear. like $like <br>";
}
Name("Tina", "1960", "apple");
Name("Nana", "1997", "banana");
Name("Joe", "1987", "grape");
Name("Hsiu", "1965", "strawberry");
echo "<br>";

##
echo "function return value : <br>";
function sum($x=1, $y=1){
  $z = $x + $y;
  return $z;
}

echo " 5 + 2 = ".sum(5, 2)."<br>";
echo " 7 + 9 = ".sum(7, 9)."<br>";
echo "預設 1 + 1 = ".sum()."<br>";

?>
