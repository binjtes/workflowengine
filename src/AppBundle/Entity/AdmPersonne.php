<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmPersonne
 *
 * @ORM\Table(name="adm_personne")
 * @ORM\Entity
 */
class AdmPersonne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="matricule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=60, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=60, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="societe", type="string", length=20, nullable=true)
     */
    private $societe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isDeleted", type="boolean", nullable=false)
     */
    private $isdeleted;



    /**
     * Get matricule
     *
     * @return integer 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return AdmPersonne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return AdmPersonne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set societe
     *
     * @param string $societe
     * @return AdmPersonne
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string 
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set isdeleted
     *
     * @param boolean $isdeleted
     * @return AdmPersonne
     */
    public function setIsdeleted($isdeleted)
    {
        $this->isdeleted = $isdeleted;

        return $this;
    }

    /**
     * Get isdeleted
     *
     * @return boolean 
     */
    public function getIsdeleted()
    {
        return $this->isdeleted;
    }
}
