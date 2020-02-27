<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/users", name="users") */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="users_list")
     */
    public function index()
    {
        // on récupère le manager de doctrine qui va nous permettre
        // d'intéragir avec la bdd
        $em = $this->getDoctrine()->getManager();

        // on récupère le "repository" associé à l'entité que l'on souhaite récupérer
        // les repo ne sont utilisés que pour les requêtes SELECT
        $users = $em->getRepository(User::class)->findAll(); //findAll : tous les objets

        $usersEnabled = $em->getRepository('App:User')
                            ->findBy(['isEnabled' => true]);

        $usersTotoEnabled = $em->getRepository('App:User')
            ->findBy(['isEnabled' => true, 'name' => ['toto', 'tata']]);

        return $this->render('user/list.html.twig', [
            'users' => $users,
            'usersEnabled' => $usersEnabled
        ]);
    }


    /**
     * @Route("/create", name="users_create")
     */
    public function create()
    {
        $user = new User();
        $user->setName(rand(10, 50));
        $em = $this->getDoctrine()->getManager();

        // doctrine prend en charge cette entité
        $em->persist($user);

        // doctrine balance le commit de la transaction (toutes les requêtes en attente)
        $em->flush();

        return new Response("User bien créé");
    }

    /**
     * @Route("/delete/{id}", name="users_delete")
     */
    public function delete(User $user)
    {
        $em = $this->getDoctrine()->getManager();

        // doctrine prend en charge cette entité pour la supprimer lors du flush
        $em->remove($user);

        // adieu user
        $em->flush();

        return new Response("User bien supprimé");
    }

    /**
     * @Route("/update/{id}", name="users_update")
     */
    public function update(User $user, EntityManagerInterface $em)
    {
        $user->setName('Gégé');

        // doctrine balance le commit de la transaction (toutes les requêtes en attente)
        $em->flush();

        return new Response("User bien modifié");
    }

    /**
     * @Route("/{id}", name="users_show")
     */
    public function show($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        $userToto = $em->getRepository(User::class)->findOneBy(['name' => 'toto']);
        $userBeginWithT = $em->getRepository(User::class)->findByNameBeginWith('t');

        if (!$user) {
            throw new NotFoundHttpException();
        }

        return $this->render('user/show.html.twig', [
            'user' => $user,
            'userToto' => $userToto
        ]);
    }

    /**
     * @Route("/param/{id}", name="users_show_param_converter", )
     */
    public function showParam(User $user)
    {
        $userToto['id'] = null;
        return $this->render('user/show.html.twig', [
            'user' => $user,
            'userToto' => $userToto
        ]);
    }

}
