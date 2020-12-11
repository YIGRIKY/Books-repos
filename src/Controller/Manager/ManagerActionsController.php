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
        $form = $this->createForm(BooksType::class, $books);
        $form->handleRequest($request);

        if (($form->isSubmitted()) && ($form->isValid())) {


            $em->persist($books);
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

    /**
     * @Route ("/manager/books/update/{id}", name="manager_user_update")
     * @param int $id
     * @param Request $request
     *@return RedirectResponse|Response
     */
    public function updateBooks(int $id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $books = $this->getDoctrine()->getRepository(Books::class)->find($id);
        //$categories = $this->getDoctrine()->getRepository(Category::class)->findBy(array('books' => $books));
        $form = $this->createForm(BooksType::class,$books);
        $form->handleRequest($request);
        if(($form->isSubmitted()) && ($form->isValid()))
        {
            if($form->get('save')->isClicked())
            {
                $em->flush();

            }
            if($form->get('delete')->isClicked())
            {
                $em->remove($books);
                //$em->remove($categories);
            }
            $em->flush();
            return $this->redirectToRoute('manager_home');
        }

        $forRender = parent::renderDefualt();
        $forRender['title'] = 'Форма update категории';
        $forRender['form'] = $form->createView();

        return $this->render('manager/form.html.twig', $forRender);
    }

}