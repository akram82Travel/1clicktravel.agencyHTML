<?php

namespace App\Controller;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;



use App\Entity\Contact;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(Request $request ,ManagerRegistry $doctrine ): Response
    {   
        $contact = new Contact();
        $entityManager = $doctrine->getManager();
       
 
         //return new Response('Saved new contact with id '.$contact->getId());
          // ...

       // $errors = $validator->validate($contact);
       

        $form=$this->createForm(ContactType::class, $contact);

        $form->handleRequest($request); 
        

        
        if ($form->isSubmitted()&& $form->isValid()){
          /*  //$contact->setNom(strval ($request->request->get('nom')));
            $contact->setEmail(strval ($request->request->get('email')));
            $contact->setSujet(strval ($request->request->get('sujet')));
            $contact->setMessage(strval ($request->request->get('message')));*/
             // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($contact);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
    


            $data=$form->getData();
            //dd ($form->getData ());

            //$email=$data['email'];
            return $this->render('contact/success.html.twig', [
               // 'email' => $email,
                
            ]);
            //dd ($form->getData ());


        }else{
            return $this->renderForm('contact/index.html.twig', [
                'controller_name' => 'ContactController',
                'formulaire'=>$form
            ]);
          /*  if (count($errors) > 0) {
                return new Response((string) $errors, 400);
            }*/
    
            // ...




        }
         
      
    }

}
