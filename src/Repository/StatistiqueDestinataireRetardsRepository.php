<?php

namespace App\Repository;

use App\Entity\StatistiqueDestinataireRetards;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StatistiqueDestinataireRetards|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatistiqueDestinataireRetards|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatistiqueDestinataireRetards[]    findAll()
 * @method StatistiqueDestinataireRetards[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatistiqueDestinataireRetardsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatistiqueDestinataireRetards::class);
    }

    // /**
    //  * @return StatistiqueDestinataireRetards[] Returns an array of StatistiqueDestinataireRetards objects
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
    public function findOneBySomeField($value): ?StatistiqueDestinataireRetards
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
