<?php
	session_start();
	echo "<br>NAME : ".$_SESSION['name'];
	echo "<br>ADDRESS : ".$_SESSION['add'];
	echo "<br>MObile NO. : ".$_SESSION['no'];
	echo "<br>Product name : ".$_GET['pname'];
	echo "<br>Quantity : ".$_GET['qty'];
	echo "<br>Rate : ".$_GET['r'];
	echo "<br>Total : ".$_GET['qty']*$_GET['r'];
	session_destroy();
?>
