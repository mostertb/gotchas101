<?php

$a = 2;
$b = 3;

if($a = $b){
    echo 'Foo';
} else {
    echo 'Bar';
}

echo PHP_EOL;
echo ($a=$b);