<?php
	if(isset($_POST['btn']))
	{
		if(!(empty($_POST['n']) || empty($_POST['q']) || empty($_POST['p']) || empty($_POST['m']) || empty($_POST['e'])))
		{
			$n =$_POST['n'];
			$q =$_POST['q'];
			$p=$_POST['p'];
			$m =$_POST['m'];
			$e =$_POST['e'];
			$con=new mysqli("localhost","root","","MACE");
			if($con->connect_error)
				die("\nconnection failed:".$con->connect_error);
			$i="insert into product(pname,quantity,price,man_date,exp_date) values('$n',$q,'$p','$m','$e')";
			if($con->query($i)==TRUE)
				echo "\nproduct details inserted";
			else
				echo "\nfailed to insert product details:",$con->error;
			$con->close();
		}
		else
			echo "FILL THE FIELDS";
	}
?>
