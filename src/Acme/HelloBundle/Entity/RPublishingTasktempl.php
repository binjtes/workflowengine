<?php

namespace Acme\HelloBundle\Entity;

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


}
