<?php








namespace App\Controller\Admin;

use App\Entity\Books;
use App\Entity\Category;
use App\Entity\User;
use App\Form\BooksType;
use App\Form\CategoryType;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminUserController extends AdminBaseController
{
    /**
     * @Route ("/admin/user", name="admin_user")
     * @return Response
     */
    public function index()
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        $forRender = parent::renderDefualt();
        $forRender['title'] = 'Пользователи';
        $forRender['users'] = $users;
        return $this->render('admin/user/index.html.twig', $forRender);
    }

    /**
     * @Route ("/admin/user/create", name="admin_user_create")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return RedirectResponse|Response
     */



    public function create(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);

        if(($form->isSubmitted()) && ($form->isValid()))
        {
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            $user->setRoles(["ROLE_MANAGER"]);
            $em->persist($user);
            $em->flush();
            $form->remove();
            return $this->redirectToRoute('admin_user');
        }

        $forRender = parent::renderDefualt();
        $forRender['title'] = 'Форма создания пользователя';
        $forRender['form'] = $form->createView();
        return $this->render('admin/user/form.html.twig', $forRender);

    }

    /**
     * @Route ("/admin/user/books", name="admin_user_books")
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

            return $this->redirectToRoute('admin_user');
        }

        $forRender = parent::renderDefualt();
        $forRender['title'] = 'Форма добавления книги';
        $forRender['form'] = $form->createView();
        return $this->render('admin/user/form.html.twig', $forRender);
    }

    /**
     * @Route ("/admin/user/category", name="admin_user_category")
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
            return $this->redirectToRoute('admin_user');
        }

        $forRender = parent::renderDefualt();
        $forRender['title'] = 'Форма создания категории';
        $forRender['form'] = $form->createView();
        return $this->render('admin/user/form.html.twig', $forRender);
    }
}