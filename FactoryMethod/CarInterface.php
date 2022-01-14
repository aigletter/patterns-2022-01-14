<?php


namespace patterns\FactoryMethod;


interface CarInterface
{
    public function move($product, $from, $to): string;
}