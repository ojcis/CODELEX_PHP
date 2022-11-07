<?php
echo "Input number of terms: ".PHP_EOL;
$n=readline('enter n value: ');
$i=readline('enter i value: ');
$result=1;
for ($j=0;$j<$n;$j++){
    $result *= $i;
}
echo $result.PHP_EOL;

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function
