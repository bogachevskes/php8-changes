<?php

class Person
{
    public function __construct(public string $firstName, public string $lastName, public int $age) {}
}

$item = new Person('John', 'Doe', 25);

dump($item);