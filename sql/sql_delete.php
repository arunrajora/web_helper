<?php
require 'sql_connect.php';

$sql_st="DELETE FROM tn WHERE id=3";
if ($conn->query($sql_st) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

require 'sql_close.php';
?>