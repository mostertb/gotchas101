<?php

require_once '../vendor/autoload.php';


dump(doubleEvenNumber(2)); // Returns 4
dump(doubleEvenNumber(3)); // Returns NULL (remember this is treated as false in loose comparisons)

function doubleEvenNumber($number)
{
    echo PHP_EOL."Processing: ".$number.PHP_EOL;

    if(($number % 2) == 0 ){
        return $number * 2;
    }
}