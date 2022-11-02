<?php
echo "Enter the number.";
$number=readline();
if ($number>0){
    echo 'number is positive';
}elseif ($number<0){
    echo 'number is negative';
}else{
    echo 'number is 0';
}
echo PHP_EOL;
//todo print if number is positive or negative