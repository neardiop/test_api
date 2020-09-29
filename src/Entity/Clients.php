<?php

namespace App\Entity;

use App\Repository\ClientsRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass=ClientsRepository::class)
 */
class Clients implements UserInterface
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
    private $client_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_client;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_actif;

    /**
     * @ORM\Column(type="integer")
     */
    private $delais_livraison;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ClientsGroupes")
     */
    public $clientsGroupes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CodeAgence")
     */
    public $codeAgence;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientId(): ?int
    {
        return $this->client_id;
    }

    public function setClientId(int $clientId): self
    {
        $this->client_id = $clientId;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNomClient(): ?string
    {
        return $this->nom_client;
    }

    public function setNomClient(string $nom_client): self
    {
        $this->nom_client = $nom_client;

        return $this;
    }

    public function getIsActif(): ?bool
    {
        return $this->is_actif;
    }

    public function setIsActif(bool $is_actif): self
    {
        $this->is_actif = $is_actif;

        return $this;
    }

    public function getClientsGroups(){
        return $this->clientsGroupes;
    }

    public function setClientsGroups($clientsGroups){
        $this->clientsGroupes = $clientsGroups;
    }

    public function getCodeAgence(){
        return $this->codeAgence;
    }

    public function setCodeAgence($codeAgence){
        $this->codeAgence = $codeAgence;
    }

    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    public function getSalt()
    {
        // leaving blank - I don't need/have a password!
    }

    public function eraseCredentials()
    {
        // leaving blank - I don't need/have a password!
    }

    /**
     * Get the value of delais_livraison
     */ 
    public function getDelaisLivraison()
    {
        return $this->delais_livraison;
    }

    /**
     * Set the value of delais_livraison
     *
     * @return  self
     */ 
    public function setDelaisLivraison($delais_livraison)
    {
        $this->delais_livraison = $delais_livraison;

        return $this;
    }
}
