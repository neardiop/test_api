<?php

namespace App\Repository;

use App\Entity\ClientsAdresses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClientsAdresses|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientsAdresses|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientsAdresses[]    findAll()
 * @method ClientsAdresses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientsAdressesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientsAdresses::class);
    }

    // /**
    //  * @return ClientsAdresses[] Returns an array of ClientsAdresses objects
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
    public function findOneBySomeField($value): ?ClientsAdresses
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
