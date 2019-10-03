<?php


namespace App\Service\Interfaces;


interface GeometryCalculatorInterface
{
    public function sumSurface(float $a, float $b, float $c, float $radius): float;

    public function sumCircumference(float $a, float $b, float $c, float $radius): float;
}
