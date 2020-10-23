<?php

class Chocolate extends BaseBeverageTopping
{
    public function getPrice(): float
    {
        switch ($this->beverage->getSize()) {
            case BeverageModel::SIZE_MEDIUM:
                return $this->beverage->getPrice() + 2;
            case BeverageModel::SIZE_TALL:
                return $this->beverage->getPrice() + 2.5;
            default:
                return $this->beverage->getPrice() + 3;
        }
    }

    public function getDescription(): String
    {
        return $this->beverage->getDescription() . ' with chocolate';
    }
}
