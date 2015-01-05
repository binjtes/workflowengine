<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RPublishingRule
 *
 * @ORM\Table(name="r_publishing_rule", indexes={@ORM\Index(name="IDX_19EC64D52C7C2CBA", columns={"workflow_id"}), @ORM\Index(name="IDX_19EC64D535D8B527", columns={"rule_type_id"})})
 * @ORM\Entity
 */
class RPublishingRule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rule_order", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ruleOrder = '0';

    /**
     * @var \RPublishingWorkflow
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="RPublishingWorkflow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="workflow_id", referencedColumnName="workflow_id")
     * })
     */
    private $workflow;

    /**
     * @var \RPublishingRuleType
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="RPublishingRuleType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rule_type_id", referencedColumnName="rule_type_id")
     * })
     */
    private $ruleType;



    /**
     * Set ruleOrder
     *
     * @param integer $ruleOrder
     * @return RPublishingRule
     */
    public function setRuleOrder($ruleOrder)
    {
        $this->ruleOrder = $ruleOrder;

        return $this;
    }

    /**
     * Get ruleOrder
     *
     * @return integer 
     */
    public function getRuleOrder()
    {
        return $this->ruleOrder;
    }

    /**
     * Set workflow
     *
     * @param \AppBundle\Entity\RPublishingWorkflow $workflow
     * @return RPublishingRule
     */
    public function setWorkflow(\AppBundle\Entity\RPublishingWorkflow $workflow)
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
     * Set ruleType
     *
     * @param \AppBundle\Entity\RPublishingRuleType $ruleType
     * @return RPublishingRule
     */
    public function setRuleType(\AppBundle\Entity\RPublishingRuleType $ruleType)
    {
        $this->ruleType = $ruleType;

        return $this;
    }

    /**
     * Get ruleType
     *
     * @return \AppBundle\Entity\RPublishingRuleType 
     */
    public function getRuleType()
    {
        return $this->ruleType;
    }
}
