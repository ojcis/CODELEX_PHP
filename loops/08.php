<?php
$min=readline('enter min value: ');
$max=readline('enter max value: ');
$numbers=range($min,$max);
for ($i=$min;$i<=$max;$i++){
    foreach ($numbers as $number){
        echo $number.' ';
    }
    echo PHP_EOL;
    array_unshift($numbers,end($numbers));
    array_pop($numbers);
}
