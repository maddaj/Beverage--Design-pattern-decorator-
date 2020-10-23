<?php

class BuilderPredefinedBeverage
{

    private static $instance;

    public static function getInstance(): BuilderPredefinedBeverage
    {
        // Si l'instance n'existe pas, je la creer
        if (self::$instance == null) {
            self::$instance = new BuilderPredefinedBeverage();
        }
        return self::$instance;
    }

    private function __construct()
    {
    }

    public function getMostExpensiveBeverage(): IBeverage
    {
        $largeBeverage = FactoryPredefinedBeverage::getInstance()->getLargeChocolate();
        $largeBeverageWithChantilly = new Chantilly($largeBeverage);
        $largeBeverageWithChantillyAndChocolate = new Chocolate($largeBeverageWithChantilly);
        $largeBeverageWithChantillyChocolateCream = new Cream($largeBeverageWithChantillyAndChocolate);
        $largeBeverageWithChantillyChocolateCreamAndMilk = new Milk($largeBeverageWithChantillyChocolateCream);
        return $largeBeverageWithChantillyChocolateCreamAndMilk;
    }

    public function getCheapestBeverage(): IBeverage
    {
        $smallBeverage = FactoryPredefinedBeverage::getInstance()->getClassicBeverage();
        return $smallBeverage;
    }

    public function getChocolatViennois(): IBeverage
    {
        $chocolat = FactoryPredefinedBeverage::getInstance()->getLargeChocolate();
        $chocolatViennois = new Cream($chocolat);
        return $chocolatViennois;
    }
}
