<?php

namespace Acme\HelloBundle\Entity;

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


}
