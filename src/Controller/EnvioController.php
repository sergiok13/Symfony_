<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class EnvioController extends AbstractController
{
    /**
     * @Route("/envio", name="envio")
     */
    public function index(Request $request)
    {
        $var = $request ->request->get('email');
        $var2 = $request ->request->get('name');
        $var3 = $request ->request->get('phone');
        $var4 = $request ->request->get('subject');
        $var5 = $request ->request->get('message');
        return $this->render('envio/envio.html.twig', [
            'controller_name' => 'EnvioController',
            'email' => $var,
            'name' => $var2,
            'phone' => $var3,
            'subject' => $var4,
            'message' => $var5,
        ]);
    }
}
