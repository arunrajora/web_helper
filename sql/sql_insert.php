<?php
require 'sql_connect.php';

$sql_st="INSERT INTO tn (fn, ln, em)
VALUES ('a', 'b', 'c@d.com')";

if($conn->query($sql_st)===TRUE){
	$last_id=$conn->insert_id;
	echo "query succeded".$last_id;
}
else{
	echo ("query failed" . $conn->error);
}

require 'sql_close.php';
?>