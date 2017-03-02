<?php
require 'sql_connect.php';

$sql_st="UPDATE tn SET ln='oo' WHERE id=2";
if ($conn->query($sql_st) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

require 'sql_close.php';
?>