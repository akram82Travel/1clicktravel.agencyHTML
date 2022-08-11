<?php

namespace App\Controller;
use App\Form\NewsletterType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use \Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Repository\NewsletterRepository;

use App\Entity\Newsletter;

class NewsletterController extends AbstractController
{
    /**
     * @Route("/newsletter", name="app_newsletter")
     */
    public function index(Request $request ,ManagerRegistry $doctrine ,ValidatorInterface $validator): Response
    {
        $newsletter = new Newsletter();
        $entityManager = $doctrine->getManager();
       
 
         //return new Response('Saved new newsletter with id '.$newsletter->getId());
          // ...

        $errors = $validator->validate($newsletter);
       

        $form=$this->createForm(NewsletterType::class, $newsletter);

        $form->handleRequest($request); 
        

        
        if ($form->isSubmitted()&& $form->isValid()){

          /*  //$newsletter->setNom(strval ($request->request->get('nom')));
            $newsletter->setEmail(strval ($request->request->get('email')));
            $newsletter->setSujet(strval ($request->request->get('sujet')));
            $newsletter->setMessage(strval ($request->request->get('message')));*/
             // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($newsletter);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
    
            $data=$form->getData(); 
            //dd ($form->getData ());

            //$email=$data['email'];
            return $this->render('newsletter/success.html.twig', [
               // 'email' => $email,
   
            ]);
            //dd ($form->getData ());



        }else{

            return $this->renderForm('newsletter/index.html.twig', [
                    

                

                    'form'=>$form
            ]);
          /*  if (count($errors) > 0) {
                return new Response((string) $errors, 400);
            }*/
    
            // ...

        }
         
      
    }

}
