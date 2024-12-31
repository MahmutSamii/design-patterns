<?php

use Pizza\PizzaBuilder;
use Pizza\PizzaDirector;

$customBuilder = new PizzaBuilder();
$customPizza = $customBuilder->setDough('Gluten-Free')
    ->setSize('Small')
    ->setSauce('Pesto')
    ->addTopping('Chicken')
    ->addTopping('Mushrooms')
    ->getPizza();

echo "Custom Pizza:\n";
$customPizza->describe();

$director = new PizzaDirector();
$margheritaPizza = $director->createMargherita(new PizzaBuilder());

echo "\nMargherita Pizza:\n";
$margheritaPizza->describe();

$pepperoniPizza = $director->createPepperoni(new PizzaBuilder());

echo "\nPepperoni Pizza:\n";
$pepperoniPizza->describe();
