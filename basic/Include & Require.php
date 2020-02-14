<?php
echo "通過 include 或 require 語句，可以將 PHP 檔的內容插入另一個 PHP 檔（在伺服器執行它之前）。 <br>";
echo "include 和 require 語句是相同的，除了錯誤處理方面： <br>
•	require 會生成致命錯誤（E_COMPILE_ERROR）並停止程式。 <br>
•	include 只生成警告（E_WARNING），並且程式會繼續。 <br>";

echo "include 'filename'; <br>";
echo "require 'filename';";
echo "<hr>";
?>

<!DOCTYPE html>
<html lang="zh-TW">
<div class="menu">
<?php
include 'Menu.php';
?>
</div>

<body>

<h1>Hello, World</h1>
<p>Just a test</p>
<p>Welcome</p>

<?php
include 'footer.php';
?>

</body>
</html>
