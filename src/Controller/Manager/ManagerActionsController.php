<?php


namespace App\Controller\Manager;

use App\Entity\Books;
use App\Entity\CategoriesAndBooks;
use App\Entity\Category;
use App\Form\BooksType;
use App\Form\CategoryType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ManagerActionsController extends ManagerBaseController
{
    /**
     * @Route ("/manager/books", name="manager_books")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function createBooks(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $books = new Books();
        $categoryAndBooks = new CategoriesAndBooks();
        $form = $this->createForm(BooksType::class, $books);
        $form->handleRequest($request);

        if (($form->isSubmitted()) && ($form->isValid())) {


            $em->persist($books);
            $em->flush();
            $categoryAndBooks->setBookId($books);
            $categoryAndBooks->setCategoryId($form->get('category')->getData());
            $em->persist($categoryAndBooks);
            $em->flush();
            return $this->redirectToRoute('manager_home');
        }

        $forRender = parent::renderDefualt();
        $forRender['title'] = 'Форма добавления книги';
        $forRender['form'] = $form->createView();
        return $this->render('manager/form.html.twig', $forRender);
    }

    /**
     * @Route ("/manager/category", name="manager_category")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function createCategory(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if(($form->isSubmitted()) && ($form->isValid()))
        {
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute('manager_home');
        }

        $forRender = parent::renderDefualt();
        $forRender['title'] = 'Форма создания категории';
        $forRender['form'] = $form->createView();
        return $this->render('manager/form.html.twig', $forRender);
    }
}