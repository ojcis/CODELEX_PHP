<?php
/** Modify the example program to compute the position of an object after falling for 10 seconds,
 * outputting the position in meters.
 * Note: The correct value is -490.5m.
 */

function Xt(int $T=10,int $Vi=0,int $Xi=0):float{
    return 0.5*(-9.81)*pow($T,2)+$Vi+$Xi;
}
echo Xt().'m'.PHP_EOL;