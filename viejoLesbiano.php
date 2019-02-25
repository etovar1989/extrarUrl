<?php

$url = file_get_contents('http://eduteka.icesi.edu.co/mi/actividades/actividades.php');
 
$dom = new DOMDocument();
@$dom->loadHTML($url);
 
$xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("/html/body//a");
 
for ($i = 0; $i < $hrefs->length; $i++) {
	$href = $hrefs->item($i);
	echo $href->getAttribute('href').'<br />';
}

?>