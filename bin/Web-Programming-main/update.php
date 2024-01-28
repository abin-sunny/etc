<?php
	$con=new mysqli("localhost","root","","MACE");
	if($con->connect_error)
		die("\nconnection failed:".$con->connect_error);
$s="update student set  name='Gopika' where rollno= 4";
if($con->query($s)===TRUE)
	echo "\nvalue updated";
else
	echo "\nfailed to update value:",$con->error;
$con->close();
?>
