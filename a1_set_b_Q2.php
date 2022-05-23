<?php
session_start();
$_SESSION['empno']=$_GET['empno'];
$_SESSION['name']=$_GET['name'];
$_SESSION['address']=$_GET['address'];
?>
<html>
<body>
<form action="a1_set_b_Q2_2.php" method="GET">
Basic:
<input type="text" name="basic"><br>
DA:
<input type="text" name="da"><br>
HRA:
<input type="text" name="hra"><br>
<input type="submit" value="Submit">
</form>
</body>
</html>

