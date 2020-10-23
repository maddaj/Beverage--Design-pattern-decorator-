<?php

class FactoryPredefinedBeverage
{
    private static $instance;

    public static function getInstance(): FactoryPredefinedBeverage
    {
        // Si l'instance n'existe pas, je la creer
        if (self::$instance == null) {
            self::$instance = new FactoryPredefinedBeverage();
        }
        return self::$instance;
    }

    private function __construct()
    {
    }

    public static function getLargeChocolate(): IBeverage
    {
        return new BeverageModel('Chocolat', 2.10, BeverageModel::SIZE_TALL);
    }

    public static function getClassicBeverage(): IBeverage
    {
        return new BeverageModel('Espresso', 1.20, BeverageModel::SIZE_SMALL);
    }
}
