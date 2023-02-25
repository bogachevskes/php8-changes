<?php

class SampleClass
{
    
    private int|float $number;

    public function setNumber(int|float $number)
    {
        $this->number = $number;
    }

    public function getNumber(): int|float
    {
        return $this->number;
    }
}

$item = new SampleClass;

$item->setNumber(1);
dump($item->getNumber());

$item->setNumber(12.25);
dump($item->getNumber());