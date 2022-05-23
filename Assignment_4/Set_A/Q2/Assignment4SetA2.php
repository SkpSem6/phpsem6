<?php
 $nm = $_GET['t1'];
 $name = array("ROHIT","VIRAT","DHONI","ASHWIN","HARBHAJAN");
 

if(in_array(strtoupper($nm), $name))
 {
     echo "<br>Hello Master " . $nm . "!";
  }
 else if($nm == null)
 {
     echo "<br>Stranger , please tell me your name !";
 }
else
{
	echo "<br>I dont know you ". $nm. "!";
}
?>
