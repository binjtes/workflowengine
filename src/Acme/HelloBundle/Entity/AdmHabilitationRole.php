<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmHabilitationRole
 *
 * @ORM\Table(name="adm_habilitation_role")
 * @ORM\Entity
 */
class AdmHabilitationRole
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_role", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idRole;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="page", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $page;

    /**
     * @var integer
     *
     * @ORM\Column(name="insert", type="integer", nullable=false)
     */
    private $insert;

    /**
     * @var integer
     *
     * @ORM\Column(name="update", type="integer", nullable=false)
     */
    private $update;

    /**
     * @var integer
     *
     * @ORM\Column(name="delete", type="integer", nullable=false)
     */
    private $delete;

    /**
     * @var integer
     *
     * @ORM\Column(name="access", type="integer", nullable=false)
     */
    private $access;


}
