<?php

namespace AppBundle\Entity;

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



    /**
     * Get idPlatform
     *
     * @return integer 
     */
    public function getIdPlatform()
    {
        return $this->idPlatform;
    }

    /**
     * Set platformLabel
     *
     * @param string $platformLabel
     * @return AdmHabilitationPlatform
     */
    public function setPlatformLabel($platformLabel)
    {
        $this->platformLabel = $platformLabel;

        return $this;
    }

    /**
     * Get platformLabel
     *
     * @return string 
     */
    public function getPlatformLabel()
    {
        return $this->platformLabel;
    }
}
