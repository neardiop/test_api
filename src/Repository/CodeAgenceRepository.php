<?php

namespace App\Repository;

use App\Entity\CodeAgence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CodeAgence|null find($id, $lockMode = null, $lockVersion = null)
 * @method CodeAgence|null findOneBy(array $criteria, array $orderBy = null)
 * @method CodeAgence[]    findAll()
 * @method CodeAgence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CodeAgenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CodeAgence::class);
    }

    // /**
    //  * @return CodeAgence[] Returns an array of CodeAgence objects
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
    public function findOneBySomeField($value): ?CodeAgence
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
