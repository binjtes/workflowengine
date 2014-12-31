<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmHabilitationUser
 *
 * @ORM\Table(name="adm_habilitation_user")
 * @ORM\Entity
 */
class AdmHabilitationUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="page", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $page;

    /**
     * @var integer
     *
     * @ORM\Column(name="insert", type="smallint", nullable=false)
     */
    private $insert;

    /**
     * @var integer
     *
     * @ORM\Column(name="update", type="smallint", nullable=false)
     */
    private $update;

    /**
     * @var integer
     *
     * @ORM\Column(name="delete", type="smallint", nullable=false)
     */
    private $delete;

    /**
     * @var integer
     *
     * @ORM\Column(name="access", type="smallint", nullable=false)
     */
    private $access;



    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return AdmHabilitationUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set module
     *
     * @param string $module
     * @return AdmHabilitationUser
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
     * @return AdmHabilitationUser
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
     * @return AdmHabilitationUser
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
     * @return AdmHabilitationUser
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
     * @return AdmHabilitationUser
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
     * @return AdmHabilitationUser
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
