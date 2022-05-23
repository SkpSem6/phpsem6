<?php
	$n=$_GET['n'];
	$a=array();
	$a[]="atharva";
	$a[]="vedant";
	$a[]="soham";
	$a[]="savnee";
	$a[]="viraj";
	echo "List of Names=<br>";
	foreach($a as $v)
	{
		$s=substr($v,0,strlen($n));
		if($s===$n)
		echo "$v<br>";
	}
?>
