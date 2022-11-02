<?php
class person{
    public $name;
    public $surname;
    public $age;
    public $birthday;
}
$Jhon = new person();
$Jhon->name = "John";
$Jhon->surname = "Doe";
$Jhon->age = 50;
$Jhon->birthday = '08.05.1997.';

$Jane = new person();
$Jane->name = "Jane";
$Jane->surname = "Doe";
$Jane->age = 41;
$Jane->birthday = '15.01.2011.';

$persons=['person1'=>$Jhon,'person2'=>$Jane];
foreach ($persons as $person){
    foreach ($person as $key=>$value){
        echo "$key - $value, ";
    }
    echo PHP_EOL;
}

