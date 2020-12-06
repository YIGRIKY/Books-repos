<?php


namespace App\Controller\Manager;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ManagerHomeController extends  ManagerBaseController
{
    /**
     * @Route("/manager", name="manager_home")
     * @return Response
     */
    public function index(): Response
    {
        $forRender = parent:: renderDefualt();
        return $this->render( 'manager/index.html.twig',$forRender);
    }
}