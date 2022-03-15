<?php

namespace Test;

use Creational\AbstractFactory\CarAbstractFactory;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\BenzCar;
use PHPUnit\Framework\TestCase;


class AbstractFactoryTest extends TestCase
{
    private $carFactory;

    public function setUp(): void
    {
        parent::setUp();
        $this->carFactory = new CarAbstractFactory(1000);
    }

    public function testCanCreateBMWCar()
    {
        $myCar = $this->carFactory->createBMWCare();

        $this->assertInstanceOf(BMWCar::class,$myCar);
    }

    public function testCanCreateBenzCar()
    {
        $myCar = $this->carFactory->createBenzCar();

        $this->assertInstanceOf(BenzCar::class,$myCar,'Error Msg : Car is not benz');
    }

}