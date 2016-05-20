<?php
require_once '../vendor/autoload.php';

$a = $b = $c = 1;

dump($a);
dump($b);
dump($c);


$a = 2;
$b = 3;
echo ($a=$b);


echo PHP_EOL;
$a = 2;
$b = 3;
if($a = $b){
    echo 'Foo';
} else {
    echo 'Bar';
}
echo PHP_EOL;