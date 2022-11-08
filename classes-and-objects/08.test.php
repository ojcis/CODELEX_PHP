<?php
require_once '08.php';

$testAccount=new SavingAccount(readline('How much money is in the account?: '),readline('Enter the annual interest rate: '));
$time=readline('How long has the account been opened? ');
$totalDeposit=0;
$totalWithdrawal=0;
$interestEarned=0;
for ($i=1;$i<=$time;$i++){
    $amount=readline("Enter amount deposited for month $i.: ");
    $totalDeposit+=$amount;
    $testAccount->deposit($amount);
    $amount=readline("Enter amount withdrawn for month $i.: ");
    $totalWithdrawal+=$amount;
    $testAccount->withdrawal($amount);
    $amount=$testAccount->getBalance();
    $testAccount->addMonthlyInterest();
    $interestEarned+=$testAccount->getBalance()-$amount;
}
echo 'Total deposited: $'.number_format($totalDeposit,2).PHP_EOL;
echo 'Total withdrawn: $'.number_format($totalWithdrawal,2).PHP_EOL;
echo 'Interest earned: $'.number_format($interestEarned,2).PHP_EOL;
echo 'Ending balance: $'.number_format($testAccount->getBalance(),2).PHP_EOL;


