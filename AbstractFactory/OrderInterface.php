<?php

namespace patterns\AbstractFactory;

interface OrderInterface
{
    public function calculateTotalSum(): float;

    public function addOrderItem(OrderItemInterface $orderItem): void;
}