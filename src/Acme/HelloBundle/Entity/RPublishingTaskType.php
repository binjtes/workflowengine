<?php

namespace Acme\HelloBundle\Entity;

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


}
