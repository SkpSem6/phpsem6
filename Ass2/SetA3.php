<?php
	$domDocument();
	$dom->load("book.xml");
	echo "<h2>Name of the books</h2>;
	$bname=$dom->getElementsByTagName("bookname");
	foreach($bname as $b)
{	
	echo"<b>$b->textContent<b><br><br>";
}

