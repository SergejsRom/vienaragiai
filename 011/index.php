<?php

$cats = [
    'Pūkis',
    'Murkis',
    'Pilkis',
    'Rainius'
];

$out = json_encode($cats);


header('Content-Type: application/json');

echo $out;