<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('Nom',TextType::class,['required' => TRUE,'attr' => ['class' => 'form-control'],])
            ->add('Prenom',TextType::class,['required' => TRUE,'attr' => ['class' => 'form-control'],])
            ->add('Date_de_naissance',DateType::class ,['required' => TRUE,])
            ->add('email',EmailType::class ,['attr' => ['class' => 'form-control'],])
            
            ->add('Genre', ChoiceType::class, [
                'attr' => ['class' => 'form-control'],
                'choices' => [
                    'male' => 'male',
                    'female' => 'female'
                ],
                'placeholder' => 'Choose an option',
                'required' => TRUE,
                ])
            ->add('Pays', CountryType::class,['attr' => ['class' => 'form-control'],])
            //->add('photo', FileType::class, array('label' => 'Photo (png, jpeg)'))
            //
           // ImageField::new('image')->setUploadedFileNamePattern('[slug]-[timestamp].png')->setBasePath('img')->setUploadDir('public/img'),

            ->add('Envoyer', SubmitType:: class,['attr' => ['class' => 'form-control'],])

            

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
