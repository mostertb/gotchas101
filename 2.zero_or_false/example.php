<?php

$inputString = "The quick brown fox";

// This fails as we were expecting strpos to return FALSE if the needle ('The') was not in the haystack ($inputString)
// but the needle is at position zero and zero is treated as false. See http://php.net/manual/en/function.strpos.php
if(strpos($inputString, "The")){
    echo "Input does contain 'The'";
} else {
    echo  "Input does not contain 'The'";
}

echo PHP_EOL;

