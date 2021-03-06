<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmHabilitationRolename
 *
 * @ORM\Table(name="adm_habilitation_rolename")
 * @ORM\Entity
 */
class AdmHabilitationRolename
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_role", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRole;

    /**
     * @var string
     *
     * @ORM\Column(name="role_name", type="string", length=40, nullable=false)
     */
    private $roleName;

    /**
     * @var string
     *
     * @ORM\Column(name="role_description", type="string", length=200, nullable=true)
     */
    private $roleDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", nullable=false)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer", nullable=true)
     */
    private $modifiedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modification", type="datetime", nullable=true)
     */
    private $dateModification;


}
