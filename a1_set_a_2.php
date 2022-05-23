<?php
$fstyle=$_GET["fstyle"];
$fsize=$_GET["fsize"];
$fcolor=$_GET["fcolor"];
$bcolor=$_GET["bcolor"];
echo "<br>Your preferences are<br>";
echo "font style: $fstyle<br>";
echo "font size: $fsize<br>";
echo "font color: $fcolor<br>";
echo "Background color: $bcolor<br>";
setcookie("fstyle",$fstyle);
setcookie("fsize",$fsize);
setcookie("fcolor",$fcolor);
setcookie("bcolor",$bcolor);
?>
<html>
<body>
<form action="a1_set_a_Q2_2.php" method="GET">
<input type="submit" value="submit">
</form>
</body>
</html>
