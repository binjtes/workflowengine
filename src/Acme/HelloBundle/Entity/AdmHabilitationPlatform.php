<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmHabilitationPlatform
 *
 * @ORM\Table(name="adm_habilitation_platform")
 * @ORM\Entity
 */
class AdmHabilitationPlatform
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_platform", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlatform;

    /**
     * @var string
     *
     * @ORM\Column(name="platform_label", type="string", length=45, nullable=false)
     */
    private $platformLabel;


}
