<?php

namespace patterns\FactoryMethod;

abstract class CarFactory implements CarFactoryInterface
{
    public function createInstance(): CarInterface
    {
        return $this->createConcrete();
    }

    abstract protected function createConcrete(): CarInterface;
}