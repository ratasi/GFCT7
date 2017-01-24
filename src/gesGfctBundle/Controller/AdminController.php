<?php

namespace gesGfctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use gesGfctBundle\Form\empresaType;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function allAction()
    {
        return $this->render('gesGfctBundle:Default:index.html.twig');

    }

    public function usuariosAction()
    {
        return $this->render('gesGfctBundle:Default:index.html.twig');

    }

   public function loginAction(Request $request)
   {
    $authenticationUtils = $this->get('security.authentication_utils');

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('gesGfctBundle:Default:login.html.twig', array(
       'last_username' => $lastUsername,
       'error'         => $error,
    ));
    }
}
