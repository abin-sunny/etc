<?php
	$con=new mysqli("localhost","root","","MACE");
	if($con->connect_error)
		die("\nconnection failed:".$con->connect_error);
$i="alter table product add column man_name varchar(30)";
if($con->query($i)==TRUE)
	echo "\ncolumn added";
else
	echo "\nfailed to add column:",$con->error;
$con->close();
?>
