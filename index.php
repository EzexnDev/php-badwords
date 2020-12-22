<?php

$bad_word = 'Cavolo';

$censured = '***';

$main_phrase = 'Cavolo !! mi sono scordato di pushare';

echo str_replace($bad_word, $censured, $main_phrase);
