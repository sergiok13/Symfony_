<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CompruebaController extends AbstractController
{
    /**
     * @Route("/comprueba", name="comprueba")
     */
    public function index(Request $request, SessionInterface $session)
    {
        $session->set('name' , $request->request->get('name'));
        $session->set('pass' , $request->request->get('pass'));

        return $this->redirectToRoute('index');

    }
}
