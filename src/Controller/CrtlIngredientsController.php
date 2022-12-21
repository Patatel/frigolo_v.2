<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CrtlIngredientsController extends AbstractController
{
    #[Route('/crtl/ingredients', name: 'app_crtl_ingredients')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/CrtlIngredientsController.php',
        ]);
    }
}
