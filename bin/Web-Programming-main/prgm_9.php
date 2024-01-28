<?php
	$con=new mysqli("localhost","root","","MACE");
	if($con->connect_error)
		die("\nconnection failed:".$con->connect_error);
$s="select  *from product";
if($con->query($s)==TRUE)
{
	$result=$con->query($s);
	if($result->num_rows>0)
	{	
		?>
		<table border="1">
		<tr>
		<th>PRODUCT ID</th>
		<th>PRODUCT NAME</th>
		<th>QUANTITY</th>
		<th>UNIT PRICE</th>
		<th>MANUFACTURED DATE</th>
		<th>EXPIRY DATE</th>
		<th>MANUFACTURER NAME</th>
		</tr>
		<?php
		while($row=$result->fetch_assoc())
		{
			if($row['man_name'])
			{
				echo "<tr><th>".$row['pid']."</th><th>".$row['pname']."</th><th>".$row['quantity']."</th><th>".$row['price']."</th><th>".$row['man_date']."</th><th>".$row['exp_date'].
				"</th><th>".$row['man_name']."</th></tr>";
			}
			else
			{
				echo "<form  action='next.php' method='POST'>";
				echo "<tr><th>".$row['pid']."</th><th>".$row['pname']."</th><th>".$row['quantity']."</th><th>".$row['price']."</th><th>".$row['man_date']."</th><th>".$row['exp_date'].
				"</th><th>";
				?>
			        <input type="text"  placeholder="enter the manufacturer name" name="mn">
				<input type='submit' name='add' value='ADD'>
				<input type="hidden" name="pid" value="<?php echo $row['pid']; ?>"/>
				</form>
				<?php
				echo "</th></tr>";
			}
		}
	}
	echo "</table>";
}
else
	echo "\nfailed to display details:",$con->error;
$con->close();
?>
