<?php
/**
 * Write a program which prints “Sunday”, “Monday”, ... “Saturday”
 * if the int variable "dayNumber" is 0, 1, ..., 6, respectively.
 * Otherwise, it shall print "Not a valid day".
Use:
a "nested-if" statement
a "switch-case-default" statement.
 */
$days=['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$dayNumber=readline('enter number from 0 to 6: ');
if ($dayNumber<=6){
    if ($dayNumber>=0) {
        echo $days[$dayNumber];
    }else{
        echo "Not a valid day";
    }
}else{
    echo "Not a valid day";
}
echo PHP_EOL;