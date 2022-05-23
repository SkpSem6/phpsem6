<?php 
	$doc=new DOMDocument("1.0","UTF-8");
	$doc->formatOutput=true;
	
	$movie=$doc->createElement("Movie");
	$doc->appendChild($movie);
	
	$category=$doc->createElement("category");
	$category->setAttribute("type","Classical");
	$movie->appendChild($category);
		
	
	$movie_title=$doc->createElement("MovieTitle","KKG");
	$category->appendChild($movie_title);
	$Actor_name=$doc->createElement("ActorName","Subodh");
	$category->appendChild($Actor_name);
	$year=$doc->createElement("ReleaseYear","2015");
	$category->appendChild($year);
	
	$category=$doc->createElement("category");
	$category->setAttribute("type","Classical");	
	$movie->appendChild($category);
	
	
	$movie_title=$doc->createElement("MovieTitle","Golmaal");
	$category->appendChild($movie_title);
	$Actor_name=$doc->createElement("ActorName","Amol");
	$category->appendChild($Actor_name);
	$year=$doc->createElement("ReleaseYear","1969");
	$category->appendChild($year);
	
	$category=$doc->createElement("category");
	$category->setAttribute("type","Horror");
	$movie->appendChild($category);
		
	
	$movie_title=$doc->createElement("MovieTitle","Conjuring");
	$category->appendChild($movie_title);
	$Actor_name=$doc->createElement("ActorName","Joseph");
	$category->appendChild($Actor_name);
	$year=$doc->createElement("ReleaseYear","2013");
	$category->appendChild($year);
	
	$category=$doc->createElement("category");
	$category->setAttribute("type","Horror");
	$movie->appendChild($category);
		
	
	$movie_title=$doc->createElement("MovieTitle","Conjuring 2");
	$category->appendChild($movie_title);
	$Actor_name=$doc->createElement("ActorName","Joseph");
	$category->appendChild($Actor_name);
	$year=$doc->createElement("ReleaseYear","2018");
	$category->appendChild($year);
	
	$category=$doc->createElement("category");
	$category->setAttribute("type","Action");
	$movie->appendChild($category);
	
	
	$movie_title=$doc->createElement("MovieTitle","KGF");
	$category->appendChild($movie_title);
	$Actor_name=$doc->createElement("ActorName","Yash");
	$category->appendChild($Actor_name);
	$year=$doc->createElement("ReleaseYear","2018");
	$category->appendChild($year);

	$category=$doc->createElement("category");
	$category->setAttribute("type","Action");
	$movie->appendChild($category);
		
	
	$movie_title=$doc->createElement("MovieTitle","KGF 2");
	$category->appendChild($movie_title);
	$Actor_name=$doc->createElement("ActorName","Yash");
	$category->appendChild($Actor_name);
	$year=$doc->createElement("ReleaseYear","2022");
	$category->appendChild($year);

	
	$doc->save("movies.xml");
	echo "movies.xml created";
?>
		
	
			
