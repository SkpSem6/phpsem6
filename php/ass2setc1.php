<?php
$dom = new DOMDocument();

	$dom->encoding = 'utf-8';
        $dom->xmlVersion = '1.0';
        $dom->formatOutput = true;

	$xml_file_name = 'Movies1.xml';

        $root = $dom->createElement('category');
        $movie_node = $dom->createElement('Classical');
        $attr_movie_id = new DOMAttr('MovieTitle', 'KGF');
        $child_node_name = $dom->createElement('ActorName', 'Yash');
        $movie_node->appendChild($child_node_name);
        $child_node_Release = $dom->createElement('ReleaseYear', '2018');
        $movie_node->appendChild($child_node_Release);

    
        
        $movie_node1 = $dom->createElement('Horror');
        $attr_movie_id1 = new DOMAttr('MovieTitle', 'KGF2');
        $child_node_name1 = $dom->createElement('ActorName', 'Yash');
        $movie_node1->appendChild($child_node_name1);
        $child_node_Release1 = $dom->createElement('ReleaseYear', '2022');
        $movie_node1->appendChild($child_node_Release1);

  
        $movie_node2 = $dom->createElement('Action');
        $attr_movie_id2 = new DOMAttr('MovieTitle', 'Yevdu');
        $child_node_name2 = $dom->createElement('ActorName', 'Vijay');
        $movie_node2->appendChild($child_node_name2);
        $child_node_Release2 = $dom->createElement('ReleaseYear', '2015');
        $movie_node2->appendChild($child_node_Release2);


        $movie_node3 = $dom->createElement('Action');
        $attr_movie_id3 = new DOMAttr('MovieTitle', 'ABCD');
        $child_node_name3 = $dom->createElement('ActorName', 'Varun');
        $movie_node3->appendChild($child_node_name3);
        $child_node_Release3 = $dom->createElement('ReleaseYear', '2022');
        $movie_node3->appendChild($child_node_Release3);


        $movie_node4 = $dom->createElement('Horror');
        $attr_movie_id4 = new DOMAttr('MovieTitle', '1920');
        $child_node_name4 = $dom->createElement('ActorName', 'XYZ');
        $movie_node4->appendChild($child_node_name4);
        $child_node_Release4 = $dom->createElement('ReleaseYear', '2022');
        $movie_node4->appendChild($child_node_Release4);
        

       $root->appendChild($movie_node);
       $root->appendChild($movie_node1);
       $root->appendChild($movie_node2);
       $root->appendChild($movie_node3);
       $root->appendChild($movie_node4);
       $dom->appendChild($root);
       $dom->save($xml_file_name);

	echo "<a href= $xml_file_name> $xml_file_name </a> has been successfully created";
?>
