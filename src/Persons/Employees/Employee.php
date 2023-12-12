<?php

namespace Employees;

use Persons\Person;

class Employee extends Person
{
    public int $employeeId;
    public float $salary;
}
