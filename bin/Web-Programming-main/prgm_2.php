<html>
	<body>
	<style>
			table{
			              border:1px solid black;
			              width:500px;
			              }
			              tr:nth-child(even){
			              background-color:lightblue;
			              }
			              th,td{
			              padding:10px;
			                border:1px solid black;
			                text-align:center;
			              }
			              body{
			               font-family:sans-serif;
			              }
		</style>
		<center>
		<table border="">
			<form method ="post" action="">
					<tr>
						<th>S.NO</th>
						<th>ITEM</th>
						<th>QUANTITY</th>
					</tr>
					<tr>
						<th>1</th>
						<td>
								MONITOR
						</td>
						<td><input type="number" name="q1" value=0></td>
				     </tr>
					<tr>
						<th>2</th>
						<td>
							KEYBOARD
						</td>
						<td><input type="number" name="q2" value=0></td>
				     </tr>
					<tr>
						<th>3</th>
						<td>
								MOUSE
						</td>
						<td><input type="number" name="q3" value=0></td>
				     </tr>
				     <tr>
				     	<td colspan="3"><center><input type="submit" name="sub" value="generate bill"></center></td>
				     </tr>
			</form>
		</table>
		</center>
		<br>	<br>	
	</body>
</html>
<?php
if(isset($_POST["sub"]))
{
	$c1=60000;
	$c2=5000;
	$c3=2000;
	$q1=$_POST["q1"];
	$q2=$_POST["q2"];
	$q3=$_POST["q3"];
	$t1=$c1*$q1;
	$t2=$c2*$q2;
	$t3=$c3*$q3;
	$t=$t1+$t2+$t3;
?>
<html>
	<body>
	<CENTER>
	<h2><u>ABC SUPERMARKET</u></h2>
	<h3>31-10-2023</h3>
	<h2><u>BILL</u></h2>
		<table border="">
					<tr>
						<th>S.NO</th>
						<th>ITEM</th>
						<th>QUANTITY</th>
						<th>UNIT PRICE</th>
						<th>TOTAL</th>
					</tr>
					<tr>
						<th>1</th>
						<td>MONITOR</td>                    
						<td> <?php echo $q1;?></td>
						<td><?php echo $c1;?></td>
						<td><?php echo $t1;?></td>
				     </tr>
				<tr>
						<th>2</th>
						<td>KEYBOARD</td>
						<td><?php echo $q2;?></td>
						<td><?php echo $c2;?></td>
						<td><?php echo $t2;?></td>
				     </tr>
				     <tr>
						<th>3</th>
						<td>MOUSE</td>
						<td> <?php echo $q3;?></td>
						<td><?php echo $c3;?></td>
						<td><?php echo $t3;?></td>
				     </tr>
				     <tr>
				     	<td colspan="5"><center>GRAND TOTAL:<?php echo $t; ?></center></td>
				     </tr>
			</form>
		</table>
<?php
}
?>
</CENTER>
</body>
</html>
		

