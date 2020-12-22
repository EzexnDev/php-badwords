<?php

$censured = '***';

$main_phrase = 'Cavolo !! mi sono scordato di pushare';

echo '<p>'.'Frase non censurata: <strong>'.$main_phrase.'</strong></p>';

echo str_replace($_GET['badword'], $censured, $main_phrase);
