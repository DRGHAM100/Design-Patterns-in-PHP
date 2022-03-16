<?php

namespace Creational\Builder;

use Creational\Builder\Models\BENZCar;
use Creational\Builder\Models\Car;

class BENZCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car
     */
    private $type;

    public  function  createCar()
    {
        $this->type = new BENZCar();
    }
    public  function  addEngine()
    {
        $this->type->setPart('Engine','BENZ engine');
    }
    public  function  addDoors()
    {
        $this->type->setPart('Door','BENZ door');
    }
    public  function  addBody()
    {
        $this->type->setPart('Body','BENZ body');
    }
    public  function  addWheel()
    {
        $this->type->setPart('Wheel','BENZ wheel');
    }
    public  function  getCar() : Car
    {
        return $this->type;
    }
}