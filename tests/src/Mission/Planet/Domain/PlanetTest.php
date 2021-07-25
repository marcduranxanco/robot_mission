<?php

use PHPUnit\Framework\TestCase;
use App\Mission\Planet\Planet;

class PlanetTest extends TestCase
{
    private int $high;
    private int $width;
    private Planet $planet;

    protected function setUp(): void {
        $this->high = 10;
        $this->width = 10;
        $this->planet = New Planet($this->high, $this->width);
    }

  public function testGetHigh(){
    $this->setUp();
    $high = $this->planet->getHigh();
    self::assertIsInt($high);
    self::assertEquals($this->high, $high);
  }

  public function testGetWidth(){
    $this->setUp();
    $width = $this->planet->getWidth();
    self::assertIsInt($width);
    self::assertEquals($this->width, $width);
  }

  public function testSetWidth(){
    $this->setUp();
    $this->planet->setWidth(1);
    self::assertIsInt($this->planet->getWidth());
    self::assertEquals($this->planet->getWidth(), 1);
  }

  public function testSetHigh(){
    $this->setUp();
    $this->planet->setHigh(1);
    self::assertIsInt($this->planet->getHigh());
    self::assertEquals($this->planet->getHigh(), 1);
  }
}