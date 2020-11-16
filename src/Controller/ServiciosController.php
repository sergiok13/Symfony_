<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ServiciosController extends AbstractController
{
    /**
     * @Route("/servicios", name="servicios")
     */
    public function index(SessionInterface $session)
    {
        $name = $session->get('name');
        $pass = $session->get('pass');
        
        return $this->render('servicios/servicios.html.twig', [
            'controller_name' => 'ServiciosController',
            'titulo' => "Servicios E-CARS",
            'name' => $name,
            'pass' => $pass,
        ]);
    }
}
