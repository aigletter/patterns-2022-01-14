<?php


namespace patterns\FactoryMethod;


class ToyotaFactory extends CarFactory
{
    protected function createConcrete(): CarInterface
    {
        return new Toyota();
    }
}