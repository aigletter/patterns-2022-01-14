<?php

namespace patterns\AbstractFactory;

class VirtualOrderFactory implements OrderFactoryInterface
{
    public function createOrder(): OrderInterface
    {
        return new VirtualOrder();
    }

    public function createOrderItem(): OrderItemInterface
    {
        return new VirtualOrderItem();
    }
}