<?php

namespace App\Entity;

use App\Repository\StatistiqueTourneeRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\NumericFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;

/**
 * @ApiResource()
 * @ApiFilter(NumericFilter::class, properties={"clients.client_id"})
 * @ApiFilter(SearchFilter::class, properties={"numeroTournee.libelle"})
 * @ApiFilter(DateFilter::class, properties={"date_livraison"})
 * @ORM\Entity(repositoryClass=StatistiqueTourneeRepository::class)
 */
class StatistiqueTournee
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_missions_prevues;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_colis_prevus;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_missions_enlevees;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_colis_enleves;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_missions_enlevees_scan;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_colis_enleves_scan;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_missions_livrees;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_colis_livres;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_missions_livrees_scan;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_colis_livres_scan;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_missions_retardees;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_colis_retardes;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_missions_retardees_livraison;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_missions_retardees_enlevement;

    /**
     * @ORM\Column(type="date")
     */
    private $date_livraison;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Clients")
     */
    public $clients;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\NumeroTournee")
     */
    public $numeroTournee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreMissionsPrevues(): ?int
    {
        return $this->nombre_missions_prevues;
    }

    public function setNombreMissionsPrevues(int $nombre_missions_prevues): self
    {
        $this->nombre_missions_prevues = $nombre_missions_prevues;

        return $this;
    }

    public function getNombreColisPrevus(): ?int
    {
        return $this->nombre_colis_prevus;
    }

    public function setNombreColisPrevus(int $nombre_colis_prevus): self
    {
        $this->nombre_colis_prevus = $nombre_colis_prevus;

        return $this;
    }

    public function getNombreMissionsEnlevees(): ?int
    {
        return $this->nombre_missions_enlevees;
    }

    public function setNombreMissionsEnlevees(int $nombre_missions_enlevees): self
    {
        $this->nombre_missions_enlevees = $nombre_missions_enlevees;

        return $this;
    }

    public function getNombreColisEnleves(): ?int
    {
        return $this->nombre_colis_enleves;
    }

    public function setNombreColisEnleves(int $nombre_colis_enleves): self
    {
        $this->nombre_colis_enleves = $nombre_colis_enleves;

        return $this;
    }

    public function getNombreMissionsEnleveesScan(): ?int
    {
        return $this->nombre_missions_enlevees_scan;
    }

    public function setNombreMissionsEnleveesScan(int $nombre_missions_enlevees_scan): self
    {
        $this->nombre_missions_enlevees_scan = $nombre_missions_enlevees_scan;

        return $this;
    }

    public function getNombreColisEnlevesScan(): ?int
    {
        return $this->nombre_colis_enleves_scan;
    }

    public function setNombreColisEnlevesScan(int $nombre_colis_enleves_scan): self
    {
        $this->nombre_colis_enleves_scan = $nombre_colis_enleves_scan;

        return $this;
    }

    public function getNombreMissionsLivrees(): ?int
    {
        return $this->nombre_missions_livrees;
    }

    public function setNombreMissionsLivrees(int $nombre_missions_livrees): self
    {
        $this->nombre_missions_livrees = $nombre_missions_livrees;

        return $this;
    }

    public function getNombreColisLivres(): ?int
    {
        return $this->nombre_colis_livres;
    }

    public function setNombreColisLivres(int $nombre_colis_livres): self
    {
        $this->nombre_colis_livres = $nombre_colis_livres;

        return $this;
    }

    public function getNombreMissionsLivreesScan(): ?int
    {
        return $this->nombre_missions_livrees_scan;
    }

    public function setNombreMissionsLivreesScan(int $nombre_missions_livrees_scan): self
    {
        $this->nombre_missions_livrees_scan = $nombre_missions_livrees_scan;

        return $this;
    }

    public function getNombreColisLivresScan(): ?int
    {
        return $this->nombre_colis_livres_scan;
    }

    public function setNombreColisLivresScan(int $nombre_colis_livres_scan): self
    {
        $this->nombre_colis_livres_scan = $nombre_colis_livres_scan;

        return $this;
    }

    public function getNombreMissionsRetardees(): ?int
    {
        return $this->nombre_missions_retardees;
    }

    public function setNombreMissionsRetardees(int $nombre_missions_retardees): self
    {
        $this->nombre_missions_retardees = $nombre_missions_retardees;

        return $this;
    }

    public function getNombreColisRetardes(): ?int
    {
        return $this->nombre_colis_retardes;
    }

    public function setNombreColisRetardes(int $nombre_colis_retardes): self
    {
        $this->nombre_colis_retardes = $nombre_colis_retardes;

        return $this;
    }

    public function getNombreMissionsRetardeesLivraison(){
        return $this->nombre_missions_retardees_livraison;
    }

    public function setNombreMissionsRetardeesLivraison($nombre_missions_retardees_livraison){
        $this->nombre_missions_retardees_livraison = $nombre_missions_retardees_livraison;
    }

    public function getNombreMissionsRetardeesEnlevement(){
        return $this->nombre_missions_retardees_enlevement;
    }

    public function setnombreMissionsRetardeesEnlevement($nombre_missions_retardees_enlevement){
        $this->nombre_missions_retardees_enlevement = $nombre_missions_retardees_enlevement;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->date_livraison;
    }

    public function setDateLivraison(\DateTimeInterface $date_livraison): self
    {
        $this->date_livraison = $date_livraison;

        return $this;
    }

    public function getNumerotournee(){
        return $this->numeroTournee;
    }

    public function setNumeroTournee($numeroTournee){
        $this->numeroTournee = $numeroTournee;
    }

    /**
     * Get the value of clients
     */ 
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * Set the value of clients
     *
     * @return  self
     */ 
    public function setClients($clients)
    {
        $this->clients = $clients;

        return $this;
    }
    
}
