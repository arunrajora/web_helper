<?php
$servname="localhost";
$username="root";
$pass="";
$dbname="alpha";
$port=3306;

$conn=new mysqli($servname, $username, $pass, $dbname, $port);
if($conn->connect_error){
	die("connection failed : " . $conn->connect_error);
}
echo "connected";
?>