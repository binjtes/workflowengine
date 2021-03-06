<?php

namespace Acme\HelloBundle\Entity;

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
    private $optionRename;

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
    private $defaultPriority;

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


}
