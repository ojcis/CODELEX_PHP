<?php
class product{
    public $name;
    public $price;
    public $amount;
    function __construct(string $name, float $startPrice, int $amount){
        $this->name=$name;
        $this->price=$startPrice;
        $this->amount=$amount;
    }
    function printProduct():string{
        $product= "$this->name, price $this->price, amount $this->amount.".PHP_EOL;
        return $product;
    }
    function changePrice($newPrice){
        $this->price=$newPrice;
    }
    function changeAmount($newAmount){
        $this->amount=$newAmount;
    }
}
$products=[
    $logitecMouse=new product('Logitech mouse',70,14),
    $iPhone5s=new product('iPhone 5s',999.99,3),
    $epsonEBU05=new product('Epson EB-U05',440.46,1)
];
$iPhone5s->changeAmount(12);
$logitecMouse->changePrice(55.55);
foreach ($products as $product){
    echo $product->printProduct();
}
