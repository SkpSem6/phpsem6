<?php
  session_start();
  $_SESSION["cnm"] = $_POST["t1"]; 
  $_SESSION["add"] = $_POST["t2"];
  $_SESSION["mob"] = $_POST["t3"];

  echo '<br> Hello '.$_SESSION["cnm"].' Plz Enter Your Product Details <br>';


  echo '<form method = "POST" action = "display1.php"><br>';
  echo 'Product Name  <input type = "text" name = t4><br>';
  echo 'Quantity <input type = "text" name = t5><br><br>';
  echo 'Rate <input type = "text" name = t6><br><br>';
  echo '<input type = "submit" value = "display"></form><br>';
?>

 



  
