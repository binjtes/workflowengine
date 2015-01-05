<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RPublishingTaskType
 *
 * @ORM\Table(name="r_publishing_task_type")
 * @ORM\Entity
 */
class RPublishingTaskType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="publishing_task_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $publishingTaskTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="default_service_url", type="string", length=255, nullable=true)
     */
    private $defaultServiceUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="task_type_name", type="string", length=100, nullable=true)
     */
    private $taskTypeName;

    /**
     * @var string
     *
     * @ORM\Column(name="task_type_description", type="string", length=500, nullable=true)
     */
    private $taskTypeDescription;



    /**
     * Get publishingTaskTypeId
     *
     * @return integer 
     */
    public function getPublishingTaskTypeId()
    {
        return $this->publishingTaskTypeId;
    }

    /**
     * Set defaultServiceUrl
     *
     * @param string $defaultServiceUrl
     * @return RPublishingTaskType
     */
    public function setDefaultServiceUrl($defaultServiceUrl)
    {
        $this->defaultServiceUrl = $defaultServiceUrl;

        return $this;
    }

    /**
     * Get defaultServiceUrl
     *
     * @return string 
     */
    public function getDefaultServiceUrl()
    {
        return $this->defaultServiceUrl;
    }

    /**
     * Set taskTypeName
     *
     * @param string $taskTypeName
     * @return RPublishingTaskType
     */
    public function setTaskTypeName($taskTypeName)
    {
        $this->taskTypeName = $taskTypeName;

        return $this;
    }

    /**
     * Get taskTypeName
     *
     * @return string 
     */
    public function getTaskTypeName()
    {
        return $this->taskTypeName;
    }

    /**
     * Set taskTypeDescription
     *
     * @param string $taskTypeDescription
     * @return RPublishingTaskType
     */
    public function setTaskTypeDescription($taskTypeDescription)
    {
        $this->taskTypeDescription = $taskTypeDescription;

        return $this;
    }

    /**
     * Get taskTypeDescription
     *
     * @return string 
     */
    public function getTaskTypeDescription()
    {
        return $this->taskTypeDescription;
    }
}
