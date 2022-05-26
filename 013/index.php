<?php

define('KYE', 1);

echo __DIR__ .'/kitas/vienas.php';

require __DIR__ .'/kitas/vienas.php';
require __DIR__ .'/kitas/vienas.php';
require __DIR__ .'/dar-kitas/du.php';

$data = require __DIR__ .'/data.php';

print_r($data);