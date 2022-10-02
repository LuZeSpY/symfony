<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class FrontendController extends AbstractController
{
    /**
     * @Route("/", name="frontend_index")
     */
    public function index()
    {
        return new Response('Bienvenue dans notre restaurant !');
    }

    /**
     * @Route("/carte", name="frontend_carte")
     */
    public function carte()
    {
        return new Response('Retrouvez ici notre menu !');
    }

    /**
     * @Route("/reservation", name="frontend_reservation")
     */
    public function reservation()
    {
        return new Response('Appelez-nous pour réserver !');
    }
}