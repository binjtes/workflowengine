<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RLngLanguage
 *
 * @ORM\Table(name="r_lng_language", uniqueConstraints={@ORM\UniqueConstraint(name="lng_iid_UNIQUE", columns={"lng_iid"})})
 * @ORM\Entity
 */
class RLngLanguage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lng_mixnews_iid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lngMixnewsIid;

    /**
     * @var integer
     *
     * @ORM\Column(name="lng_iid", type="integer", nullable=false)
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
    private $lngRtl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="live", type="boolean", nullable=false)
     */
    private $live;

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


}
