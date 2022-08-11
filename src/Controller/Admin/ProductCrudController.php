<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use App\Entity\TypeContactFiliales;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }  
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Libelle'),
            AssociationField::new('typeContact'),
        ];
    }
    
}
