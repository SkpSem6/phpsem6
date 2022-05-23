<html>
<head></head>
<body>
<form action="a1_set_c_2.php" method="GET">
Enter Product name<input type="text" name="pname"><br>
Enter Quantity<input type="text" name="qty"><br>
Enter Rate<input type="text" name="r"><br>
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
	session_start();
	$_SESSION['name']=$_GET['name'];
	$_SESSION['add']=$_GET['add'];
	$_SESSION['no']=$_GET['no'];
?>

