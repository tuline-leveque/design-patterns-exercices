<?php

namespace Test;

use App\GPUDecorator;
use App\OledScreenDecorator;
use PHPUnit\Framework\TestCase;

use App\Laptop;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptop = new GPUDecorator($laptop);

        $this->assertSame(800, $laptop->getPrice());
        $this->assertSame("A laptop computer with a GPU", $laptop->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptop = new OledScreenDecorator($laptop);

        $this->assertSame(1600, $laptop->getPrice());
        $this->assertSame("A laptop computer with an Oled Screen", $laptop->getDescription());
    }
}