<?php

namespace App\Entity;

use App\Repository\NumeroTourneeRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\NumericFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;

/**
 * @ApiResource
 * @ApiFilter(NumericFilter::class, properties={"clients.client_id"})
 * @ApiFilter(NumericFilter::class, properties={"client_id"})
 * @ORM\Table(name="new_cogepart.client_tournee")
 * @ORM\Entity(repositoryClass=NumeroTourneeRepository::class)
 */
class NumeroTournee
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(type="integer")
     */
    private $client_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_update;

    /**
     * @ORM\Column(type="integer")
     */
    private $use_qr_code;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of client_id
     */ 
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Set the value of client_id
     *
     * @return  self
     */ 
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;

        return $this;
    }

    /**
     * Get the value of date_update
     */ 
    public function getDateUpdate()
    {
        return $this->date_update;
    }

    /**
     * Set the value of date_update
     *
     * @return  self
     */ 
    public function setDateUpdate($date_update)
    {
        $this->date_update = $date_update;

        return $this;
    }
}
