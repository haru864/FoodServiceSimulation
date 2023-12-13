<?php

namespace Restaurants;

use Invoices\Invoice;

class Restaurant
{
    public array $menu;
    public array $employees;

    public function __construct(array $menu, array $employees)
    {
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function order(array $categories): Invoice
    {
        $chef = null;
        $cashier = null;
        foreach ($this->employees as $employee) {
            $className = basename(str_replace('\\', '/', get_class($employee)));
            if ($className === "Cashier") {
                $cashier = $employee->name;
            } else if ($className === "Chef") {
                $chef = $employee->name;
            }
        }
        if (!is_null($cashier)) {
            echo "{$cashier} received the order." . PHP_EOL;
        }

        $finalPrice = 0.0;
        $totalCookingTimeMinutes = 0;
        foreach ($categories as $category) {
            foreach ($this->menu as $foodItem) {
                if ($category === $foodItem::getCategory()) {
                    $finalPrice += $foodItem->price;
                    $totalCookingTimeMinutes += $foodItem->cookingTimeMinutes;
                    echo "{$chef} was cooking {$category}." . PHP_EOL;
                }
            }
        }
        echo "{$chef} took {$totalCookingTimeMinutes} minutes to cook." . PHP_EOL;
        $orderTime = date("D M d, Y G:i");
        $estimatedTimeInMinutes = 100;
        $invoice = new Invoice($finalPrice, $orderTime, $estimatedTimeInMinutes);
        echo "{$cashier} made the invoice." . PHP_EOL;
        return $invoice;
    }
}
