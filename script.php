<?php
$paragraph = "ciao, mi chiamo franco, questo è il mio primo codice in php. un classico HELLO WORLD";
$query = $_GET['bad'];
$paragraphModified = str_replace($query, "***", $paragraph);
?>


<h1><?= $paragraph ?></h1>
<p> La stringa è originariamente lunga <?= strlen($paragraph) ?></p>

<h2>La badWord scelta è "<?= $query ?>" </h2>

<h3> La frase censurata è:</h3>
<h3>   <?= $paragraphModified  ?></h3>