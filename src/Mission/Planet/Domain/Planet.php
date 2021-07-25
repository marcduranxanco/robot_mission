<?php

namespace App\Mission\Planet;

class Planet
{
    private int $high;
    private int $width;
    private array $obstacles;

    public function __construct(
        int $p_high,
        int $p_width
    ) {
        $this->high = $p_high;
        $this->width = $p_width;
        $this->obstacles = [];
    }

    public function getHigh(): int
    {
        return $this->high;
    }

    public function setHigh(int $p_high): void
    {
        $this->high = $p_high;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $p_width): void
    {
        $this->width = $p_width;
    }

    public function getObstacles(): array
    {
        return $this->obstacles;
    }

    public function addObstacles(array $p_obstacles): void
    {
        array_push($this->obstacles, $p_obstacles);
    }
}
