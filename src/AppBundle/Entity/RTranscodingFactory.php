<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RTranscodingFactory
 *
 * @ORM\Table(name="r_transcoding_factory", indexes={@ORM\Index(name="fk_r_transcoding_factory_r_transcoding_machine1_idx", columns={"id_machine"}), @ORM\Index(name="fk_r_transcoding_factory_r_transcoding_login1_idx", columns={"id_login"})})
 * @ORM\Entity
 */
class RTranscodingFactory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_factory", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFactory;

    /**
     * @var string
     *
     * @ORM\Column(name="factory_stub", type="string", length=45, nullable=false)
     */
    private $factoryStub;

    /**
     * @var string
     *
     * @ORM\Column(name="factory_label", type="string", length=45, nullable=false)
     */
    private $factoryLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="factory_name", type="string", length=45, nullable=true)
     */
    private $factoryName;

    /**
     * @var string
     *
     * @ORM\Column(name="factory_description", type="string", length=255, nullable=true)
     */
    private $factoryDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_login", type="integer", nullable=false)
     */
    private $idLogin;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_machine", type="integer", nullable=false)
     */
    private $idMachine;

    /**
     * @var string
     *
     * @ORM\Column(name="rename_mask", type="string", length=255, nullable=true)
     */
    private $renameMask;

    /**
     * @var boolean
     *
     * @ORM\Column(name="option_rename", type="boolean", nullable=false)
     */
    private $optionRename = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=4, nullable=false)
     */
    private $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="default_priority", type="string", length=45, nullable=false)
     */
    private $defaultPriority = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="default_schedule", type="time", nullable=true)
     */
    private $defaultSchedule;

    /**
     * @var string
     *
     * @ORM\Column(name="path_to_file", type="string", length=255, nullable=true)
     */
    private $pathToFile;



    /**
     * Get idFactory
     *
     * @return integer 
     */
    public function getIdFactory()
    {
        return $this->idFactory;
    }

    /**
     * Set factoryStub
     *
     * @param string $factoryStub
     * @return RTranscodingFactory
     */
    public function setFactoryStub($factoryStub)
    {
        $this->factoryStub = $factoryStub;

        return $this;
    }

    /**
     * Get factoryStub
     *
     * @return string 
     */
    public function getFactoryStub()
    {
        return $this->factoryStub;
    }

    /**
     * Set factoryLabel
     *
     * @param string $factoryLabel
     * @return RTranscodingFactory
     */
    public function setFactoryLabel($factoryLabel)
    {
        $this->factoryLabel = $factoryLabel;

        return $this;
    }

    /**
     * Get factoryLabel
     *
     * @return string 
     */
    public function getFactoryLabel()
    {
        return $this->factoryLabel;
    }

    /**
     * Set factoryName
     *
     * @param string $factoryName
     * @return RTranscodingFactory
     */
    public function setFactoryName($factoryName)
    {
        $this->factoryName = $factoryName;

        return $this;
    }

    /**
     * Get factoryName
     *
     * @return string 
     */
    public function getFactoryName()
    {
        return $this->factoryName;
    }

    /**
     * Set factoryDescription
     *
     * @param string $factoryDescription
     * @return RTranscodingFactory
     */
    public function setFactoryDescription($factoryDescription)
    {
        $this->factoryDescription = $factoryDescription;

        return $this;
    }

    /**
     * Get factoryDescription
     *
     * @return string 
     */
    public function getFactoryDescription()
    {
        return $this->factoryDescription;
    }

    /**
     * Set idLogin
     *
     * @param integer $idLogin
     * @return RTranscodingFactory
     */
    public function setIdLogin($idLogin)
    {
        $this->idLogin = $idLogin;

        return $this;
    }

    /**
     * Get idLogin
     *
     * @return integer 
     */
    public function getIdLogin()
    {
        return $this->idLogin;
    }

    /**
     * Set idMachine
     *
     * @param integer $idMachine
     * @return RTranscodingFactory
     */
    public function setIdMachine($idMachine)
    {
        $this->idMachine = $idMachine;

        return $this;
    }

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
     * Set renameMask
     *
     * @param string $renameMask
     * @return RTranscodingFactory
     */
    public function setRenameMask($renameMask)
    {
        $this->renameMask = $renameMask;

        return $this;
    }

    /**
     * Get renameMask
     *
     * @return string 
     */
    public function getRenameMask()
    {
        return $this->renameMask;
    }

    /**
     * Set optionRename
     *
     * @param boolean $optionRename
     * @return RTranscodingFactory
     */
    public function setOptionRename($optionRename)
    {
        $this->optionRename = $optionRename;

        return $this;
    }

    /**
     * Get optionRename
     *
     * @return boolean 
     */
    public function getOptionRename()
    {
        return $this->optionRename;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return RTranscodingFactory
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set defaultPriority
     *
     * @param string $defaultPriority
     * @return RTranscodingFactory
     */
    public function setDefaultPriority($defaultPriority)
    {
        $this->defaultPriority = $defaultPriority;

        return $this;
    }

    /**
     * Get defaultPriority
     *
     * @return string 
     */
    public function getDefaultPriority()
    {
        return $this->defaultPriority;
    }

    /**
     * Set defaultSchedule
     *
     * @param \DateTime $defaultSchedule
     * @return RTranscodingFactory
     */
    public function setDefaultSchedule($defaultSchedule)
    {
        $this->defaultSchedule = $defaultSchedule;

        return $this;
    }

    /**
     * Get defaultSchedule
     *
     * @return \DateTime 
     */
    public function getDefaultSchedule()
    {
        return $this->defaultSchedule;
    }

    /**
     * Set pathToFile
     *
     * @param string $pathToFile
     * @return RTranscodingFactory
     */
    public function setPathToFile($pathToFile)
    {
        $this->pathToFile = $pathToFile;

        return $this;
    }

    /**
     * Get pathToFile
     *
     * @return string 
     */
    public function getPathToFile()
    {
        return $this->pathToFile;
    }
}
