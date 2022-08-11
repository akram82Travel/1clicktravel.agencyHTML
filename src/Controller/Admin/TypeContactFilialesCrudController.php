<?php

namespace App\Controller\Admin;

use Doctrine\ORM\QueryBuilder;
use App\Entity\TypeContactFiliales;
use App\Entity\ContactAgence;

use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TypeContactFilialesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TypeContactFiliales::class;
    }

    
    public function configureFields(string $pageName): iterable
    {

        return [
           
           
            IdField::new('id')->onlyOnIndex(),
            
            TextField::new('libellet'),
            /*ChoiceField::new('type')->setChoices([
                'contact' => 'contact',
                'reseaux' => 'reseaux',
                
            ]),*/
           /* AssociationField::new('contactAgence')->setQueryBuilder(
                fn (QueryBuilder $queryBuilder) => $queryBuilder->getEntityManager()->getRepository(TypeContactFiliales::class)->findAll()
            ),*/
           
        ];
    }
    
}
