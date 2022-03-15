<?php


namespace Creational\AbstractFactory;



class BMWCar implements CarInterface
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePirce()
    {
        return $this->price + 7000;
    }
}

?>