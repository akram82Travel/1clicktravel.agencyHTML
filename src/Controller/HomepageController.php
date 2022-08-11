<?php

namespace App\Controller;

use App\Entity\Newsletter;
use App\Form\NewsletterType;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


use \Doctrine\ORM\EntityManagerInterface;

use App\Repository\NewsletterRepository;

class HomepageController extends AbstractController
{
    /**
     * @Route("/homepage", name="app_homepage")
     */
    
   
    public function index(Request $request ,ManagerRegistry $doctrine ,ValidatorInterface $validator): Response
    {
        $newsletter = new Newsletter();
        $entityManager = $doctrine->getManager();
       
 
         //return new Response('Saved new newsletter with id '.$newsletter->getId());
          // ...

        $errors = $validator->validate($newsletter);
       

        $formulaire=$this->createform(NewsletterType::class, $newsletter);

        $formulaire->handleRequest($request); 
        

        
        if ($formulaire->isSubmitted()&& $formulaire->isValid()){

          /*  //$newsletter->setNom(strval ($request->request->get('nom')));
            $newsletter->setEmail(strval ($request->request->get('email')));
            $newsletter->setSujet(strval ($request->request->get('sujet')));
            $newsletter->setMessage(strval ($request->request->get('message')));*/
             // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($newsletter);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
    
            $data=$formulaire->getData(); 
            //dd ($formulaire->getData ());

            //$email=$data['email'];
            return $this->render('homepage/success.html.twig', [
               // 'email' => $email,
   
            ]);
            //dd ($formulaire->getData ());



        }else{

            return $this->renderform('homepage/index.html.twig', [
                'controller_name' => 'HomepageController',

                

                    'formulaire'=>$formulaire
            ]);
          
          /*  if (count($errors) > 0) {
                return new Response((string) $errors, 400);
            }*/
    
            // ...

        }
         
      
    }
}
