<?php

namespace Acme\HelloBundle\Entity;

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


}
