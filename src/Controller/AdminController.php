<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\User;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/dashboard", name="admin_dashboard")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', []);
    }

    /**
     * @Route("/users/", name="users_admin_list")
     */
    public function usersAdminList(): Response
    {
        return $this->render('admin/index.html.twig', []);
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('admin/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    /**
     * @Route("/login_check", name="admin_login_check")
     */
    public function loginCheck(AuthenticationUtils $authenticationUtils): Response
    {

    }
}
