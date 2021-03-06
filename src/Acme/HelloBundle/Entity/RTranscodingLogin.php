<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RTranscodingLogin
 *
 * @ORM\Table(name="r_transcoding_login")
 * @ORM\Entity
 */
class RTranscodingLogin
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_login", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=false)
     */
    private $login;

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_submit", type="boolean", nullable=false)
     */
    private $canSubmit;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_machine_default", type="integer", nullable=false)
     */
    private $idMachineDefault;


}
