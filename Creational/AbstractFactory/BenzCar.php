<?php


namespace Creational\AbstractFactory;


class BenzCar implements  CarInterface
{
    private $price;
    private $tax;

    public function __construct($price,$tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }


    public function calculatePirce()
    {
        return $this->price+$this->tax+7000;
    }

}