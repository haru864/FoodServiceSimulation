<?php

namespace Invoices;

use FoodOrders\FoodOrder;

class Invoice
{
    public float $finalPrice;
    public string $orderTime;
    public int $estimatedTimeInMinutes;

    public function __construct(float $finalPrice, int $orderUnixTime, int $estimatedTimeInMinutes)
    {
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderUnixTime;
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }
}
