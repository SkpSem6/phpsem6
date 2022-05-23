<?php
session_start();
echo "Employee Number ".$_SESSION['empno']."<br>";
echo "Employee Name ".$_SESSION['name']."<br>";
echo "Employee Address ".$_SESSION['address']."<br>";
$a=$_REQUEST['basic'];
$b=$_REQUEST['da'];
$c=$_REQUEST['hra'];
$d=$a+(($a*$b)/100)+(($a*$c)/100);
echo "Basic :$a <br>";
echo "DA :$b <br>";
echo "HRA :$c <br>";
echo "TOTAL :$d <br>";
session_destroy();
?>
