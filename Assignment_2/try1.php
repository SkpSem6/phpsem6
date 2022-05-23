<?php
$newsXML = new SimpleXMLElement("<news> </news>");

$newsXML->addAttribute('newsPagePrefix', 'value goes here');
$newsIntro = $newsXML->addChild('content');
$newsIntro->addAttribute('type', 'latest');
Header('Content-type: text/xml');
echo $newsXML->asXML('a.xml');
?>



<?php

include 'example.php';
 
$sxe = new SimpleXMLElement($xmlstr);
$sxe->addAttribute('type', 'documentary');

$movie = $sxe->addChild('movie');
$movie->addChild('title', 'PHP2: More Parser Stories');
$movie->addChild('plot', 'This is all about the people who make it work.');

$characters = $movie->addChild('characters');
$character  = $characters->addChild('character');
$character->addChild('name', 'Mr. Parser');
$character->addChild('actor', 'John Doe');

$rating = $movie->addChild('rating', '5');
$rating->addAttribute('type', 'stars');
 
echo $sxe->asXML();

?>

