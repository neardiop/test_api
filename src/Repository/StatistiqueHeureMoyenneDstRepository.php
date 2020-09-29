<?php

namespace App\Repository;

use App\Entity\StatistiqueHeureMoyenneDst;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StatistiqueHeureMoyenneDst|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatistiqueHeureMoyenneDst|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatistiqueHeureMoyenneDst[]    findAll()
 * @method StatistiqueHeureMoyenneDst[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatistiqueHeureMoyenneDstRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatistiqueHeureMoyenneDst::class);
    }

    // /**
    //  * @return StatistiqueHeureMoyenneDst[] Returns an array of StatistiqueHeureMoyenneDst objects
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
    public function findOneBySomeField($value): ?StatistiqueHeureMoyenneDst
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
