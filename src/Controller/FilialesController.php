<?php

namespace App\Controller;

use App\Entity\Filiales;

use App\Form\FilialesType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;

class FilialesController extends AbstractController
{
    /**
     * @Route("/filiales", name="app_filiales")
     */
    public function index(Request $request ,ManagerRegistry $doctrine ): Response
    {

        $Filiales = new Filiales();
        $entityManager = $doctrine->getManager();

        $form=$this->createForm(FilialesType::class, $Filiales);

      $form->handleRequest($request); 

        if ($form->isSubmitted()&& $form->isValid()){
          
              $entityManager->persist($Filiales);
  
              // actually executes the queries (i.e. the INSERT query)
              $entityManager->flush();
      
              return $this->render('filiales/success.html.twig', [
                  
              ]);
  
          //}else{
            return $this->renderform('filiales/index.html.twig', [
                'controller_name' => 'FilialesController',
                'formulaire'=>$form
            ]);
                
    
  
          } 
 }
    

       





}

        

