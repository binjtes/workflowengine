<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PublicationStatus
 *
 * @ORM\Table(name="publication_status")
 * @ORM\Entity
 */
class PublicationStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_status", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=55, nullable=true)
     */
    private $description;


}
