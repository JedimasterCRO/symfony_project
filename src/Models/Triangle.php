<?php

namespace App\Models;

use App\Models\Interfaces\ShapeInterface;

class Triangle implements ShapeInterface
{
    protected $a;
    protected $b;
    protected $c;

    /**
     * Triangle constructor.
     *
     * @param float $a
     * @param float $b
     * @param float $c
     */
    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function sumObjectSurface(): float
    {
        $x = ($this->a + $this->b + $this->c) / 2;
        $surface = sqrt($x * ($x - $this->a) * ($x - $this->b) * ($x - $this->c));

        if (is_nan($surface)) {
            $surface = 0;
        }

        return round($surface, 2);
    }

    public function sumObjectCircumference(): float
    {
        return round($this->a + $this->b + $this->c, 2);
    }
}
