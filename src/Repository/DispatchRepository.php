<?php

namespace App\Repository;

use App\Entity\Dispatch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * @method Dispatch|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dispatch|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dispatch[]    findAll()
 * @method Dispatch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DispatchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dispatch::class);
    }

    public function getAll(RequestStack $requestStack)
    {
        $entityManager = $this->getEntityManager();

        $rsm = new ResultSetMapping();

        $request = $requestStack->getCurrentRequest();
        //echo $request;

        $idclient = $request->query->get('idclient');
        $id_adresse_zou = $request->query->get('dst_nom');
        $date_livraison = $request->query->get('date_livraison');
        $num_tournee = $request->query->get('num_tournee');

        $rsm->addScalarResult('id', 'id');
        $rsm->addScalarResult('num_tournee', 'num_tournee');
        $rsm->addScalarResult('date_theo', 'date_theo');
        $rsm->addScalarResult('etape', 'etape');
        $rsm->addScalarResult('date_reel', 'date_reel');

        if(!$num_tournee){
            $query = $entityManager->createNativeQuery("SELECT * from (SELECT id, 'enlevement' as 'etape', concat(date_course, ' ', heure_rdv) as 'date_theo', concat(date_enleve, ' ', heure_enleve) as 'date_reel', num_tournee from cogepart.dispatch where idclient =" . $idclient . " and dst_nom = '" . $id_adresse_zou . "' and date_course2 = '" . $date_livraison . "' and concat(date_enleve, ' ', heure_enleve) < concat(date_course, ' ', heure_rdv) union SELECT id, 'livraison' as 'etape', concat(date_course2, ' ', heure_rdv2) as 'date_theo', concat(date_livre, ' ', heure_livre) as 'date_reel', num_tournee from cogepart.dispatch where idclient =" . $idclient . " and dst_nom = '" . $id_adresse_zou . "' and date_course2 = '" . $date_livraison . "' and concat(date_livre, ' ', heure_livre) < concat(date_course2, ' ', heure_rdv2) )r;", $rsm);
        } else {
            $query = $entityManager->createNativeQuery("SELECT * from (SELECT id, 'enlevement' as 'etape', concat(date_course, ' ', heure_rdv) as 'date_theo', concat(date_enleve, ' ', heure_enleve) as 'date_reel', num_tournee from cogepart.dispatch where idclient =" . $idclient . " and dst_nom = '" . $id_adresse_zou . "' and date_course2 = '" . $date_livraison . "' and concat(date_enleve, ' ', heure_enleve) < concat(date_course, ' ', heure_rdv) and num_tournee='" . $num_tournee . "' union SELECT id, 'livraison' as 'etape', concat(date_course2, ' ', heure_rdv2) as 'date_theo', concat(date_livre, ' ', heure_livre) as 'date_reel', num_tournee from cogepart.dispatch where idclient =" . $idclient . " and dst_nom = '" . $id_adresse_zou . "' and date_course2 = '" . $date_livraison . "' and concat(date_livre, ' ', heure_livre) < concat(date_course2, ' ', heure_rdv2) and num_tournee='" . $num_tournee . "')r;", $rsm);
        }
        return $query->getResult();
    }
}
