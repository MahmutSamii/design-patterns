<?php

class Burger
{
    public $bread;

    public $meat;

    public $sauces;

    public $extras;

    public $size;

    public function describe()
    {
        echo "Burger: \n";
        echo " - Bread: {$this->bread}\n";
        echo " - Meat: {$this->meat}\n";
        echo " - Sauces: " . implode(", ", $this->sauces) . "\n";
        echo " - Extras: " . implode(", ", $this->extras) . "\n";
        echo " - Size: {$this->size}\n";
    }
}


interface BurgerBuilderInterface
{
    public function setBread($bread);
    public function setMeat($meat);
    public function addSauce($sauces);
    public function addExtra($extras);
    public function setSize($size);
    public function getBurger();
}

class BurgerBuilder implements BurgerBuilderInterface
{

    private $burger;

    public function __construct()
    {
        $this->burger = new Burger();
    }

    public function setBread($bread): BurgerBuilder
    {
        $this->burger->bread = $bread;
        return $this;
    }

    public function setMeat($meat): BurgerBuilder
    {
        $this->burger->meat = $meat;
        return $this;
    }

    public function addSauce($sauces): BurgerBuilder
    {
        $this->burger->sauces[] = $sauces;
        return $this;
    }

    public function addExtra($extras): BurgerBuilder
    {
        $this->burger->extras[] = $extras;
        return $this;
    }

    public function setSize($size): BurgerBuilder
    {
        $this->burger->size = $size;
        return $this;
    }

    public function getBurger(): Burger
    {
        return $this->burger;
    }
}

class BurgerDirector
{
    public function createCheeseburger(BurgerBuilder $builder): Burger
    {
        $builder->setBread('White')
            ->setSize('Single')
            ->setMeat('Beef')
            ->addSauce('Cheese')
            ->addExtra('Ketchup');

        return $builder->getBurger();
    }

    public function createVeggieburger(BurgerBuilder $builder): Burger
    {
        $builder->setBread('Whole Wheat')
            ->setSize('Double')
            ->setMeat('Veggie')
            ->addSauce('Mustard')
            ->addExtra('Lettuce')
            ->addExtra('Tomato');

        return $builder->getBurger();
    }
}

$builder = new BurgerBuilder();
$customBurger = $builder->setBread('Rye')
    ->setMeat('Chicken')
    ->addSauce('BBQ')
    ->addExtra('Bacon')
    ->addExtra('Onions')
    ->setSize('Double')
    ->getBurger();

echo "Custom Burger:\n";
$customBurger->describe();

$director = new BurgerDirector();
$cheeseburger = $director->createCheeseburger(new BurgerBuilder());

echo "\nCheeseburger:\n";
$cheeseburger->describe();
