<?php

namespace App\Repository;

use App\Entity\NumeroTournee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NumeroTournee|null find($id, $lockMode = null, $lockVersion = null)
 * @method NumeroTournee|null findOneBy(array $criteria, array $orderBy = null)
 * @method NumeroTournee[]    findAll()
 * @method NumeroTournee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NumeroTourneeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NumeroTournee::class);
    }

    // /**
    //  * @return NumeroTournee[] Returns an array of NumeroTournee objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NumeroTournee
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
