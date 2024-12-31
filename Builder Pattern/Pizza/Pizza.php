<?php

namespace Pizza;

class Pizza
{
    public $dough;
    public $size;
    public $sauce;
    public $toppings = [];

    public function describe()
    {
        echo "Pizza Configuration:\n";
        echo " - Dough: {$this->dough}\n";
        echo " - Size: {$this->size}\n";
        echo " - Sauce: {$this->sauce}\n";
        echo " - Toppings: " . implode(', ', $this->toppings) . "\n";
    }
}
