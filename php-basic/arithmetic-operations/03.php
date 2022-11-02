<?php
/** Write a program to produce the sum of 1, 2, 3, ..., to 100. Store 1 and 100 in variables lower bound
 * and upper bound, so that we can change their values easily. Also compute and display the average.
 */
$lowerBound=1;
$upperBound=100;
$numbers=range($lowerBound,$upperBound);
echo "The sum of $lowerBound to $upperBound is ".array_sum($numbers).PHP_EOL;
echo "The average is ".array_sum($numbers)/count($numbers).PHP_EOL;
