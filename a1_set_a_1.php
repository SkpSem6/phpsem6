<?php
	session_start();
	if(isset($_SESSION['hit']))
		$_SESSION['hit']=$_SESSION['hit']+1;
	else
		$_SESSION['hit']=1;
	echo "<h3>Number of times web page has been accessed is </h3>".$_SESSION['hit'];
?>

