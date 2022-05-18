<?php
echo '<pre>';


echo preg_replace_callback(
    '/\.(.*)\./',
    'ieskok',
    'xvbc.vkb'.rand(1000, 9999). '.dslkhc46465jkbciud');

echo '<br>';

function ieskok($m) {
    print_r($m);
    return '<b>'.$m[1].'</b>';
}


$m = [5,5,7,5,9,8,7,7,9];

$m3 = array_slice($m, -3);

print_r($m3);



$sk = rand(100, 999);
$funkcijuMasyvas = [];

array_push($funkcijuMasyvas,
fn($a) => $a * 3,
fn($a) => $a * 5,
fn($a) => $a * 7
);


foreach($funkcijuMasyvas as &$go) {
    $go = $go($sk);
}


print_r($funkcijuMasyvas);

function gen_one_to_three() {
    for ($i = 0; $i < 3; $i++) {
        yield $i => rand(1000, 9999);
    }
}

foreach (gen_one_to_three() as $key => $value) {
    echo "$key => $value <br>";
}

$transport = ['foot', 'bike', 'car', 'plane'];

echo '<br>';
echo current($transport); 

echo '<br>';
echo next($transport);
next($transport);
next($transport);
prev($transport);
echo '<br>';
echo end($transport);
echo '<br>';
echo reset($transport);

echo '<br>';
var_dump(current($transport)); 









