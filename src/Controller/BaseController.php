<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends AbstractController
{
    public function index()
    {
        $ime = 'Goran';
        $prezime = 'Vinković';

        return $this->render('first.html.twig', compact('ime', 'prezime'));
    }
}
