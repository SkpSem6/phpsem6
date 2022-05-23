<?php 
$book1 = simplexml_load_file('book.xml');
$q = $_GET["q"];
 foreach($book1->book as $bnm)
 {
     if($bnm->bookname == $q)
     {
     echo "Book No =". $bnm->attributes()."<br>" ;
     echo "Book Name = $bnm->bookname "."<br>";
     echo "Author Name = $bnm->authorname "."<br>";
     echo "Price = $bnm->Price "."<br>";
     echo "Year = $bnm->year "."<br>";
    }
}

?>
