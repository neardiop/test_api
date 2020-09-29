<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\NumericFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ApiResource
 * @ApiFilter(NumericFilter::class, properties={"idclient"})
 * @ApiFilter(DateFilter::class, properties={"date_livraison"})
 * @ApiFilter(SearchFilter::class, properties={"dst_nom"})
 * @ApiFilter(SearchFilter::class, properties={"numTournee"})
 * @ORM\Table(name="cogepart.dispatch")
 * @ORM\Entity
 */
class Dispatch
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agence", type="string", length=5, nullable=true, options={"default"="NULL"})
     */
    private $agence;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_saisie", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateSaisie = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_saisie", type="time", nullable=true, options={"default"="NULL"})
     */
    private $heureSaisie = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_createur", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nomCreateur = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="absents_regulier", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $absentsRegulier = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="code_course", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $codeCourse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_ordre", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $numeroOrdre = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observations", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $observations = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="incident", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $incident = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_warning", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $isWarning = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomclient", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $nomclient = 'NULL';

    /**
     * @var int|null
     * @ORM\ManyToOne(targetEntity="App\Entity\Client")
     * @ORM\JoinColumn(name="client_id",referencedColumnName="idclient")
     * @ORM\Column(name="idclient", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idclient = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $contact = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="telephone", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $telephone = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_dossier", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $refDossier = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="depart", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $depart = 'NULL';

    /**
     * @var string|null
     * ORM\ManyToOne(targetEntity="App\Entity\Destinataire")
     * @ORM\JoinColumn(name="nom",referencedColumnName="destination")
     * @ORM\Column(name="destination", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $destination = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment_depart", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $commentDepart = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment_destination", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $commentDestination = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="numcarte", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $numcarte = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="nb_bons", type="float", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $nbBons = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_enveloppes", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $nbEnveloppes = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="pc1", type="float", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $pc1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="vd_choix", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $vdChoix = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="valeur_assurance", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $valeurAssurance = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_cr", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $isCr = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_cr2", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $isCr2 = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="val_cr", type="float", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $valCr = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_9h", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $is9h = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_sam", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $isSam = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_portdu", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $isPortdu = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_part", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $isPart = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_infofin", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $isInfofin = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_pktranq", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $isPktranq = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_pktranqplus", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $isPktranqplus = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_optioncorse", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $isOptioncorse = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="peage", type="float", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $peage = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="prix_mission_ht", type="float", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $prixMissionHt = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="prix_prepaye", type="float", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $prixPrepaye = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="prix_options_ht", type="float", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $prixOptionsHt = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ht", type="float", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $totalHt = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ttc", type="float", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $totalTtc = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_tva", type="float", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $totalTva = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_a_encaisser", type="float", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $totalAEncaisser = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_course", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateCourse = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_course2", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateCourse2 = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_rdv_def", type="time", nullable=true, options={"default"="NULL"})
     */
    private $heureRdvDef = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_rdv", type="time", nullable=true, options={"default"="NULL"})
     */
    private $heureRdv = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_rdv2", type="time", nullable=true, options={"default"="NULL"})
     */
    private $heureRdv2 = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_rdv_c1", type="time", nullable=true, options={"default"="NULL"})
     */
    private $heureRdvC1 = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_rdv_c2", type="time", nullable=true, options={"default"="NULL"})
     */
    private $heureRdvC2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="horaire_impose", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $horaireImpose = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_bord", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $numBord = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_bord2", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $numBord2 = 'NULL';

    /**
     * @var string|null
     * @ORM\ManyToOne(targetEntity="App\Entity\NumeroTournee")
     * @ORM\JoinColumn(name="nom",referencedColumnName="num_tournee")
     * @ORM\Column(name="num_tournee", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $numTournee = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idservice", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idservice = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="agent_st", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $agentSt = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="agent_st2", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $agentSt2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="differe_livre", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $differeLivre = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idvehicule", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idvehicule = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_colis", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $nbColis = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="poids", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $poids = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nature_marchandises", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $natureMarchandises = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idville", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idville = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idpays", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idpays = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idcoursier", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idcoursier = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idcoursier2", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idcoursier2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_agent_principal", type="string", length=1, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $numAgentPrincipal = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="course_affectee_1", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $courseAffectee1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="course_affectee_2", type="string", length=3, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $courseAffectee2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="etat_course", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $etatCourse = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_aff1", type="time", nullable=true, options={"default"="NULL"})
     */
    private $heureAff1 = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_aff2", type="time", nullable=true, options={"default"="NULL"})
     */
    private $heureAff2 = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_enleve", type="time", nullable=true, options={"default"="NULL"})
     */
    private $heureEnleve = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_livre", type="time", nullable=true, options={"default"="NULL"})
     */
    private $heureLivre = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_enleve", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateEnleve = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_livre", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateLivre = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="temps_attente", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $tempsAttente = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idweb", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idweb = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_cat", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $serviceCat = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_sscat", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $serviceSscat = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idzg", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idzg = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="zou_centrecout", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $zouCentrecout = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="signature_l", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $signatureL = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="signature_e", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $signatureE = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_adresse_zou", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idAdresseZou = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="prioritaire_zou", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $prioritaireZou = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ok_cr", type="date", nullable=true, options={"default"="NULL"})
     */
    private $okCr = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="refus_cr", type="date", nullable=true, options={"default"="NULL"})
     */
    private $refusCr = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_regulier", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idRegulier = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="prix_achat_st", type="float", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $prixAchatSt = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="motif_refus_cr", type="string", length=160, nullable=true, options={"default"="NULL"})
     */
    private $motifRefusCr = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cr_comms", type="string", length=160, nullable=true, options={"default"="NULL"})
     */
    private $crComms = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cr_type", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $crType = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="valo_bo", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $valoBo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="exp_nom", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $expNom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="exp_adr1", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $expAdr1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="exp_adr2", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $expAdr2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="exp_adr3", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $expAdr3 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="exp_cp", type="string", length=7, nullable=true, options={"default"="NULL"})
     */
    private $expCp = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="exp_ville", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $expVille = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="exp_tel1", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $expTel1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="exp_tel2", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $expTel2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="exp_mail", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $expMail = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="exp_geotag", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $expGeotag = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_etage", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $expEtage = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="exp_porte", type="string", length=5, nullable=true, options={"default"="NULL"})
     */
    private $expPorte = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="exp_digicode", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $expDigicode = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dst_nom", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $dstNom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dst_adr1", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $dstAdr1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dst_adr2", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $dstAdr2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dst_adr3", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $dstAdr3 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dst_cp", type="string", length=7, nullable=true, options={"default"="NULL"})
     */
    private $dstCp = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dst_ville", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $dstVille = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dst_tel1", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $dstTel1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dst_tel2", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $dstTel2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dst_mail", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $dstMail = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dst_geotag", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $dstGeotag = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="dst_etage", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $dstEtage = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dst_porte", type="string", length=5, nullable=true, options={"default"="NULL"})
     */
    private $dstPorte = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dst_digicode", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $dstDigicode = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="disp_date_esc_send", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dispDateEscSend = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="disp_date_esc_rcv", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dispDateEscRcv = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="disp_esc_value", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $dispEscValue = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="disp_latitude", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $dispLatitude = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="disp_longitude", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $dispLongitude = 'NULL';



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientId(): ?int
    {
        return $this->idclient;
    }

    /**
     * Get the value of agence
     *
     * @return  string|null
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Set the value of agence
     *
     * @param  string|null  $agence
     *
     * @return  self
     */
    public function setAgence($agence)
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get the value of dateSaisie
     *
     * @return  \DateTime|null
     */
    public function getDateSaisie()
    {
        return $this->dateSaisie;
    }

    /**
     * Set the value of dateSaisie
     *
     * @param  \DateTime|null  $dateSaisie
     *
     * @return  self
     */
    public function setDateSaisie($dateSaisie)
    {
        $this->dateSaisie = $dateSaisie;

        return $this;
    }

    /**
     * Get the value of dispLongitude
     *
     * @return  float|null
     */
    public function getDispLongitude()
    {
        return $this->dispLongitude;
    }

    /**
     * Set the value of dispLongitude
     *
     * @param  float|null  $dispLongitude
     *
     * @return  self
     */
    public function setDispLongitude($dispLongitude)
    {
        $this->dispLongitude = $dispLongitude;

        return $this;
    }

    /**
     * Get the value of dispLatitude
     *
     * @return  float|null
     */
    public function getDispLatitude()
    {
        return $this->dispLatitude;
    }

    /**
     * Set the value of dispLatitude
     *
     * @param  float|null  $dispLatitude
     *
     * @return  self
     */
    public function setDispLatitude($dispLatitude)
    {
        $this->dispLatitude = $dispLatitude;

        return $this;
    }

    /**
     * Get the value of dispEscValue
     *
     * @return  int|null
     */
    public function getDispEscValue()
    {
        return $this->dispEscValue;
    }

    /**
     * Set the value of dispEscValue
     *
     * @param  int|null  $dispEscValue
     *
     * @return  self
     */
    public function setDispEscValue($dispEscValue)
    {
        $this->dispEscValue = $dispEscValue;

        return $this;
    }

    /**
     * Get the value of dispDateEscRcv
     *
     * @return  \DateTime|null
     */
    public function getDispDateEscRcv()
    {
        return $this->dispDateEscRcv;
    }

    /**
     * Set the value of dispDateEscRcv
     *
     * @param  \DateTime|null  $dispDateEscRcv
     *
     * @return  self
     */
    public function setDispDateEscRcv($dispDateEscRcv)
    {
        $this->dispDateEscRcv = $dispDateEscRcv;

        return $this;
    }

    /**
     * Get the value of dispDateEscSend
     *
     * @return  \DateTime|null
     */
    public function getDispDateEscSend()
    {
        return $this->dispDateEscSend;
    }

    /**
     * Set the value of dispDateEscSend
     *
     * @param  \DateTime|null  $dispDateEscSend
     *
     * @return  self
     */
    public function setDispDateEscSend($dispDateEscSend)
    {
        $this->dispDateEscSend = $dispDateEscSend;

        return $this;
    }

    /**
     * Get the value of dstDigicode
     *
     * @return  string|null
     */
    public function getDstDigicode()
    {
        return $this->dstDigicode;
    }

    /**
     * Set the value of dstDigicode
     *
     * @param  string|null  $dstDigicode
     *
     * @return  self
     */
    public function setDstDigicode($dstDigicode)
    {
        $this->dstDigicode = $dstDigicode;

        return $this;
    }

    /**
     * Get the value of dstPorte
     *
     * @return  string|null
     */
    public function getDstPorte()
    {
        return $this->dstPorte;
    }

    /**
     * Set the value of dstPorte
     *
     * @param  string|null  $dstPorte
     *
     * @return  self
     */
    public function setDstPorte($dstPorte)
    {
        $this->dstPorte = $dstPorte;

        return $this;
    }

    /**
     * Get the value of dstEtage
     *
     * @return  int|null
     */
    public function getDstEtage()
    {
        return $this->dstEtage;
    }

    /**
     * Set the value of dstEtage
     *
     * @param  int|null  $dstEtage
     *
     * @return  self
     */
    public function setDstEtage($dstEtage)
    {
        $this->dstEtage = $dstEtage;

        return $this;
    }

    /**
     * Get the value of dstGeotag
     *
     * @return  string|null
     */
    public function getDstGeotag()
    {
        return $this->dstGeotag;
    }

    /**
     * Set the value of dstGeotag
     *
     * @param  string|null  $dstGeotag
     *
     * @return  self
     */
    public function setDstGeotag($dstGeotag)
    {
        $this->dstGeotag = $dstGeotag;

        return $this;
    }

    /**
     * Get the value of dstMail
     *
     * @return  string|null
     */
    public function getDstMail()
    {
        return $this->dstMail;
    }

    /**
     * Set the value of dstMail
     *
     * @param  string|null  $dstMail
     *
     * @return  self
     */
    public function setDstMail($dstMail)
    {
        $this->dstMail = $dstMail;

        return $this;
    }

    /**
     * Get the value of dstTel2
     *
     * @return  string|null
     */
    public function getDstTel2()
    {
        return $this->dstTel2;
    }

    /**
     * Set the value of dstTel2
     *
     * @param  string|null  $dstTel2
     *
     * @return  self
     */
    public function setDstTel2($dstTel2)
    {
        $this->dstTel2 = $dstTel2;

        return $this;
    }

    /**
     * Get the value of dstTel1
     *
     * @return  string|null
     */
    public function getDstTel1()
    {
        return $this->dstTel1;
    }

    /**
     * Set the value of dstTel1
     *
     * @param  string|null  $dstTel1
     *
     * @return  self
     */
    public function setDstTel1($dstTel1)
    {
        $this->dstTel1 = $dstTel1;

        return $this;
    }

    /**
     * Get the value of dstVille
     *
     * @return  string|null
     */
    public function getDstVille()
    {
        return $this->dstVille;
    }

    /**
     * Set the value of dstVille
     *
     * @param  string|null  $dstVille
     *
     * @return  self
     */
    public function setDstVille($dstVille)
    {
        $this->dstVille = $dstVille;

        return $this;
    }

    /**
     * Get the value of dstCp
     *
     * @return  string|null
     */
    public function getDstCp()
    {
        return $this->dstCp;
    }

    /**
     * Set the value of dstCp
     *
     * @param  string|null  $dstCp
     *
     * @return  self
     */
    public function setDstCp($dstCp)
    {
        $this->dstCp = $dstCp;

        return $this;
    }

    /**
     * Get the value of dstAdr3
     *
     * @return  string|null
     */
    public function getDstAdr3()
    {
        return $this->dstAdr3;
    }

    /**
     * Set the value of dstAdr3
     *
     * @param  string|null  $dstAdr3
     *
     * @return  self
     */
    public function setDstAdr3($dstAdr3)
    {
        $this->dstAdr3 = $dstAdr3;

        return $this;
    }

    /**
     * Get the value of dstAdr2
     *
     * @return  string|null
     */
    public function getDstAdr2()
    {
        return $this->dstAdr2;
    }

    /**
     * Set the value of dstAdr2
     *
     * @param  string|null  $dstAdr2
     *
     * @return  self
     */
    public function setDstAdr2($dstAdr2)
    {
        $this->dstAdr2 = $dstAdr2;

        return $this;
    }

    /**
     * Get the value of dstAdr1
     *
     * @return  string|null
     */
    public function getDstAdr1()
    {
        return $this->dstAdr1;
    }

    /**
     * Set the value of dstAdr1
     *
     * @param  string|null  $dstAdr1
     *
     * @return  self
     */
    public function setDstAdr1($dstAdr1)
    {
        $this->dstAdr1 = $dstAdr1;

        return $this;
    }

    /**
     * Get the value of dstNom
     *
     * @return  string|null
     */
    public function getDstNom()
    {
        return $this->dstNom;
    }

    /**
     * Set the value of dstNom
     *
     * @param  string|null  $dstNom
     *
     * @return  self
     */
    public function setDstNom($dstNom)
    {
        $this->dstNom = $dstNom;

        return $this;
    }

    /**
     * Get the value of heureSaisie
     *
     * @return  \DateTime|null
     */
    public function getHeureSaisie()
    {
        return $this->heureSaisie;
    }

    /**
     * Set the value of heureSaisie
     *
     * @param  \DateTime|null  $heureSaisie
     *
     * @return  self
     */
    public function setHeureSaisie($heureSaisie)
    {
        $this->heureSaisie = $heureSaisie;

        return $this;
    }

    /**
     * Get the value of nomCreateur
     *
     * @return  string|null
     */
    public function getNomCreateur()
    {
        return $this->nomCreateur;
    }

    /**
     * Set the value of nomCreateur
     *
     * @param  string|null  $nomCreateur
     *
     * @return  self
     */
    public function setNomCreateur($nomCreateur)
    {
        $this->nomCreateur = $nomCreateur;

        return $this;
    }

    /**
     * Get the value of absentsRegulier
     *
     * @return  string|null
     */
    public function getAbsentsRegulier()
    {
        return $this->absentsRegulier;
    }

    /**
     * Set the value of absentsRegulier
     *
     * @param  string|null  $absentsRegulier
     *
     * @return  self
     */
    public function setAbsentsRegulier($absentsRegulier)
    {
        $this->absentsRegulier = $absentsRegulier;

        return $this;
    }

    /**
     * Get the value of codeCourse
     *
     * @return  int|null
     */
    public function getCodeCourse()
    {
        return $this->codeCourse;
    }

    /**
     * Set the value of codeCourse
     *
     * @param  int|null  $codeCourse
     *
     * @return  self
     */
    public function setCodeCourse($codeCourse)
    {
        $this->codeCourse = $codeCourse;

        return $this;
    }

    /**
     * Get the value of numeroOrdre
     *
     * @return  string|null
     */
    public function getNumeroOrdre()
    {
        return $this->numeroOrdre;
    }

    /**
     * Set the value of numeroOrdre
     *
     * @param  string|null  $numeroOrdre
     *
     * @return  self
     */
    public function setNumeroOrdre($numeroOrdre)
    {
        $this->numeroOrdre = $numeroOrdre;

        return $this;
    }

    /**
     * Get the value of observations
     *
     * @return  string|null
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set the value of observations
     *
     * @param  string|null  $observations
     *
     * @return  self
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get the value of incident
     *
     * @return  string|null
     */
    public function getIncident()
    {
        return $this->incident;
    }

    /**
     * Set the value of incident
     *
     * @param  string|null  $incident
     *
     * @return  self
     */
    public function setIncident($incident)
    {
        $this->incident = $incident;

        return $this;
    }

    /**
     * Get the value of isWarning
     *
     * @return  string|null
     */
    public function getIsWarning()
    {
        return $this->isWarning;
    }

    /**
     * Set the value of isWarning
     *
     * @param  string|null  $isWarning
     *
     * @return  self
     */
    public function setIsWarning($isWarning)
    {
        $this->isWarning = $isWarning;

        return $this;
    }

    /**
     * Get the value of nomclient
     *
     * @return  string|null
     */
    public function getNomclient()
    {
        return $this->nomclient;
    }

    /**
     * Set the value of nomclient
     *
     * @param  string|null  $nomclient
     *
     * @return  self
     */
    public function setNomclient($nomclient)
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    /**
     * Get the value of idclient
     *
     * @return  int|null
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set the value of idclient
     *
     * @param  int|null  $idclient
     *
     * @return  self
     */
    public function setIdclient($idclient)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get the value of contact
     *
     * @return  string|null
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set the value of contact
     *
     * @param  string|null  $contact
     *
     * @return  self
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get the value of telephone
     *
     * @return  string|null
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @param  string|null  $telephone
     *
     * @return  self
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of refDossier
     *
     * @return  string|null
     */
    public function getRefDossier()
    {
        return $this->refDossier;
    }

    /**
     * Set the value of refDossier
     *
     * @param  string|null  $refDossier
     *
     * @return  self
     */
    public function setRefDossier($refDossier)
    {
        $this->refDossier = $refDossier;

        return $this;
    }

    /**
     * Get the value of depart
     *
     * @return  string|null
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * Set the value of depart
     *
     * @param  string|null  $depart
     *
     * @return  self
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get the value of destination
     *
     * @return  string|null
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set the value of destination
     *
     * @param  string|null  $destination
     *
     * @return  self
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get the value of commentDepart
     *
     * @return  string|null
     */
    public function getCommentDepart()
    {
        return $this->commentDepart;
    }

    /**
     * Set the value of commentDepart
     *
     * @param  string|null  $commentDepart
     *
     * @return  self
     */
    public function setCommentDepart($commentDepart)
    {
        $this->commentDepart = $commentDepart;

        return $this;
    }

    /**
     * Get the value of commentDestination
     *
     * @return  string|null
     */
    public function getCommentDestination()
    {
        return $this->commentDestination;
    }

    /**
     * Set the value of commentDestination
     *
     * @param  string|null  $commentDestination
     *
     * @return  self
     */
    public function setCommentDestination($commentDestination)
    {
        $this->commentDestination = $commentDestination;

        return $this;
    }

    /**
     * Get the value of numcarte
     *
     * @return  string|null
     */
    public function getNumcarte()
    {
        return $this->numcarte;
    }

    /**
     * Set the value of numcarte
     *
     * @param  string|null  $numcarte
     *
     * @return  self
     */
    public function setNumcarte($numcarte)
    {
        $this->numcarte = $numcarte;

        return $this;
    }

    /**
     * Get the value of nbBons
     *
     * @return  float|null
     */
    public function getNbBons()
    {
        return $this->nbBons;
    }

    /**
     * Set the value of nbBons
     *
     * @param  float|null  $nbBons
     *
     * @return  self
     */
    public function setNbBons($nbBons)
    {
        $this->nbBons = $nbBons;

        return $this;
    }

    /**
     * Get the value of nbEnveloppes
     *
     * @return  int|null
     */
    public function getNbEnveloppes()
    {
        return $this->nbEnveloppes;
    }

    /**
     * Set the value of nbEnveloppes
     *
     * @param  int|null  $nbEnveloppes
     *
     * @return  self
     */
    public function setNbEnveloppes($nbEnveloppes)
    {
        $this->nbEnveloppes = $nbEnveloppes;

        return $this;
    }

    /**
     * Get the value of pc1
     *
     * @return  float|null
     */
    public function getPc1()
    {
        return $this->pc1;
    }

    /**
     * Set the value of pc1
     *
     * @param  float|null  $pc1
     *
     * @return  self
     */
    public function setPc1($pc1)
    {
        $this->pc1 = $pc1;

        return $this;
    }

    /**
     * Get the value of vdChoix
     *
     * @return  string|null
     */
    public function getVdChoix()
    {
        return $this->vdChoix;
    }

    /**
     * Set the value of vdChoix
     *
     * @param  string|null  $vdChoix
     *
     * @return  self
     */
    public function setVdChoix($vdChoix)
    {
        $this->vdChoix = $vdChoix;

        return $this;
    }

    /**
     * Get the value of valeurAssurance
     *
     * @return  int|null
     */
    public function getValeurAssurance()
    {
        return $this->valeurAssurance;
    }

    /**
     * Set the value of valeurAssurance
     *
     * @param  int|null  $valeurAssurance
     *
     * @return  self
     */
    public function setValeurAssurance($valeurAssurance)
    {
        $this->valeurAssurance = $valeurAssurance;

        return $this;
    }

    /**
     * Get the value of isCr
     *
     * @return  string|null
     */
    public function getIsCr()
    {
        return $this->isCr;
    }

    /**
     * Set the value of isCr
     *
     * @param  string|null  $isCr
     *
     * @return  self
     */
    public function setIsCr($isCr)
    {
        $this->isCr = $isCr;

        return $this;
    }

    /**
     * Get the value of isCr2
     *
     * @return  string|null
     */
    public function getIsCr2()
    {
        return $this->isCr2;
    }

    /**
     * Set the value of isCr2
     *
     * @param  string|null  $isCr2
     *
     * @return  self
     */
    public function setIsCr2($isCr2)
    {
        $this->isCr2 = $isCr2;

        return $this;
    }

    /**
     * Get the value of valCr
     *
     * @return  float|null
     */
    public function getValCr()
    {
        return $this->valCr;
    }

    /**
     * Set the value of valCr
     *
     * @param  float|null  $valCr
     *
     * @return  self
     */
    public function setValCr($valCr)
    {
        $this->valCr = $valCr;

        return $this;
    }

    /**
     * Get the value of is9h
     *
     * @return  string|null
     */
    public function getIs9h()
    {
        return $this->is9h;
    }

    /**
     * Set the value of is9h
     *
     * @param  string|null  $is9h
     *
     * @return  self
     */
    public function setIs9h($is9h)
    {
        $this->is9h = $is9h;

        return $this;
    }

    /**
     * Get the value of isSam
     *
     * @return  string|null
     */
    public function getIsSam()
    {
        return $this->isSam;
    }

    /**
     * Set the value of isSam
     *
     * @param  string|null  $isSam
     *
     * @return  self
     */
    public function setIsSam($isSam)
    {
        $this->isSam = $isSam;

        return $this;
    }

    /**
     * Get the value of isPortdu
     *
     * @return  string|null
     */
    public function getIsPortdu()
    {
        return $this->isPortdu;
    }

    /**
     * Set the value of isPortdu
     *
     * @param  string|null  $isPortdu
     *
     * @return  self
     */
    public function setIsPortdu($isPortdu)
    {
        $this->isPortdu = $isPortdu;

        return $this;
    }

    /**
     * Get the value of isPart
     *
     * @return  string|null
     */
    public function getIsPart()
    {
        return $this->isPart;
    }

    /**
     * Set the value of isPart
     *
     * @param  string|null  $isPart
     *
     * @return  self
     */
    public function setIsPart($isPart)
    {
        $this->isPart = $isPart;

        return $this;
    }

    /**
     * Get the value of isInfofin
     *
     * @return  string|null
     */
    public function getIsInfofin()
    {
        return $this->isInfofin;
    }

    /**
     * Set the value of isInfofin
     *
     * @param  string|null  $isInfofin
     *
     * @return  self
     */
    public function setIsInfofin($isInfofin)
    {
        $this->isInfofin = $isInfofin;

        return $this;
    }

    /**
     * Get the value of isPktranq
     *
     * @return  string|null
     */
    public function getIsPktranq()
    {
        return $this->isPktranq;
    }

    /**
     * Set the value of isPktranq
     *
     * @param  string|null  $isPktranq
     *
     * @return  self
     */
    public function setIsPktranq($isPktranq)
    {
        $this->isPktranq = $isPktranq;

        return $this;
    }

    /**
     * Get the value of isPktranqplus
     *
     * @return  string|null
     */
    public function getIsPktranqplus()
    {
        return $this->isPktranqplus;
    }

    /**
     * Set the value of isPktranqplus
     *
     * @param  string|null  $isPktranqplus
     *
     * @return  self
     */
    public function setIsPktranqplus($isPktranqplus)
    {
        $this->isPktranqplus = $isPktranqplus;

        return $this;
    }

    /**
     * Get the value of isOptioncorse
     *
     * @return  string|null
     */
    public function getIsOptioncorse()
    {
        return $this->isOptioncorse;
    }

    /**
     * Set the value of isOptioncorse
     *
     * @param  string|null  $isOptioncorse
     *
     * @return  self
     */
    public function setIsOptioncorse($isOptioncorse)
    {
        $this->isOptioncorse = $isOptioncorse;

        return $this;
    }

    /**
     * Get the value of peage
     *
     * @return  float|null
     */
    public function getPeage()
    {
        return $this->peage;
    }

    /**
     * Set the value of peage
     *
     * @param  float|null  $peage
     *
     * @return  self
     */
    public function setPeage($peage)
    {
        $this->peage = $peage;

        return $this;
    }

    /**
     * Get the value of prixMissionHt
     *
     * @return  float|null
     */
    public function getPrixMissionHt()
    {
        return $this->prixMissionHt;
    }

    /**
     * Set the value of prixMissionHt
     *
     * @param  float|null  $prixMissionHt
     *
     * @return  self
     */
    public function setPrixMissionHt($prixMissionHt)
    {
        $this->prixMissionHt = $prixMissionHt;

        return $this;
    }

    /**
     * Get the value of prixPrepaye
     *
     * @return  float|null
     */
    public function getPrixPrepaye()
    {
        return $this->prixPrepaye;
    }

    /**
     * Set the value of prixPrepaye
     *
     * @param  float|null  $prixPrepaye
     *
     * @return  self
     */
    public function setPrixPrepaye($prixPrepaye)
    {
        $this->prixPrepaye = $prixPrepaye;

        return $this;
    }

    /**
     * Get the value of prixOptionsHt
     *
     * @return  float|null
     */
    public function getPrixOptionsHt()
    {
        return $this->prixOptionsHt;
    }

    /**
     * Set the value of prixOptionsHt
     *
     * @param  float|null  $prixOptionsHt
     *
     * @return  self
     */
    public function setPrixOptionsHt($prixOptionsHt)
    {
        $this->prixOptionsHt = $prixOptionsHt;

        return $this;
    }

    /**
     * Get the value of totalHt
     *
     * @return  float|null
     */
    public function getTotalHt()
    {
        return $this->totalHt;
    }

    /**
     * Set the value of totalHt
     *
     * @param  float|null  $totalHt
     *
     * @return  self
     */
    public function setTotalHt($totalHt)
    {
        $this->totalHt = $totalHt;

        return $this;
    }

    /**
     * Get the value of totalTtc
     *
     * @return  float|null
     */
    public function getTotalTtc()
    {
        return $this->totalTtc;
    }

    /**
     * Set the value of totalTtc
     *
     * @param  float|null  $totalTtc
     *
     * @return  self
     */
    public function setTotalTtc($totalTtc)
    {
        $this->totalTtc = $totalTtc;

        return $this;
    }

    /**
     * Get the value of totalTva
     *
     * @return  float|null
     */
    public function getTotalTva()
    {
        return $this->totalTva;
    }

    /**
     * Set the value of totalTva
     *
     * @param  float|null  $totalTva
     *
     * @return  self
     */
    public function setTotalTva($totalTva)
    {
        $this->totalTva = $totalTva;

        return $this;
    }

    /**
     * Get the value of totalAEncaisser
     *
     * @return  float|null
     */
    public function getTotalAEncaisser()
    {
        return $this->totalAEncaisser;
    }

    /**
     * Set the value of totalAEncaisser
     *
     * @param  float|null  $totalAEncaisser
     *
     * @return  self
     */
    public function setTotalAEncaisser($totalAEncaisser)
    {
        $this->totalAEncaisser = $totalAEncaisser;

        return $this;
    }

    /**
     * Get the value of dateCourse
     *
     * @return  \DateTime|null
     */
    public function getDateCourse()
    {
        return $this->dateCourse;
    }

    /**
     * Set the value of dateCourse
     *
     * @param  \DateTime|null  $dateCourse
     *
     * @return  self
     */
    public function setDateCourse($dateCourse)
    {
        $this->dateCourse = $dateCourse;

        return $this;
    }

    /**
     * Get the value of dateCourse2
     *
     * @return  \DateTime|null
     */
    public function getDateCourse2()
    {
        return $this->dateCourse2;
    }

    /**
     * Set the value of dateCourse2
     *
     * @param  \DateTime|null  $dateCourse2
     *
     * @return  self
     */
    public function setDateCourse2($dateCourse2)
    {
        $this->dateCourse2 = $dateCourse2;

        return $this;
    }

    /**
     * Get the value of heureRdvDef
     *
     * @return  \DateTime|null
     */
    public function getHeureRdvDef()
    {
        return $this->heureRdvDef;
    }

    /**
     * Set the value of heureRdvDef
     *
     * @param  \DateTime|null  $heureRdvDef
     *
     * @return  self
     */
    public function setHeureRdvDef($heureRdvDef)
    {
        $this->heureRdvDef = $heureRdvDef;

        return $this;
    }

    /**
     * Get the value of heureRdv
     *
     * @return  \DateTime|null
     */
    public function getHeureRdv()
    {
        return $this->heureRdv;
    }

    /**
     * Set the value of heureRdv
     *
     * @param  \DateTime|null  $heureRdv
     *
     * @return  self
     */
    public function setHeureRdv($heureRdv)
    {
        $this->heureRdv = $heureRdv;

        return $this;
    }

    /**
     * Get the value of heureRdv2
     *
     * @return  \DateTime|null
     */
    public function getHeureRdv2()
    {
        return $this->heureRdv2;
    }

    /**
     * Set the value of heureRdv2
     *
     * @param  \DateTime|null  $heureRdv2
     *
     * @return  self
     */
    public function setHeureRdv2($heureRdv2)
    {
        $this->heureRdv2 = $heureRdv2;

        return $this;
    }

    /**
     * Get the value of heureRdvC1
     *
     * @return  \DateTime|null
     */
    public function getHeureRdvC1()
    {
        return $this->heureRdvC1;
    }

    /**
     * Set the value of heureRdvC1
     *
     * @param  \DateTime|null  $heureRdvC1
     *
     * @return  self
     */
    public function setHeureRdvC1($heureRdvC1)
    {
        $this->heureRdvC1 = $heureRdvC1;

        return $this;
    }

    /**
     * Get the value of heureRdvC2
     *
     * @return  \DateTime|null
     */
    public function getHeureRdvC2()
    {
        return $this->heureRdvC2;
    }

    /**
     * Set the value of heureRdvC2
     *
     * @param  \DateTime|null  $heureRdvC2
     *
     * @return  self
     */
    public function setHeureRdvC2($heureRdvC2)
    {
        $this->heureRdvC2 = $heureRdvC2;

        return $this;
    }

    /**
     * Get the value of horaireImpose
     *
     * @return  string|null
     */
    public function getHoraireImpose()
    {
        return $this->horaireImpose;
    }

    /**
     * Set the value of horaireImpose
     *
     * @param  string|null  $horaireImpose
     *
     * @return  self
     */
    public function setHoraireImpose($horaireImpose)
    {
        $this->horaireImpose = $horaireImpose;

        return $this;
    }

    /**
     * Get the value of numBord
     *
     * @return  string|null
     */
    public function getNumBord()
    {
        return $this->numBord;
    }

    /**
     * Set the value of numBord
     *
     * @param  string|null  $numBord
     *
     * @return  self
     */
    public function setNumBord($numBord)
    {
        $this->numBord = $numBord;

        return $this;
    }

    /**
     * Get the value of numBord2
     *
     * @return  string|null
     */
    public function getNumBord2()
    {
        return $this->numBord2;
    }

    /**
     * Set the value of numBord2
     *
     * @param  string|null  $numBord2
     *
     * @return  self
     */
    public function setNumBord2($numBord2)
    {
        $this->numBord2 = $numBord2;

        return $this;
    }

    /**
     * Get the value of numTournee
     *
     * @return  string|null
     */
    public function getNumTournee()
    {
        return $this->numTournee;
    }

    /**
     * Set the value of numTournee
     *
     * @param  string|null  $numTournee
     *
     * @return  self
     */
    public function setNumTournee($numTournee)
    {
        $this->numTournee = $numTournee;

        return $this;
    }

    /**
     * Get the value of idservice
     *
     * @return  int|null
     */
    public function getIdservice()
    {
        return $this->idservice;
    }

    /**
     * Set the value of idservice
     *
     * @param  int|null  $idservice
     *
     * @return  self
     */
    public function setIdservice($idservice)
    {
        $this->idservice = $idservice;

        return $this;
    }

    /**
     * Get the value of agentSt
     *
     * @return  string|null
     */
    public function getAgentSt()
    {
        return $this->agentSt;
    }

    /**
     * Set the value of agentSt
     *
     * @param  string|null  $agentSt
     *
     * @return  self
     */
    public function setAgentSt($agentSt)
    {
        $this->agentSt = $agentSt;

        return $this;
    }

    /**
     * Get the value of agentSt2
     *
     * @return  string|null
     */
    public function getAgentSt2()
    {
        return $this->agentSt2;
    }

    /**
     * Set the value of agentSt2
     *
     * @param  string|null  $agentSt2
     *
     * @return  self
     */
    public function setAgentSt2($agentSt2)
    {
        $this->agentSt2 = $agentSt2;

        return $this;
    }

    /**
     * Get the value of differeLivre
     *
     * @return  string|null
     */
    public function getDiffereLivre()
    {
        return $this->differeLivre;
    }

    /**
     * Set the value of differeLivre
     *
     * @param  string|null  $differeLivre
     *
     * @return  self
     */
    public function setDiffereLivre($differeLivre)
    {
        $this->differeLivre = $differeLivre;

        return $this;
    }

    /**
     * Get the value of idvehicule
     *
     * @return  int|null
     */
    public function getIdvehicule()
    {
        return $this->idvehicule;
    }

    /**
     * Set the value of idvehicule
     *
     * @param  int|null  $idvehicule
     *
     * @return  self
     */
    public function setIdvehicule($idvehicule)
    {
        $this->idvehicule = $idvehicule;

        return $this;
    }

    /**
     * Get the value of nbColis
     *
     * @return  int|null
     */
    public function getNbColis()
    {
        return $this->nbColis;
    }

    /**
     * Set the value of nbColis
     *
     * @param  int|null  $nbColis
     *
     * @return  self
     */
    public function setNbColis($nbColis)
    {
        $this->nbColis = $nbColis;

        return $this;
    }

    /**
     * Get the value of poids
     *
     * @return  float|null
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     *
     * @param  float|null  $poids
     *
     * @return  self
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get the value of natureMarchandises
     *
     * @return  string|null
     */
    public function getNatureMarchandises()
    {
        return $this->natureMarchandises;
    }

    /**
     * Set the value of natureMarchandises
     *
     * @param  string|null  $natureMarchandises
     *
     * @return  self
     */
    public function setNatureMarchandises($natureMarchandises)
    {
        $this->natureMarchandises = $natureMarchandises;

        return $this;
    }

    /**
     * Get the value of idville
     *
     * @return  int|null
     */
    public function getIdville()
    {
        return $this->idville;
    }

    /**
     * Set the value of idville
     *
     * @param  int|null  $idville
     *
     * @return  self
     */
    public function setIdville($idville)
    {
        $this->idville = $idville;

        return $this;
    }

    /**
     * Get the value of idpays
     *
     * @return  int|null
     */
    public function getIdpays()
    {
        return $this->idpays;
    }

    /**
     * Set the value of idpays
     *
     * @param  int|null  $idpays
     *
     * @return  self
     */
    public function setIdpays($idpays)
    {
        $this->idpays = $idpays;

        return $this;
    }

    /**
     * Get the value of idcoursier
     *
     * @return  int|null
     */
    public function getIdcoursier()
    {
        return $this->idcoursier;
    }

    /**
     * Set the value of idcoursier
     *
     * @param  int|null  $idcoursier
     *
     * @return  self
     */
    public function setIdcoursier($idcoursier)
    {
        $this->idcoursier = $idcoursier;

        return $this;
    }

    /**
     * Get the value of idcoursier2
     *
     * @return  int|null
     */
    public function getIdcoursier2()
    {
        return $this->idcoursier2;
    }

    /**
     * Set the value of idcoursier2
     *
     * @param  int|null  $idcoursier2
     *
     * @return  self
     */
    public function setIdcoursier2($idcoursier2)
    {
        $this->idcoursier2 = $idcoursier2;

        return $this;
    }

    /**
     * Get the value of numAgentPrincipal
     *
     * @return  string|null
     */
    public function getNumAgentPrincipal()
    {
        return $this->numAgentPrincipal;
    }

    /**
     * Set the value of numAgentPrincipal
     *
     * @param  string|null  $numAgentPrincipal
     *
     * @return  self
     */
    public function setNumAgentPrincipal($numAgentPrincipal)
    {
        $this->numAgentPrincipal = $numAgentPrincipal;

        return $this;
    }

    /**
     * Get the value of courseAffectee1
     *
     * @return  string|null
     */
    public function getCourseAffectee1()
    {
        return $this->courseAffectee1;
    }

    /**
     * Set the value of courseAffectee1
     *
     * @param  string|null  $courseAffectee1
     *
     * @return  self
     */
    public function setCourseAffectee1($courseAffectee1)
    {
        $this->courseAffectee1 = $courseAffectee1;

        return $this;
    }

    /**
     * Get the value of courseAffectee2
     *
     * @return  string|null
     */
    public function getCourseAffectee2()
    {
        return $this->courseAffectee2;
    }

    /**
     * Set the value of courseAffectee2
     *
     * @param  string|null  $courseAffectee2
     *
     * @return  self
     */
    public function setCourseAffectee2($courseAffectee2)
    {
        $this->courseAffectee2 = $courseAffectee2;

        return $this;
    }

    /**
     * Get the value of etatCourse
     *
     * @return  string|null
     */
    public function getEtatCourse()
    {
        return $this->etatCourse;
    }

    /**
     * Set the value of etatCourse
     *
     * @param  string|null  $etatCourse
     *
     * @return  self
     */
    public function setEtatCourse($etatCourse)
    {
        $this->etatCourse = $etatCourse;

        return $this;
    }

    /**
     * Get the value of heureAff1
     *
     * @return  \DateTime|null
     */
    public function getHeureAff1()
    {
        return $this->heureAff1;
    }

    /**
     * Set the value of heureAff1
     *
     * @param  \DateTime|null  $heureAff1
     *
     * @return  self
     */
    public function setHeureAff1($heureAff1)
    {
        $this->heureAff1 = $heureAff1;

        return $this;
    }

    /**
     * Get the value of heureAff2
     *
     * @return  \DateTime|null
     */
    public function getHeureAff2()
    {
        return $this->heureAff2;
    }

    /**
     * Set the value of heureAff2
     *
     * @param  \DateTime|null  $heureAff2
     *
     * @return  self
     */
    public function setHeureAff2($heureAff2)
    {
        $this->heureAff2 = $heureAff2;

        return $this;
    }

    /**
     * Get the value of heureEnleve
     *
     * @return  \DateTime|null
     */
    public function getHeureEnleve()
    {
        return $this->heureEnleve;
    }

    /**
     * Set the value of heureEnleve
     *
     * @param  \DateTime|null  $heureEnleve
     *
     * @return  self
     */
    public function setHeureEnleve($heureEnleve)
    {
        $this->heureEnleve = $heureEnleve;

        return $this;
    }

    /**
     * Get the value of expDigicode
     *
     * @return  string|null
     */
    public function getExpDigicode()
    {
        return $this->expDigicode;
    }

    /**
     * Set the value of expDigicode
     *
     * @param  string|null  $expDigicode
     *
     * @return  self
     */
    public function setExpDigicode($expDigicode)
    {
        $this->expDigicode = $expDigicode;

        return $this;
    }

    /**
     * Get the value of expNom
     *
     * @return  string|null
     */
    public function getExpNom()
    {
        return $this->expNom;
    }

    /**
     * Set the value of expNom
     *
     * @param  string|null  $expNom
     *
     * @return  self
     */
    public function setExpNom($expNom)
    {
        $this->expNom = $expNom;

        return $this;
    }

    /**
     * Get the value of expAdr1
     *
     * @return  string|null
     */
    public function getExpAdr1()
    {
        return $this->expAdr1;
    }

    /**
     * Set the value of expAdr1
     *
     * @param  string|null  $expAdr1
     *
     * @return  self
     */
    public function setExpAdr1($expAdr1)
    {
        $this->expAdr1 = $expAdr1;

        return $this;
    }

    /**
     * Get the value of expAdr2
     *
     * @return  string|null
     */
    public function getExpAdr2()
    {
        return $this->expAdr2;
    }

    /**
     * Set the value of expAdr2
     *
     * @param  string|null  $expAdr2
     *
     * @return  self
     */
    public function setExpAdr2($expAdr2)
    {
        $this->expAdr2 = $expAdr2;

        return $this;
    }

    /**
     * Get the value of expAdr3
     *
     * @return  string|null
     */
    public function getExpAdr3()
    {
        return $this->expAdr3;
    }

    /**
     * Set the value of expAdr3
     *
     * @param  string|null  $expAdr3
     *
     * @return  self
     */
    public function setExpAdr3($expAdr3)
    {
        $this->expAdr3 = $expAdr3;

        return $this;
    }

    /**
     * Get the value of expCp
     *
     * @return  string|null
     */
    public function getExpCp()
    {
        return $this->expCp;
    }

    /**
     * Set the value of expCp
     *
     * @param  string|null  $expCp
     *
     * @return  self
     */
    public function setExpCp($expCp)
    {
        $this->expCp = $expCp;

        return $this;
    }

    /**
     * Get the value of expVille
     *
     * @return  string|null
     */
    public function getExpVille()
    {
        return $this->expVille;
    }

    /**
     * Set the value of expVille
     *
     * @param  string|null  $expVille
     *
     * @return  self
     */
    public function setExpVille($expVille)
    {
        $this->expVille = $expVille;

        return $this;
    }

    /**
     * Get the value of expTel1
     *
     * @return  string|null
     */
    public function getExpTel1()
    {
        return $this->expTel1;
    }

    /**
     * Set the value of expTel1
     *
     * @param  string|null  $expTel1
     *
     * @return  self
     */
    public function setExpTel1($expTel1)
    {
        $this->expTel1 = $expTel1;

        return $this;
    }

    /**
     * Get the value of expTel2
     *
     * @return  string|null
     */
    public function getExpTel2()
    {
        return $this->expTel2;
    }

    /**
     * Set the value of expTel2
     *
     * @param  string|null  $expTel2
     *
     * @return  self
     */
    public function setExpTel2($expTel2)
    {
        $this->expTel2 = $expTel2;

        return $this;
    }

    /**
     * Get the value of expMail
     *
     * @return  string|null
     */
    public function getExpMail()
    {
        return $this->expMail;
    }

    /**
     * Set the value of expMail
     *
     * @param  string|null  $expMail
     *
     * @return  self
     */
    public function setExpMail($expMail)
    {
        $this->expMail = $expMail;

        return $this;
    }

    /**
     * Get the value of expGeotag
     *
     * @return  string|null
     */
    public function getExpGeotag()
    {
        return $this->expGeotag;
    }

    /**
     * Set the value of expGeotag
     *
     * @param  string|null  $expGeotag
     *
     * @return  self
     */
    public function setExpGeotag($expGeotag)
    {
        $this->expGeotag = $expGeotag;

        return $this;
    }

    /**
     * Get the value of expEtage
     *
     * @return  int|null
     */
    public function getExpEtage()
    {
        return $this->expEtage;
    }

    /**
     * Set the value of expEtage
     *
     * @param  int|null  $expEtage
     *
     * @return  self
     */
    public function setExpEtage($expEtage)
    {
        $this->expEtage = $expEtage;

        return $this;
    }

    /**
     * Get the value of expPorte
     *
     * @return  string|null
     */
    public function getExpPorte()
    {
        return $this->expPorte;
    }

    /**
     * Set the value of expPorte
     *
     * @param  string|null  $expPorte
     *
     * @return  self
     */
    public function setExpPorte($expPorte)
    {
        $this->expPorte = $expPorte;

        return $this;
    }

    /**
     * Get the value of heureLivre
     *
     * @return  \DateTime|null
     */
    public function getHeureLivre()
    {
        return $this->heureLivre;
    }

    /**
     * Set the value of heureLivre
     *
     * @param  \DateTime|null  $heureLivre
     *
     * @return  self
     */
    public function setHeureLivre($heureLivre)
    {
        $this->heureLivre = $heureLivre;

        return $this;
    }

    /**
     * Get the value of dateEnleve
     *
     * @return  \DateTime|null
     */
    public function getDateEnleve()
    {
        return $this->dateEnleve;
    }

    /**
     * Set the value of dateEnleve
     *
     * @param  \DateTime|null  $dateEnleve
     *
     * @return  self
     */
    public function setDateEnleve($dateEnleve)
    {
        $this->dateEnleve = $dateEnleve;

        return $this;
    }

    /**
     * Get the value of dateLivre
     *
     * @return  \DateTime|null
     */
    public function getDateLivre()
    {
        return $this->dateLivre;
    }

    /**
     * Set the value of dateLivre
     *
     * @param  \DateTime|null  $dateLivre
     *
     * @return  self
     */
    public function setDateLivre($dateLivre)
    {
        $this->dateLivre = $dateLivre;

        return $this;
    }

    /**
     * Get the value of tempsAttente
     *
     * @return  int|null
     */
    public function getTempsAttente()
    {
        return $this->tempsAttente;
    }

    /**
     * Set the value of tempsAttente
     *
     * @param  int|null  $tempsAttente
     *
     * @return  self
     */
    public function setTempsAttente($tempsAttente)
    {
        $this->tempsAttente = $tempsAttente;

        return $this;
    }

    /**
     * Get the value of idweb
     *
     * @return  int|null
     */
    public function getIdweb()
    {
        return $this->idweb;
    }

    /**
     * Set the value of idweb
     *
     * @param  int|null  $idweb
     *
     * @return  self
     */
    public function setIdweb($idweb)
    {
        $this->idweb = $idweb;

        return $this;
    }

    /**
     * Get the value of serviceCat
     *
     * @return  string|null
     */
    public function getServiceCat()
    {
        return $this->serviceCat;
    }

    /**
     * Set the value of serviceCat
     *
     * @param  string|null  $serviceCat
     *
     * @return  self
     */
    public function setServiceCat($serviceCat)
    {
        $this->serviceCat = $serviceCat;

        return $this;
    }

    /**
     * Get the value of serviceSscat
     *
     * @return  string|null
     */
    public function getServiceSscat()
    {
        return $this->serviceSscat;
    }

    /**
     * Set the value of serviceSscat
     *
     * @param  string|null  $serviceSscat
     *
     * @return  self
     */
    public function setServiceSscat($serviceSscat)
    {
        $this->serviceSscat = $serviceSscat;

        return $this;
    }

    /**
     * Get the value of idzg
     *
     * @return  int|null
     */
    public function getIdzg()
    {
        return $this->idzg;
    }

    /**
     * Set the value of idzg
     *
     * @param  int|null  $idzg
     *
     * @return  self
     */
    public function setIdzg($idzg)
    {
        $this->idzg = $idzg;

        return $this;
    }

    /**
     * Get the value of zouCentrecout
     *
     * @return  string|null
     */
    public function getZouCentrecout()
    {
        return $this->zouCentrecout;
    }

    /**
     * Set the value of zouCentrecout
     *
     * @param  string|null  $zouCentrecout
     *
     * @return  self
     */
    public function setZouCentrecout($zouCentrecout)
    {
        $this->zouCentrecout = $zouCentrecout;

        return $this;
    }

    /**
     * Get the value of signatureL
     *
     * @return  string|null
     */
    public function getSignatureL()
    {
        return $this->signatureL;
    }

    /**
     * Set the value of signatureL
     *
     * @param  string|null  $signatureL
     *
     * @return  self
     */
    public function setSignatureL($signatureL)
    {
        $this->signatureL = $signatureL;

        return $this;
    }

    /**
     * Get the value of signatureE
     *
     * @return  string|null
     */
    public function getSignatureE()
    {
        return $this->signatureE;
    }

    /**
     * Set the value of signatureE
     *
     * @param  string|null  $signatureE
     *
     * @return  self
     */
    public function setSignatureE($signatureE)
    {
        $this->signatureE = $signatureE;

        return $this;
    }

    /**
     * Get the value of idAdresseZou
     *
     * @return  int|null
     */
    public function getIdAdresseZou()
    {
        return $this->idAdresseZou;
    }

    /**
     * Set the value of idAdresseZou
     *
     * @param  int|null  $idAdresseZou
     *
     * @return  self
     */
    public function setIdAdresseZou($idAdresseZou)
    {
        $this->idAdresseZou = $idAdresseZou;

        return $this;
    }

    /**
     * Get the value of prioritaireZou
     *
     * @return  string|null
     */
    public function getPrioritaireZou()
    {
        return $this->prioritaireZou;
    }

    /**
     * Set the value of prioritaireZou
     *
     * @param  string|null  $prioritaireZou
     *
     * @return  self
     */
    public function setPrioritaireZou($prioritaireZou)
    {
        $this->prioritaireZou = $prioritaireZou;

        return $this;
    }

    /**
     * Get the value of okCr
     *
     * @return  \DateTime|null
     */
    public function getOkCr()
    {
        return $this->okCr;
    }

    /**
     * Set the value of okCr
     *
     * @param  \DateTime|null  $okCr
     *
     * @return  self
     */
    public function setOkCr($okCr)
    {
        $this->okCr = $okCr;

        return $this;
    }

    /**
     * Get the value of refusCr
     *
     * @return  \DateTime|null
     */
    public function getRefusCr()
    {
        return $this->refusCr;
    }

    /**
     * Set the value of refusCr
     *
     * @param  \DateTime|null  $refusCr
     *
     * @return  self
     */
    public function setRefusCr($refusCr)
    {
        $this->refusCr = $refusCr;

        return $this;
    }

    /**
     * Get the value of idRegulier
     *
     * @return  int|null
     */
    public function getIdRegulier()
    {
        return $this->idRegulier;
    }

    /**
     * Set the value of idRegulier
     *
     * @param  int|null  $idRegulier
     *
     * @return  self
     */
    public function setIdRegulier($idRegulier)
    {
        $this->idRegulier = $idRegulier;

        return $this;
    }

    /**
     * Get the value of prixAchatSt
     *
     * @return  float|null
     */
    public function getPrixAchatSt()
    {
        return $this->prixAchatSt;
    }

    /**
     * Set the value of prixAchatSt
     *
     * @param  float|null  $prixAchatSt
     *
     * @return  self
     */
    public function setPrixAchatSt($prixAchatSt)
    {
        $this->prixAchatSt = $prixAchatSt;

        return $this;
    }

    /**
     * Get the value of motifRefusCr
     *
     * @return  string|null
     */
    public function getMotifRefusCr()
    {
        return $this->motifRefusCr;
    }

    /**
     * Set the value of motifRefusCr
     *
     * @param  string|null  $motifRefusCr
     *
     * @return  self
     */
    public function setMotifRefusCr($motifRefusCr)
    {
        $this->motifRefusCr = $motifRefusCr;

        return $this;
    }

    /**
     * Get the value of crComms
     *
     * @return  string|null
     */
    public function getCrComms()
    {
        return $this->crComms;
    }

    /**
     * Set the value of crComms
     *
     * @param  string|null  $crComms
     *
     * @return  self
     */
    public function setCrComms($crComms)
    {
        $this->crComms = $crComms;

        return $this;
    }

    /**
     * Get the value of crType
     *
     * @return  string|null
     */
    public function getCrType()
    {
        return $this->crType;
    }

    /**
     * Set the value of crType
     *
     * @param  string|null  $crType
     *
     * @return  self
     */
    public function setCrType($crType)
    {
        $this->crType = $crType;

        return $this;
    }

    /**
     * Get the value of valoBo
     *
     * @return  float|null
     */
    public function getValoBo()
    {
        return $this->valoBo;
    }

    /**
     * Set the value of valoBo
     *
     * @param  float|null  $valoBo
     *
     * @return  self
     */
    public function setValoBo($valoBo)
    {
        $this->valoBo = $valoBo;

        return $this;
    }


}
