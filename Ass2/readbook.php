<?php
	$stocklist=simplexml_load_file("book.xml") or die ("Error");
	
	foreach($stocklist->book as $books)
	{
		echo "<br>Book category attribute: ".$books->attributes()."<br>";
		echo "<br>Book bookno: ".$books->bookno."<br>";
		echo "<br>Book bookname: ".$books->bookname."<br>";
		echo "<br>Book authorname: ".$books->authorname."<br>";
		echo "<br>Book price: ".$books->price."<br>";
		echo "<br>Book year: ".$books->year."<br>";
		
	}
?>

