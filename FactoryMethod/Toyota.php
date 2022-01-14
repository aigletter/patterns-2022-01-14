<?php


namespace patterns\FactoryMethod;


class Toyota implements CarInterface
{
    public function move($product, $from, $to): string
    {
        return 'Toyota delivered ' . $product . ' from ' . $from . ' to ' . $to;
    }
}