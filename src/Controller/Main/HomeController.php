<?php


namespace App\Controller\Main;


use App\Entity\Books;
use App\Entity\Category;
use Symfony\Component\Routing\Annotation\Route;
class HomeController extends BaseController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $books = $this->getDoctrine()->getRepository(Books::class)->findAll();
        $category = $this->getDoctrine()->getRepository(Category::class)->findAll();
        $forRender = parent:: renderDefualt();
        $forRender['books'] = $books;
        $forRender['categories'] = $category;
        return $this->render( 'main/index.html.twig',$forRender);
    }

}