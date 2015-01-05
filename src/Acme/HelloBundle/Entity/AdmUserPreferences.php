<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmUserPreferences
 *
 * @ORM\Table(name="adm_user_preferences")
 * @ORM\Entity
 */
class AdmUserPreferences
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="webmail_login", type="string", length=30, nullable=true)
     */
    private $webmailLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="webmail_password", type="string", length=30, nullable=true)
     */
    private $webmailPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=2, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="work_telephone", type="string", length=60, nullable=true)
     */
    private $workTelephone;


}
