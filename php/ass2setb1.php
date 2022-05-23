<?php
$book1 = simplexml_load_file('book.xml');
#var_dump($book1);
 foreach($book1->book as $bnm)
 {
     echo "Book No =". $bnm->attributes()."<br>" ;
     echo "Book Name = $bnm->bookname "."<br>";
     echo "Author Name = $bnm->authorname "."<br>";
     echo "Price = $bnm->Price "."<br>";
     echo "Year = $bnm->year "."<br>";
}
?>
