<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TranscodingJob
 *
 * @ORM\Table(name="transcoding_job", indexes={@ORM\Index(name="transcoding_job_FKIndex2", columns={"id_machine"}), @ORM\Index(name="transcoding_job_FKIndex3", columns={"id_factory"}), @ORM\Index(name="transcoding_job_FKIndex4", columns={"publication_task_id"}), @ORM\Index(name="fk_transcoding_job_r_transcoding_status1_idx", columns={"id_jobstatus"})})
 * @ORM\Entity
 */
class TranscodingJob
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_job", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJob;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_machine", type="integer", nullable=false)
     */
    private $idMachine;

    /**
     * @var string
     *
     * @ORM\Column(name="video_name", type="string", length=255, nullable=true)
     */
    private $videoName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="scheduled", type="datetime", nullable=true)
     */
    private $scheduled;

    /**
     * @var integer
     *
     * @ORM\Column(name="submitted_by", type="integer", nullable=true)
     */
    private $submittedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", length=45, nullable=true)
     */
    private $uuid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="submitted_at", type="datetime", nullable=false)
     */
    private $submittedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="video_duration", type="integer", nullable=true)
     */
    private $videoDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="error_log", type="string", length=255, nullable=true)
     */
    private $errorLog;

    /**
     * @var \PublicationTask
     *
     * @ORM\ManyToOne(targetEntity="PublicationTask")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="publication_task_id", referencedColumnName="publication_task_id")
     * })
     */
    private $publicationTask;

    /**
     * @var \RTranscodingFactory
     *
     * @ORM\ManyToOne(targetEntity="RTranscodingFactory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_factory", referencedColumnName="id_factory")
     * })
     */
    private $idFactory;

    /**
     * @var \RTranscodingStatus
     *
     * @ORM\ManyToOne(targetEntity="RTranscodingStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_jobstatus", referencedColumnName="id_jobstatus")
     * })
     */
    private $idJobstatus;



    /**
     * Get idJob
     *
     * @return integer 
     */
    public function getIdJob()
    {
        return $this->idJob;
    }

    /**
     * Set idMachine
     *
     * @param integer $idMachine
     * @return TranscodingJob
     */
    public function setIdMachine($idMachine)
    {
        $this->idMachine = $idMachine;

        return $this;
    }

    /**
     * Get idMachine
     *
     * @return integer 
     */
    public function getIdMachine()
    {
        return $this->idMachine;
    }

    /**
     * Set videoName
     *
     * @param string $videoName
     * @return TranscodingJob
     */
    public function setVideoName($videoName)
    {
        $this->videoName = $videoName;

        return $this;
    }

    /**
     * Get videoName
     *
     * @return string 
     */
    public function getVideoName()
    {
        return $this->videoName;
    }

    /**
     * Set scheduled
     *
     * @param \DateTime $scheduled
     * @return TranscodingJob
     */
    public function setScheduled($scheduled)
    {
        $this->scheduled = $scheduled;

        return $this;
    }

    /**
     * Get scheduled
     *
     * @return \DateTime 
     */
    public function getScheduled()
    {
        return $this->scheduled;
    }

    /**
     * Set submittedBy
     *
     * @param integer $submittedBy
     * @return TranscodingJob
     */
    public function setSubmittedBy($submittedBy)
    {
        $this->submittedBy = $submittedBy;

        return $this;
    }

    /**
     * Get submittedBy
     *
     * @return integer 
     */
    public function getSubmittedBy()
    {
        return $this->submittedBy;
    }

    /**
     * Set uuid
     *
     * @param string $uuid
     * @return TranscodingJob
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get uuid
     *
     * @return string 
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set submittedAt
     *
     * @param \DateTime $submittedAt
     * @return TranscodingJob
     */
    public function setSubmittedAt($submittedAt)
    {
        $this->submittedAt = $submittedAt;

        return $this;
    }

    /**
     * Get submittedAt
     *
     * @return \DateTime 
     */
    public function getSubmittedAt()
    {
        return $this->submittedAt;
    }

    /**
     * Set videoDuration
     *
     * @param integer $videoDuration
     * @return TranscodingJob
     */
    public function setVideoDuration($videoDuration)
    {
        $this->videoDuration = $videoDuration;

        return $this;
    }

    /**
     * Get videoDuration
     *
     * @return integer 
     */
    public function getVideoDuration()
    {
        return $this->videoDuration;
    }

    /**
     * Set errorLog
     *
     * @param string $errorLog
     * @return TranscodingJob
     */
    public function setErrorLog($errorLog)
    {
        $this->errorLog = $errorLog;

        return $this;
    }

    /**
     * Get errorLog
     *
     * @return string 
     */
    public function getErrorLog()
    {
        return $this->errorLog;
    }

    /**
     * Set publicationTask
     *
     * @param \AppBundle\Entity\PublicationTask $publicationTask
     * @return TranscodingJob
     */
    public function setPublicationTask(\AppBundle\Entity\PublicationTask $publicationTask = null)
    {
        $this->publicationTask = $publicationTask;

        return $this;
    }

    /**
     * Get publicationTask
     *
     * @return \AppBundle\Entity\PublicationTask 
     */
    public function getPublicationTask()
    {
        return $this->publicationTask;
    }

    /**
     * Set idFactory
     *
     * @param \AppBundle\Entity\RTranscodingFactory $idFactory
     * @return TranscodingJob
     */
    public function setIdFactory(\AppBundle\Entity\RTranscodingFactory $idFactory = null)
    {
        $this->idFactory = $idFactory;

        return $this;
    }

    /**
     * Get idFactory
     *
     * @return \AppBundle\Entity\RTranscodingFactory 
     */
    public function getIdFactory()
    {
        return $this->idFactory;
    }

    /**
     * Set idJobstatus
     *
     * @param \AppBundle\Entity\RTranscodingStatus $idJobstatus
     * @return TranscodingJob
     */
    public function setIdJobstatus(\AppBundle\Entity\RTranscodingStatus $idJobstatus = null)
    {
        $this->idJobstatus = $idJobstatus;

        return $this;
    }

    /**
     * Get idJobstatus
     *
     * @return \AppBundle\Entity\RTranscodingStatus 
     */
    public function getIdJobstatus()
    {
        return $this->idJobstatus;
    }
}
