<?php
require_once '../vendor/autoload.php';

outputStrictTruth(true);
outputStrictTruth(false);

outputStrictTruth(1);
outputStrictTruth(0);
outputStrictTruth(-1);

outputStrictTruth("1");
outputStrictTruth("-1");
outputStrictTruth("php");
outputStrictTruth("0");
outputStrictTruth("");

outputStrictTruth(NULL);

outputStrictTruth(array());
outputStrictTruth(array(1, 2, 3));

/**
 * This function compares the provided value to TRUE using the strict equality operator and outputs the value and whether
 * it is considered true
 *
 * @param $value
 */
function outputStrictTruth($value)
{
    dump($value);

    echo ($value === true) ? "TRUE" : "FALSE";

    echo PHP_EOL . "--------------------------------" . PHP_EOL;
}
