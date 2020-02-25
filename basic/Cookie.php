<?php
setcookie("user", "Alex Porter", time()+3600);
setcookie("welcome", "Hello, World", time()+3600);

// echo $_COOKIE["user"];
// echo $_COOKIE["welcome"];
// set the expiration date to one hour ago
setcookie("user", "", time()-3600);
?>

<html>
<body>

<?php
if (isset($_COOKIE["user"]))
  echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
  echo "Welcome guest!<br />";
?>

</body>
</html>
