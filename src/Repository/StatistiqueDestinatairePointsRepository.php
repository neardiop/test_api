<?php

namespace App\Repository;

use App\Entity\StatistiqueDestinatairePoints;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StatistiqueDestinatairePoints|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatistiqueDestinatairePoints|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatistiqueDestinatairePoints[]    findAll()
 * @method StatistiqueDestinatairePoints[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatistiqueDestinatairePointsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatistiqueDestinatairePoints::class);
    }

    // /**
    //  * @return StatistiqueDestinatairePoints[] Returns an array of StatistiqueDestinatairePoints objects
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
    public function findOneBySomeField($value): ?StatistiqueDestinatairePoints
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
