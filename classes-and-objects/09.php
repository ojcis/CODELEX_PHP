<?php
class BankAccount
{
    private $name;
    private $balance;

    public function __construct(string $name,int $balance)
    {
        $this->name=$name;
        $this->balance=$balance;
    }

    public function show_user_name_and_balance():string
    {
        $symbol='';
        $number=abs($this->balance);
        if ($this->balance<0){
            $symbol='-';
        }
        return "$this->name, $symbol$$number";
    }
}
$test=new BankAccount('Jhon',-500);
echo $test->show_user_name_and_balance().PHP_EOL;