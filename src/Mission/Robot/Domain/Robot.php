<?php

namespace App\Mission\Robot;

class Robot
{
    private int $locationH;
    private int $locationW;
    private string $route;

    public function __construct(
        int $p_initH,
        int $p_initW,
        string $p_route
    ) {
        $this->locationH = $p_initH;
        $this->locationW = $p_initW;
        $this->route = $p_route;
    }

    public function getLocationW(): int
    {
        return $this->locationW;
    }

    public function getLocationH(): int
    {
        return $this->locationH;
    }

    public function setLocationW(int $p_locationW): void
    {
        if($p_locationW < 0)
            throw new \Exception("The robot has gone off the map. Update the route.", 1);
        $this->locationW = $p_locationW;
    }

    public function setLocationH(int $p_locationH): void
    {
        if($p_locationH < 0)
            throw new \Exception("The robot has gone off the map. Update the route.", 1);
        $this->locationH = $p_locationH;
    }

    public function getRoute(): string
    {
        return $this->route;
    }
}
