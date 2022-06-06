<?php

require __DIR__ . '/Tenisininkas.php';

$t1 = new Tenisininkas('Petrovichius');
$t2 = new Tenisininkas('Marija DB');

Tenisininkas::zaidimoPradzia();

echo '<pre>';

print_r($t1);
print_r($t2);

$t1->perduotiKamuoliuka();

print_r($t1);
print_r($t2);

$t1->perduotiKamuoliuka();

print_r($t1);
print_r($t2);
