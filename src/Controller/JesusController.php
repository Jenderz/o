<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JesusController extends Controller
{
    /**
     * @Route("/jesus", name="jesus")
     */
    public function index()
    {
        return $this->render('jesus/index.html.twig', [
            'controller_name' => 'JesusController',
        ]);
    }
}
