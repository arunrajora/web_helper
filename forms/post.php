<!DOCTYPE html>
<html>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  string:<input type="text" name="str">
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = htmlspecialchars($_POST['str']);
    if (empty($str)) {
        echo "Name is empty";
    }
    else {
        echo $str;
    }
}
?>

</body>
</html>