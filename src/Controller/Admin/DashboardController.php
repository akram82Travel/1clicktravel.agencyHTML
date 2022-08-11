<?php

namespace App\Controller\Admin;
use App\Entity\User;
use App\Entity\Contact;
use App\Entity\Product;
use App\Entity\Filiales;
use App\Entity\Conference;
use App\Entity\Newsletter;
use App\Entity\ContactAgence;
use App\Entity\TypeContactFiliales;
use App\Entity\Voyage;


use App\Controller\Admin\UserCrudController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;


class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
       // $routeBuilder = $this->container->get(AdminUrlGenerator::class);
       // $url = $routeBuilder->setController(UserCrudController::class)->generateUrl();
         //return $this->redirect($url);
         return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Stage Symfony');
    }

    public function configureMenuItems(): iterable
    {
       // yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        yield MenuItem::linktoRoute('Back to the website', 'fas fa-home', 'homepage');
        yield MenuItem::linkToCrud('User', 'fas fa-map-marker-alt', User::class);
        yield MenuItem::linkToCrud('Contact', 'fas fa-map-marker-alt', Contact::class);
        yield MenuItem::linkToCrud('Newsletter', 'fas fa-map-marker-alt', Newsletter::class);
        yield MenuItem::linkToCrud('Filiales', 'fas fa-map-marker-alt', Filiales::class);
        yield MenuItem::linkToCrud('TypeContactFiliales', 'fas fa-map-marker-alt', TypeContactFiliales::class);
        yield MenuItem::linkToCrud('Product', 'fas fa-map-marker-alt', Product::class);
        yield MenuItem::linkToCrud('ContactAgence', 'fas fa-map-marker-alt', ContactAgence::class);
        yield MenuItem::linkToCrud('Voyage', 'fas fa-map-marker-alt', Voyage::class);



        
    }
}
