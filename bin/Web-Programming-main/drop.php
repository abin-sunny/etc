<?php
	$con=new mysqli("localhost","root","","MACE");
	if($con->connect_error)
		die("\nconnection failed:".$con->connect_error);
$s="drop table teacher";
if($con->query($s)===TRUE)
	echo "\ntable deleted";
else
	echo "\nfailed to delete table:",$con->error;
$con->close();
?>
