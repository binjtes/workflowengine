<?php

namespace AppBundle\Entity;

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



    /**
     * Set fileOrder
     *
     * @param integer $fileOrder
     * @return TranscodingFiles
     */
    public function setFileOrder($fileOrder)
    {
        $this->fileOrder = $fileOrder;

        return $this;
    }

    /**
     * Get fileOrder
     *
     * @return integer 
     */
    public function getFileOrder()
    {
        return $this->fileOrder;
    }

    /**
     * Set fileUri
     *
     * @param string $fileUri
     * @return TranscodingFiles
     */
    public function setFileUri($fileUri)
    {
        $this->fileUri = $fileUri;

        return $this;
    }

    /**
     * Get fileUri
     *
     * @return string 
     */
    public function getFileUri()
    {
        return $this->fileUri;
    }

    /**
     * Set idJob
     *
     * @param \AppBundle\Entity\TranscodingJob $idJob
     * @return TranscodingFiles
     */
    public function setIdJob(\AppBundle\Entity\TranscodingJob $idJob)
    {
        $this->idJob = $idJob;

        return $this;
    }

    /**
     * Get idJob
     *
     * @return \AppBundle\Entity\TranscodingJob 
     */
    public function getIdJob()
    {
        return $this->idJob;
    }

    /**
     * Set idFilestatus
     *
     * @param \AppBundle\Entity\RTranscodingFileStatus $idFilestatus
     * @return TranscodingFiles
     */
    public function setIdFilestatus(\AppBundle\Entity\RTranscodingFileStatus $idFilestatus = null)
    {
        $this->idFilestatus = $idFilestatus;

        return $this;
    }

    /**
     * Get idFilestatus
     *
     * @return \AppBundle\Entity\RTranscodingFileStatus 
     */
    public function getIdFilestatus()
    {
        return $this->idFilestatus;
    }
}
