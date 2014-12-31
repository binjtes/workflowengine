<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmTranslations
 *
 * @ORM\Table(name="adm_translations")
 * @ORM\Entity
 */
class AdmTranslations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_phrase", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPhrase;

    /**
     * @var string
     *
     * @ORM\Column(name="stub", type="string", length=100, nullable=false)
     */
    private $stub;

    /**
     * @var string
     *
     * @ORM\Column(name="en", type="text", length=65535, nullable=false)
     */
    private $en;

    /**
     * @var string
     *
     * @ORM\Column(name="fr", type="text", length=65535, nullable=true)
     */
    private $fr;

    /**
     * @var string
     *
     * @ORM\Column(name="de", type="text", length=65535, nullable=true)
     */
    private $de;

    /**
     * @var string
     *
     * @ORM\Column(name="it", type="text", length=65535, nullable=true)
     */
    private $it;

    /**
     * @var string
     *
     * @ORM\Column(name="sp", type="text", length=65535, nullable=true)
     */
    private $sp;

    /**
     * @var string
     *
     * @ORM\Column(name="pt", type="text", length=65535, nullable=true)
     */
    private $pt;

    /**
     * @var string
     *
     * @ORM\Column(name="ru", type="text", length=65535, nullable=true)
     */
    private $ru;

    /**
     * @var string
     *
     * @ORM\Column(name="ar", type="text", length=65535, nullable=true)
     */
    private $ar;

    /**
     * @var string
     *
     * @ORM\Column(name="tr", type="text", length=65535, nullable=true)
     */
    private $tr;

    /**
     * @var string
     *
     * @ORM\Column(name="pe", type="text", length=65535, nullable=true)
     */
    private $pe;

    /**
     * @var string
     *
     * @ORM\Column(name="pl", type="text", length=65535, nullable=true)
     */
    private $pl;

    /**
     * @var string
     *
     * @ORM\Column(name="ua", type="text", length=65535, nullable=true)
     */
    private $ua;



    /**
     * Get idPhrase
     *
     * @return integer 
     */
    public function getIdPhrase()
    {
        return $this->idPhrase;
    }

    /**
     * Set stub
     *
     * @param string $stub
     * @return AdmTranslations
     */
    public function setStub($stub)
    {
        $this->stub = $stub;

        return $this;
    }

    /**
     * Get stub
     *
     * @return string 
     */
    public function getStub()
    {
        return $this->stub;
    }

    /**
     * Set en
     *
     * @param string $en
     * @return AdmTranslations
     */
    public function setEn($en)
    {
        $this->en = $en;

        return $this;
    }

    /**
     * Get en
     *
     * @return string 
     */
    public function getEn()
    {
        return $this->en;
    }

    /**
     * Set fr
     *
     * @param string $fr
     * @return AdmTranslations
     */
    public function setFr($fr)
    {
        $this->fr = $fr;

        return $this;
    }

    /**
     * Get fr
     *
     * @return string 
     */
    public function getFr()
    {
        return $this->fr;
    }

    /**
     * Set de
     *
     * @param string $de
     * @return AdmTranslations
     */
    public function setDe($de)
    {
        $this->de = $de;

        return $this;
    }

    /**
     * Get de
     *
     * @return string 
     */
    public function getDe()
    {
        return $this->de;
    }

    /**
     * Set it
     *
     * @param string $it
     * @return AdmTranslations
     */
    public function setIt($it)
    {
        $this->it = $it;

        return $this;
    }

    /**
     * Get it
     *
     * @return string 
     */
    public function getIt()
    {
        return $this->it;
    }

    /**
     * Set sp
     *
     * @param string $sp
     * @return AdmTranslations
     */
    public function setSp($sp)
    {
        $this->sp = $sp;

        return $this;
    }

    /**
     * Get sp
     *
     * @return string 
     */
    public function getSp()
    {
        return $this->sp;
    }

    /**
     * Set pt
     *
     * @param string $pt
     * @return AdmTranslations
     */
    public function setPt($pt)
    {
        $this->pt = $pt;

        return $this;
    }

    /**
     * Get pt
     *
     * @return string 
     */
    public function getPt()
    {
        return $this->pt;
    }

    /**
     * Set ru
     *
     * @param string $ru
     * @return AdmTranslations
     */
    public function setRu($ru)
    {
        $this->ru = $ru;

        return $this;
    }

    /**
     * Get ru
     *
     * @return string 
     */
    public function getRu()
    {
        return $this->ru;
    }

    /**
     * Set ar
     *
     * @param string $ar
     * @return AdmTranslations
     */
    public function setAr($ar)
    {
        $this->ar = $ar;

        return $this;
    }

    /**
     * Get ar
     *
     * @return string 
     */
    public function getAr()
    {
        return $this->ar;
    }

    /**
     * Set tr
     *
     * @param string $tr
     * @return AdmTranslations
     */
    public function setTr($tr)
    {
        $this->tr = $tr;

        return $this;
    }

    /**
     * Get tr
     *
     * @return string 
     */
    public function getTr()
    {
        return $this->tr;
    }

    /**
     * Set pe
     *
     * @param string $pe
     * @return AdmTranslations
     */
    public function setPe($pe)
    {
        $this->pe = $pe;

        return $this;
    }

    /**
     * Get pe
     *
     * @return string 
     */
    public function getPe()
    {
        return $this->pe;
    }

    /**
     * Set pl
     *
     * @param string $pl
     * @return AdmTranslations
     */
    public function setPl($pl)
    {
        $this->pl = $pl;

        return $this;
    }

    /**
     * Get pl
     *
     * @return string 
     */
    public function getPl()
    {
        return $this->pl;
    }

    /**
     * Set ua
     *
     * @param string $ua
     * @return AdmTranslations
     */
    public function setUa($ua)
    {
        $this->ua = $ua;

        return $this;
    }

    /**
     * Get ua
     *
     * @return string 
     */
    public function getUa()
    {
        return $this->ua;
    }
}
