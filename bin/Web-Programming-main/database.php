<?php
	$con=new mysqli("localhost","root","");
	if($con->connect_error)
		die("\nconnection failed:".$con->connect_error);
$d="create database MACE";
if($con->query($d)===TRUE)
	echo "\ndatabase created";
else
	echo "\nfailed to create database:",$con->error;
$con->close();
?>
