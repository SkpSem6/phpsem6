<?php
  session_start();
  $username = $_POST["unm"];
  $password = $_POST["pass"];
  if($username == "Vrushali" && $password == "Vrushali")
  { 
      echo "Welcome ".$username;
  }
  else
  {
     if($_SESSION['cnt']==3)
      {
          echo "You Lost Chances To Login ";
          $_SESSION['cnt']=0;
      }
      else if($_SESSION['cnt']<3)
      {
          echo "You Have chance " .$_SESSION['cnt'];
          $_SESSION['cnt'] = $_SESSION['cnt'] + 1;
      }
  }
?>  
