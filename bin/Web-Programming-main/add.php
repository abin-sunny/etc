<html>
<body>
<?php
	if(isset($_POST['add']))
	{
	$id=$_POST['pid'];
?>
	<form  method="post" action="next.php">
			ENTER THE MANUFACTURER NAME:<br><br>
			<input type="text" name="mn"><br><br>
			<input type="submit" name="btn" value="ADD"><br><br>
			<input type="hidden" name="pid" value="<?php echo $id; ?>">
	</form>
	<?php
	}
?>
</body>
</html>
