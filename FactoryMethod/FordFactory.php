<?php

namespace patterns\FactoryMethod;

class FordFactory extends CarFactory
{
    protected function createConcrete(): CarInterface
    {
        return new Ford();
    }
}