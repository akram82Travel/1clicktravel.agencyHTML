<?php

namespace App\Controller;

use App\Entity\ChercherCircuits;
use App\Form\ChercherCroisieresType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ChercherCircuitsRepository;
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
    public function indexD(Request $request ,ManagerRegistry $doctrine  ,EntityManagerInterface $em): Response
    {  
        //$ChercherCircuits = new ChercherCircuits();
        //  $entityManager = $doctrine->getManager();
      //  $repository = $em->getRepository ( ChercherCircuits :: class) ;

      //  $repository = $doctrine->getRepository ( ChercherCircuits :: class) ;
       // $ChercherCircuits = $repository->findBy (["discription"=>'']) ;
       //   return $this->render( 'ChercherCircuits/index.html.twig',['ChercherCircuits'=> $ChercherCircuits]);

         $ChercherCircuits= $this->getDoctrine()->getrepository( ChercherCircuits :: class)->findAll();

         // $oneMeal= $this->getDoctrine()->getrepository(Menu::class)->findOneByMenu($value->idMeal);


      
          
            return $this->renderform('circuits/index.html.twig', [
              'controller_name' => 'CircuitsController',
                
            ]);
                
        }    
  
}


    




   

