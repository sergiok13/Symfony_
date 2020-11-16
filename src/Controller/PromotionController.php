<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PromotionController extends AbstractController
{
    /**
     * @Route("/promotion", name="promotion")
     */
    public function index(SessionInterface $session)
    {
        $name = $session->get('name');
        $pass = $session->get('pass');
        
        return $this->render('promotion.html.twig', [
            'controller_name' => 'PromotionController',
            'titulo' => "Promoción E-CARS",
            'name' => $name,
            'pass' => $pass,
        ]);
    }
}
