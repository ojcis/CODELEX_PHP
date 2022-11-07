<?php
$desiredNumber=readline("insert number from 1 to 12 :");
$sum=0;
echo "Desired sum: $desiredNumber".PHP_EOL;
while ($sum!=$desiredNumber){
    $dice1=rand(1,6);
    $dice2=rand(1,6);
    $sum=$dice1+$dice2;
    echo "$dice1 and $dice2 = $sum".PHP_EOL;
}
