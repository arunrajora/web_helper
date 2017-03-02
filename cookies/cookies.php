<?php
function addcookie($cname,$cval){
	setcookie($cname, $cval, time() + 100000, "/");
}

function getcookie($cname){
	if(!isset($_COOKIE[$cname])) {
		return ""; 
	} 
	else {
     return $_COOKIE["user"];
	}	
}

function hascookie($cname){
	if(isset($_COOKIE[$cname])) {
		return true; 
	} 
	else {
     return false;
	}	
}

function removecookie($cname){
	setcookie($cname, "", time() - 100000, "/");
}
?>