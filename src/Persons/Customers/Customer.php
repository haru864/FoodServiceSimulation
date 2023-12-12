<?php

namespace Customers;

use Persons\Person;
use Restaurants\Restaurant;
use Invoices\Invoice;

class Customer extends Person
{
    public function interestedCategories(Restaurant $restaurant): array
    {
    }

    public function order(Restaurant $restaurant, array $categories): Invoice
    {
    }
}
