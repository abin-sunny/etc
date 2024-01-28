<?php
	$con=new mysqli("localhost","root","","MACE");
	if($con->connect_error)
		die("\nconnection failed:".$con->connect_error);
$i="insert into student values(1,'Dona','MCA')";
if($con->query($i)==TRUE)
	echo "\ndetails inserted";
else
	echo "\nfailed to insert details:",$con->error;
$con->close();
?>
