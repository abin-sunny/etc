<?php
	$con=new mysqli("localhost","root","","MACE");
	if($con->connect_error)
		die("\nconnection failed:".$con->connect_error);
$i="alter table student add column age int";
//$i="alter table student drop column age";
if($con->query($i)==TRUE)
	echo "\naltered table";
else
	echo "\nfailed to alter table:",$con->error;
$con->close();
?>
