<?php
require 'sql_connect.php';

$sql_st="INSERT INTO tn (fn, ln, em) VALUES (?,?,?)";
$stmt=$conn->prepare($sql_st);
// i=integer,d=double,s=string,b=blob
$stmt->bind_param("sss",$a,$b,$c);

$a="a";
$b="b";
$c="c";
$stmt->execute();

require 'sql_close.php';
?>