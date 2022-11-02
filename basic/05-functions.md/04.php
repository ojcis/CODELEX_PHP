<?php
class person{
    public $name;
    public $surname;
    public $age;
}
$Alex = new person();
$Alex->name = "Aleks";
$Alex->surname = "Zars";
$Alex->age = 18;

$Jhon = new person();
$Jhon->name = "John";
$Jhon->surname = "Doe";
$Jhon->age = 15;

$Jane = new person();
$Jane->name = "Jane";
$Jane->surname = "Doe";
$Jane->age = 41;

$persons=[$Alex,$Jhon,$Jane];
function adult($object){
    if ($object->age>=18){
        echo "{$object->name} {$object->surname} has reached age of 18";
    }else{
        echo "{$object->name} {$object->surname} has not reached age of 18";
    }
    echo PHP_EOL;
}
foreach ($persons as $person){
    adult ($person);
}
