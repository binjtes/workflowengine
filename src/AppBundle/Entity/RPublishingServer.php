<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RPublishingServer
 *
 * @ORM\Table(name="r_publishing_server")
 * @ORM\Entity
 */
class RPublishingServer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_server", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idServer;

    /**
     * @var string
     *
     * @ORM\Column(name="cname", type="string", length=45, nullable=false)
     */
    private $cname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_master", type="boolean", nullable=false)
     */
    private $isMaster;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_supermonitor", type="boolean", nullable=false)
     */
    private $isSupermonitor;

    /**
     * @var string
     *
     * @ORM\Column(name="api_location", type="string", length=45, nullable=false)
     */
    private $apiLocation;



    /**
     * Get idServer
     *
     * @return integer 
     */
    public function getIdServer()
    {
        return $this->idServer;
    }

    /**
     * Set cname
     *
     * @param string $cname
     * @return RPublishingServer
     */
    public function setCname($cname)
    {
        $this->cname = $cname;

        return $this;
    }

    /**
     * Get cname
     *
     * @return string 
     */
    public function getCname()
    {
        return $this->cname;
    }

    /**
     * Set isMaster
     *
     * @param boolean $isMaster
     * @return RPublishingServer
     */
    public function setIsMaster($isMaster)
    {
        $this->isMaster = $isMaster;

        return $this;
    }

    /**
     * Get isMaster
     *
     * @return boolean 
     */
    public function getIsMaster()
    {
        return $this->isMaster;
    }

    /**
     * Set isSupermonitor
     *
     * @param boolean $isSupermonitor
     * @return RPublishingServer
     */
    public function setIsSupermonitor($isSupermonitor)
    {
        $this->isSupermonitor = $isSupermonitor;

        return $this;
    }

    /**
     * Get isSupermonitor
     *
     * @return boolean 
     */
    public function getIsSupermonitor()
    {
        return $this->isSupermonitor;
    }

    /**
     * Set apiLocation
     *
     * @param string $apiLocation
     * @return RPublishingServer
     */
    public function setApiLocation($apiLocation)
    {
        $this->apiLocation = $apiLocation;

        return $this;
    }

    /**
     * Get apiLocation
     *
     * @return string 
     */
    public function getApiLocation()
    {
        return $this->apiLocation;
    }
}
