<!DOCTYPE html>
<?php
require("cookies.php");

removecookie("user");
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