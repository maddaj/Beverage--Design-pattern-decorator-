<?php

class Cream extends BaseBeverageTopping
{
    public function getPrice(): float
    {
        return $this->beverage->getPrice()  + 0.1;
    }

    public function getDescription(): String
    {
        return $this->beverage->getDescription() . ' with cream';
    }
}
