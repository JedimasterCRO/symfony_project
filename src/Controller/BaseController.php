<?php

namespace App\Controller;

use App\Models\Circle;
use App\Models\Triangle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class BaseController extends AbstractController
{
    public function circle(float $radius)
    {
        $circle = new Circle($radius);

        $data = [
            'type'          => 'circle',
            'radius'        => $radius,
            'surface'       => $circle->sumObjectSurface(),
            'circumference' => $circle->sumObjectCircumference()
        ];

        $response = new JsonResponse($data);

        return $response;
    }

    public function triangle(float $a, float $b, float $c)
    {
        $triangle = new Triangle($a, $b, $c);

        $data = [
            'type'          => 'triangle',
            'a'             => $a,
            'b'             => $b,
            'c'             => $c,
            'surface'       => $triangle->sumObjectSurface(),
            'circumference' => $triangle->sumObjectCircumference()
        ];

        $response = new JsonResponse($data);

        return $response;
    }
}
