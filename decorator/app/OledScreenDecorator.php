<?php

namespace App;

class OledScreenDecorator implements Computer {

    protected $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function getPrice(): int
    {
        return $this->computer->getPrice() + 1200;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . ' with an Oled Screen';
    }
}