<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class NosotrosController extends AbstractController
{
    /**
     * @Route("/nosotros", name="nosotros")
     */
    public function index(SessionInterface $session)
    {
        $name = $session->get('name');
        $pass = $session->get('pass');

        if($name==null|| $name==""){
            $name="Introduce tus datos de usuario para iniciar la sesión";
        }
        return $this->render('nosotros/nosotros.html.twig', [
            'controller_name' => 'NosotrosController',
            'titulo' => "E-CARS",
            'name' => $name,
            'pass' => $pass,
        ]);
    }
}
