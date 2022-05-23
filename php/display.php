<?php
 $a = $_POST["t4"];
 $b = $_POST["t5"];
 $c = $_POST["t6"];
 session_start();
 echo "<br><b>Emp Details </b><br>";
 echo "Emp No : ".$_SESSION["eno"]."<br>";
 echo "Emp Name : ".$_SESSION["enm"]."<br>";
 echo "Emp Address : ".$_SESSION["add"]."<br>";

 echo "<br><b>Earning Details </b><br>";
 echo "Basic :".$_POST["t4"]."<br>";
 echo "DA :".$_POST["t5"]."<br>";
 echo "HRA :".$_POST["t6"]."<br>";
  
$sum = $a + $b + $c;
echo "<br> Total Earning is : ".$sum;
?>   
