<?php 
	$doc=new DOMDocument("1.0","UTF-8");
	$doc->formatOutput=true;
	$bookinfo=$doc->createElement("BookInfo");
	$doc->appendChild($bookinfo);
	$book=$doc->createElement("book");
	$bookinfo->appendChild($book);
	$no=$doc->createElement("bookno","1");
	$book->appendChild($no);
	$name=$doc->createElement("bookname","JAVA");
	$book->appendChild($name);
	$auth_name=$doc->createElement("authorname","Balguru Swami");
	$book->appendChild($auth_name);
	$price=$doc->createElement("price","250");
	$book->appendChild($price);
	$year=$doc->createElement("year","2006");
	$book->appendChild($year);
	
	$book1=$doc->createElement("book");
	$bookinfo->appendChild($book1);
	$no1=$doc->createElement("bookno","2");
	$book1->appendChild($no1);
	$name1=$doc->createElement("bookname","C");
	$book1->appendChild($name1);
	$auth_name1=$doc->createElement("authorname","Dennis Ritchie");
	$book1->appendChild($auth_name1);
	$price1=$doc->createElement("price","500");
	$book1->appendChild($price1);
	$year1=$doc->createElement("year","1971");
	$book1->appendChild($year1);
			
	$doc->save("book.xml");
	echo "book.xml created";
?>
		
	
			
