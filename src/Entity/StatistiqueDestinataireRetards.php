<?php

namespace App\Entity;

use App\Repository\StatistiqueDestinataireRetardsRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass=StatistiqueDestinataireRetardsRepository::class)
 */
class StatistiqueDestinataireRetards
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
    private $nombre_missions_retardees_enlevement;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_colis_retardes_enlevement;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_missions_retardees_livraison;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_colis_retardes_livraison;

    /**
     * @ORM\Column(type="date")
     */
    private $date_livraison;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Clients")
     */
    public $clients;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ClientsAdresses")
     */
    public $clientsAdresses;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreMissionsRetardeesEnlevement(): ?int
    {
        return $this->nombre_missions_retardees_enlevement;
    }

    public function setNombreMissionsRetardeesEnlevement(int $nombre_missions_retardees_enlevement): self
    {
        $this->nombre_missions_retardees_enlevement = $nombre_missions_retardees_enlevement;

        return $this;
    }

    public function getNombreColisRetardesEnlevement(): ?int
    {
        return $this->nombre_colis_retardes_enlevement;
    }

    public function setNombreColisRetardesEnlevement(int $nombre_colis_retardes_enlevement): self
    {
        $this->nombre_colis_retardes_enlevement = $nombre_colis_retardes_enlevement;

        return $this;
    }

    public function getNombreMissionsRetardeesLivraison(): ?int
    {
        return $this->nombre_missions_retardees_livraison;
    }

    public function setNombreMissionsRetardeesLivraison(int $nombre_missions_retardees_livraison): self
    {
        $this->nombre_missions_retardees_livraison = $nombre_missions_retardees_livraison;

        return $this;
    }

    public function getNombreColisRetardesLivraison(): ?int
    {
        return $this->nombre_colis_retardes_livraison;
    }

    public function setNombreColisRetardesLivraison(int $nombre_colis_retardes_livraison): self
    {
        $this->nombre_colis_retardes_livraison = $nombre_colis_retardes_livraison;

        return $this;
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

    public function getClient(){
        return $this->clients;
    }

    public function setClient($clients){
        $this->clients = $clients;
    }

    /**
     * Get the value of clientsAdresses
     */ 
    public function getClientsAdresses()
    {
        return $this->clientsAdresses;
    }

    /**
     * Set the value of clientsAdresses
     *
     * @return  self
     */ 
    public function setClientsAdresses($clientsAdresses)
    {
        $this->clientsAdresses = $clientsAdresses;

        return $this;
    }
}
