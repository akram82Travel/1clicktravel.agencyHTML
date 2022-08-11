<?php

namespace App\Controller;
use App\Entity\User;
use App\Form\ProfileType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Security\AppCustomAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="app_profile")
     */
    public function index(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppCustomAuthenticator $authenticator, EntityManagerInterface $entityManager ,ManagerRegistry $doctrine): Response
    {
        $user = $this->getUser();  
        $id_user =  $user->getId(); 
        $profile = $this->getDoctrine()->getrepository(User::class)->find($id_user);
        $form = $this->createForm(ProfileType::class, $profile);
        $form->handleRequest($request);
        $entityManager = $doctrine->getManager();
        if ($form->isSubmitted()){
           $profile->setNom($request->get('profile')['Nom']);
            $entityManager->persist($profile);
            $entityManager->flush();
        } 
        return $this->renderForm('profile/index.html.twig', [
            'formulaire'=>$form
        ]);
    }
}