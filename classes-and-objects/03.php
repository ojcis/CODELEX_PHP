<?php
require_once 'FuelGauge.php';
require_once 'Odometer.php';

$fuelGauge=new FuelGauge(2);
$odometer=new Odometer();
while ($fuelGauge->getFuelAmount()>0){
    $odometer->increment();
    echo 'mileage is '.$odometer->getMileage().PHP_EOL;
    if ($odometer->getMileage()%10==0){
        $fuelGauge->use();
        echo 'fuel amount is '.$fuelGauge->getFuelAmount().PHP_EOL;
    }
    sleep(1);
}

