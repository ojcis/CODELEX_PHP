<?php
require_once '07.php';

$Max=new Dog('Max','male');
$Rocky=new Dog('Rocky','male');
$Sparky=new Dog('Sparky','male');
$Buster=new Dog('Buster','male');
$Sam=new Dog('Sam','male');
$Lady=new Dog('Lady','female');
$Molly=new Dog('Molly','female');
$Coco=new Dog('Coco','famele');

$Max->setParents($Rocky,$Lady);
$Coco->setParents($Buster,$Molly);
$Rocky->setParents($Sam,$Molly);
$Buster->setParents($Sparky,$Lady);

echo 'Coco fathers name is '.$Coco->getFatherName().PHP_EOL;
echo 'Sparky fathers name is '.$Sparky->getFatherName().PHP_EOL;

if ($Coco->hasSameMother($Rocky)){
    echo 'Coco and Rocky has same mother.'.PHP_EOL;
}else{
    echo 'Coco and Rocky do not have same mother.'.PHP_EOL;
}


