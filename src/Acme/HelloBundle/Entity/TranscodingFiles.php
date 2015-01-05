<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TranscodingFiles
 *
 * @ORM\Table(name="transcoding_files", indexes={@ORM\Index(name="IDX_3FBB58E4FE31B960", columns={"id_filestatus"}), @ORM\Index(name="IDX_3FBB58E4657C08A2", columns={"id_job"})})
 * @ORM\Entity
 */
class TranscodingFiles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="file_order", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fileOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="file_uri", type="string", length=255, nullable=false)
     */
    private $fileUri;

    /**
     * @var \TranscodingJob
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TranscodingJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_job", referencedColumnName="id_job")
     * })
     */
    private $idJob;

    /**
     * @var \RTranscodingFileStatus
     *
     * @ORM\ManyToOne(targetEntity="RTranscodingFileStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_filestatus", referencedColumnName="id_filestatus")
     * })
     */
    private $idFilestatus;


}
