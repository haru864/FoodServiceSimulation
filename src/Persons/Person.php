<?php

namespace Persons;

class Person
{
    public string $name;
    public int $age;
    public string $address;

    public function __construct(string $name, int $age, string $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
}
