<?php


namespace App\Service;


use App\Models\Circle;
use App\Models\Triangle;
use App\Service\Interfaces\GeometryCalculatorInterface;

class GeometryCalculator implements GeometryCalculatorInterface
{
    /**
     * @var Triangle
     */
    private $triangle;
    /**
     * @var Circle
     */
    private $circle;

    public function __construct(Triangle $triangle, Circle $circle)
    {
        $this->triangle = $triangle;
        $this->circle = $circle;
    }

    public function sumSurface(float $a, float $b, float $c, float $radius): float
    {
        $triangleSurface = $this->triangle->sumObjectSurface($a, $b, $c);
        $circleSurface = $this->circle->sumObjectSurface($radius);

        return $triangleSurface + $circleSurface;
    }

    public function sumCircumference(float $a, float $b, float $c, float $radius): float
    {
        $triangleCircumference = $this->triangle->sumObjectCircumference($a, $b, $c);
        $circleCircumference = $this->circle->sumObjectCircumference($radius);

        return $triangleCircumference + $circleCircumference;
    }
}
