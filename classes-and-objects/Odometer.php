<?php
class Odometer{
    private $mileage;

    public function __construct(int $mileage=0)
    {
        $this->mileage=$mileage;
    }

    public function getMileage():int
    {
        return $this->mileage;
    }

    public function increment(int $miles=1)
    {
        if ($miles<0) return;
        $this->mileage+=$miles;
    }
}