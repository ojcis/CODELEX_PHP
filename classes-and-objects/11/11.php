<?php
require_once 'Account.php';

$A=new Account('A',100);
$B=new Account('B',0);
$C=new Account('C',0);

$accounts=[$A,$B,$C];

echo 'before transfer:'.PHP_EOL;
foreach ($accounts as $account){
    echo "{$account->getName()} balance is {$account->getBalance()}".PHP_EOL;
}

$A->transfer($B,50);
$A->transfer($C,25);

echo 'after transfer:'.PHP_EOL;
foreach ($accounts as $account){
    echo "{$account->getName()} balance is {$account->getBalance()}".PHP_EOL;
}