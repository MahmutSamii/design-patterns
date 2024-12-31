<?php

namespace Pizza;

interface PizzaBuilderInterface
{
    public function setDough($dough);
    public function setSize($size);
    public function setSauce($sauce);
    public function addTopping($topping);
    public function getPizza();
}
