<?php

namespace App\Controller\Admin;

use App\Entity\ContactAgence;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ContactAgenceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ContactAgence::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('libelle'),
            IntegerField::new('id_type_contact'),
            IntegerField::new('id_filiale'),   
        ];
    }
    
}
