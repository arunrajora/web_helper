<?php
require 'sql_connect.php';

$sql_st="INSERT INTO tn (fn, ln, em)
VALUES ('John', 'Doe', 'john@example.com');";
$sql_st.="INSERT INTO tn (fn, ln, em)
VALUES ('John', 'Doe', 'john@example.com');";
$sql_st.="INSERT INTO tn (fn, ln, em)
VALUES ('John', 'Doe', 'john@example.com');";

if($conn->multi_query($sql_st)===TRUE){
	$last_id=$conn->insert_id;
	echo "query succeded".$last_id;
}
else{
	echo ("query failed" . $conn->error);
}

require 'sql_close.php';
?>