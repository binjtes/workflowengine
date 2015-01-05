<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmUsers
 *
 * @ORM\Table(name="adm_users", indexes={@ORM\Index(name="Index_login", columns={"login"}), @ORM\Index(name="Index_nom", columns={"nom"}), @ORM\Index(name="Index_prenom", columns={"prenom"}), @ORM\Index(name="Index_mail", columns={"email"})})
 * @ORM\Entity
 */
class AdmUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=20, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password_hash", type="string", length=41, nullable=true)
     */
    private $passwordHash;

    /**
     * @var string
     *
     * @ORM\Column(name="nonce", type="string", length=32, nullable=false)
     */
    private $nonce;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=40, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=40, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=120, nullable=true)
     */
    private $avatar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean", nullable=true)
     */
    private $actif;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="quota_forum", type="integer", nullable=true)
     */
    private $quotaForum;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpt_lock", type="integer", nullable=true)
     */
    private $cptLock;

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
     * @var \DateTime
     *
     * @ORM\Column(name="dt_lastlog", type="datetime", nullable=true)
     */
    private $dtLastlog;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_role", type="boolean", nullable=true)
     */
    private $idRole;

    /**
     * @var integer
     *
     * @ORM\Column(name="matricule", type="integer", nullable=true)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="email_pass", type="string", length=50, nullable=true)
     */
    private $emailPass;



    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return AdmUsers
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
     * Set passwordHash
     *
     * @param string $passwordHash
     * @return AdmUsers
     */
    public function setPasswordHash($passwordHash)
    {
        $this->passwordHash = $passwordHash;

        return $this;
    }

    /**
     * Get passwordHash
     *
     * @return string 
     */
    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    /**
     * Set nonce
     *
     * @param string $nonce
     * @return AdmUsers
     */
    public function setNonce($nonce)
    {
        $this->nonce = $nonce;

        return $this;
    }

    /**
     * Get nonce
     *
     * @return string 
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return AdmUsers
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return AdmUsers
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return AdmUsers
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return AdmUsers
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     * @return AdmUsers
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean 
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return AdmUsers
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set quotaForum
     *
     * @param integer $quotaForum
     * @return AdmUsers
     */
    public function setQuotaForum($quotaForum)
    {
        $this->quotaForum = $quotaForum;

        return $this;
    }

    /**
     * Get quotaForum
     *
     * @return integer 
     */
    public function getQuotaForum()
    {
        return $this->quotaForum;
    }

    /**
     * Set cptLock
     *
     * @param integer $cptLock
     * @return AdmUsers
     */
    public function setCptLock($cptLock)
    {
        $this->cptLock = $cptLock;

        return $this;
    }

    /**
     * Get cptLock
     *
     * @return integer 
     */
    public function getCptLock()
    {
        return $this->cptLock;
    }

    /**
     * Set dtCrea
     *
     * @param \DateTime $dtCrea
     * @return AdmUsers
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
     * @return AdmUsers
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
     * @return AdmUsers
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
     * @return AdmUsers
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

    /**
     * Set dtLastlog
     *
     * @param \DateTime $dtLastlog
     * @return AdmUsers
     */
    public function setDtLastlog($dtLastlog)
    {
        $this->dtLastlog = $dtLastlog;

        return $this;
    }

    /**
     * Get dtLastlog
     *
     * @return \DateTime 
     */
    public function getDtLastlog()
    {
        return $this->dtLastlog;
    }

    /**
     * Set idRole
     *
     * @param boolean $idRole
     * @return AdmUsers
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;

        return $this;
    }

    /**
     * Get idRole
     *
     * @return boolean 
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set matricule
     *
     * @param integer $matricule
     * @return AdmUsers
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return integer 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set emailPass
     *
     * @param string $emailPass
     * @return AdmUsers
     */
    public function setEmailPass($emailPass)
    {
        $this->emailPass = $emailPass;

        return $this;
    }

    /**
     * Get emailPass
     *
     * @return string 
     */
    public function getEmailPass()
    {
        return $this->emailPass;
    }
}
