<?php


namespace App\Controller\Main;


use Symfony\Component\Routing\Annotation\Route;
class HomeController extends BaseController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $forRender = parent:: renderDefualt();
        return $this->render( 'main/index.html.twig',$forRender);
    }

    /**
     * @Route("/", name="home")
     */
    public function regul()
    {
        $forRender = parent:: renderDefualt();
        return $this->render( 'main/index.html.twig',$forRender);
    }
}