<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PublicationWorkflow
 *
 * @ORM\Table(name="publication_workflow", indexes={@ORM\Index(name="publication_workflow_FKIndex3", columns={"workflow_id"}), @ORM\Index(name="publication_workflow_FKIndex2", columns={"id_status"}), @ORM\Index(name="fk_publication_workflow_r_lng_language1_idx", columns={"lng_mixnews_iid"}), @ORM\Index(name="fk_publication_workflow_adm_users1_idx", columns={"created_by"})})
 * @ORM\Entity
 */
class PublicationWorkflow
{
    /**
     * @var integer
     *
     * @ORM\Column(name="publication_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $publicationId;

    /**
     * @var string
     *
     * @ORM\Column(name="housenumber", type="string", length=55, nullable=true)
     */
    private $housenumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_modified", type="datetime", nullable=true)
     */
    private $lastModified;

    /**
     * @var integer
     *
     * @ORM\Column(name="farm_id", type="integer", nullable=false)
     */
    private $farmId = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="xml_origin", type="blob", length=65535, nullable=true)
     */
    private $xmlOrigin;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255, nullable=true)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_run", type="datetime", nullable=true)
     */
    private $lastRun;

    /**
     * @var \AdmUsers
     *
     * @ORM\ManyToOne(targetEntity="AdmUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="created_by", referencedColumnName="iduser")
     * })
     */
    private $createdBy;

    /**
     * @var \PublicationStatus
     *
     * @ORM\ManyToOne(targetEntity="PublicationStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_status", referencedColumnName="id_status")
     * })
     */
    private $idStatus;

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
     * @var \RPublishingWorkflow
     *
     * @ORM\ManyToOne(targetEntity="RPublishingWorkflow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="workflow_id", referencedColumnName="workflow_id")
     * })
     */
    private $workflow;



    /**
     * Get publicationId
     *
     * @return integer 
     */
    public function getPublicationId()
    {
        return $this->publicationId;
    }

    /**
     * Set housenumber
     *
     * @param string $housenumber
     * @return PublicationWorkflow
     */
    public function setHousenumber($housenumber)
    {
        $this->housenumber = $housenumber;

        return $this;
    }

    /**
     * Get housenumber
     *
     * @return string 
     */
    public function getHousenumber()
    {
        return $this->housenumber;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return PublicationWorkflow
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set lastModified
     *
     * @param \DateTime $lastModified
     * @return PublicationWorkflow
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * Get lastModified
     *
     * @return \DateTime 
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Set farmId
     *
     * @param integer $farmId
     * @return PublicationWorkflow
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
     * Set xmlOrigin
     *
     * @param string $xmlOrigin
     * @return PublicationWorkflow
     */
    public function setXmlOrigin($xmlOrigin)
    {
        $this->xmlOrigin = $xmlOrigin;

        return $this;
    }

    /**
     * Get xmlOrigin
     *
     * @return string 
     */
    public function getXmlOrigin()
    {
        return $this->xmlOrigin;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return PublicationWorkflow
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set lastRun
     *
     * @param \DateTime $lastRun
     * @return PublicationWorkflow
     */
    public function setLastRun($lastRun)
    {
        $this->lastRun = $lastRun;

        return $this;
    }

    /**
     * Get lastRun
     *
     * @return \DateTime 
     */
    public function getLastRun()
    {
        return $this->lastRun;
    }

    /**
     * Set createdBy
     *
     * @param \AppBundle\Entity\AdmUsers $createdBy
     * @return PublicationWorkflow
     */
    public function setCreatedBy(\AppBundle\Entity\AdmUsers $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \AppBundle\Entity\AdmUsers 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set idStatus
     *
     * @param \AppBundle\Entity\PublicationStatus $idStatus
     * @return PublicationWorkflow
     */
    public function setIdStatus(\AppBundle\Entity\PublicationStatus $idStatus = null)
    {
        $this->idStatus = $idStatus;

        return $this;
    }

    /**
     * Get idStatus
     *
     * @return \AppBundle\Entity\PublicationStatus 
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    /**
     * Set lngMixnewsIid
     *
     * @param \AppBundle\Entity\RLngLanguage $lngMixnewsIid
     * @return PublicationWorkflow
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

    /**
     * Set workflow
     *
     * @param \AppBundle\Entity\RPublishingWorkflow $workflow
     * @return PublicationWorkflow
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
