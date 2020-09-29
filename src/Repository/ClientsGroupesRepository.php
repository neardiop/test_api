<?php

namespace App\Repository;

use App\Entity\ClientsGroupes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClientsGroupes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientsGroupes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientsGroupes[]    findAll()
 * @method ClientsGroupes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientsGroupesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientsGroupes::class);
    }

    // /**
    //  * @return ClientsGroupes[] Returns an array of ClientsGroupes objects
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
    public function findOneBySomeField($value): ?ClientsGroupes
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
