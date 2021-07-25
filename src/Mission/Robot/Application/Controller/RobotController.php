<?php

namespace App\Mission\Robot;

use App\Mission\Robot\Robot;

class RobotController
{
    private Robot $robot;
    private array $route = [];

    public function __construct(
        int $p_initH,
        int $p_initW,
        string $p_route
    ) {
        $this->robot = new Robot($p_initH, $p_initW, $p_route);
        $this->createRoute();
    }

    public function getRoute(): array
    {
        return $this->route;
    }

    public function createRoute(): void 
    {
        $arrRoute = str_split($this->robot->getRoute());
        $this->route[0] = ["h" => $this->robot->getLocationH(), "w" => $this->robot->getLocationW()];
        foreach ($arrRoute as $key => $value) {
            $key = $key + 1;
            switch ($value) {
                case "L":
                    $this->moveL();
                    $this->route[$key] = ["h" => $this->robot->getLocationH(), "w" => $this->robot->getLocationW()];
                    break;
                case "R":
                    $this->moveL();
                    $this->route[$key] = ["h" => $this->robot->getLocationH(), "w" => $this->robot->getLocationW()];
                    break;
                case "F":
                    $this->moveF();
                    $this->route[$key] = ["h" => $this->robot->getLocationH(), "w" => $this->robot->getLocationW()];
                    break;
            }
        }
    }

    public function moveL(): void
    {
        $currentH = $this->robot->getLocationH();
        $this->robot->setLocationH($currentH - 1);
    }

    public function moveR(): void
    {
        $currentH = $this->robot->getLocationH();
        $this->robot->setLocationH($currentH + 1);
    }

    public function moveF(): void
    {
        $currentW = $this->robot->getLocationW();
        $this->robot->setLocationW($currentW + 1);
    }
}
