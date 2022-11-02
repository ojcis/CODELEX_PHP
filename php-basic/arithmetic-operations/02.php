<?php
/** Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd,
 * or “Even Number” otherwise. The program shall always print “bye!” before exiting.
 */
function CheckOddEven(int $number):string{
    if ($number%2==0){
        return 'Even Number'.PHP_EOL;
    }else{
        return 'Odd Number'.PHP_EOL;
    }
}
while (true) {
    $number = readline('enter number:');
    echo CheckOddEven($number);
    $continue = readline('enter "y" to continue or "n" to end: ');
    if ($continue=='n'){
    exit('bye!'.PHP_EOL);
    }
}
