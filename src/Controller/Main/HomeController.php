<?php


namespace App\Controller\Main;


use App\Entity\Books;
use App\Entity\CategoriesAndBooks;
use App\Entity\Category;
use Knp\Component\Pager\Paginator;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class HomeController extends BaseController
{

    /**
     * @Route("/", name="home")
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $books = $this->getDoctrine()->getRepository(Books::class)->findAll();
        $category = $this->getDoctrine()->getRepository(Category::class)->findAll();
        // Retrieve the entity manager of Doctrine
        $em = $this->getDoctrine()->getManager();

        // Get some repository of data, in our case we have an Appointments entity
        $appointmentsRepository = $em->getRepository(Books::class);
        if (isset($_POST['num']))
        {
            switch ($_POST['num'])
            {
                case 2:
                    $appointments = $this->find($request, $paginator, $appointmentsRepository, 2);
                    break;
                case 5:
                    $appointments = $this->find($request, $paginator, $appointmentsRepository, 5);
                    break;
                case 12:
                    $appointments = $this->find($request, $paginator, $appointmentsRepository, 12);
                    break;
            }
        }
        else
        {
            $appointments = $this->find($request, $paginator, $appointmentsRepository, 2);
        }
        if (isset($_POST['categoryName']))
        {
            $appointments = $this->findWithCategory($request, $paginator, $appointmentsRepository, 12);
        }

        $forRender = parent:: renderDefualt();
        $forRender['books'] = $books;
        $forRender['categories'] = $category;
        $forRender['appointments'] = $appointments;

        return $this->render( 'main/index.html.twig',$forRender);
    }

    private function find($request, $paginator, $appointmentsRepository, $num)
    {
        if (isset($_POST['find']))
        {
            $appointments = $this->findWithBook($request, $paginator, $appointmentsRepository, $num);
        }
        else
        {
            $appointments = $this->findWithoutBook($request, $paginator, $appointmentsRepository, $num);
        }
        return $appointments;
    }

    private function findWithoutBook($request, $paginator, $appointmentsRepository, $num)
    {
        $allAppointmentsQuery = $appointmentsRepository->createQueryBuilder('v')->getQuery();
        // Paginate the results of the query
        $appointments = $paginator->paginate(
        // Doctrine Query, not results
            $allAppointmentsQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            $num
        );
        return $appointments;
    }

    private function findWithBook($request, $paginator, $appointmentsRepository, $num)
    {
        $set = $_POST['find'];
        // Find all the data on the Appointments table, filter your query as you need
        $allAppointmentsQuery = $appointmentsRepository->createQueryBuilder('v')
            ->andWhere('lower(v.Title) LIKE lower(:title)')
            ->setParameter('title', '%'.$set.'%')
            ->getQuery();
        ;
        // Paginate the results of the query
        $appointments = $paginator->paginate(
        // Doctrine Query, not results
            $allAppointmentsQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            $num
        );
        return $appointments;
    }

    private function findWithCategory($request, $paginator, $appointmentsRepository, $num)
    {
        $set = $_POST['categoryName'];
        $category = $this->getDoctrine()->getRepository(Category::class)->findBy(array('category_name' => $_POST['categoryName']));
        // Find all the data on the Appointments table, filter your query as you need
        $allAppointmentsQuery = $appointmentsRepository->createQueryBuilder('v')
            ->innerJoin('v.category', 'c', 'WITH', 'c.category_name = :categoryName')
//            ->andWhere('v.category = :categoryName')
            ->setParameter('categoryName', $set)
            ->getQuery();
        ;
        // Paginate the results of the query
        $appointments = $paginator->paginate(
        // Doctrine Query, not results
            $allAppointmentsQuery,
            // Define the page parameter
            $request->query->getInt('page', 1),
            $num
        );
        return $appointments;
    }


    /**
     * @Route ("/book/{id}", name="book_detail")
     * @param int $id
     * @return Response
     */
    public function booksDetail(int $id): Response
    {
        $book = $this->getDoctrine()->getRepository(Books::class)->find($id);
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        $forRender = parent::renderDefualt();
        $forRender['book'] = $book;

        $forRender['categories'] = $categories;
        return $this->render( 'main/book.html.twig', $forRender);
    }

}