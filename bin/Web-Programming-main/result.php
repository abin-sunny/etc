<html>
<body>
<center>
<?php
if(isset($_POST["sub"]))
{
	$n=$_POST["name"];
	$r=$_POST["roll"];
	$arr1=array("sub1"=>"WEB PROGRAMMING","sub2"=>"DATA STRUCTURE","sub3"=>"PYTHON");
	$arr2=array("m1"=>"95","m2"=>"90","m3"=>"93");
	$arr3=array("r1"=>"PASS","r2"=>"PASS","r3"=>"PASS");	
?>
<h1><u>RESULT OF FIRST SESSIONAL EXAMINATION  S1-MCA 2023</u></h1>
<h2>NAME:<?php echo $n;?></h2>
<h2>ROLL NO:<?php echo $r;?></h2>
<table border="1">
	
	<tr>
				<th>S.NO</th>
				<th>SUBJECTS</th>
				<th>MARK</th>
				<th>REMARK</th>
	</tr>
	<tr>
				<th>1</th>
				<td><?php echo $arr1["sub1"];?></td>
				<td><?php echo $arr2["m1"];?></td>
				<td><?php echo $arr3["r1"];?></td>
	</tr>
	<tr>
				<th>2</th>
				<td><?php echo $arr1["sub2"];?></td>
				<td><?php echo $arr2["m2"];?></td>
				<td><?php echo $arr3["r2"];?></td>
	</tr>
	<tr>
				<th>3</th>
				<td><?php echo $arr1["sub3"];?></td>
				<td><?php echo $arr2["m3"];?></td>
				<td><?php echo $arr3["r3"];?></td>
	</tr>
	<tr>
				<th  colspan="3"><center>TOTAL:<?php echo  $arr2["m1"]+$arr2["m2"]+$arr2["m3"]."/300"."</center>";?></th>
				<th colspan="1">PASS</th>
	</tr>
</table>
<?php
}
?>
</center>
</body>
</html>
