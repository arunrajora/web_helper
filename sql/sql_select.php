<?php
require 'sql_connect.php';

$sql_st="SELECT id, fn, ln,em FROM tn";
$result=$conn->query($sql_st);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo $row["id"] . " " . $row["fn"] . " " . $row["ln"]. "<br>";
	}
}
else{
	echo "no results";
}

require 'sql_close.php';
?>