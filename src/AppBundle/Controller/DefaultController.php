<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Formations;

use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $forms = $this->getDoctrine()->getRepository('AppBundle:Formations')->findAll();
        $experiences = $this->getDoctrine()->getRepository('AppBundle:Experiences')->findAll();
        $loisirs = $this->getDoctrine()->getRepository('AppBundle:Loisirs')->findAll();

        return array('formations' => $forms, 'loisirs' => $loisirs);
    }
    
    /**
     * @Route("/insert", name="insert")
     * @Template()
     */
    public function insertAction(Request $request)
    {
        $form = new Formations();
        $form->setName("Ma formation");
        $form->setlieu("My lieu");
        $form->setcaracteristiques("Ma crtac");
        $form->setDateDebut(new \DateTime());
        $form->setDateFin(new \DateTime());
        
        $eManager = $this->getDoctrine()->getManager();
        
        $eManager->persist($form);
        $eManager->flush();
        
        return array();
    }
}
