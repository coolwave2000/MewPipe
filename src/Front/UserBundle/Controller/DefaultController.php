<?php

namespace Front\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FrontUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
