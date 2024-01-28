<html>
<head>
	<title>A FORM</title>
</head>
	<body text="dodgerblue">
		<style>
			 form{
			 	border:100px;
			 }
			  label{
			              margin-left:775px ;
			              display:inline-block;
			              width:120px;
			              }
		</style>
		<form action="" method="post">
				<label>ROLL NO:</label><input type="text" name="roll"/><br><br>
				<label>NAME:</label><input type="text"  name="name"/><br><br>
				<label>DEPARTMENT:</label><input type="text" name="dpt"/><br><br>
			<center><input type="submit" value="SUBMIT"  name="b"/></label></center>
		</form>
<?php
	if(isset($_POST['b']))
	{
			$n =$_POST['name'];
			$r =$_POST['roll'];
			$d=$_POST["dpt"];
			if(!(empty($n) || empty($r) || empty($d)))
			{
				$con=new mysqli("localhost","root","","MACE");
				if($con->connect_error)
					die("\nconnection failed:".$con->connect_error);
				$i="insert into student values($r,'$n','$d')";
				if($con->query($i)==TRUE)
					echo "\ndetails inserted";
				else
					echo "\nfailed to insert details:",$con->error;
				$con->close();
			}
			else
				echo "FILL THE FIELDS";
	}
?>
	</body>
</html>
