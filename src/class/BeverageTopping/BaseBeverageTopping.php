<?php

abstract class BaseBeverageTopping implements IBeverage
{
    protected $beverage;

    public function __construct(IBeverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getSize(): String
    {
        return $this->beverage->getSize();
    }

    public abstract function getPrice(): float;

    public abstract function getDescription(): String;
}
