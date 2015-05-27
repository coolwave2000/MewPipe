<?php

namespace Front\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Front\UserBundle\Entity\Document;

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
        $document = new Document();
        $form = $this->createFormBuilder($document)
            ->add('name')
            ->add('file')
            ->getForm();

        if ($this->getRequest()->isMethod('POST')) {
            $form->handleRequest($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $em->persist($document);
                $em->flush();

                return $this->render('FrontGeneralBundle:Default:upload.html.twig');
            }
        }

        return $this->render('FrontGeneralBundle:Default:upload.html.twig', array('form' => $form->createView()));
   }


}
