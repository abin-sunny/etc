<?php
	$arr = array("dona","sona","diya");
	/*for($i = 0; $i<count($arr);$i=$i+1)
		echo $arr[$i]."<br>";
	foreach ($arr as $v)
	{
		echo $v."<br>";
	}*/
	$array2 = array("name"=>"dona","roll"=>"24","age"=>"20");
	echo "my name is ".$array2['name'];
	foreach($array2 as $a =>$v)
	echo "<br>".$a."=>".$v;
			
?>
