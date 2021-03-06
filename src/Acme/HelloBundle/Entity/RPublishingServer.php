<?php

namespace Acme\HelloBundle\Entity;

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


}
