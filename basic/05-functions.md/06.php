<?php
$items=[5,10,7,3.9,'abc'];
function doubleInt($value){
        if (gettype($value)=='integer'){
            return $value*2;
        }else{
            return $value;
        }
}
echo implode(' ',(array_map('doubleInt',$items)));
echo PHP_EOL;