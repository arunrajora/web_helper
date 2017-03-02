<!DOCTYPE html>
<?php
require("cookies.php");
$cname = "user";
$cvalue = "abcd";
addcookie($cname, $cvalue);
?>
<html>
<body>

<?php
if(!hascookie("user")) {
     echo "user cookie not set!";
} else {
     echo "User:" . getcookie("user");
}
?>
</body>
</html>