<?php 
header("Content-type: text/xml");

$xml = file_get_contents("Personen.xml");

echo $xml;
?>