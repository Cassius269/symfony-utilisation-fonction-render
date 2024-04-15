<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route(
        path: '/',
        name: 'home',
        methods: ["GET"]
    )]
    public function index(): Response
    {
        $animaux = [
            "name" => ["Chien", "Chat", "Lapin"]
        ];

        return $this->render('test.html.twig', [
            'animaux' => $animaux
        ]);
    }
}
