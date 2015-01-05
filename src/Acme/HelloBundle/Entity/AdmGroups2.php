<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmGroups2
 *
 * @ORM\Table(name="adm_groups2")
 * @ORM\Entity
 */
class AdmGroups2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_grp", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrp;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_grp", type="string", length=100, nullable=true)
     */
    private $libGrp;

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


}
