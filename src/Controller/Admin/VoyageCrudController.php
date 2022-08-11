<?php

namespace App\Controller\Admin;

use App\Entity\Voyage;

use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class VoyageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Voyage::class;
    }
    public function configureFields(string $pageName): iterable
    {
            return [
                IdField::new('id')->onlyOnIndex(),
                TextField::new('Destination'),
                DateTimeField::new('Date'),   
                IntegerField::new('nb_jours'),   
                IntegerField::new('nb_nuits'),   
                IntegerField::new('Prix'),   
                //ArrayField::new('description'),
                ImageField::new('photo')->setUploadedFileNamePattern('[slug]-[timestamp].png')->setBasePath('img')->setUploadDir('public/img'),
            ];
    }
}
