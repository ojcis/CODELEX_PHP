<?php
$numbers=range(1,20);
foreach ($numbers as $number){
    if ($number%3==0){
        echo $number.' ';
    }
}
echo PHP_EOL;