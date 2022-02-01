<?php

namespace patterns\AbstractFactory;

class RealOrderItem implements OrderItemInterface
{
    public function getSum()
    {
        return 20;
    }
}