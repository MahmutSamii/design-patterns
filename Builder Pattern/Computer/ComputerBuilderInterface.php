<?php

namespace Computer;

interface ComputerBuilderInterface
{
    public function setProcessor($processor);
    public function setRAM($ram);
    public function setStorage($storage);
    public function setGraphicsCard($graphicsCard);
    public function setPowerSupply($powerSupply);
    public function setCase($case);
    public function getComputer();
}
