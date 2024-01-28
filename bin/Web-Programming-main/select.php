<?php
	$con=new mysqli("localhost","root","","MACE");
	if($con->connect_error)
		die("\nconnection failed:".$con->connect_error);
$s="select  *from student";
if($con->query($s)==TRUE)
{
	$result=$con->query($s);
	if($result->num_rows>0)
	{	
		?>
		<table border="1">
		<tr>
		<th>ROLL NO</th>
		<th>NAME</th>
		<th>DEPARTMENT</th>
		</tr>
		<?php
		while($row=$result->fetch_assoc())
		{
			echo "<tr><th>".$row['rollno']."</th><th>".$row['name']."</th><th>".$row['department']."</th></tr>";
		}
	}
	echo "</table>";
}
else
	echo "\nfailed to display details:",$con->error;
$con->close();
?>
