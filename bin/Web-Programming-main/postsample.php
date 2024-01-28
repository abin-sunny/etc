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
				<label>NAME:</label><input type="text"  name="name"/><br><br>
				<label>ROLL NO:</label><input type="text" name="roll"/><br><br>
			<center><input type="submit" value="SUBMIT"  name="b"/></label></center>
		</form>
<?php
	if(isset($_POST['b']))
	{
		if(!(empty($_POST['name']) || empty($_POST['roll'])))
		{
			$n =$_POST['name'];
			$r =$_POST['roll'];
			echo "<br><h2>my name is ",$n,"</h2><br>";
			echo "<h2>my roll no is ",$r,"<h2>";
		
		}
		else
			echo "FILL THE FIELDS";
	}
?>
	</body>
</html>
