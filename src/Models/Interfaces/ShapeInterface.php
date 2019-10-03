<?php

namespace App\Models\Interfaces;

interface ShapeInterface
{
    public function sumObjectSurface(): float;

    public function sumObjectCircumference(): float;
}
