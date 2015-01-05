<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RPublishingWorkflow
 *
 * @ORM\Table(name="r_publishing_workflow", indexes={@ORM\Index(name="IDX_9796F8699644E0CD", columns={"publishing_id"})})
 * @ORM\Entity
 */
class RPublishingWorkflow
{
    /**
     * @var integer
     *
     * @ORM\Column(name="workflow_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $workflowId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="auto", type="boolean", nullable=false)
     */
    private $auto;

    /**
     * @var integer
     *
     * @ORM\Column(name="farm_id", type="integer", nullable=false)
     */
    private $farmId;

    /**
     * @var string
     *
     * @ORM\Column(name="stub", type="string", length=45, nullable=true)
     */
    private $stub;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_concat", type="boolean", nullable=false)
     */
    private $isConcat;

    /**
     * @var \RPublishing
     *
     * @ORM\ManyToOne(targetEntity="RPublishing")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="publishing_id", referencedColumnName="publishing_id")
     * })
     */
    private $publishing;


}
