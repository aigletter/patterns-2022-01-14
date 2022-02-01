<?php

namespace patterns\AbstractFactory;

class RealOrderFactory implements OrderFactoryInterface
{
    public function createOrder(): OrderInterface
    {
        return new RealOrder();
    }

    public function createOrderItem(): OrderItemInterface
    {
        return new RealOrderItem();
    }
}