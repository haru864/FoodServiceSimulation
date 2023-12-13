<?php

namespace Invoices;

use FoodOrders\FoodOrder;

class Invoice
{
    public float $finalPrice;
    public string $orderTime;
    public int $estimatedTimeInMinutes;

    public function __construct(float $finalPrice, string $orderTime, int $estimatedTimeInMinutes)
    {
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }

    public function printInvoice()
    {
        $finalPriceStr = number_format($this->finalPrice, 2);
        echo "------------------------------------------" . PHP_EOL;
        echo "Date: {$this->orderTime}" . PHP_EOL;
        echo "Final Price: \${$finalPriceStr}" . PHP_EOL;
        echo "------------------------------------------" . PHP_EOL;
    }
}
