<?php
require 'sql_connect.php';

$sql_st="CREATE TABLE tn (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
fn VARCHAR(30) NOT NULL,
ln VARCHAR(30) NOT NULL,
em VARCHAR(50),
reg_date TIMESTAMP
)";

if($conn->query($sql_st)===TRUE){
	echo "query succeded";
}
else{
	die("query failed" . $conn->error);
}

require 'sql_close.php';
?>