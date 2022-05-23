<?php
$dom = new DOMDocument();

	$dom->encoding = 'utf-8';
        $dom->xmlVersion = '1.0';
        $dom->formatOutput = true;

	$xml_file_name = 'book.xml';
        $root = $dom->createElement('BookInfo');
        $book_node = $dom->createElement('book');
        $attr_book_id = new DOMAttr('bookno', '1');
        $book_node->setAttributeNode($attr_book_id);
  
        $child_node_name = $dom->createElement('bookname', 'Java');
        $book_node->appendChild($child_node_name);
        $child_node_author = $dom->createElement('authorname', 'Balguru swami');
        $book_node->appendChild($child_node_author);
        $child_node_price = $dom->createElement('Price', '250');
        $book_node->appendChild($child_node_price);
        $child_node_year = $dom->createElement('year', '2006');
        $book_node->appendChild($child_node_year);

       
        $book_node1 = $dom->createElement('book');
        $attr_book_id1 = new DOMAttr('bookno', '2');
        $book_node1->setAttributeNode($attr_book_id1);
  
        $child_node_name1 = $dom->createElement('bookname', 'C');
        $book_node1->appendChild($child_node_name1);
        $child_node_author1 = $dom->createElement('authorname', 'Denis Ritchie');
        $book_node1->appendChild($child_node_author1);
        $child_node_price1 = $dom->createElement('Price', '500');
        $book_node1->appendChild($child_node_price1);
        $child_node_year1 = $dom->createElement('year', '1971');
        $book_node1->appendChild($child_node_year1);
      

       $root->appendChild($book_node);
       $root->appendChild($book_node1);
       $dom->appendChild($root);
       $dom->save($xml_file_name);

	echo "<a href= $xml_file_name> $xml_file_name </a> has been successfully created";
?>
