<?php

namespace App\Repository;

use App\Entity\StatistiqueTourneeRetards;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StatistiqueTourneeRetards|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatistiqueTourneeRetards|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatistiqueTourneeRetards[]    findAll()
 * @method StatistiqueTourneeRetards[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatistiqueTourneeRetardsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatistiqueTourneeRetards::class);
    }

    // /**
    //  * @return StatistiqueTourneeRetards[] Returns an array of StatistiqueTourneeRetards objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StatistiqueTourneeRetards
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
