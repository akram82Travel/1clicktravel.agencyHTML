<?php

namespace App\Form;

use App\Entity\BilleterieLigne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BilleterieLigneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('type_voyageur')
        ->add('nom')
        ->add('pernom')
        ->add('date_de_naissance')
        ->add('nPassport')

            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BilleterieLigne::class,
        ]);
    }
}
