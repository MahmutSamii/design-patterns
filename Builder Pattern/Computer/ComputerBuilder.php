<?php

namespace Computer;

class ComputerBuilder implements ComputerBuilderInterface
{
    private $computer;

    public function __construct()
    {
        $this->computer = new Computer();
    }

    public function setProcessor($processor): ComputerBuilder
    {
        $this->computer->processor = $processor;
        return $this;
    }

    public function setRAM($ram): ComputerBuilder
    {
        $this->computer->ram = $ram;
        return $this;
    }

    public function setStorage($storage): ComputerBuilder
    {
        $this->computer->storage = $storage;
        return $this;
    }

    public function setGraphicsCard($graphicsCard): ComputerBuilder
    {
        $this->computer->graphicsCard = $graphicsCard;
        return $this;
    }

    public function setPowerSupply($powerSupply): ComputerBuilder
    {
        $this->computer->powerSupply = $powerSupply;
        return $this;
    }

    public function setCase($case): ComputerBuilder
    {
        $this->computer->case = $case;
        return $this;
    }

    public function getComputer(): Computer
    {
        return $this->computer;
    }
}
