<?php

$listTitle = "這是列表";
$firstName = "NaNa";
$secondName = "Yeh";

echo "<p>".$listTitle."</p>";
echo "<ul>";
echo "<li>".$firstName."</li>";
echo "<li>".$secondName."</li>";
echo "</ul>";
echo ("<hr/>");

print "<li>".$firstName."</li>";
print "<li>".$secondName."</li>";
print "<p>".$listTitle."</p>";
echo "<hr/>";

echo "測試字串長度"."var_dump()"."<br/>";
echo "$listTitle"."<br/>";
var_dump($listTitle);
echo "$firstName"."<br/>";
var_dump($firstName);
echo "$secondName"."<br/>";
var_dump($secondName);
echo "</li>"."<br/>";
var_dump("</li>")

?>
