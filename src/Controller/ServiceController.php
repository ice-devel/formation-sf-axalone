<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\SlugService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/services", name="services") */
class ServiceController extends AbstractController
{
    /**
     * @Route("/slugify", name="service_slug")
     */
    public function slugify(SlugService $slugService): Response
    {
        $str = "COUcou";
        $str = $slugService->slugify($str);

        return new Response(0);
    }
}
