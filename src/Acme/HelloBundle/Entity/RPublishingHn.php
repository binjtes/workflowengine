<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RPublishingHn
 *
 * @ORM\Table(name="r_publishing_hn", indexes={@ORM\Index(name="IDX_686869A12C7C2CBA", columns={"workflow_id"})})
 * @ORM\Entity
 */
class RPublishingHn
{
    /**
     * @var integer
     *
     * @ORM\Column(name="r_publishing_hn_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rPublishingHnId;

    /**
     * @var string
     *
     * @ORM\Column(name="hn_type", type="string", length=4, nullable=true)
     */
    private $hnType;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=45, nullable=false)
     */
    private $label;

    /**
     * @var \RPublishingWorkflow
     *
     * @ORM\ManyToOne(targetEntity="RPublishingWorkflow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="workflow_id", referencedColumnName="workflow_id")
     * })
     */
    private $workflow;


}
