<?php

spl_autoload_register(function ($class_name) {
    //class directories
    $directorys = array(
        'src/class/',
        'src/class/BeverageTopping/',
        'src/class/BeverageSize/',
        'src/interface/'
    );
    foreach ($directorys as $directory) {
        if (file_exists($directory . $class_name . '.php')) {
            require_once($directory . $class_name . '.php');
            return;
        }
    }
});

$largeBeverage = new BeverageModel('Chocolat', 2.10, BeverageModel::SIZE_TALL);
$largeBeverageWithChantilly = new Chantilly($largeBeverage);
$largeBeverageWithChantillyAndChocolate = new Chocolate($largeBeverageWithChantilly);

echo $largeBeverageWithChantillyAndChocolate->getDescription() . "<br>";
echo $largeBeverageWithChantillyAndChocolate->getPrice() . " €<br>";
