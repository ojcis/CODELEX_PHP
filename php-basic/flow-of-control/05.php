<?php
/** On your phone keypad, the alphabets are mapped to digits as follows:
ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
Write a program called PhoneKeyPad, which prompts user for a String (case insensitive),
and converts to a sequence of keypad digits.
Use:
a "nested-if" statement
a "switch-case-default" statement
Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,
*/
$text=strtoupper(readline('enter string: '));
$letters=str_split($text);
var_dump($letters);
$keypadSequence='';
foreach ($letters as $letter){
    switch ($letter){
        case 'A':
            $keypadSequence=$keypadSequence. 2 .' ';
            break;
        case 'B':
            $keypadSequence=$keypadSequence. 22 .' ';
            break;
        case 'C':
            $keypadSequence=$keypadSequence. 222 .' ';
            break;
        case 'D':
            $keypadSequence=$keypadSequence. 3 .' ';
            break;
        case 'E':
            $keypadSequence=$keypadSequence. 33 .' ';
            break;
        case 'F':
            $keypadSequence=$keypadSequence. 333 .' ';
            break;
        case 'G':
            $keypadSequence=$keypadSequence. 4 .' ';
            break;
        case 'H':
            $keypadSequence=$keypadSequence. 44 .' ';
            break;
        case 'I':
            $keypadSequence=$keypadSequence. 444 .' ';
            break;
        case 'J':
            $keypadSequence=$keypadSequence. 5 .' ';
            break;
        case 'K':
            $keypadSequence=$keypadSequence. 55 .' ';
            break;
        case 'L':
            $keypadSequence=$keypadSequence. 555 .' ';
            break;
        case 'M':
            $keypadSequence=$keypadSequence. 6 .' ';
            break;
        case 'N':
            $keypadSequence=$keypadSequence. 66 .' ';
            break;
        case 'O':
            $keypadSequence=$keypadSequence. 666 .' ';
            break;
        case 'P':
            $keypadSequence=$keypadSequence. 7 .' ';
            break;
        case 'Q':
            $keypadSequence=$keypadSequence. 77 .' ';
            break;
        case 'R':
            $keypadSequence=$keypadSequence. 777 .' ';
            break;
        case 'S':
            $keypadSequence=$keypadSequence. 7777 .' ';
            break;
        case 'T':
            $keypadSequence=$keypadSequence. 8 .' ';
            break;
        case 'U':
            $keypadSequence=$keypadSequence. 88 .' ';
            break;
        case 'V':
            $keypadSequence=$keypadSequence. 888 .' ';
            break;
        case 'W':
            $keypadSequence=$keypadSequence. 9 .' ';
            break;
        case 'X':
            $keypadSequence=$keypadSequence. 99 .' ';
            break;
        case 'Y':
            $keypadSequence=$keypadSequence. 999 .' ';
            break;
        case 'Z':
            $keypadSequence=$keypadSequence. 9999 .' ';
            break;
        default:
            echo "'$letter' is not on keypad";
    }
}
echo $keypadSequence.PHP_EOL;

