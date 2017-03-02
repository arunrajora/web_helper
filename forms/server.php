<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Text: <input type="text" name="str">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = htmlspecialchars($_REQUEST['str']); 
    if (empty($str)) {
        echo "enter a value";
    } else {
        echo $str;
    }
}
?>
</body>
</html>