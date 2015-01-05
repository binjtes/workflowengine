<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RPublishingTasktempl
 *
 * @ORM\Table(name="r_publishing_tasktempl", indexes={@ORM\Index(name="IDX_362617881BC30A8", columns={"publishing_task_type_id"}), @ORM\Index(name="IDX_36261782C7C2CBA", columns={"workflow_id"})})
 * @ORM\Entity
 */
class RPublishingTasktempl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tasktempl_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tasktemplId;

    /**
     * @var string
     *
     * @ORM\Column(name="service_url", type="string", length=255, nullable=true)
     */
    private $serviceUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var \RPublishingWorkflow
     *
     * @ORM\ManyToOne(targetEntity="RPublishingWorkflow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="workflow_id", referencedColumnName="workflow_id")
     * })
     */
    private $workflow;

    /**
     * @var \RPublishingTaskType
     *
     * @ORM\ManyToOne(targetEntity="RPublishingTaskType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="publishing_task_type_id", referencedColumnName="publishing_task_type_id")
     * })
     */
    private $publishingTaskType;



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
     * Set serviceUrl
     *
     * @param string $serviceUrl
     * @return RPublishingTasktempl
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
     * Set position
     *
     * @param integer $position
     * @return RPublishingTasktempl
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
     * Set workflow
     *
     * @param \AppBundle\Entity\RPublishingWorkflow $workflow
     * @return RPublishingTasktempl
     */
    public function setWorkflow(\AppBundle\Entity\RPublishingWorkflow $workflow = null)
    {
        $this->workflow = $workflow;

        return $this;
    }

    /**
     * Get workflow
     *
     * @return \AppBundle\Entity\RPublishingWorkflow 
     */
    public function getWorkflow()
    {
        return $this->workflow;
    }

    /**
     * Set publishingTaskType
     *
     * @param \AppBundle\Entity\RPublishingTaskType $publishingTaskType
     * @return RPublishingTasktempl
     */
    public function setPublishingTaskType(\AppBundle\Entity\RPublishingTaskType $publishingTaskType = null)
    {
        $this->publishingTaskType = $publishingTaskType;

        return $this;
    }

    /**
     * Get publishingTaskType
     *
     * @return \AppBundle\Entity\RPublishingTaskType 
     */
    public function getPublishingTaskType()
    {
        return $this->publishingTaskType;
    }
}
