<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmHabilitationMaster
 *
 * @ORM\Table(name="adm_habilitation_master")
 * @ORM\Entity
 */
class AdmHabilitationMaster
{
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
     * @ORM\Column(name="id_platform", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPlatform;

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
     * @var integer
     *
     * @ORM\Column(name="menu_exempt", type="smallint", nullable=true)
     */
    private $menuExempt;

    /**
     * @var integer
     *
     * @ORM\Column(name="compulsory", type="smallint", nullable=true)
     */
    private $compulsory;



    /**
     * Set module
     *
     * @param string $module
     * @return AdmHabilitationMaster
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
     * @return AdmHabilitationMaster
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
     * Set idPlatform
     *
     * @param integer $idPlatform
     * @return AdmHabilitationMaster
     */
    public function setIdPlatform($idPlatform)
    {
        $this->idPlatform = $idPlatform;

        return $this;
    }

    /**
     * Get idPlatform
     *
     * @return integer 
     */
    public function getIdPlatform()
    {
        return $this->idPlatform;
    }

    /**
     * Set insert
     *
     * @param integer $insert
     * @return AdmHabilitationMaster
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
     * @return AdmHabilitationMaster
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
     * @return AdmHabilitationMaster
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
     * @return AdmHabilitationMaster
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

    /**
     * Set menuExempt
     *
     * @param integer $menuExempt
     * @return AdmHabilitationMaster
     */
    public function setMenuExempt($menuExempt)
    {
        $this->menuExempt = $menuExempt;

        return $this;
    }

    /**
     * Get menuExempt
     *
     * @return integer 
     */
    public function getMenuExempt()
    {
        return $this->menuExempt;
    }

    /**
     * Set compulsory
     *
     * @param integer $compulsory
     * @return AdmHabilitationMaster
     */
    public function setCompulsory($compulsory)
    {
        $this->compulsory = $compulsory;

        return $this;
    }

    /**
     * Get compulsory
     *
     * @return integer 
     */
    public function getCompulsory()
    {
        return $this->compulsory;
    }
}
