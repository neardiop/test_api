<?php

namespace App\Repository;

use App\Entity\StatistiqueDestinataire;
use App\Serializer\StatistiqueDestinatairesNormalizer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * @method StatistiqueDestinataire|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatistiqueDestinataire|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatistiqueDestinataire[]    findAll()
 * @method StatistiqueDestinataire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatistiqueDestinataireRepository extends ServiceEntityRepository
{

    private $statistiqueDestinatairesNormalizer;

    public function __construct(ManagerRegistry $registry, StatistiqueDestinatairesNormalizer $statistiqueDestinatairesNormalizer)
    {
        parent::__construct($registry, StatistiqueDestinataire::class);
        $this->statistiqueDestinatairesNormalizer = $statistiqueDestinatairesNormalizer;
    }

    public function getAll(RequestStack $requestStack)
    {
        $entityManager = $this->getEntityManager();
        $sqlConditions = "";

        $request = $requestStack->getCurrentRequest();
        // //echo $request;

        $idclient = $request->query->get('idclient');
        $limit = $request->query->get('limit');

        $conditions = '';
        if ($limit == 0) {
            $sqlConditions .= " AND YEAR(date_course2) = YEAR(DATE_SUB(CURDATE(),INTERVAL 1 DAY)) ";
            $conditions = " YEAR(date_livraison) = YEAR(DATE_SUB(CURDATE(),INTERVAL 1 DAY)) ";
        }
        if ($limit == 30) {
            $sqlConditions .= " AND MONTH(date_course2) =  MONTH(DATE_SUB(CURDATE(),INTERVAL 1 DAY))  AND date_course2 < curdate()";
            $conditions = " MONTH(date_livraison) =  MONTH(DATE_SUB(CURDATE(),INTERVAL 1 DAY)) ";
        }
        if ($limit == 1) {
            $sqlConditions = " AND date_course2 =  (SELECT MAX(date_course2) FROM cogepart.dispatch   WHERE d.idclient = " . $idclient . ") ";
        }
        if ($limit == 7) {
            $sqlConditions = " AND WEEK(date_course2) =  WEEK(DATE_SUB(CURDATE(),INTERVAL 1 DAY)) AND date_course2 < curdate()";
        }
        if ($limit == 60) {
            $sqlConditions .= " AND MONTH(date_course2) =  MONTH(DATE_SUB(DATE_SUB(CURDATE(),INTERVAL 1 DAY),INTERVAL 1 MONTH)) AND date_course2 < curdate()";
            $conditions = " MONTH(date_livraison) =  MONTH(DATE_SUB(DATE_SUB(CURDATE(),INTERVAL 1 DAY),INTERVAL 1 MONTH)) ";
        }

        $rsm = new ResultSetMapping();
        $rsm1 = new ResultSetMapping();

        $rsm1->addScalarResult('date_course2', 'date_course2');




        $query1 = $entityManager->createNativeQuery("SELECT distinct date_course2 as date_course2 from cogepart.dispatch d where d.idclient = $idclient " . $sqlConditions . " ORDER BY date_course2 DESC", $rsm1);


        // $num_tournee = $request->query->get('num_tournee');

        $rsm->addScalarResult('id', 'id');
        $rsm->addScalarResult('clients_adresses_id', 'clients_adresses_id');
        $rsm->addScalarResult('nombre_missions_retardees_enlevement', 'nombre_missions_retardees_enlevement');
        $rsm->addScalarResult('nombre_missions_prevues', 'nombre_missions_prevues');
        $rsm->addScalarResult('nombre_colis_prevus', 'nombre_colis_prevus');
        $rsm->addScalarResult('nombre_missions_enlevees', 'nombre_missions_enlevees');
        $rsm->addScalarResult('nombre_colis_enleves', 'nombre_colis_enleves');
        $rsm->addScalarResult('nombre_missions_enlevees_scan', 'nombre_missions_enlevees_scan');
        $rsm->addScalarResult('nombre_colis_enleves_scan', 'nombre_colis_enleves_scan');
        $rsm->addScalarResult('nombre_missions_livrees', 'nombre_missions_livrees');
        $rsm->addScalarResult('nombre_colis_livres', 'nombre_colis_livres');
        $rsm->addScalarResult('nombre_missions_livrees_scan', 'nombre_missions_livrees_scan');
        $rsm->addScalarResult('nombre_colis_livres_scan', 'nombre_colis_livres_scan');
        $rsm->addScalarResult('nombre_colis_retardes_enlevement', 'nombre_colis_retardes_enlevement');
        $rsm->addScalarResult('nombre_missions_retardees_livraison', 'nombre_missions_retardees_enlevement');
        $rsm->addScalarResult('nombre_colis_retardes_livraison', 'nombre_colis_retardes_livraison');
        $rsm->addScalarResult('date_livraison', 'date_livraison');
        $rsm->addScalarResult('resultat', 'resultat');
        $rsm->addScalarResult('nom', 'nom');

        $query = $entityManager->createNativeQuery("SELECT 
        clients_adresses_id as clients_adresses_id,
        nombre_missions_retardees_enlevement AS nombre_missions_retardees_enlevement,
        nombre_missions_prevues AS nombre_missions_prevues,
        nombre_colis_prevus AS nombre_colis_prevus,
        nombre_missions_enlevees AS nombre_missions_enlevees,
        nombre_colis_enleves AS nombre_colis_enleves,
        nombre_missions_enlevees_scan AS nombre_missions_enlevees_scan,
        nombre_colis_enleves_scan AS nombre_colis_enleves_scan,
        nombre_missions_livrees AS nombre_missions_livrees,
        nombre_colis_livres AS nombre_colis_livres,
        nombre_missions_livrees_scan AS nombre_missions_livrees_scan,
        nombre_colis_livres_scan AS nombre_colis_livres_scan,
        nombre_colis_retardes_enlevement AS nombre_colis_retardes_enlevement,
        nombre_missions_retardees_livraison AS nombre_missions_retardees_livraison,
        nombre_colis_retardes_livraison AS nombre_colis_retardes_livraison,
        date_livraison AS date_livraison,
        resultat AS resultat,
        nom AS nom
    FROM
        statistiques.statistique_destinataire s0_
            INNER JOIN
        statistiques.clients c1_ ON s0_.clients_id = c1_.id
            INNER JOIN
        cogepart.clients_adresses c2_ ON s0_.clients_adresses_id = c2_.id
    WHERE
        c1_.client_id = $idclient", $rsm);

        $dataDate = $query1->getResult();
        $data = $query->getResult();

        for ($i = 0; $i < count($dataDate); $i++) {
            $formattedData[$i]['date'] = $dataDate[$i]['date_course2'];
            $date = $formattedData[$i]['date'];
            $k = 0;
            for ($j = 0; $j < count($data); $j++) {
                if ($data[$j]['date_livraison'] == $formattedData[$i]['date']) {
                    $formattedData[$i]['details'][$k] = array();
                    $formattedData[$i]['details'][$k]['dst'] = $data[$j]['nom'];
                    $dst = $formattedData[$i]['details'][$k]['dst'];
                    $formattedData[$i]['details'][$k]['nb_enl'] = $data[$j]['nombre_missions_enlevees'];
                    $formattedData[$i]['details'][$k]['nb_liv'] = $data[$j]['nombre_missions_livrees'];
                    $formattedData[$i]['details'][$k]['nb_miss'] = $data[$j]['nombre_missions_prevues'];
                    if ($data[$j]['nombre_colis_prevus'] == 0) {
                        $formattedData[$i]['details'][$k]['taux'] = '0%';
                    } else {
                        $taux = round((($data[$j]['nombre_colis_enleves_scan'] / $data[$j]['nombre_colis_prevus']) * 100), 2);
                        if ($taux > 100) {
                            $taux = 100;
                        }
                        $formattedData[$i]['details'][$k]['taux'] = $taux . "%";
                    }

                    if ($formattedData[$i]['details'][$k]['nb_liv'] > 0) {
                        $formattedData[$i]['details'][$k]['heures'] = $data[$j]['resultat'];
                    } else {
                        $formattedData[$i]['details'][$k]['heures'] = "Livraisons encore en attente.";
                    }

                    if ($data[$j]['nombre_colis_retardes_livraison'] > 0 || $data[$j]['nombre_colis_retardes_enlevement'] > 0) {
                        $formattedData[$i]['details'][$k]['retards'] = 'Afficher';
                        if ($data[$j]['nombre_colis_retardes_enlevement'] > 0) {
                            $formattedData[$i]['details'][$k]['couleur'] = 'retard-class';
                        }
                        if ($data[$j]['nombre_colis_retardes_livraison'] > 0) {
                            $formattedData[$i]['details'][$k]['couleur'] = 'retard-liv-class';
                        }
                    } else {
                        $formattedData[$i]['details'][$k]['retards'] = '';
                        $formattedData[$i]['details'][$k]['couleur'] = 'normal-class';
                    }

                    $k++;
                }
            }
        }

        //return $this->statistiqueDestinatairesNormalizer->normalize($query->getResult());

        // $data_ =  $query->getResult();
        // $data_all = array();

        // for ($i=0; $i < count($data_); $i++) { 
        //     $element = $data_[$i];
        //     if (is_array($element)) {
        //         $data = array("date"=>'',"dst"=>'','nb_enl'=>'','nb_liv'=>'','nb_miss'=>'');
        //         $data['id_dst'] = $element['clients_adresses_id'];
        //         $data['date'] = $element['date_livraison'];
        //         $data['dst'] = $element['nom'];
        //         $data['nb_enl'] = $element['nombre_missions_enlevees'];
        //         $data['nb_liv'] = $element['nombre_missions_livrees'];
        //         $data['nb_miss'] = $element['nombre_missions_prevues'];
        //         if ($element['nombre_colis_prevus'] == 0) {
        //             $data['taux'] = '0%';
        //         } else {
        //             $taux = round((($element['nombre_colis_enleves_scan'] / $element['nombre_colis_prevus']) * 100), 2);
        //             if ($taux > 100) {
        //                 $taux = 100;
        //             }
        //             $data['taux'] = $taux . "%";
        //         }
        //         if ($element['nombre_missions_livrees'] > 0) {
        //             $data['heures'] = $element['resultat'];
        //         } else {
        //             $data['heures'] = "Livraisons encore en attente";
        //         }
        //         if ($element['nombre_colis_retardes_livraison'] > 0 || $element['nombre_colis_retardes_enlevement'] > 0) {
        //             $data['retards'] = 'Afficher';
        //             if ($element['nombre_colis_retardes_enlevement'] > 0) {
        //                 $data['couleur'] = 'retard-class';
        //             }
        //             if ($element['nombre_colis_retardes_livraison'] > 0) {
        //                 $data['couleur'] = 'retard-liv-class';
        //             }
        //         } else {
        //             $data['retards'] = '';
        //             $data['couleur'] = 'normal-class';
        //         }
        //     }
        //     array_push($data_all,$data);
        // }



        return $formattedData;
    }
}
