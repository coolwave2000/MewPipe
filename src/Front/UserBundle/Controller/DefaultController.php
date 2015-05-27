<?php

namespace Front\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FrontUserBundle:Default:index.html.twig', array('name' => $name));
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
