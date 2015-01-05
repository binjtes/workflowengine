<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PublicationWorkflow
 *
 * @ORM\Table(name="publication_workflow", indexes={@ORM\Index(name="IDX_4AA26D47DE12AB56", columns={"created_by"}), @ORM\Index(name="IDX_4AA26D475D37D0F1", columns={"id_status"}), @ORM\Index(name="IDX_4AA26D47C9CA5523", columns={"lng_mixnews_iid"}), @ORM\Index(name="IDX_4AA26D472C7C2CBA", columns={"workflow_id"})})
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
    private $farmId;

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
     * @var \RPublishingWorkflow
     *
     * @ORM\ManyToOne(targetEntity="RPublishingWorkflow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="workflow_id", referencedColumnName="workflow_id")
     * })
     */
    private $workflow;

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
     * @var \AdmUsers
     *
     * @ORM\ManyToOne(targetEntity="AdmUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="created_by", referencedColumnName="iduser")
     * })
     */
    private $createdBy;


}
