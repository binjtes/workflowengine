<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmGroups2
 *
 * @ORM\Table(name="adm_groups2")
 * @ORM\Entity
 */
class AdmGroups2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_grp", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrp;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_grp", type="string", length=100, nullable=true)
     */
    private $libGrp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_crea", type="datetime", nullable=true)
     */
    private $dtCrea;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_crea", type="integer", nullable=true)
     */
    private $idCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_modif", type="datetime", nullable=true)
     */
    private $dtModif;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_modif", type="integer", nullable=true)
     */
    private $idModif;



    /**
     * Get idGrp
     *
     * @return integer 
     */
    public function getIdGrp()
    {
        return $this->idGrp;
    }

    /**
     * Set libGrp
     *
     * @param string $libGrp
     * @return AdmGroups2
     */
    public function setLibGrp($libGrp)
    {
        $this->libGrp = $libGrp;

        return $this;
    }

    /**
     * Get libGrp
     *
     * @return string 
     */
    public function getLibGrp()
    {
        return $this->libGrp;
    }

    /**
     * Set dtCrea
     *
     * @param \DateTime $dtCrea
     * @return AdmGroups2
     */
    public function setDtCrea($dtCrea)
    {
        $this->dtCrea = $dtCrea;

        return $this;
    }

    /**
     * Get dtCrea
     *
     * @return \DateTime 
     */
    public function getDtCrea()
    {
        return $this->dtCrea;
    }

    /**
     * Set idCrea
     *
     * @param integer $idCrea
     * @return AdmGroups2
     */
    public function setIdCrea($idCrea)
    {
        $this->idCrea = $idCrea;

        return $this;
    }

    /**
     * Get idCrea
     *
     * @return integer 
     */
    public function getIdCrea()
    {
        return $this->idCrea;
    }

    /**
     * Set dtModif
     *
     * @param \DateTime $dtModif
     * @return AdmGroups2
     */
    public function setDtModif($dtModif)
    {
        $this->dtModif = $dtModif;

        return $this;
    }

    /**
     * Get dtModif
     *
     * @return \DateTime 
     */
    public function getDtModif()
    {
        return $this->dtModif;
    }

    /**
     * Set idModif
     *
     * @param integer $idModif
     * @return AdmGroups2
     */
    public function setIdModif($idModif)
    {
        $this->idModif = $idModif;

        return $this;
    }

    /**
     * Get idModif
     *
     * @return integer 
     */
    public function getIdModif()
    {
        return $this->idModif;
    }
}
