<?php

namespace App\Form;

use App\Entity\BilleterieDemande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\BilleterieLigne;


class BilleterieDemandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ville_depart' )
            ->add('ville_arrivee')
            ->add('classe')
            ->add('compagnie')
            ->add('date_depart')
            ->add('nbAdulte')
            ->add('nbEnfant')
            ->add('nbBebe')


            



            ->add('civilite')
            ->add('prenom_client')
            ->add('nom_client')
            ->add('email')
            ->add('telephone')
            ->add('remarque')
           
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BilleterieDemande::class,
          
        ]);
    }
}
