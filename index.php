<?php

$censured = '***';

$main_phrase = 'Cavolo !! mi sono scordato di pushare';

echo str_replace($_GET['badword'], $censured, $main_phrase);
