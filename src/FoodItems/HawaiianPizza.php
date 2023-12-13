<?php

namespace FoodItems;

use FoodItems\FoodItem;

class HawaiianPizza extends FoodItem
{
    public function __construct()
    {
        $this->name = "ハワイアンピザ";
        $this->description = "パイナップル大盛り";
        $this->price = 1500;
        $this->cookingTimeMinutes = 30;
    }
}
