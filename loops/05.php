<?php
$end='y';
$score=0;
while ($end=='y') {
    $diceRoll = rand(1, 6);
    if ($diceRoll == 1) {
        echo 'You rolled a 1!' . PHP_EOL;
        $score = 0;
        break;
    } else {
        echo "you rolled a $diceRoll!" . PHP_EOL;
        $score=$score+$diceRoll;
        $end = readline('Roll again?[y/n]: ');
    }
}
echo "Your score is ".$score.PHP_EOL;
