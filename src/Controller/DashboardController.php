<?php



namespace App\Controller;





use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends AbstractController
{

    public function index() : response
    {
        return $this->render('dashboard.html.twig');
    }


}