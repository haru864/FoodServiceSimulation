<?php

namespace FoodItems;

use FoodItems\FoodItem;

class CheeseBurger extends FoodItem
{
    public function __construct()
    {
        $this->name = "チーズバーガー";
        $this->description = "普通のチーズバーガー";
        $this->price = 300;
        $this->cookingTimeMinutes = 3;
    }
}
