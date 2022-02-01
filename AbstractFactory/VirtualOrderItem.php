<?php

namespace patterns\AbstractFactory;

class VirtualOrderItem implements OrderItemInterface
{
    public function getSum()
    {
        return 10;
    }
}