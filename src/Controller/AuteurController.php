<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class AuteurController
{
    public function index()
    {
        return new Response('Bonjour, je suis Sacha De Bourg-Palette, j\'ai 9 ans et je suis l\'auteur de ce blog!');
    }
}