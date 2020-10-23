<?php

spl_autoload_register(function ($class_name) {
    //class directories
    $directorys = array(
        'src/class/',
        'src/class/BeverageTopping/',
        'src/interface/'
    );
    foreach ($directorys as $directory) {
        if (file_exists($directory . $class_name . '.php')) {
            require_once($directory . $class_name . '.php');
            return;
        }
    }
});

// $largeBeverage = new BeverageModel('Chocolat', 2.10, BeverageModel::SIZE_TALL);
// $largeBeverageWithChantilly = new Chantilly($largeBeverage);
// $largeBeverageWithChantillyAndChocolate = new Chocolate($largeBeverageWithChantilly);

// echo $largeBeverageWithChantillyAndChocolate->getDescription() . "<br>";
// echo $largeBeverageWithChantillyAndChocolate->getPrice() . " €<br>";

$beverage = BuilderPredefinedBeverage::getInstance()->getMostExpensiveBeverage();
echo $beverage->getDescription() . "<br>";
echo $beverage->getPrice() . " €<br>";

$beverage2 = BuilderPredefinedBeverage::getInstance()->getCheapestBeverage();
echo $beverage2->getDescription() . "<br>";
echo $beverage2->getPrice() . " €<br>";

$beverage3 = BuilderPredefinedBeverage::getInstance()->getChocolatViennois();
echo $beverage3->getDescription() . "<br>";
echo $beverage3->getPrice() . " €<br>";
