<?php

namespace App\Controller;

use App\Entity\ChercherCircuits;
use App\Form\ChercherCroisieresType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CircuitsController extends AbstractController
{
    /**
     * @Route("/circuits", name="app_circuits")
     */
    public function index(Request $request ,ManagerRegistry $doctrine): Response
    {   
        $ChercherCircuits = new ChercherCircuits();
        $entityManager = $doctrine->getManager();

        $form=$this->createForm(ChercherCroisieresType::class, $ChercherCircuits);

        $form->handleRequest($request); 

        if ($form->isSubmitted()&& $form->isValid()){
          
              $entityManager->persist($ChercherCircuits);
  
              // actually executes the queries (i.e. the INSERT query)
              $entityManager->flush();
      
              return $this->render('croisiere/success.html.twig', [
             
                  
              ]);
             
  
  
          }else{
            return $this->renderform('circuits/index.html.twig', [
                'controller_name' => 'CircuitsController',
                'formulaire'=>$form
            ]);
                
        
  
  
  
          }






       
    }




   
}
