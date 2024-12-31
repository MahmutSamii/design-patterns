<?php

namespace Pizza;

class PizzaDirector
{
    public function createMargherita(PizzaBuilder $builder)
    {
        $builder->setDough('Thin Crust')
            ->setSize('Medium')
            ->setSauce('Tomato')
            ->addTopping('Mozzarella')
            ->addTopping('Basil');
        return $builder->getPizza();
    }

    public function createPepperoni(PizzaBuilder $builder)
    {
        $builder->setDough('Thick Crust')
            ->setSize('Large')
            ->setSauce('Tomato')
            ->addTopping('Mozzarella')
            ->addTopping('Pepperoni');
        return $builder->getPizza();
    }
}
