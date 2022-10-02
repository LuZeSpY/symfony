<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AproposController extends AbstractController
{
    public function index(): Response
    {
       return $this->render('a-propos.html.twig', [
        'title' => 'A propos de ma vie',
       ]);
    }
    
}