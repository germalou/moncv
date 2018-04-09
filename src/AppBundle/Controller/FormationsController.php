<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\FormationsType;
use AppBundle\Entity\Formations;

/**
 * @Route("/formations")
 */
 class FormationsController extends Controller {
 /**
 * @Route("/create", name="create_formations")
 * @Template()
 */
 public function createAction(){
     $formations = new Formations ();
     $form = $this->createForm(FormationsType::class, $formations);
     
     return array (
         'entity'=> $formations,
         'form'=> $form->CreateView(),
         );
 }
 
 /**
 * @Route("/create_valid", name="validate_create_formations")
 * @Method("POST")
 */

 public function validateLoisirsAction(Request $request) {
     $formations = new formations();
     $form = $this->createForm(FormationsType::class, $formations);
     $form->handleRequest($request);
     
     if ($form->isSubmitted() && $form->isValid()) {
         $eManager = $this->getDoctrine()->getManager();
         $eManager->persist($formations);
         $eManager->flush();
         
         return $this->redirectToRoute('homepage');
     }
         
         
         return $this->redirectToRoute('create_formations', array(
             'entity'=>$formations,
             'form'=>$form->createView(),
             ));
     }
     
     /**
 * @Route("/edit/{id}", name="edit_formations")
 * @Template()
 */
 public function editAction($id){
     $eManager = $this->getDoctrine()->getManager();
     $formations = $eManager->getRepository("AppBundle:Formations")->FindOneBy(["id"=>$id]);
     $form = $this->createForm(FormationsType::class, $formations);
     
     return array (
         'entity'=> $formations,
         'form'=> $form->CreateView(),
         );
 }
 
 /**
 * @Route("/edit_valid/{id}", name="validate_edit_formations")
 * @Method("POST")
 */

 public function validateEditFormationsAction(Request $request, $id) {
         $eManager = $this->getDoctrine()->getManager();
  
     $formations = $eManager->getRepository("AppBundle:Formations")->FindOneBy(["id"=>$id]);
     $form = $this->createForm(FormationsType::class, $formations);
     $form->handleRequest($request);
     
     if ($form->isSubmitted() && $form->isValid()) {
         $eManager->persist($formations);
         $eManager->flush();
         
         return $this->redirectToRoute('homepage');
     }
         
         
         return $this->redirectToRoute('create_formations', array(
             'entity'=>$formations,
             'form'=>$form->createView(),
             ));
     }
 
  
   /**
 * @Route("/delete/{id}", name="delete_formations")
 */
  public function deleteFormationsAction($id) {
       $eManager = $this->getDoctrine()->getManager();
       $formations = $eManager->getRepository("AppBundle:Formations")->FindOneBy(["id"=>$id]);
       $eManager->remove($formations);
       $eManager->flush();
         
         return $this->redirectToRoute('homepage');
     }
     
  
  
  
  
  
  
 }
 