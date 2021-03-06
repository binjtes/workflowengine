<?php

namespace Acme\HelloBundle\Entity;

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


}
