<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PublicationTask
 *
 * @ORM\Table(name="publication_task", indexes={@ORM\Index(name="publishing_task_FKIndex2", columns={"id_status"}), @ORM\Index(name="publishing_task_FKIndex3", columns={"tasktempl_id"}), @ORM\Index(name="fk_publication_task_publication_workflow1_idx", columns={"publication_id"})})
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
     * @var \PublicationStatus
     *
     * @ORM\ManyToOne(targetEntity="PublicationStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_status", referencedColumnName="id_status")
     * })
     */
    private $idStatus;

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
     * Get publicationTaskId
     *
     * @return integer 
     */
    public function getPublicationTaskId()
    {
        return $this->publicationTaskId;
    }

    /**
     * Set tasktemplId
     *
     * @param integer $tasktemplId
     * @return PublicationTask
     */
    public function setTasktemplId($tasktemplId)
    {
        $this->tasktemplId = $tasktemplId;

        return $this;
    }

    /**
     * Get tasktemplId
     *
     * @return integer 
     */
    public function getTasktemplId()
    {
        return $this->tasktemplId;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return PublicationTask
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set product
     *
     * @param string $product
     * @return PublicationTask
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set jobId
     *
     * @param string $jobId
     * @return PublicationTask
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;

        return $this;
    }

    /**
     * Get jobId
     *
     * @return string 
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Set serviceUrl
     *
     * @param string $serviceUrl
     * @return PublicationTask
     */
    public function setServiceUrl($serviceUrl)
    {
        $this->serviceUrl = $serviceUrl;

        return $this;
    }

    /**
     * Get serviceUrl
     *
     * @return string 
     */
    public function getServiceUrl()
    {
        return $this->serviceUrl;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return PublicationTask
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set lastRun
     *
     * @param \DateTime $lastRun
     * @return PublicationTask
     */
    public function setLastRun($lastRun)
    {
        $this->lastRun = $lastRun;

        return $this;
    }

    /**
     * Get lastRun
     *
     * @return \DateTime 
     */
    public function getLastRun()
    {
        return $this->lastRun;
    }

    /**
     * Set idStatus
     *
     * @param \AppBundle\Entity\PublicationStatus $idStatus
     * @return PublicationTask
     */
    public function setIdStatus(\AppBundle\Entity\PublicationStatus $idStatus = null)
    {
        $this->idStatus = $idStatus;

        return $this;
    }

    /**
     * Get idStatus
     *
     * @return \AppBundle\Entity\PublicationStatus 
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    /**
     * Set publication
     *
     * @param \AppBundle\Entity\PublicationWorkflow $publication
     * @return PublicationTask
     */
    public function setPublication(\AppBundle\Entity\PublicationWorkflow $publication = null)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return \AppBundle\Entity\PublicationWorkflow 
     */
    public function getPublication()
    {
        return $this->publication;
    }
}
