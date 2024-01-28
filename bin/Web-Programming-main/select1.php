<?php
	$con=new mysqli("localhost","root","","db");
	if($con->connect_error)
		die("connection err".$con->connect_error);
	$q="select * from tab";
	if($con->query($q)==TRUE)
		{
			$r=$con->query($q);
			if($r->num_rows>0)
			{
				echo "letter"."   "."word"."<br>";
				while($row=$r->fetch_assoc())
				{
					echo $row['letter']."   ".$row['word'];
				    echo "<br>";
				}
			}

		}
	else
		echo $con->error;
	$con->close();
?>