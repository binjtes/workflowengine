<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RPublishingHn
 *
 * @ORM\Table(name="r_publishing_hn", indexes={@ORM\Index(name="r_publishing_hn_FKIndex1", columns={"workflow_id"})})
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



    /**
     * Get rPublishingHnId
     *
     * @return integer 
     */
    public function getRPublishingHnId()
    {
        return $this->rPublishingHnId;
    }

    /**
     * Set hnType
     *
     * @param string $hnType
     * @return RPublishingHn
     */
    public function setHnType($hnType)
    {
        $this->hnType = $hnType;

        return $this;
    }

    /**
     * Get hnType
     *
     * @return string 
     */
    public function getHnType()
    {
        return $this->hnType;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return RPublishingHn
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set workflow
     *
     * @param \AppBundle\Entity\RPublishingWorkflow $workflow
     * @return RPublishingHn
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
}
