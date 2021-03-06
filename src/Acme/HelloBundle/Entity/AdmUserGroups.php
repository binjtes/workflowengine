<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdmUserGroups
 *
 * @ORM\Table(name="adm_user_groups", uniqueConstraints={@ORM\UniqueConstraint(name="id_user", columns={"id_user", "id_group"})})
 * @ORM\Entity
 */
class AdmUserGroups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_group", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGroup;


}
