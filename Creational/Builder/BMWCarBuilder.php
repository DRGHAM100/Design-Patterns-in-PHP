<?php

namespace Creational\Builder;

use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\Car;

class BMWCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car 
     */
    private $type;

    public  function  createCar()
    {
        $this->type = new BMWCar();
    }
    public  function  addEngine()
    {
        $this->type->setPart('Engine','BMW engine');
    }
    public  function  addDoors()
    {
        $this->type->setPart('Door','BMW door');
    }
    public  function  addBody()
    {
        $this->type->setPart('Body','BMW body');
    }
    public  function  addWheel()
    {
        $this->type->setPart('Wheel','BMW wheel');
    }
    public  function  getCar() : Car
    {
        return $this->type;
    }
}