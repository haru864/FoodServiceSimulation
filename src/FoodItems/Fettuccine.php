<?php

namespace FoodItems;

use FoodItems\FoodItem;

class Fettuccine extends FoodItem
{
    public function __construct()
    {
        $this->name = "フェットチーネ";
        $this->description = "本格的なフェットチーネ";
        $this->price = 1200;
        $this->cookingTimeMinutes = 15;
    }
}
