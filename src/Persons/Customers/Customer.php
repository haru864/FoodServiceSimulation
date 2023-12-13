<?php

namespace Persons\Customers;

use Persons\Person;
use Restaurants\Restaurant;
use Invoices\Invoice;

class Customer extends Person
{
    public array $interestedTastesMap;

    public function __construct(string $name, int $age, string $address, array $interestedTastesMap)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->interestedTastesMap = $interestedTastesMap;
    }

    private function interestedCategories(Restaurant $restaurant): array
    {
        $foodWantedStr = implode(", ", array_keys($this->interestedTastesMap));
        echo "{$this->name} wanted to eat {$foodWantedStr}." . PHP_EOL;
        $interestedCategoryList = [];
        foreach ($this->interestedTastesMap as $category => $numOfFood) {
            foreach ($restaurant->menu as $foodItem) {
                if ($foodItem::getCategory() === $category) {
                    for ($count = 0; $count < $numOfFood; $count++) {
                        array_push($interestedCategoryList, $category);
                    }
                }
            }
        }
        return $interestedCategoryList;
    }

    public function order(Restaurant $restaurant): Invoice
    {
        $interestedCategoryList = $this->interestedCategories($restaurant);
        $foodOrderedStr = "";
        foreach ($interestedCategoryList as $category) {
            if ($foodOrderedStr !== "") {
                $foodOrderedStr .= ", ";
            }
            $numOfOrder = $this->interestedTastesMap[$category];
            $foodOrderedStr .= "{$category} x {$numOfOrder}";
        }
        echo "{$this->name} was looking at the menu, and ordered {$foodOrderedStr}." . PHP_EOL;
        return $restaurant->order($interestedCategoryList);
    }
}
