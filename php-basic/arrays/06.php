<?php
/**
It must randomly choose a word from a list of words.
It must stop when all the letters are guessed.
It must give them limited tries and stop after they run out.
It must display letters they have already guessed (either only the incorrect guesses or all guesses).
 */
$words=['carrot','tomato','potato','cucumber','cabbage'];
$word=str_split($words[array_rand($words)]);
$guessWord=[];
for ($i=0;$i<count($word);$i++){
    $guessWord[$i]='_';
}
$usedLetters='';
for ($i=0;$i<count($word)+5;$i++){
    echo "used letters: $usedLetters".PHP_EOL;
    echo implode($guessWord).PHP_EOL;
    $chosenLetter=readline("enter letter: ");
    $usedLetters="$usedLetters $chosenLetter";
    foreach ($word as $key=>$letter){
        if ($letter==$chosenLetter){
            $guessWord[$key]=$letter;
        }
    }
    echo PHP_EOL.PHP_EOL;
    if (implode('',$guessWord)==implode('',$word)){
        echo implode('',$guessWord),PHP_EOL;
        echo 'URAAA!'.PHP_EOL;
        exit;
    }
}
echo 'YOU LOST! Correct word was '.implode('',$word);

