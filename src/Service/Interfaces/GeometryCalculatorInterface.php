<?php

namespace App\Service\Interfaces;

use App\Models\Interfaces\ShapeInterface;

interface GeometryCalculatorInterface
{
    public function objectSurface(ShapeInterface ...$shapes): float;

    public function objectCircumference(ShapeInterface ...$shapes): float;
}
