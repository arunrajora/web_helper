<?php
 function startsession(){
 	session_start();
 }

 function setsessionvar($x,$val){
 	$_SESSION[$x]=$val;
 }

 function getsessionvar($x){
 	return $_SESSION[$x];
 }

 function getsession(){
 	return $_SESSION;
 }

function removesessionvar(){
 	session_unset();
 }

 function endsession(){
 	session_destroy();
 }

?>