<?php

namespace patterns\AbstractFactory;

class VirtualOrder implements OrderInterface
{
    /**
     * @var OrderItemInterface[]
     */
    protected $orderItems = [];

    public function calculateTotalSum(): float
    {
        $sum = 0;
        foreach ($this->orderItems as $orderItem) {
            $sum += $orderItem->getSum();
        }
        return $sum;
    }

    public function addOrderItem(OrderItemInterface $orderItem): void
    {
        $this->orderItems[] = $orderItem;
    }
}