<?php
$myfile = fopen("webdictionary.txt", "r+") or die("Unable to open file!");
echo fread($myfile, filesize("webdictionary.txt"));
fclose($myfile);
echo "<hr>";

echo "fread() - 讀取文件 <br>";
echo "fclose() - 關閉文件 <br>";

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo "<br>";
echo fread($myfile, filesize("webdictionary.txt"));
echo "<hr>";

echo "fgets() - 讀取單行文件 <br>";
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
echo "<hr>";

echo "fgetc() - 讀取單個字符 <br>";

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgetc($myfile);
  echo "<br>";
}
fclose($myfile);

?>
