<?php
/**Write a program to accept two integers and return true if the either one is 15
 * or if their sum or difference is 15.
*/
function is15(int $x,int $y):bool{
    return($x==15 || $y==15 || $x+$y==15 || $x-$y==15 || $y-$x==15);
}
$x=readLine('enter first integer: ');
$y=readline('enter second integer: ');
echo is15($x,$y)? 'true':'false';
echo PHP_EOL;
