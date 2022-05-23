<?php
$xmlstr = '<?xml version="1.0" encoding="UTF-8" ?>';
$xml = '<?xml-stylesheet type = "text/css" encoding = "UTF-8"?>';
$sxe = new SimpleXMLElement("<Item></Item>");

$item1 = $sxe->addChild('Item1');
$item1->addChild('ItemName', 'Pen');
$item1->addChild('ItemPrice', 20);
$item1->addChild('Quantity', 100);

$item1 = $sxe->addChild('Item1');
$item1->addChild('ItemName', 'Pencil');
$item1->addChild('ItemPrice', 24);
$item1->addChild('Quantity', 200);

$item1 = $sxe->addChild('Item1');
$item1->addChild('ItemName', 'Rubber');
$item1->addChild('ItemPrice', 30);
$item1->addChild('Quantity', 300);

$item1 = $sxe->addChild('Item1');
$item1->addChild('ItemName', 'Scale');
$item1->addChild('ItemPrice', 25);
$item1->addChild('Quantity', 100);

$item1 = $sxe->addChild('Item1');
$item1->addChild('ItemName', 'Book');
$item1->addChild('ItemPrice', 40);
$item1->addChild('Quantity', 500);
$sxe->asXML('item.xml');
?>
