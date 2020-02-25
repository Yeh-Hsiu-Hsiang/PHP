<?php
// 新建文件並寫入資料
$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
$txt = "Hello, World\n";
fwrite($myfile, $txt);
$txt = "Date in 2020\n";
fwrite($myfile, $txt);
fclose($myfile);

// 讀取文件資料
$readfile = fopen("testfile.txt", "r") or die("Unable to open file!");
echo "這是初始資料：<br>";
while(!feof($readfile)) {
  echo fgets($readfile) . "<br>";
}
fclose($readfile);

// 複寫文件內資料
$overfile = fopen("testfile.txt", "w") or die("Unable to open file!");
$txt = "No, Work\n";
fwrite($overfile, $txt);
fclose($overfile);

// 讀取文件資料
$readfile = fopen("testfile.txt", "r") or die("Unable to open file!");
echo "這是覆蓋後資料：<br>";
while(!feof($readfile)) {
  echo fgets($readfile) . "<br>";
}
fclose($readfile);

?>
