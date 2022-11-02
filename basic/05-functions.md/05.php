<?php
$fruits=[
    ['fruit'=>'apple','weight'=>20],
    ['fruit'=>'banana','weight'=>5],
    ['fruit'=>'orange','weight'=>15]
];
function shippingCost($array){
    foreach ($array as $item){
        if ($item['weight']>10){
            echo "{$item['fruit']} - {$item['weight']} kg - shipping cost 2EUR";
        }else{
            echo "{$item['fruit']} - {$item['weight']} kg - shipping cost 1EUR";
        }
        echo PHP_EOL;
    }
}
shippingCost($fruits);
