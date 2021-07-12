<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OutingController extends AbstractController
{
    /**
     * @Route("/outing", name="outing")
     */
    public function index(): Response
    {
        return $this->render('outing/index.html.twig', [
            
        ]);
    }
}
