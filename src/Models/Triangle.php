<?php


namespace App\Models;


class Triangle
{
    public function sumObjectSurface(float $a, float $b, float $c)
    {
        $x = ($a + $b + $c) / 2;
        $surface = sqrt($x * ($x - $a) * ($x - $b) * ($x - $c));

        if (is_nan($surface)) {
            $surface = 0;
        }

        return round($surface, 2);
    }

    public function sumObjectCircumference(float $a, float $b, float $c)
    {
        return round($a + $b + $c, 2);
    }
}
