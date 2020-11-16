<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        
        return $this->render('login/login.html.twig', [
            'controller_name' => 'LoginController',
            'titulo' => "Login E-CARS",
            "name" => "",
        ]);
    }
}
