<?php

$myfile = fopen("newfile.txt","w") or die ("Unable to open file!");
$txt = ("Jhon Doe\n");
fwrite ($myfile, $txt);
$txt = ("Jenefir \n");
fwrite ($myfile, $txt);
fclose($myfile);



$simplexml = new SimpleXMLElement('<?xml version = "1.0"?><books/>');

$book1 = $simplexml -> addChild ('book');
$book1 -> addChild("Booktile", "The Oz");
$book1 -> addChild("Publication", 2000);


$book2 = $simplexml -> addChild ('book');
$book2 -> addChild("Booktile", "The Zoo");
$book2 -> addChild("Publication", 2002);


file_put_contents('books.xml',$simplexml -> asXML());



$xml = simplexml_load_file("books.xml") or die("error: Can not creat object");
print_r($xml);

?>