<?php

$values = array(1,3,7);

echo "Doing IF:".PHP_EOL;
if(in_array(11, $values));
{
    echo "Array contains 11".PHP_EOL;
}

echo "Outputting Array: ".PHP_EOL;
foreach($values as $value);
{
   echo $value.PHP_EOL;
}
