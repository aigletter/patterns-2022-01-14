<?php

namespace patterns\AbstractFactory;

interface OrderFactoryInterface
{
    public function createOrder(): OrderInterface;

    public function createOrderItem(): OrderItemInterface;
}