<?php
	$con=new mysqli("localhost","root","","db");
	if($con->connect_error)
		die("connection err".$con->connect_error);
	$q="create table tab(letter varchar(5),word varchar(10))";
	if($con->query($q)==TRUE)
		echo "table created";
	else
		echo $con->error;
	$con->close();
?>