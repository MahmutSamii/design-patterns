<?php

namespace Pizza;

use Pizza\PizzaBuilderInterface;

class PizzaBuilder implements PizzaBuilderInterface
{
    private $pizza;

    public function __construct()
    {
        $this->pizza = new Pizza();
    }

    public function setDough($dough)
    {
        $this->pizza->dough = $dough;
        return $this;
    }

    public function setSize($size)
    {
        $this->pizza->size = $size;
        return $this;
    }

    public function setSauce($sauce)
    {
        $this->pizza->sauce = $sauce;
        return $this;
    }

    public function addTopping($topping)
    {
        $this->pizza->toppings[] = $topping;
        return $this;
    }

    public function getPizza()
    {
        return $this->pizza;
    }
}
