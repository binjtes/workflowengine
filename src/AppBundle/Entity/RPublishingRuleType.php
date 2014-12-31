<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RPublishingRuleType
 *
 * @ORM\Table(name="r_publishing_rule_type")
 * @ORM\Entity
 */
class RPublishingRuleType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rule_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ruleTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="rule_type_description", type="string", length=255, nullable=true)
     */
    private $ruleTypeDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="service_url", type="string", length=500, nullable=false)
     */
    private $serviceUrl;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="RPublishingWorkflow", mappedBy="ruleType")
     */
    private $workflow;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->workflow = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get ruleTypeId
     *
     * @return integer 
     */
    public function getRuleTypeId()
    {
        return $this->ruleTypeId;
    }

    /**
     * Set ruleTypeDescription
     *
     * @param string $ruleTypeDescription
     * @return RPublishingRuleType
     */
    public function setRuleTypeDescription($ruleTypeDescription)
    {
        $this->ruleTypeDescription = $ruleTypeDescription;

        return $this;
    }

    /**
     * Get ruleTypeDescription
     *
     * @return string 
     */
    public function getRuleTypeDescription()
    {
        return $this->ruleTypeDescription;
    }

    /**
     * Set serviceUrl
     *
     * @param string $serviceUrl
     * @return RPublishingRuleType
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
     * Add workflow
     *
     * @param \AppBundle\Entity\RPublishingWorkflow $workflow
     * @return RPublishingRuleType
     */
    public function addWorkflow(\AppBundle\Entity\RPublishingWorkflow $workflow)
    {
        $this->workflow[] = $workflow;

        return $this;
    }

    /**
     * Remove workflow
     *
     * @param \AppBundle\Entity\RPublishingWorkflow $workflow
     */
    public function removeWorkflow(\AppBundle\Entity\RPublishingWorkflow $workflow)
    {
        $this->workflow->removeElement($workflow);
    }

    /**
     * Get workflow
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWorkflow()
    {
        return $this->workflow;
    }
}
