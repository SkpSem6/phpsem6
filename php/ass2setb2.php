<?php
$dom = new DOMDocument();
$dom->load("Movie1.xml");
echo "<h2>Movie Title </h2>";
$movienm = $dom->getElementsByTagName("MovieTitle");
foreach($movienm as $b)
{
   echo "<b>$b->textContent </b><br><br>";
}

echo "<h2>Actor name </h2>";
$actornm = $dom->getElementsByTagName("actorname");
foreach($actornm as $c)
{
   echo "<b>$c->textContent </b><br><br>";
}
		
?>
