<?php

namespace App\Mission\Planet;

use App\Mission\Planet\Planet;

class PlanetController
{
    private Planet $planet;

    public function __construct(
        $p_high,
        $p_width
    ) {
        $this->planet = new Planet($p_high, $p_width);
    }

    public function getSize(): array
    {
        $size = array(
            "h" => $this->planet->getHigh(),
            "w" => $this->planet->getWidth()
        );
        return $size;
    }

    public function checkWidth(): int
    {
        return $this->width;
    }

    public function checkMovement(int $p_width): void
    {
        $this->width = $p_width;
    }

    public function addObstacles(array $obstacles)
    {
        //CHeck si se puede añadir el obstaculo!
        $this->planet->addObstacles($obstacles);
    }

    public function listObstacles() : array
    {
        return $this->planet->getObstacles();
    }
}
