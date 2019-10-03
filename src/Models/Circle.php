<?php

namespace App\Models;

use App\Models\Interfaces\ShapeInterface;

class Circle implements ShapeInterface
{
    /**
     * @var float
     */
    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function sumObjectSurface(): float
    {
        $result = pow($this->radius, 2) * pi();

        return round($result, 2);
    }

    /**
     * @return float
     */
    public function sumObjectCircumference(): float
    {
        $result = 2 * $this->radius * pi();

        return round($result, 2);
    }
}
