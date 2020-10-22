<?php

class Milk extends BaseBeverageTopping
{
    public function getPrice(): float
    {
        return $this->beverage->getPrice()  + 0.2;
    }

    public function getDescription(): String
    {
        return $this->beverage->getDescription()  . ' with milk';
    }

    public function getSize(): String
    {
        return $this->size;
    }
}
