<?php
require_once '../vendor/autoload.php';

$arr = array();
for($i=0; $i<3; $i++){
    $arr[] = $i;
}

echo "Third element is: ".$arr[3].PHP_EOL;

dump($arr);