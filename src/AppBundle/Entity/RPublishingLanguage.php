<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RPublishingLanguage
 *
 * @ORM\Table(name="r_publishing_language", indexes={@ORM\Index(name="IDX_268811CAC9CA5523", columns={"lng_mixnews_iid"}), @ORM\Index(name="IDX_268811CA2C7C2CBA", columns={"workflow_id"})})
 * @ORM\Entity
 */
class RPublishingLanguage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="r_publishing_language_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rPublishingLanguageId;

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
     * @var \RLngLanguage
     *
     * @ORM\ManyToOne(targetEntity="RLngLanguage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lng_mixnews_iid", referencedColumnName="lng_mixnews_iid")
     * })
     */
    private $lngMixnewsIid;



    /**
     * Get rPublishingLanguageId
     *
     * @return integer 
     */
    public function getRPublishingLanguageId()
    {
        return $this->rPublishingLanguageId;
    }

    /**
     * Set workflow
     *
     * @param \AppBundle\Entity\RPublishingWorkflow $workflow
     * @return RPublishingLanguage
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
     * Set lngMixnewsIid
     *
     * @param \AppBundle\Entity\RLngLanguage $lngMixnewsIid
     * @return RPublishingLanguage
     */
    public function setLngMixnewsIid(\AppBundle\Entity\RLngLanguage $lngMixnewsIid = null)
    {
        $this->lngMixnewsIid = $lngMixnewsIid;

        return $this;
    }

    /**
     * Get lngMixnewsIid
     *
     * @return \AppBundle\Entity\RLngLanguage 
     */
    public function getLngMixnewsIid()
    {
        return $this->lngMixnewsIid;
    }
}
