<?php

$doc = new DOMDocument();
$doc->load('books.xml');

$xml = simplexml_import_dom($doc);

$newBook = $xml->addChild('book')->addChild('title');

$newBook->value = 'Confessions of an Economic Hit Man';


foreach($xml->book as $book){

   echo $book->title."<br />";

 }
 

echo $newBook->value.'<br />';

 
 /* $newDoc = dom_import_simplexml($xml);

$newDoc->formatOutput = true;

echo "Saving all the document:\n";
$newDoc->save('books2.xml'); */

?>