<?php
	session_start();
	$uid = $_POST["id"];
	$upass = $_POST["pass"];

	if($uid == "Shubhankar" && $upass == "123")
	{
		echo "Welcome	" .$uid;
	}
	else
	{
		if($_SESSION['cnt'] == 3)
		{
		echo "you lost chance";
		$_SESSION['cnt'] = 0;
		}
		else if($cnt < 3)
		{
		echo "you have chance".$_SESSION['cnt'];
		$_SESSION['cnt'] = $_SESSION['cnt']+1;
		}
	} 
	
	
?>
