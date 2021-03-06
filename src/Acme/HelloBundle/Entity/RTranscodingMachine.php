<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RTranscodingMachine
 *
 * @ORM\Table(name="r_transcoding_machine")
 * @ORM\Entity
 */
class RTranscodingMachine
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_machine", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMachine;

    /**
     * @var string
     *
     * @ORM\Column(name="machine_ip", type="string", length=45, nullable=true)
     */
    private $machineIp;

    /**
     * @var string
     *
     * @ORM\Column(name="machine_name", type="string", length=45, nullable=true)
     */
    private $machineName;

    /**
     * @var string
     *
     * @ORM\Column(name="mount_flipstories", type="string", length=255, nullable=false)
     */
    private $mountFlipstories;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxjob", type="integer", nullable=false)
     */
    private $maxjob;

    /**
     * @var string
     *
     * @ORM\Column(name="machine_stub", type="string", length=45, nullable=true)
     */
    private $machineStub;


}
