<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RLngLanguage
 *
 * @ORM\Table(name="r_lng_language", uniqueConstraints={@ORM\UniqueConstraint(name="lng_mixnews_iid_UNIQUE", columns={"lng_mixnews_iid"})})
 * @ORM\Entity
 */
class RLngLanguage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lng_iid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lngIid;

    /**
     * @var string
     *
     * @ORM\Column(name="lng_salias", type="string", length=2, nullable=false)
     */
    private $lngSalias;

    /**
     * @var string
     *
     * @ORM\Column(name="lng_harris", type="string", length=2, nullable=true)
     */
    private $lngHarris;

    /**
     * @var string
     *
     * @ORM\Column(name="lng_fullname", type="text", length=65535, nullable=false)
     */
    private $lngFullname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lng_rtl", type="boolean", nullable=false)
     */
    private $lngRtl = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="live", type="boolean", nullable=false)
     */
    private $live = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lng_subdomain", type="string", length=45, nullable=false)
     */
    private $lngSubdomain;

    /**
     * @var string
     *
     * @ORM\Column(name="lng_collate_locale", type="string", length=55, nullable=true)
     */
    private $lngCollateLocale;

    /**
     * @var string
     *
     * @ORM\Column(name="lng_drupal_code", type="string", length=10, nullable=true)
     */
    private $lngDrupalCode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="position", type="boolean", nullable=true)
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="lng_mixnews_iid", type="integer", nullable=false)
     */
    private $lngMixnewsIid = '1';



    /**
     * Get lngIid
     *
     * @return integer 
     */
    public function getLngIid()
    {
        return $this->lngIid;
    }

    /**
     * Set lngSalias
     *
     * @param string $lngSalias
     * @return RLngLanguage
     */
    public function setLngSalias($lngSalias)
    {
        $this->lngSalias = $lngSalias;

        return $this;
    }

    /**
     * Get lngSalias
     *
     * @return string 
     */
    public function getLngSalias()
    {
        return $this->lngSalias;
    }

    /**
     * Set lngHarris
     *
     * @param string $lngHarris
     * @return RLngLanguage
     */
    public function setLngHarris($lngHarris)
    {
        $this->lngHarris = $lngHarris;

        return $this;
    }

    /**
     * Get lngHarris
     *
     * @return string 
     */
    public function getLngHarris()
    {
        return $this->lngHarris;
    }

    /**
     * Set lngFullname
     *
     * @param string $lngFullname
     * @return RLngLanguage
     */
    public function setLngFullname($lngFullname)
    {
        $this->lngFullname = $lngFullname;

        return $this;
    }

    /**
     * Get lngFullname
     *
     * @return string 
     */
    public function getLngFullname()
    {
        return $this->lngFullname;
    }

    /**
     * Set lngRtl
     *
     * @param boolean $lngRtl
     * @return RLngLanguage
     */
    public function setLngRtl($lngRtl)
    {
        $this->lngRtl = $lngRtl;

        return $this;
    }

    /**
     * Get lngRtl
     *
     * @return boolean 
     */
    public function getLngRtl()
    {
        return $this->lngRtl;
    }

    /**
     * Set live
     *
     * @param boolean $live
     * @return RLngLanguage
     */
    public function setLive($live)
    {
        $this->live = $live;

        return $this;
    }

    /**
     * Get live
     *
     * @return boolean 
     */
    public function getLive()
    {
        return $this->live;
    }

    /**
     * Set lngSubdomain
     *
     * @param string $lngSubdomain
     * @return RLngLanguage
     */
    public function setLngSubdomain($lngSubdomain)
    {
        $this->lngSubdomain = $lngSubdomain;

        return $this;
    }

    /**
     * Get lngSubdomain
     *
     * @return string 
     */
    public function getLngSubdomain()
    {
        return $this->lngSubdomain;
    }

    /**
     * Set lngCollateLocale
     *
     * @param string $lngCollateLocale
     * @return RLngLanguage
     */
    public function setLngCollateLocale($lngCollateLocale)
    {
        $this->lngCollateLocale = $lngCollateLocale;

        return $this;
    }

    /**
     * Get lngCollateLocale
     *
     * @return string 
     */
    public function getLngCollateLocale()
    {
        return $this->lngCollateLocale;
    }

    /**
     * Set lngDrupalCode
     *
     * @param string $lngDrupalCode
     * @return RLngLanguage
     */
    public function setLngDrupalCode($lngDrupalCode)
    {
        $this->lngDrupalCode = $lngDrupalCode;

        return $this;
    }

    /**
     * Get lngDrupalCode
     *
     * @return string 
     */
    public function getLngDrupalCode()
    {
        return $this->lngDrupalCode;
    }

    /**
     * Set position
     *
     * @param boolean $position
     * @return RLngLanguage
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return boolean 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set lngMixnewsIid
     *
     * @param integer $lngMixnewsIid
     * @return RLngLanguage
     */
    public function setLngMixnewsIid($lngMixnewsIid)
    {
        $this->lngMixnewsIid = $lngMixnewsIid;

        return $this;
    }

    /**
     * Get lngMixnewsIid
     *
     * @return integer 
     */
    public function getLngMixnewsIid()
    {
        return $this->lngMixnewsIid;
    }
}
