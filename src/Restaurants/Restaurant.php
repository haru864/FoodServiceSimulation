<?php

namespace Restaurants;

use Invoices\Invoice;

class Restaurant
{
    public array $menu;
    public array $employees;

    public function order(array $categories): Invoice
    {
        $finalPrice = 0.0;
        foreach ($categories as $index => $category) {
            foreach ($this->menu as $index => $foodItem) {
                if ($category === $foodItem::getCategory()) {
                    $finalPrice += $foodItem->price;
                }
            }
        }
        $orderTime = date("D M d, Y G:i");
        $estimatedTimeInMinutes = 100;
        return new Invoice($finalPrice, $orderTime, $estimatedTimeInMinutes);
    }
}
