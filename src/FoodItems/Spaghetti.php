<?php

namespace FoodItems;

use FoodItems\FoodItem;

class Spaghetti extends FoodItem
{
    public function __construct()
    {
        $this->name = "スパゲッティ";
        $this->description = "卵のせカルボナーラ";
        $this->price = 900;
        $this->cookingTimeMinutes = 10;
    }
}
