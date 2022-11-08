<?php
class FuelGauge
{
    private $fuelAmount;

    public function __construct(int $fuelAmount)
    {
        $this->fuelAmount=$fuelAmount;
    }

    public function getFuelAmount():int
    {
        return $this->fuelAmount;
    }

    public function fill(int $fillAmount=1)
    {
        $maxAmount=70;
        $newAmount=$this->fuelAmount+$fillAmount;
        if ($newAmount>$maxAmount){
            $newAmount=$maxAmount;
        }
        $this->fuelAmount = $newAmount;
    }

    public function use(int $useAmount=1)
    {
        $minAmount=0;
        $newAmount=$this->fuelAmount-$useAmount;
        if ($newAmount<=$minAmount){
            $newAmount=$minAmount;
        }
        $this->fuelAmount = $newAmount;
    }
}