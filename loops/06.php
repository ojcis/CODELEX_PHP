<?php
$size=readline('enter size: ');
for ($i=0;$i<$size;$i++){
    for ($j=$size-1;$j>$i;$j--){
        echo str_repeat('////',$j);
    }
    for ($j=0;$j<=$i;$j++){
        echo str_repeat('********',$j);
    }
    for ($j=$size-1;$j>$i;$j--){
        echo str_repeat("\\\\\\\\",$j);
    }
    echo PHP_EOL;
}