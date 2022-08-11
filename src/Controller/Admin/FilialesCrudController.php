<?php
namespace App\Controller\Admin;
use App\Entity\Filiales;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FilialesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Filiales::class;
    }
   public function configureFields(string $pageName): iterable
    {
           return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('nom'),
            IntegerField::new('price'),
            TextEditorField::new('description')->setNumOfRows(30),
            ImageField::new('image')->setUploadedFileNamePattern('[slug]-[timestamp].png')->setBasePath('img')->setUploadDir('public/img'),
        ];
}
}
