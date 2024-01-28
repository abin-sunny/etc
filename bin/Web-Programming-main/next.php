	<?php
		if (isset($_POST['add']))
		{
				$n=$_POST['mn'];
				$pid=$_POST['pid'];
				$con=new mysqli("localhost","root","","MACE");
				if($con->connect_error)
					die("\nconnection failed:".$con->connect_error);
				$i="UPDATE product SET man_name  = '$n' WHERE  product .pid = '$pid'";
				if($con->query($i)==TRUE)
					echo "\nmanufacturer name is  inserted";
				else
					echo "\nfailed to insert manufacturer name  :",$con->error;
				$con->close();
		}
?>
