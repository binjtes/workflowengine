<?php

namespace AppBundle\Entity;

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
     * Set webmailLogin
     *
     * @param string $webmailLogin
     * @return AdmUserPreferences
     */
    public function setWebmailLogin($webmailLogin)
    {
        $this->webmailLogin = $webmailLogin;

        return $this;
    }

    /**
     * Get webmailLogin
     *
     * @return string 
     */
    public function getWebmailLogin()
    {
        return $this->webmailLogin;
    }

    /**
     * Set webmailPassword
     *
     * @param string $webmailPassword
     * @return AdmUserPreferences
     */
    public function setWebmailPassword($webmailPassword)
    {
        $this->webmailPassword = $webmailPassword;

        return $this;
    }

    /**
     * Get webmailPassword
     *
     * @return string 
     */
    public function getWebmailPassword()
    {
        return $this->webmailPassword;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return AdmUserPreferences
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set workTelephone
     *
     * @param string $workTelephone
     * @return AdmUserPreferences
     */
    public function setWorkTelephone($workTelephone)
    {
        $this->workTelephone = $workTelephone;

        return $this;
    }

    /**
     * Get workTelephone
     *
     * @return string 
     */
    public function getWorkTelephone()
    {
        return $this->workTelephone;
    }
}
