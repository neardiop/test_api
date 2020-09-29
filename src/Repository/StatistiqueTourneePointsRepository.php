<?php

namespace App\Repository;

use App\Entity\StatistiqueTourneePoints;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StatistiqueTourneePoints|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatistiqueTourneePoints|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatistiqueTourneePoints[]    findAll()
 * @method StatistiqueTourneePoints[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatistiqueTourneePointsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatistiqueTourneePoints::class);
    }

    // /**
    //  * @return StatistiqueTourneePoints[] Returns an array of StatistiqueTourneePoints objects
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
    public function findOneBySomeField($value): ?StatistiqueTourneePoints
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
