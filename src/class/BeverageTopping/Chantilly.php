<?php

class Chantilly extends BaseBeverageTopping
{
    public function getPrice(): float
    {
        switch ($this->beverage->getSize()) {
            case BeverageModel::SIZE_MEDIUM:
                return $this->beverage->getPrice() + 1.5;
            case BeverageModel::SIZE_TALL:
                return $this->beverage->getPrice() + 2;
            default:
                return $this->beverage->getPrice() + 1;
        }
    }

    public function getDescription(): String
    {
        return $this->beverage->getDescription() . ' with chantilly';
    }
}
