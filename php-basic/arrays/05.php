<?php
$XO=[
    ['_','_','_'],
    ['_','_','_'],
    ['_','_','_']
];
$player='';

function board($array)
{
    foreach ($array as $array2){
        foreach ($array2 as $value) {
            echo " $value ";
        }
        echo PHP_EOL;
    }
}

board($XO);
for ($i=0;$i<9;$i++) {
    $player=$player=='X'? 'O':'X';
    choseAgain:
    $move = readline("$player, choose your location (row,column): ");
    echo PHP_EOL;
    $MOVE = explode(',', $move);
    if ($XO[$MOVE[0]][$MOVE[1]]=='_') {
        $XO[$MOVE[0]][$MOVE[1]] = $player;
    }else{
        echo "location is already taken by {$XO[$MOVE[0]][$MOVE[1]]}".PHP_EOL;
        goto choseAgain;
    }
    board($XO);
    if ($XO[0][0]==$XO[0][1] && $XO[0][0]==$XO[0][2] && $XO[0][0]!=='_'){
        echo "CONGRATS {$XO[0][0]}, YOU WON!".PHP_EOL;
        exit;
    }
    if ($XO[1][0]==$XO[1][1] && $XO[1][0]==$XO[1][2] && $XO[1][0]!=='_') {
        echo "CONGRATS {$XO[1][0]}, YOU WON!" .PHP_EOL;
        exit;
    }
    if ($XO[2][0]==$XO[2][1] && $XO[2][0]==$XO[2][2] && $XO[2][0]!=='_') {
        echo "CONGRATS {$XO[2][0]}, YOU WON!" .PHP_EOL;
        exit;
    }
    if ($XO[0][0]==$XO[1][0] && $XO[0][0]==$XO[2][0] && $XO[0][0]!=='_') {
        echo "CONGRATS {$XO[0][0]}, YOU WON!" .PHP_EOL;
        exit;
    }
    if ($XO[0][1]==$XO[1][1] && $XO[0][1]==$XO[2][1] && $XO[0][1]!=='_') {
        echo "CONGRATS {$XO[0][1]}, YOU WON!" .PHP_EOL;
        exit;
    }
    if ($XO[0][2]==$XO[1][2] && $XO[0][2]==$XO[2][2] && $XO[0][2]!=='_') {
        echo "CONGRATS {$XO[0][2]}, YOU WON!" .PHP_EOL;
        exit;
    }
    if ($XO[0][0]==$XO[1][1] && $XO[0][0]==$XO[2][2] && $XO[0][0]!=='_') {
        echo "CONGRATS {$XO[0][0]}, YOU WON!" .PHP_EOL;
        exit;
    }
    if ($XO[0][2]==$XO[1][1] && $XO[0][2]==$XO[2][0] && $XO[0][2]!=='_') {
        echo "CONGRATS {$XO[0][2]}, YOU WON!" . PHP_EOL;
        exit;
    }
}
echo 'TIED!'.PHP_EOL;

