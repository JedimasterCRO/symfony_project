<?php


namespace App\Models;


class Circle
{
    /**
     * sum circle surface
     *
     * @param float $radius
     * @return float
     */
    public function sumObjectSurface(float $radius)
    {
        $pi = 3.14;
        $result = pow($radius, 2) * $pi;

        return round($result, 2);
    }

    /**
     * sum circle circumference
     *
     * @param float $radius
     * @return float
     */
    public function sumObjectCircumference(float $radius)
    {
        $pi = 3.14;
        $result = 2 * $radius * $pi;

        return round($result, 2);
    }
}
