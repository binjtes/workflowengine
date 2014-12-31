<?php

namespace AppBundle\Entity;

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



    /**
     * Get idRole
     *
     * @return integer 
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set roleName
     *
     * @param string $roleName
     * @return AdmHabilitationRolename
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;

        return $this;
    }

    /**
     * Get roleName
     *
     * @return string 
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * Set roleDescription
     *
     * @param string $roleDescription
     * @return AdmHabilitationRolename
     */
    public function setRoleDescription($roleDescription)
    {
        $this->roleDescription = $roleDescription;

        return $this;
    }

    /**
     * Get roleDescription
     *
     * @return string 
     */
    public function getRoleDescription()
    {
        return $this->roleDescription;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     * @return AdmHabilitationRolename
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return AdmHabilitationRolename
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set modifiedBy
     *
     * @param integer $modifiedBy
     * @return AdmHabilitationRolename
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * Get modifiedBy
     *
     * @return integer 
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * Set dateModification
     *
     * @param \DateTime $dateModification
     * @return AdmHabilitationRolename
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime 
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }
}
