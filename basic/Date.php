<?php
echo "date(format,timestamp)";
echo "<br>";
echo "format 為必需欄位。 <br>";
echo "timestamp	為可選欄位。預設值是當前日期和時間。 <br>";
echo "d - 表示月裡的某天（01-31） <br>";
echo "m - 表示月（01-12） <br>";
echo "Y - 表示年（四位數） <br>";
echo "l - 表示禮拜幾 <br>";
echo "<hr>";
echo "Ex: <br>";
echo "今天是 " . date("Y/m/d") . "<br>";
echo "今天是 " . date("Y.m.d") . "<br>";
echo "今天是 " . date("Y-m-d") . "<br>";
echo "今天是 " . date("l");
echo "<hr>";
?>

<html>
<?php echo "自動更新年 <br>";?>
© 2010-<?php echo date("Y")?>
</html>

<?php
echo "<hr>";
echo "h - 12 小時格式 <br>";
echo "i - 分鐘 <br>";
echo "s - 秒（00 -59） <br>";
echo "a - am 或 pm <br>";
echo "Ex: <br>";
date_default_timezone_set("Asia/Shanghai");
echo "現在時間是" . date("h:i:sa");
echo "<hr>";
echo "如果顯示的不是正確的時間，有可能是因為服務器位於其他國家或者被設置為不同時區。
此時，我們可以自己設置要用的時區。<br>";
echo "date_default_timezone_set('地區')";
echo "<hr>";

##
echo "mktime() 創建日期 <br>";
echo "mktime(hour,minute,second,month,day,year) <br>";
echo "Ex: <br>";
$d = mktime(9, 12, 31, 6, 10, 2015);
echo "創建日期是 " . date("Y-m-d h:i:sa", $d);
echo "<hr>";

##
echo "strtotime() 用字串来創建日期 <br>";
echo "strtotime(time,now) <br>";
$d = strtotime("10:38pm April 15 2015");
echo "创建日期是 " . date("Y-m-d h:i:sa", $d);
echo "<br>";
echo "Text: <br>";
$d = strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

echo "<hr>";

##
echo "輸出週六的日期";
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks",$startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate),"<br>";
  $startdate = strtotime("+1 week", $startdate);
}

echo "<hr>";

##
$d1=strtotime("December 31");
$d2=ceil(($d1-time())/60/60/24);
echo "距離十二月三十一日還有：" . $d2 ." 天。";
 ?>
