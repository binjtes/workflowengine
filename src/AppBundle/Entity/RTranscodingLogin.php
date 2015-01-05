<?php

namespace AppBundle\Entity;

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



    /**
     * Get idLogin
     *
     * @return integer 
     */
    public function getIdLogin()
    {
        return $this->idLogin;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return RTranscodingLogin
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set canSubmit
     *
     * @param boolean $canSubmit
     * @return RTranscodingLogin
     */
    public function setCanSubmit($canSubmit)
    {
        $this->canSubmit = $canSubmit;

        return $this;
    }

    /**
     * Get canSubmit
     *
     * @return boolean 
     */
    public function getCanSubmit()
    {
        return $this->canSubmit;
    }

    /**
     * Set idMachineDefault
     *
     * @param integer $idMachineDefault
     * @return RTranscodingLogin
     */
    public function setIdMachineDefault($idMachineDefault)
    {
        $this->idMachineDefault = $idMachineDefault;

        return $this;
    }

    /**
     * Get idMachineDefault
     *
     * @return integer 
     */
    public function getIdMachineDefault()
    {
        return $this->idMachineDefault;
    }
}
