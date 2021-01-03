<?php

$xml = simplexml_load_file("Personen.xml") or die("File not found!");

return $xml;
?>