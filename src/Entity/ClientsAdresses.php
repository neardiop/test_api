<?php

namespace App\Entity;

use App\Repository\ClientsAdressesRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
 * @ORM\Table(name="cogepart.clients_adresses")
 * @ORM\Entity(repositoryClass=ClientsAdressesRepository::class)
 */
class ClientsAdresses
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
    private $idzc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $denom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adr_cp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adr_ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adr_rue;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $flagmail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num_tournee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prioritaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $longitude;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_cible1;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_cible2;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_cible3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adr_complement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ascenseur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $digicode;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $digicode2;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $porte;

    /**
     * @ORM\Column(type="datetime")
     */
    private $clad_date_cre;

    /**
     * @ORM\Column(type="datetime")
     */
    private $clad_date_upd;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $clad_code_ezs;

    /**
     * @ORM\Column(type="text")
     */
    private $clad_com;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_ordre;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff1;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff2;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff3;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff4;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff5;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff_prio_1;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff_prio_2;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff_prio_3;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff_prio_4;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff_prio_5;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff_autre_1;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff_autre_2;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff_autre_3;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff_autre_4;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_cutoff_autre_5;

    /**
     * @ORM\Column(type="integer")
     */
    private $clad_saturday;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_cible4;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_cible5;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdzc(): ?int
    {
        return $this->idzc;
    }

    public function setIdzc(int $idzc): self
    {
        $this->idzc = $idzc;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDenom(): ?string
    {
        return $this->denom;
    }

    public function setDenom(string $denom): self
    {
        $this->denom = $denom;

        return $this;
    }

    public function getAdrCp(): ?string
    {
        return $this->adr_cp;
    }

    public function setAdrCp(string $adr_cp): self
    {
        $this->adr_cp = $adr_cp;

        return $this;
    }

    public function getAdrVille(): ?string
    {
        return $this->adr_ville;
    }

    public function setAdrVille(string $adr_ville): self
    {
        $this->adr_ville = $adr_ville;

        return $this;
    }

    public function getAdrRue(): ?string
    {
        return $this->adr_rue;
    }

    public function setAdrRue(string $adr_rue): self
    {
        $this->adr_rue = $adr_rue;

        return $this;
    }

    public function getTel1(): ?string
    {
        return $this->tel1;
    }

    public function setTel1(string $tel1): self
    {
        $this->tel1 = $tel1;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getTel2(): ?string
    {
        return $this->tel2;
    }

    public function setTel2(string $tel2): self
    {
        $this->tel2 = $tel2;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFlagmail(): ?string
    {
        return $this->flagmail;
    }

    public function setFlagmail(string $flagmail): self
    {
        $this->flagmail = $flagmail;

        return $this;
    }

    public function getNumTournee(): ?string
    {
        return $this->num_tournee;
    }

    public function setNumTournee(string $num_tournee): self
    {
        $this->num_tournee = $num_tournee;

        return $this;
    }

    public function getPrioritaire(): ?string
    {
        return $this->prioritaire;
    }

    public function setPrioritaire(string $prioritaire): self
    {
        $this->prioritaire = $prioritaire;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getHeureCible1(): ?\DateTimeInterface
    {
        return $this->heure_cible1;
    }

    public function setHeureCible1(\DateTimeInterface $heure_cible1): self
    {
        $this->heure_cible1 = $heure_cible1;

        return $this;
    }

    public function getHeureCible2(): ?\DateTimeInterface
    {
        return $this->heure_cible2;
    }

    public function setHeureCible2(\DateTimeInterface $heure_cible2): self
    {
        $this->heure_cible2 = $heure_cible2;

        return $this;
    }

    public function getHeureCible3(): ?\DateTimeInterface
    {
        return $this->heure_cible3;
    }

    public function setHeureCible3(\DateTimeInterface $heure_cible3): self
    {
        $this->heure_cible3 = $heure_cible3;

        return $this;
    }

    public function getEtage(): ?string
    {
        return $this->etage;
    }

    public function setEtage(string $etage): self
    {
        $this->etage = $etage;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdrComplement(): ?string
    {
        return $this->adr_complement;
    }

    public function setAdrComplement(string $adr_complement): self
    {
        $this->adr_complement = $adr_complement;

        return $this;
    }

    public function getAscenseur(): ?string
    {
        return $this->ascenseur;
    }

    public function setAscenseur(string $ascenseur): self
    {
        $this->ascenseur = $ascenseur;

        return $this;
    }

    public function getDigicode(): ?string
    {
        return $this->digicode;
    }

    public function setDigicode(string $digicode): self
    {
        $this->digicode = $digicode;

        return $this;
    }

    public function getDigicode2(): ?string
    {
        return $this->digicode2;
    }

    public function setDigicode2(string $digicode2): self
    {
        $this->digicode2 = $digicode2;

        return $this;
    }

    public function getPorte(): ?string
    {
        return $this->porte;
    }

    public function setPorte(string $porte): self
    {
        $this->porte = $porte;

        return $this;
    }

    public function getCladDateCre(): ?\DateTimeInterface
    {
        return $this->clad_date_cre;
    }

    public function setCladDateCre(\DateTimeInterface $clad_date_cre): self
    {
        $this->clad_date_cre = $clad_date_cre;

        return $this;
    }

    public function getCladDateUpd(): ?\DateTimeInterface
    {
        return $this->clad_date_upd;
    }

    public function setCladDateUpd(\DateTimeInterface $clad_date_upd): self
    {
        $this->clad_date_upd = $clad_date_upd;

        return $this;
    }

    public function getCladCodeEzs(): ?string
    {
        return $this->clad_code_ezs;
    }

    public function setCladCodeEzs(string $clad_code_ezs): self
    {
        $this->clad_code_ezs = $clad_code_ezs;

        return $this;
    }

    public function getCladCom(): ?string
    {
        return $this->clad_com;
    }

    public function setCladCom(string $clad_com): self
    {
        $this->clad_com = $clad_com;

        return $this;
    }

    public function getCladOrdre(): ?int
    {
        return $this->clad_ordre;
    }

    public function setCladOrdre(int $clad_ordre): self
    {
        $this->clad_ordre = $clad_ordre;

        return $this;
    }

    public function getCladCutoff1(): ?int
    {
        return $this->clad_cutoff1;
    }

    public function setCladCutoff1(int $clad_cutoff1): self
    {
        $this->clad_cutoff1 = $clad_cutoff1;

        return $this;
    }

    public function getCladCutoff2(): ?int
    {
        return $this->clad_cutoff2;
    }

    public function setCladCutoff2(int $clad_cutoff2): self
    {
        $this->clad_cutoff2 = $clad_cutoff2;

        return $this;
    }

    public function getCladCutoff3(): ?int
    {
        return $this->clad_cutoff3;
    }

    public function setCladCutoff3(int $clad_cutoff3): self
    {
        $this->clad_cutoff3 = $clad_cutoff3;

        return $this;
    }

    public function getCladCutoff4(): ?int
    {
        return $this->clad_cutoff4;
    }

    public function setCladCutoff4(int $clad_cutoff4): self
    {
        $this->clad_cutoff4 = $clad_cutoff4;

        return $this;
    }

    public function getCladCutoff5(): ?int
    {
        return $this->clad_cutoff5;
    }

    public function setCladCutoff5(int $clad_cutoff5): self
    {
        $this->clad_cutoff5 = $clad_cutoff5;

        return $this;
    }

    public function getCladCutoffPrio1(): ?int
    {
        return $this->clad_cutoff_prio_1;
    }

    public function setCladCutoffPrio1(int $clad_cutoff_prio_1): self
    {
        $this->clad_cutoff_prio_1 = $clad_cutoff_prio_1;

        return $this;
    }

    public function getCladCutoffPrio2(): ?int
    {
        return $this->clad_cutoff_prio_2;
    }

    public function setCladCutoffPrio2(int $clad_cutoff_prio_2): self
    {
        $this->clad_cutoff_prio_2 = $clad_cutoff_prio_2;

        return $this;
    }

    public function getCladCutoffPrio3(): ?int
    {
        return $this->clad_cutoff_prio_3;
    }

    public function setCladCutoffPrio3(int $clad_cutoff_prio_3): self
    {
        $this->clad_cutoff_prio_3 = $clad_cutoff_prio_3;

        return $this;
    }

    public function getCladCutoffPrio4(): ?int
    {
        return $this->clad_cutoff_prio_4;
    }

    public function setCladCutoffPrio4(int $clad_cutoff_prio_4): self
    {
        $this->clad_cutoff_prio_4 = $clad_cutoff_prio_4;

        return $this;
    }

    public function getCladCutoffPrio5(): ?int
    {
        return $this->clad_cutoff_prio_5;
    }

    public function setCladCutoffPrio5(int $clad_cutoff_prio_5): self
    {
        $this->clad_cutoff_prio_5 = $clad_cutoff_prio_5;

        return $this;
    }

    public function getCladCutoffAutre1(): ?int
    {
        return $this->clad_cutoff_autre_1;
    }

    public function setCladCutoffAutre1(int $clad_cutoff_autre_1): self
    {
        $this->clad_cutoff_autre_1 = $clad_cutoff_autre_1;

        return $this;
    }

    public function getCladCutoffAutre2(): ?int
    {
        return $this->clad_cutoff_autre_2;
    }

    public function setCladCutoffAutre2(int $clad_cutoff_autre_2): self
    {
        $this->clad_cutoff_autre_2 = $clad_cutoff_autre_2;

        return $this;
    }

    public function getCladCutoffAutre3(): ?int
    {
        return $this->clad_cutoff_autre_3;
    }

    public function setCladCutoffAutre3(int $clad_cutoff_autre_3): self
    {
        $this->clad_cutoff_autre_3 = $clad_cutoff_autre_3;

        return $this;
    }

    public function getCladCutoffAutre4(): ?int
    {
        return $this->clad_cutoff_autre_4;
    }

    public function setCladCutoffAutre4(int $clad_cutoff_autre_4): self
    {
        $this->clad_cutoff_autre_4 = $clad_cutoff_autre_4;

        return $this;
    }

    public function getCladCutoffAutre5(): ?int
    {
        return $this->clad_cutoff_autre_5;
    }

    public function setCladCutoffAutre5(int $clad_cutoff_autre_5): self
    {
        $this->clad_cutoff_autre_5 = $clad_cutoff_autre_5;

        return $this;
    }

    public function getCladSaturday(): ?int
    {
        return $this->clad_saturday;
    }

    public function setCladSaturday(int $clad_saturday): self
    {
        $this->clad_saturday = $clad_saturday;

        return $this;
    }

    public function getHeureCible4(): ?\DateTimeInterface
    {
        return $this->heure_cible4;
    }

    public function setHeureCible4(\DateTimeInterface $heure_cible4): self
    {
        $this->heure_cible4 = $heure_cible4;

        return $this;
    }

    public function getHeureCible5(): ?\DateTimeInterface
    {
        return $this->heure_cible5;
    }

    public function setHeureCible5(\DateTimeInterface $heure_cible5): self
    {
        $this->heure_cible5 = $heure_cible5;

        return $this;
    }
}
