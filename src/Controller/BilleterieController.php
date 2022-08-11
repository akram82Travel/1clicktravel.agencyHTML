<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Entity\BilleterieLigne;

use App\Entity\BilleterieDemande;
use App\Form\BilleterieLigneType;
use App\Form\BilleterieDemandeType;



use Doctrine\Persistence\ManagerRegistry;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class BilleterieController extends AbstractController
{
    /**
     * @Route("/billeterie", name="app_billeterie")
     */
    public function index(Request $request ,ManagerRegistry $doctrine): Response
    {
        $billeterD = new BilleterieDemande();
        $billeterL = new BilleterieLigne();

        $entityManager = $doctrine->getManager();
       
         //return new Response('Saved new billeter with id '.$billeter->getId());
          // 

        $form1=$this->createform(BilleterieDemandeType::class, $billeterD );

        $form1->handleRequest($request); 

        $form2=$this->createform(BilleterieLigneType::class, $billeterL );

        $form2->handleRequest($request); 
        
        if ($form1->isSubmitted()&& $form1->isValid() && $form2->isSubmitted()&& $form2->isValid() ){

         
             // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($billeterD);
             // actually executes the queries (i.e. the INSERT query)
             $entityManager->flush();
             
            $entityManager->persist($billeterL);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
    
            $data=$form1->getData(); 
            return $this->render('billeter/success.html.twig', [         
   
            ]);

        }else{

            return $this->renderform('billeterie/index.html.twig', [
                'controller_name' => 'BilleterieController',   

                    'form1'=>$form1,
                    'form2'=>$form2

            ]);
          /*  if (count($errors) > 0) {
                return new Response((string) $errors, 400);
            }*/
    
            // ...

        }
        

   
      
    }

 /**
     * @Route("/adulte/{nbAdulte}", name="nbAdulte")
     */
    public function addAdulteForms(Request $request ,$nbAdult): Response{
        if($request->isXmlHttpRequest()){
            return new JsonResponse([
                'data'=>$this->renderView("billeterie/formAdulte.html.twig",[
                    'nbAdult'=>$nbAdult,
                ]),
            ]);
        }

        return $this->redirectToRoute('app_billeterie');


    }

     /**
     * @Route("/adulte/{nbEnfant}", name="nbEnfant")
     */
    public function addEnfantForms(Request $request ,$nbEnfant): Response{
        if($request->isXmlHttpRequest()){
            return new JsonResponse([
                'data'=>$this->renderView("billeterie/formAdulte.html.twig",[
                    'nbEnfant'=>$nbEnfant,
                ]),
            ]);
        }

        return $this->redirectToRoute('app_billeterie');


    }
     /**
     * @Route("/adulte/{nbBebe}", name="nbBebe")
     */
    public function addBebeForms(Request $request ,$nbBebe): Response{
        if($request->isXmlHttpRequest()){
            return new JsonResponse([
                'data'=>$this->renderView("billeterie/formAdulte.html.twig",[
                    'nbBebe'=>$nbBebe,
                ]),
            ]);
        }

        return $this->redirectToRoute('app_billeterie');


    }

   
}
