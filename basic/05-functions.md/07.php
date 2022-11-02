<?php
$customer=new stdClass();
$customer->name='Jhon';
$customer->licenses=['A','B'];
$customer->cash=1500;

function createGun(string $name,string $license,int $price): stdClass{
    $gun=new stdClass();
    $gun->name=$name;
    $gun->license=$license;
    $gun->price=$price;
    return $gun;
}
$guns=[
    createGun('pistol','A',700),
    createGun('AK47','C',1500),
    createGun('carabine','B',1300),
    createGun('sniper','B',1700)
];
foreach ($guns as $key=>$gun){
    echo $key+1 .". {$gun->name}".PHP_EOL;
}
$choice=readline('enter number of gun you want : ')-1;
if (! in_array($guns[$choice]->license,$customer->licenses)){
    echo 'you dont have license for this gun!'.PHP_EOL;
    exit;
}
if ($customer->cash<$guns[$choice]->price) {
    echo 'not enough money!' . PHP_EOL;
    exit;
}
echo 'SOLD!'.PHP_EOL;








