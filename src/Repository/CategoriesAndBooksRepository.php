<?php

namespace App\Repository;

use App\Entity\CategoriesAndBooks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategoriesAndBooks|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoriesAndBooks|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoriesAndBooks[]    findAll()
 * @method CategoriesAndBooks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoriesAndBooksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoriesAndBooks::class);
    }

    // /**
    //  * @return CategoriesAndBooks[] Returns an array of CategoriesAndBooks objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategoriesAndBooks
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
