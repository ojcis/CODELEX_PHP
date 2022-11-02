<?php
echo "Input the 1st number: ";
$numbers[0]=readline();
echo "Input the 2nd number: ";
$numbers[1]=readline();
echo "Input the 3rd number: ";
$numbers[2]=readline();
//todo print the largest number
rsort($numbers);
echo 'largest number is '.$numbers[0].PHP_EOL;