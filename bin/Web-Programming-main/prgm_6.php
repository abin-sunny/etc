<html>
<head>
	<title>A FORM</title>
</head>
	<body text="darkblue">
		<style>
			 form{
			 	border:100px;
			 }
			  label{
			              margin-left:770px ;
			              display:inline-block;
			              width:180px;
			              }
		</style>
		<br>
	<h1><b><u><center>PRODUCT DETAILS</center></u></b></h1>
		<form action="prgm_8.php" method="post">
				<label>PRODUCT NAME:</label><input type="text" name="n"/><br><br>
				<label>QUANTITY:</label><input type="number" name="q"/><br><br>
				<label>UNIT PRICE:</label><input type="text" name="p"/><br><br>
				<label>MANUFACTURED DATE:</label><input type="date" name="m"/><br><br>
				<label>EXPIRY DATE:</label><input type="date" name="e"/><br><br>
			<label></label><input type="submit" name="btn" value="SUBMIT" /></label>
		</form>
	</body>
</html>
