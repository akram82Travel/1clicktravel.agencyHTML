<?php

namespace App\Form;

use App\Entity\ChercherCircuits;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ChercherCroisieresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Destination')
            ->add('Check_In')
            ->add('Check_Out')
           // ->add('Envoyer', SubmitType::class);    


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            //'data_class' => ChercherCircuits::class,
        ]);
    }
}
