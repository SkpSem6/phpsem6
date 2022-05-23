<?php
  session_start();
  
  $_SESSION["eno"] = $_POST["t1"]; 
  $_SESSION["enm"] = $_POST["t2"];
  $_SESSION["add"] = $_POST["t3"];

  echo '<br> Hello '.$_SESSION["enm"].' Plz Fill Your Earning Details <br>';


  echo '<form method = "POST" action = "display.php"><br>';
  echo 'Basic <input type = "text" name = t4><br>';
  echo 'DA <input type = "text" name = t5><br><br>';
  echo 'HRA <input type = "text" name = t6><br><br>';
  echo '<input type = "submit" value = "display"></form><br>';
?>

 



  
