<?php

namespace App\Controller;

use App\Entity\Productos;
use Doctrine\Common\Collections\Expr\Value;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @Route("/add", name="add")
     */
    public function index(EntityManagerInterface $entityManager)
    {
        foreach($this->catalogo as $key){
            $producto=new Productos();
            $producto->setNombre($key['title']);
            $producto->setDescripcion($key['description']);
            $producto->setImagen($key['imagen']);
            $producto->setPrecio($key['price']);

            $entityManager->persist($producto);
        }
        $entityManager->flush();

        return $this->render('add/index.html.twig', [
            'controller_name' => 'AddController',
        ]);
    }

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
    ];
}
