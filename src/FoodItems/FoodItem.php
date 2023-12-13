<?php

namespace FoodItems;

abstract class FoodItem
{
    public string $name;
    public string $description;
    public float $price;
    public int $cookingTimeMinutes;

    public static function getCategory(): string
    {
        // return get_called_class();
        return basename(str_replace('\\', '/', static::class));
    }
}
