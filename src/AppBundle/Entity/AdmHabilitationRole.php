<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmHabilitationRole
 *
 * @ORM\Table(name="adm_habilitation_role")
 * @ORM\Entity
 */
class AdmHabilitationRole
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_role", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idRole;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="page", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $page;

    /**
     * @var integer
     *
     * @ORM\Column(name="insert", type="integer", nullable=false)
     */
    private $insert;

    /**
     * @var integer
     *
     * @ORM\Column(name="update", type="integer", nullable=false)
     */
    private $update;

    /**
     * @var integer
     *
     * @ORM\Column(name="delete", type="integer", nullable=false)
     */
    private $delete;

    /**
     * @var integer
     *
     * @ORM\Column(name="access", type="integer", nullable=false)
     */
    private $access;



    /**
     * Set idRole
     *
     * @param integer $idRole
     * @return AdmHabilitationRole
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;

        return $this;
    }

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
     * Set module
     *
     * @param string $module
     * @return AdmHabilitationRole
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set page
     *
     * @param string $page
     * @return AdmHabilitationRole
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return string 
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set insert
     *
     * @param integer $insert
     * @return AdmHabilitationRole
     */
    public function setInsert($insert)
    {
        $this->insert = $insert;

        return $this;
    }

    /**
     * Get insert
     *
     * @return integer 
     */
    public function getInsert()
    {
        return $this->insert;
    }

    /**
     * Set update
     *
     * @param integer $update
     * @return AdmHabilitationRole
     */
    public function setUpdate($update)
    {
        $this->update = $update;

        return $this;
    }

    /**
     * Get update
     *
     * @return integer 
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * Set delete
     *
     * @param integer $delete
     * @return AdmHabilitationRole
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;

        return $this;
    }

    /**
     * Get delete
     *
     * @return integer 
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * Set access
     *
     * @param integer $access
     * @return AdmHabilitationRole
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return integer 
     */
    public function getAccess()
    {
        return $this->access;
    }
}
