<?php

namespace patterns\FactoryMethod;

interface CarFactoryInterface
{
    public function createInstance(): CarInterface;
}