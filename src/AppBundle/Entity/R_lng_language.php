<?php

namespace AppBundle\Entity ;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Exclude;

/**
 * R_lng_language
 *
 * @ORM\Table("r_lng_language")
 * @ORm\Entity
 */

class R_lng_language {
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="lng_iid", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="lng_salias", type="string", length=2)
	 */	
	
	private $alias ;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="lng_harris", type="string", length=2)
	 */
	
	private $harris ;
	
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="lng_fullname", type="string", length=100)
	 */
	
	private $fullname ;
	
	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="lng_rtl", type="boolean")
	 */
	
	private $is_rtl ;
	
	
	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="live", type="boolean")
	 */
	
	private $is_live ;
	
	

	/**
	 * @var string
	 *
	 * @ORM\Column(name="lng_subdomain", type="string", length=45)
	 */
	
	private $subdomain ;
	
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="lng_collate_locale", type="string", length=55)
	 */
	
	private $locale ;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="lng_drupal_code", type="string", length=10)
	 */
	
	private $drupalcode ;
	
	
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="position", type="integer" )
	 */
	
	private $position ;		
	
	
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="lng_mixnews_iid", type="integer" )
	 */
	
	private $mixnewsid ;
	


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return R_lng_language
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set harris
     *
     * @param string $harris
     * @return R_lng_language
     */
    public function setHarris($harris)
    {
        $this->harris = $harris;

        return $this;
    }

    /**
     * Get harris
     *
     * @return string 
     */
    public function getHarris()
    {
        return $this->harris;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     * @return R_lng_language
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set is_rtl
     *
     * @param boolean $isRtl
     * @return R_lng_language
     */
    public function setIsRtl($isRtl)
    {
        $this->is_rtl = $isRtl;

        return $this;
    }

    /**
     * Get is_rtl
     *
     * @return boolean 
     */
    public function getIsRtl()
    {
        return $this->is_rtl;
    }

    /**
     * Set is_live
     *
     * @param boolean $isLive
     * @return R_lng_language
     */
    public function setIsLive($isLive)
    {
        $this->is_live = $isLive;

        return $this;
    }

    /**
     * Get is_live
     *
     * @return boolean 
     */
    public function getIsLive()
    {
        return $this->is_live;
    }

    /**
     * Set subdomain
     *
     * @param string $subdomain
     * @return R_lng_language
     */
    public function setSubdomain($subdomain)
    {
        $this->subdomain = $subdomain;

        return $this;
    }

    /**
     * Get subdomain
     *
     * @return string 
     */
    public function getSubdomain()
    {
        return $this->subdomain;
    }

    /**
     * Set locale
     *
     * @param string $locale
     * @return R_lng_language
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string 
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set drupalcode
     *
     * @param string $drupalcode
     * @return R_lng_language
     */
    public function setDrupalcode($drupalcode)
    {
        $this->drupalcode = $drupalcode;

        return $this;
    }

    /**
     * Get drupalcode
     *
     * @return string 
     */
    public function getDrupalcode()
    {
        return $this->drupalcode;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return R_lng_language
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set mixnewsid
     *
     * @param integer $mixnewsid
     * @return R_lng_language
     */
    public function setMixnewsid($mixnewsid)
    {
        $this->mixnewsid = $mixnewsid;

        return $this;
    }

    /**
     * Get mixnewsid
     *
     * @return integer 
     */
    public function getMixnewsid()
    {
        return $this->mixnewsid;
    }
}
