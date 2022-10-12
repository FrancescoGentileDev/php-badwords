<?php
$paragraph = "ciao, mi chiamo franco, questo è il mio primo codice in php. un classico HELLO WORLD";
$query = $_GET['bad'];
$paragraph = str_replace($query, "***", $paragraph);
echo $paragraph
?>