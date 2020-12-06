<?php


namespace App\Controller\Main;


use App\Entity\Books;
use App\Entity\CategoriesAndBooks;
use App\Entity\Category;
use http\Env\Request;
use Knp\Component\Pager\Paginator;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HomeController extends BaseController
{
    /**
     * @Route("/", name="home")
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function index(\Symfony\Component\HttpFoundation\Request $request, PaginatorInterface $paginator): Response
    {

        $books = $this->getDoctrine()->getRepository(Books::class)->findAll();
        $category = $this->getDoctrine()->getRepository(Category::class)->findAll();
        // Retrieve the entity manager of Doctrine
        $em = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Appointments entity
        $appointmentsRepository = $em->getRepository(Books::class);

        // Find all the data on the Appointments table, filter your query as you need
        $allAppointmentsQuery = $appointmentsRepository->createQueryBuilder('p')
            ->getQuery();

        // Paginate the results of the query
        $appointments = $paginator->paginate(
        // Doctrine Query, not results
            $allAppointmentsQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            2

        );

        $appointmentsFive = $paginator->paginate(
        // Doctrine Query, not results
            $allAppointmentsQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            5
        );

        $appointments12 = $paginator->paginate(
        // Doctrine Query, not results
            $allAppointmentsQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            10

        );

        $categoryAndBooks = $this->getDoctrine()->getRepository(CategoriesAndBooks::class)->findAll();
        $forRender = parent:: renderDefualt();
        $forRender['books'] = $books;
        $forRender['categoryAndBooks'] = $categoryAndBooks;
        $forRender['categories'] = $category;
        $forRender['check'] = 3;
        $forRender['appointments'] = $appointments;
        $forRender['appointmentsFive'] = $appointmentsFive;
        $forRender['appointmentsTwelf'] = $appointments12;
        return $this->render( 'main/index.html.twig',$forRender);
    }

}