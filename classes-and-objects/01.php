<?php
class Product
{
    private $name;
    private $price;
    private $amount;
    public function __construct(string $name, float $startPrice, int $amount){
        $this->name=$name;
        $this->price=$startPrice;
        $this->amount=$amount;
    }
    public function printProduct():string{
        return "$this->name, price $this->price, amount $this->amount.".PHP_EOL;

    }
    public function setPrice(int $newPrice){
        $this->price=$newPrice;
    }
    public function setAmount(int $newAmount){
        $this->amount=$newAmount;
    }
}
$products=[
    $logitecMouse=new product('Logitech mouse',70,14),
    $iPhone5s=new product('iPhone 5s',999.99,3),
    $epsonEBU05=new product('Epson EB-U05',440.46,1)
];
$iPhone5s->setAmount(12);
$logitecMouse->setPrice(55.55);
foreach ($products as $product){
    echo $product->printProduct();
}
