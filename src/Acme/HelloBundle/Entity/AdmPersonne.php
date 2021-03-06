<?php

namespace Acme\HelloBundle\Entity;

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


}
