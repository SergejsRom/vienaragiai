<?php
echo '<pre>';
$animals = [
    ['name' => 'Pilkis', 'type' => 'cat'],
    ['name' => 'Šarikas', 'type' => 'dog'],
    ['name' => 'Bobikas', 'type' => 'dog'],
    ['name' => 'Juodis', 'type' => 'cat'],
    ['name' => 'Pūkis', 'type' => 'dog']
];


foreach($animals as $animal) {
    
    if('cat' == $animal['type']) {
        echo '<br>';
        print_r($animal['name']);
    }
    
}

// foreach($animals as &$animal) {

//     if ('Pūkis' == $animal['name']) {
//         $animal['type'] = 'cat';
//     }

// }

foreach($animals as $key => $animal) {

    if ('Pūkis' == $animal['name']) {
        $animals[$key]['type'] = 'cat';
    }

}

print_r($animals);