<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RTranscodingStatus
 *
 * @ORM\Table(name="r_transcoding_status")
 * @ORM\Entity
 */
class RTranscodingStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_jobstatus", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJobstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="label_status", type="string", length=255, nullable=true)
     */
    private $labelStatus;



    /**
     * Get idJobstatus
     *
     * @return integer 
     */
    public function getIdJobstatus()
    {
        return $this->idJobstatus;
    }

    /**
     * Set labelStatus
     *
     * @param string $labelStatus
     * @return RTranscodingStatus
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
}
