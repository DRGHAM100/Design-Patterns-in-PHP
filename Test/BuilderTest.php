<?php

namespace Test;

use Creational\Builder\BMWCarBuilder;
use Creational\Builder\BENZCarBuilder;
use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\BENZCar;
use Creational\Builder\CarProducer;
use PHPUnit\Framework\TestCase;


class BuilderTest extends TestCase
{

    public function testProduceBMWCar()
    {
        $BMWBuilder = new BMWCarBuilder();
        $carProducer = new CarProducer($BMWBuilder);
        $myCar = $carProducer->ProduceCar();

        $this->assertInstanceOf(BMWCar::class,$myCar);
    }

    public function testProduceBENZCar()
    {
        $BENZBuilder = new BENZCarBuilder();
        $carProducer = new CarProducer($BENZBuilder);
        $myCar = $carProducer->ProduceCar();

        $this->assertInstanceOf(BENZCar::class,$myCar);
    }

}