<?php

namespace App\Controller;

use App\Entity\ChercherCircuits;
use App\Form\ChercherCroisieresType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VoyagesController extends AbstractController
{
    /**
     * @Route("/voyages", name="app_voyages")
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
      
              return $this->render('voyages/success.html.twig', [
             
                  
              ]);
             
  
  
          }else{
            return $this->renderform('voyages/index.html.twig', [
                'controller_name' => 'VoyagesController',
                'formulaire'=>$form
            ]);
                
    
  
          }

       
    }


   
}
