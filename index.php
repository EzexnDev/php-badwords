<?php

$censured = '***';

$main_phrase = 'Cavolo !! mi sono scordato di pushare';

echo '<p>'.'Frase non censurata: <strong>'.$main_phrase.'</strong></p>';
var_dump($main_phrase);
echo str_replace($_GET['badword'], $censured, $main_phrase);
