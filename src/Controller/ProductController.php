<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/products", name="products") */
class ProductController extends AbstractController
{
    /**
     * @Route("/test", name="product_test")
     */
    public function index()
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'tabInts' => [1, 2, 6, 5]
        ]);
    }
}
