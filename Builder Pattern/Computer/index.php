<?php

use Computer\ComputerBuilder;
use Computer\ComputerDirector;

$customBuilder = new ComputerBuilder();
$customPC = $customBuilder->setProcessor('AMD Ryzen 7')
    ->setRAM('16GB')
    ->setStorage('1TB HDD')
    ->setGraphicsCard('AMD Radeon RX 6800')
    ->setPowerSupply('600W')
    ->setCase('Mid Tower')
    ->getComputer();

echo "Custom PC:\n";
$customPC->describe();

$director = new ComputerDirector();
$gamingPC = $director->createGamingPC(new ComputerBuilder());

echo "\nGaming PC:\n";
$gamingPC->describe();

$officePC = $director->createOfficePC(new ComputerBuilder());

echo "\nOffice PC:\n";
$officePC->describe();
