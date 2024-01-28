<?php
	$con=new mysqli("localhost","root","");
	if($con->connect_error)
		die("connection failed".$con->connect_error);
	$q="create database db";
	if($con->query($q)==TRUE)
		echo "database created";
	else
		echo 'failed'.$con->error;
	$con->close();
?>