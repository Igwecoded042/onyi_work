<?php
$db= mysqli_connect("localhost","root","","emeka")or die("could not connect to database");

if($db->connect_errno>0){
	die($db->connect_error);
}

?>