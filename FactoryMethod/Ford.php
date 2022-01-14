<?php

namespace patterns\FactoryMethod;

class Ford implements CarInterface
{
    public function move($product, $from, $to): string
    {
        return 'Ford delivered ' . $product . ' from ' . $from . ' to ' . $to;
    }
}