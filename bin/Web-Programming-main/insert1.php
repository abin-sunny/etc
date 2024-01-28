<?php
	$con=new mysqli("localhost","root","","db");
	if($con->connect_error)
		die("connection err".$con->connect_error);
	$q="insert into tab values('B','Boat')";
	if($con->query($q)==TRUE)n
		echo "value inserted";
	else
		echo $con->error;
	$con->close();
?>