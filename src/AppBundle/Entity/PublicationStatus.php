<?php

namespace AppBundle\Entity;

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



    /**
     * Get idStatus
     *
     * @return integer 
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return PublicationStatus
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
