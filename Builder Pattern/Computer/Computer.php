<?php

namespace Computer;

class Computer
{
    public $processor;
    public $ram;
    public $storage;
    public $graphicsCard;
    public $powerSupply;
    public $case;

    public function describe()
    {
        echo "Computer Configuration:\n";
        echo " - Processor: {$this->processor}\n";
        echo " - RAM: {$this->ram}\n";
        echo " - Storage: {$this->storage}\n";
        echo " - Graphics Card: {$this->graphicsCard}\n";
        echo " - Power Supply: {$this->powerSupply}\n";
        echo " - Case: {$this->case}\n";
    }
}
