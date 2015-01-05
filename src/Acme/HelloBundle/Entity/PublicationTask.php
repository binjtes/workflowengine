<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PublicationTask
 *
 * @ORM\Table(name="publication_task", indexes={@ORM\Index(name="IDX_59865AE85D37D0F1", columns={"id_status"}), @ORM\Index(name="IDX_59865AE838B217A7", columns={"publication_id"}), @ORM\Index(name="publishing_task_FKIndex3", columns={"tasktempl_id"})})
 * @ORM\Entity
 */
class PublicationTask
{
    /**
     * @var integer
     *
     * @ORM\Column(name="publication_task_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $publicationTaskId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tasktempl_id", type="integer", nullable=false)
     */
    private $tasktemplId;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="product", type="text", length=65535, nullable=true)
     */
    private $product;

    /**
     * @var string
     *
     * @ORM\Column(name="job_id", type="string", length=255, nullable=true)
     */
    private $jobId;

    /**
     * @var string
     *
     * @ORM\Column(name="service_url", type="text", length=65535, nullable=true)
     */
    private $serviceUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_run", type="datetime", nullable=true)
     */
    private $lastRun;

    /**
     * @var \PublicationWorkflow
     *
     * @ORM\ManyToOne(targetEntity="PublicationWorkflow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="publication_id", referencedColumnName="publication_id")
     * })
     */
    private $publication;

    /**
     * @var \PublicationStatus
     *
     * @ORM\ManyToOne(targetEntity="PublicationStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_status", referencedColumnName="id_status")
     * })
     */
    private $idStatus;


}
