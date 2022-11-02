<?php
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;
function adult($object){
    if ($object->age>=18){
        echo "{$object->name} {$object->surname} has reached age of 18";
    }else{
        echo "{$object->name} {$object->surname} has not reached age of 18";
    }
}
adult ($person);
echo PHP_EOL;
