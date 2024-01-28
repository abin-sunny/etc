<?php
	$con=new mysqli("localhost","root","","MACE");
	if($con->connect_error)
		die("\nconnection failed:".$con->connect_error);
$s="delete from  student  where rollno= 3";
if($con->query($s)===TRUE)
	echo "\nrow deleted";
else
	echo "\nfailed to delete row:",$con->error;
$con->close();
?>
