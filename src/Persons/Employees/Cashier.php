<?php

namespace Persons\Employees;

use FoodOrders\FoodOrder;
use Invoices\Invoice;
use Restaurants\Restaurant;

class Cashier extends Employee
{
    public function generateOrder(array $categories, Restaurant  $restaurant): FoodOrder
    {
        $currentUnixTime = date("D M d, Y G:i");;
        $foodsOrdered = [];
        foreach ($categories as $index => $category) {
            foreach ($restaurant->menu as $index => $foodItem) {
                if ($category === $foodItem::getCategory()) {
                    array_push($foodsOrdered, $foodItem);
                }
            }
        }
        return new FoodOrder($foodsOrdered, $currentUnixTime);
    }

    public function generateInvoice(FoodOrder $order): Invoice
    {
        $finalPrice = 0.0;
        $orderTime = $order->orderTime;
        $estimatedTimeInMinutes = 100;
        foreach ($order->items as $index => $foodItem) {
            $finalPrice += $foodItem->price;
        }
        return new Invoice($finalPrice, $orderTime, $estimatedTimeInMinutes);
    }
}
