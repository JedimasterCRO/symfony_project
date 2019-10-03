<?php

namespace App\Service;

use App\Models\Interfaces\ShapeInterface;
use App\Service\Interfaces\GeometryCalculatorInterface;

class GeometryCalculator implements GeometryCalculatorInterface
{
    public function objectSurface(ShapeInterface ...$shapes): float
    {
        foreach ($shapes as $shape) {
            $surface[] = $shape->sumObjectSurface();
        }

        return array_sum($surface);
    }

    public function objectCircumference(ShapeInterface ...$shapes): float
    {
        foreach ($shapes as $shape) {
            $circumference[] = $shape->sumObjectCircumference();
        }

        return array_sum($circumference);
    }
}
