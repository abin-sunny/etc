<?php
	$con=new mysqli("localhost","root","","MACE");
	if($con->connect_error)
		die("\nconnection failed:".$con->connect_error);
//$s="create table student(rollno int primary key ,name varchar(20),department varchar(20) )";
$s="create table teacher(tid int primary key ,name varchar(20) )";
if($con->query($s)===TRUE)
	echo "\ntable created";
else
	echo "\nfailed to create table:",$con->error;
$con->close();
?>
