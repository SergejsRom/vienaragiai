<?php
//settings
define('INSTALL', '/vienaragiai/r2server/');
define('DIR', __DIR__ .'/app/');
define('URL', 'http://localhost/vienaragiai/r2server/');
require __DIR__ .'/JsonDb.php';

$db = new JsonDb('farm');


$uri = str_replace(INSTALL, '', $_SERVER['REQUEST_URI']);
$uri = explode('/', $uri);


// ROUTER

$m = $_SERVER['REQUEST_METHOD'];


if ($m == 'GET' && count($uri) == 1 && $uri[0] == 'animals') {

    $out = $db->showAll('farm');

}



$out = json_encode($out);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

echo $out;


// if (count($uri) == 2) {
//     if ($uri[0] == 'kambarys') {
//         if ($uri[1] == 1) {
//             require __DIR__ . '/app/k1.php';
//         }
//         elseif ($uri[1] == 2) {
//             require __DIR__ . '/app/k2.php';
//         }
//         else {
//             require __DIR__ . '/app/404.php';
//         }
//     }
//     else if($uri[0] == 'add-funds') {
//         $userId = (int) $uri[1];
//         require __DIR__ . '/app/addMoney.php';
//     }
//     else {
//         require __DIR__ . '/app/404.php';
//     }
// }
// else {
//     require __DIR__ . '/app/404.php';
// }




// print_r($_SERVER);


