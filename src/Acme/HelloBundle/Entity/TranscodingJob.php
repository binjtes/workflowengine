<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TranscodingJob
 *
 * @ORM\Table(name="transcoding_job", indexes={@ORM\Index(name="IDX_58AAF6E7853FD7BA", columns={"publication_task_id"}), @ORM\Index(name="IDX_58AAF6E725ABB789", columns={"id_factory"}), @ORM\Index(name="IDX_58AAF6E7705188D7", columns={"id_jobstatus"}), @ORM\Index(name="transcoding_job_FKIndex2", columns={"id_machine"})})
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
     * @var \PublicationTask
     *
     * @ORM\ManyToOne(targetEntity="PublicationTask")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="publication_task_id", referencedColumnName="publication_task_id")
     * })
     */
    private $publicationTask;


}
