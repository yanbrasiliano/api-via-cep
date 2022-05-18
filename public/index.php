<?php
require_once '../vendor/autoload.php';

use \App\WebService\ViaCEP;

// if(!isset($argv[1])){
// 	die("Invalid CEP.");
// }


$data = ViaCEP::searchCEP("40279390");
echo '<pre>';
print_r($data);
echo '</pre>';
