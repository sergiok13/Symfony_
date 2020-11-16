<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ContactaController extends AbstractController
{
    /**
     * @Route("/contacta", name="contacta")
     */
    public function index(SessionInterface $session)
    {
        $name = $session->get('name');
        $pass = $session->get('pass');

        
        return $this->render('muestra_contacta/contact.html.twig', [
            'controller_name' => 'ContactaController',
            'titulo' => "Contactos E-CARS",
            'name' => $name,
            'pass' => $pass,
        ]);
    }
}
