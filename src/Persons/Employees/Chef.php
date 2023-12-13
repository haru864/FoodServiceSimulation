<?php

namespace Persons\Employees;

use FoodOrders\FoodOrder;

class Chef extends Employee
{
    public function prepareFood(FoodOrder $foodOrder): string
    {
        $cookedFoods = "";
        foreach ($foodOrder->items as $index => $foodItem) {
            if ($cookedFoods == "") {
                $cookedFoods = $foodItem->name;
            } else {
                $cookedFoods = $cookedFoods . ", " . $foodItem->name;
            }
        }
        return "Chef {$this->name} cooked {$cookedFoods}";
    }
}
