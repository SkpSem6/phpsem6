<?php
 session_start();
echo "<fieldset>";
echo "<h1><center>Customer Bill</center></h1>";
 $b = $_POST["t5"];
 $c = $_POST["t6"];
 echo "<br><b>Customer Details </b><br>";
 echo "Customer Name : ".$_SESSION["cnm"]."<br>";
 echo "Customer Address : ".$_SESSION["add"]."<br>";
 echo "Customer Mobile No : ".$_SESSION["mob"]."<br>";

 echo "<br><b>product Details </b><br>";
 echo "Product Name :".$_POST["t4"]."<br>";
 echo "Quantity :".$_POST["t5"]."<br>";
 echo "Rate :".$_POST["t6"]."<br>";
  
$total = $b*$c;
echo "Total is : ".$total;

echo "</fieldset>";
?>   
