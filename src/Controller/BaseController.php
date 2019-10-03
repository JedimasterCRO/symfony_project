<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{
    public function circle(float $radius)
    {
        dump($radius);
        die();
    }

    public function triangle(float $a, float $b, float $c)
    {
        dump($a, $b, $c);
        die();
    }
}
