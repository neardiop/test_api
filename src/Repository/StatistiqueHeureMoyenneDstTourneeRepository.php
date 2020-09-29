<?php

namespace App\Repository;

use App\Entity\StatistiqueHeureMoyenneDstTournee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StatistiqueHeureMoyenneDstTournee|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatistiqueHeureMoyenneDstTournee|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatistiqueHeureMoyenneDstTournee[]    findAll()
 * @method StatistiqueHeureMoyenneDstTournee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatistiqueHeureMoyenneDstTourneeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatistiqueHeureMoyenneDstTournee::class);
    }

    // /**
    //  * @return StatistiqueHeureMoyenneDstTournee[] Returns an array of StatistiqueHeureMoyenneDstTournee objects
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
    public function findOneBySomeField($value): ?StatistiqueHeureMoyenneDstTournee
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
