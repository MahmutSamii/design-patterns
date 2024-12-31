<?php

namespace Computer;

class ComputerDirector
{
    public function createGamingPC(ComputerBuilder $builder)
    {
        $builder->setProcessor('Intel Core i9')
            ->setRAM('32GB')
            ->setStorage('1TB SSD')
            ->setGraphicsCard('NVIDIA RTX 4090')
            ->setPowerSupply('750W')
            ->setCase('Gaming Tower');
        return $builder->getComputer();
    }

    public function createOfficePC(ComputerBuilder $builder)
    {
        $builder->setProcessor('Intel Core i5')
            ->setRAM('16GB')
            ->setStorage('512GB SSD')
            ->setGraphicsCard('Integrated Graphics')
            ->setPowerSupply('450W')
            ->setCase('Mini Tower');
        return $builder->getComputer();
    }
}
