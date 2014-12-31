<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RTranscodingFileStatus
 *
 * @ORM\Table(name="r_transcoding_file_status")
 * @ORM\Entity
 */
class RTranscodingFileStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_filestatus", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFilestatus;

    /**
     * @var string
     *
     * @ORM\Column(name="label_status", type="string", length=55, nullable=true)
     */
    private $labelStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="sgi_status", type="string", length=3, nullable=true)
     */
    private $sgiStatus;



    /**
     * Get idFilestatus
     *
     * @return integer 
     */
    public function getIdFilestatus()
    {
        return $this->idFilestatus;
    }

    /**
     * Set labelStatus
     *
     * @param string $labelStatus
     * @return RTranscodingFileStatus
     */
    public function setLabelStatus($labelStatus)
    {
        $this->labelStatus = $labelStatus;

        return $this;
    }

    /**
     * Get labelStatus
     *
     * @return string 
     */
    public function getLabelStatus()
    {
        return $this->labelStatus;
    }

    /**
     * Set sgiStatus
     *
     * @param string $sgiStatus
     * @return RTranscodingFileStatus
     */
    public function setSgiStatus($sgiStatus)
    {
        $this->sgiStatus = $sgiStatus;

        return $this;
    }

    /**
     * Get sgiStatus
     *
     * @return string 
     */
    public function getSgiStatus()
    {
        return $this->sgiStatus;
    }
}
