<?php

namespace AppBundle\Entity;

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



    /**
     * Get idMachine
     *
     * @return integer 
     */
    public function getIdMachine()
    {
        return $this->idMachine;
    }

    /**
     * Set machineIp
     *
     * @param string $machineIp
     * @return RTranscodingMachine
     */
    public function setMachineIp($machineIp)
    {
        $this->machineIp = $machineIp;

        return $this;
    }

    /**
     * Get machineIp
     *
     * @return string 
     */
    public function getMachineIp()
    {
        return $this->machineIp;
    }

    /**
     * Set machineName
     *
     * @param string $machineName
     * @return RTranscodingMachine
     */
    public function setMachineName($machineName)
    {
        $this->machineName = $machineName;

        return $this;
    }

    /**
     * Get machineName
     *
     * @return string 
     */
    public function getMachineName()
    {
        return $this->machineName;
    }

    /**
     * Set mountFlipstories
     *
     * @param string $mountFlipstories
     * @return RTranscodingMachine
     */
    public function setMountFlipstories($mountFlipstories)
    {
        $this->mountFlipstories = $mountFlipstories;

        return $this;
    }

    /**
     * Get mountFlipstories
     *
     * @return string 
     */
    public function getMountFlipstories()
    {
        return $this->mountFlipstories;
    }

    /**
     * Set maxjob
     *
     * @param integer $maxjob
     * @return RTranscodingMachine
     */
    public function setMaxjob($maxjob)
    {
        $this->maxjob = $maxjob;

        return $this;
    }

    /**
     * Get maxjob
     *
     * @return integer 
     */
    public function getMaxjob()
    {
        return $this->maxjob;
    }

    /**
     * Set machineStub
     *
     * @param string $machineStub
     * @return RTranscodingMachine
     */
    public function setMachineStub($machineStub)
    {
        $this->machineStub = $machineStub;

        return $this;
    }

    /**
     * Get machineStub
     *
     * @return string 
     */
    public function getMachineStub()
    {
        return $this->machineStub;
    }
}
