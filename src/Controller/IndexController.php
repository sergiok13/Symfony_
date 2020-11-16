<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(SessionInterface $session)
    {
        $name = $session->get('name');
        $pass = $session->get('pass');


        return $this->render('index.html.twig', [
            'controller_name' => 'IndexController',
            'titulo' => "E-CARS",
            'name' => $name,
            'pass' => $pass,
        ]);
    }
}
