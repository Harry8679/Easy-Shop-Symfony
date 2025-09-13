<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CustomController extends AbstractController
{
    #[Route('/custom', name: 'app_custom')]
    public function index(): Response
    {
        return $this->render('custom/index.html.twig', [
            'controller_name' => 'CustomController',
        ]);
    }
}
