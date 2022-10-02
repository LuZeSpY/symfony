<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="page_blog")
     */
    public function index()
    {
        return new Response(
            '<html><body>Accueil</body></html>'
        );
    }

    /**
     * @Route("/posts", name="blog_articles")
     */
    public function posts()
    {
	      return new Response(
            '<html><body>Liste des articles</body></html>'
        );
    }
}