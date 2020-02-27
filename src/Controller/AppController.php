<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route(path="/", name="homepage")
     */
    public function homepage() {
        $response = new Response();
        $response->setContent("<body>0</body>");

        return $response;
    }


    /**
     * @Route(path="/produit/{id}-{slug}", name="product2")
     */
    public function product2($slug) {
        $response = new Response();
        $response->setContent("<body>".$slug."</body>");

        return $response;
    }

    /**
     * @Route(path="/produit/{slug}", name="product")
     */
    public function product($slug) {
        $response = new Response();
        $response->setContent("<body>".$slug."</body>");

        return $response;
    }

    /**
     * @Route(path="/article/{id}", name="article")
     */
    public function article($id=5) {
        $response = new Response();
        $response->setContent("<body>".$id."</body>");

        return $response;
    }

    /**
     * @Route(path="/post/{id}", name="post",
     *     requirements={"id": "\d+"})
     */
    public function post($id) {
        $response = new Response();
        $response->setContent("<body>".$id."</body>");

        return $response;
    }
}