<?php

namespace Acme\HelloBundle\Entity;

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


}
