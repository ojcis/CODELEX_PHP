<?php
require_once '05.php';
$testDate=new Date(12,25,2022);

echo '1. test: display date'.PHP_EOL;
if ($testDate->DisplayDate()=='12/25/2022'){
    echo ':)'.PHP_EOL;
}else{
    echo ':('.PHP_EOL;
}

echo '2. test: get day'.PHP_EOL;
if ($testDate->getDay()=='25'){
    echo ':)'.PHP_EOL;
}else{
    echo ':('.PHP_EOL;
}

echo '3. test: get Month'.PHP_EOL;
if ($testDate->getMonth()=='12'){
    echo ':)'.PHP_EOL;
}else{
    echo ':('.PHP_EOL;
}

echo '4. test: get year'.PHP_EOL;
if ($testDate->getYear()=='2022'){
    echo ':)'.PHP_EOL;
}else{
    echo ':('.PHP_EOL;
}

echo '5. test: invalid set day input'.PHP_EOL;
$testDate->setDay(0);
if ($testDate->getDay()=='25'){
    echo ':)'.PHP_EOL;
}else{
    echo ':('.PHP_EOL;
}

echo '6. test: valid set month input'.PHP_EOL;
$testDate->setMonth(10);
if ($testDate->getMonth()=='10'){
    echo ':)'.PHP_EOL;
}else{
    echo ':('.PHP_EOL;
}
