<?php
require_once '../vendor/autoload.php';

outputLooseTruth(true);
outputLooseTruth(false);

outputLooseTruth(1);
outputLooseTruth(0);
outputLooseTruth(-1);

outputLooseTruth("1");
outputLooseTruth("-1");
outputLooseTruth("php");
outputLooseTruth("0");
outputLooseTruth("");

outputLooseTruth(NULL);

outputLooseTruth(array());
outputLooseTruth(array(1,2,3));

/**
 * This function compares the provided value to TRUE using the loose equality operator and outputs the value and whether
 * it is considered true
 *
 * @param $value
 */
function outputLooseTruth($value)
{
    dump($value);

    echo ($value == true) ? "TRUE" : "FALSE";

    echo PHP_EOL . "--------------------------------" . PHP_EOL;
}
