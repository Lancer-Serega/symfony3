<?php

namespace Lancer\BlogBundle\Controller;

use Lancer\BlogBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        /** @var User $user */
        $user = $this->getUser();

        if ($user) {
            $roles = $user->getRoles();

            return $this->render('BlogBundle:Default:index.html.twig', [
                'roles' => $roles,
                'role' => $roles[0],
            ]);
        }

        return $this->render('BlogBundle:Default:index.html.twig');
    }
}
