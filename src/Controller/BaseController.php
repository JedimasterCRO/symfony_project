<?php


namespace App\Controller;


use App\Models\Circle;
use App\Models\Triangle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class BaseController extends AbstractController
{
    public function circle(float $radius, Circle $circle)
    {
        $surface = $circle->sumObjectSurface($radius);
        $circumference = $circle->sumObjectCircumference($radius);

        $data = [
            'type'          => 'circle',
            'radius'        => $radius,
            'surface'       => $surface,
            'circumference' => $circumference
        ];

        $response = new JsonResponse($data);

        return $response;
    }

    public function triangle(float $a, float $b, float $c, Triangle $triangle)
    {
        $surface = $triangle->sumObjectSurface($a, $b, $c);
        $circumference = $triangle->sumObjectCircumference($a, $b, $c);

        $data = [
            'type'          => 'triangle',
            'a'             => $a,
            'b'             => $b,
            'c'             => $c,
            'surface'       => $surface,
            'circumference' => $circumference
        ];

        $response = new JsonResponse($data);

        return $response;
    }
}
