<?php
	function read()
	{
		$n="This is   ";
		return $n;
	}
	function ref(&$n)
	{
		echo $n  ,"call by reference","<br>";
	}
	function val($n)
	{
		echo $n  ,"call by value","<br>";
	}
	$num= read();
	val($num);
	ref($num);
?>
