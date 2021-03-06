<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
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
    
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany( targetEntity="RPublishingRule", mappedBy="workflow")
     * @ORM\JoinTable(name="r_publishing_rule",
     *   joinColumns={
     *     @ORM\JoinColumn(name="workflow_id", referencedColumnName="workflow_id")
     *   }
     * )
     */
    private $ruleType;
    

    /**
     * Constructor
     */
    public function __construct()
    {
    	$this->ruleType = new ArrayCollection();
    }
    

    

    /**
     * Set name
     *
     * @param string $name
     * @return RPublishingWorkflow
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return RPublishingWorkflow
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set auto
     *
     * @param boolean $auto
     * @return RPublishingWorkflow
     */
    public function setAuto($auto)
    {
        $this->auto = $auto;

        return $this;
    }

    /**
     * Get auto
     *
     * @return boolean 
     */
    public function getAuto()
    {
        return $this->auto;
    }

    /**
     * Set farmId
     *
     * @param integer $farmId
     * @return RPublishingWorkflow
     */
    public function setFarmId($farmId)
    {
        $this->farmId = $farmId;

        return $this;
    }

    /**
     * Get farmId
     *
     * @return integer 
     */
    public function getFarmId()
    {
        return $this->farmId;
    }

    /**
     * Set stub
     *
     * @param string $stub
     * @return RPublishingWorkflow
     */
    public function setStub($stub)
    {
        $this->stub = $stub;

        return $this;
    }

    /**
     * Get stub
     *
     * @return string 
     */
    public function getStub()
    {
        return $this->stub;
    }

    /**
     * Set isConcat
     *
     * @param boolean $isConcat
     * @return RPublishingWorkflow
     */
    public function setIsConcat($isConcat)
    {
        $this->isConcat = $isConcat;

        return $this;
    }

    /**
     * Get isConcat
     *
     * @return boolean 
     */
    public function getIsConcat()
    {
        return $this->isConcat;
    }

    /**
     * Set publishing
     *
     * @param \AppBundle\Entity\RPublishing $publishing
     * @return RPublishingWorkflow
     */
    public function setPublishing(\AppBundle\Entity\RPublishing $publishing = null)
    {
        $this->publishing = $publishing;

        return $this;
    }

    /**
     * Get publishing
     *
     * @return \AppBundle\Entity\RPublishing 
     */
    public function getPublishing()
    {
        return $this->publishing;
    }

    /**
     * Get workflowId
     *
     * @return integer 
     */
    public function getWorkflowId()
    {
        return $this->workflowId;
    }

    /**
     * Add ruleType
     *
     * @param \AppBundle\Entity\RPublishingRule $ruleType
     * @return RPublishingWorkflow
     */
    public function addRuleType(\AppBundle\Entity\RPublishingRule $ruleType)
    {
        $this->ruleType[] = $ruleType;

        return $this;
    }

    /**
     * Remove ruleType
     *
     * @param \AppBundle\Entity\RPublishingRule $ruleType
     */
    public function removeRuleType(\AppBundle\Entity\RPublishingRule $ruleType)
    {
        $this->ruleType->removeElement($ruleType);
    }
    
    /**
     * Remove all ruleType
     *
     */
    public function removeAllRules()
    {
    	$this->ruleType = null ;
    }

    /**
     * Get ruleType
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRuleType()
    {
        return $this->ruleType;
    }
    
  
    
    
    
}
