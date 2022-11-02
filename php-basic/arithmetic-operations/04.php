<?php
/** Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
 * Take note that it is the same as factorial of N.
 */
$numbers=range(1,10);
foreach ($numbers as $value){
    $factorial=1;
    for ($i=1; $i<=$value; $i++){
        $factorial=$factorial*$i;
    }
    echo $factorial.PHP_EOL;
}