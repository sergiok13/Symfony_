<?php

namespace App\Controller;

use App\Entity\Categorias;
use App\Entity\Productos;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ProductosController extends AbstractController
{
    /**
     * @Route("/products/{i?1}/{currentPage?1}", name="productos")
     */
    public function index(SessionInterface $session, $currentPage,$i)
    {
        $name = $session->get('name');
        $pass = $session->get('pass');
        $categoria=$this->getDoctrine()
                          ->getRepository(Categorias::class)
                          ->findOneBy(['id'=>$i]);
        
        $productos=$categoria->getProductos();

        /*$productos = $this->getDoctrine()
                          ->getRepository(Productos::class)
                          ->findBy(['Categoria'=>$categoria->getId()]);
        */


        /*
        $productos=$this->getDoctrine()
                        ->getRepository(Productos::class)
                        ->findBy(['Categoria'=>$i]);
        */
            return $this->render('productos/products.html.twig', [
                'controller_name' => "Hola",
                'titulo' => "Productos E-CARS",
                'name' => $name,
                'pass' => $pass,
                'data' => $productos,
                'currentPage' => $currentPage,
                'itemsPerPage' => 4,
            ]);
        
        
        }
    /*
    private $catalogo = [
            [
                'imagen' => 'm1.jpg',
                'title' => 'Tesla Model 3',
                'description' => 'El nuevo Tesla Low-Cost ha llegado',
                'price' => '50000€',
            ],
            [
                'imagen' => 'm2.jpg',
                'title' => 'Tesla Model S',
                'description' => 'El Tesla mas completo',
                'price' => '70000€',
            ],
            [
                'imagen' => 'h1.jpg',
                'title' => 'Renault Clio',
                'description' => 'El nuevo Renault Clio Hibrido',
                'price' => '20000€',
            ],
            [
                'imagen' => 'h2.jpg',
                'title' => 'Toyota C-HR',
                'description' => 'El nuevo Tesla Low-Cost ha llegado',
                'price' => '30000€',
            ],
            [
                'imagen' => 'n1.jpg',
                'title' => 'BMW i8',
                'description' => 'El nuevo BMW i8 es una autentica bestia',
                'price' => '70000€',
            ],
            [
                'imagen' => 'a2.jpg',
                'title' => 'Peugeot 208',
                'description' => 'Una pasada Simplemente',
                'price' => '20000€',
            ],
            [
                'imagen' => 'a9.jpg',
                'title' => 'Volskwagen ID.3',
                'description' => 'El nuevo Volskwagen tiene diseño, confort y potencia',
                'price' => '35000€',
            ],
            [
                'imagen' => 'a8.jpg',
                'title' => 'Audi Q5-e',
                'description' => 'El nuevo Q5-e lo tiene todo',
                'price' => '35000€',
            ],
            [
                'imagen' => 'a1.jpg',
                'title' => 'Opel Corsa H',
                'description' => 'El nuevo Corsa es una pasada',
                'price' => '19000€',
            ]
        ];*/
}
