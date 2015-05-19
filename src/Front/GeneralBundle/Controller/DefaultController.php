<?php

namespace Front\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontGeneralBundle:Default:index.html.twig');
    }

    public function mesVideosAction()
    {
        return $this->render('FrontGeneralBundle:Default:mesVideos.html.twig');
    }

    public function uploadAction()
    {
        return $this->render('FrontGeneralBundle:Default:upload.html.twig');
    }
}
