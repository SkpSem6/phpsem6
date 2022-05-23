<?php
	$tnm= $_GET['tnm'];
	$con_string= "host=192.168.1.21 dbname=ty10 user=ty10";
	$con= pg_connect($con_string);

	echo "<br>";
	
	$query1= "select * from customer where cname = '$tnm';";
	$query2= "select * from orders where cno = (select cno from CUSTOMER where cname='$tnm');";
	
	$rs1= pg_query($con, $query1) or die("Cannot Execute Query.");
	$rs2= pg_query($con, $query2) or die("Cannot Execute Query.");
	echo "Customer Bill";
	while($row= pg_fetch_row($rs1))
	
	echo "Customer No- $row[0]<br>
              Customer name- $row[1]<br>
	      City- $row[2] \n<br><br>";
		
	while($row= pg_fetch_row($rs2))
	
	echo "Order- $row[0]<br>
              Order Date- $row[1]<br>
	      Shiping Address- $row[2] \n<br>
		customer no- $row[3]<br>";
	
	
	
	pg_close();
	
?>
