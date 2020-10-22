<?php

class BeverageModel implements IBeverage
{

    private $description;
    private $price;
    private $size;

    public const SIZE_SMALL = 0;
    public const SIZE_MEDIUM = 1;
    public const SIZE_TALL = 2;

    public function __construct(String $description, float $price, int $size)
    {
        $this->description = $description;
        $this->price = $price;
        $this->size = $size;
    }

    public function getPrice(): float
    {
        // YAGNI : you aren't gonna need it
        // KISS : keep it simple stupid
        switch ($this->size) {
            case BeverageModel::SIZE_MEDIUM:
                return $this->price * 1.3;
                break;
            case BeverageModel::SIZE_TALL:
                return $this->price * 1.6;
                break;
            default:
                return $this->price;
        }
    }

    public function getDescription(): String
    {
        return $this->description;
    }

    public function getSize(): String
    {
        return $this->size;
    }
}
