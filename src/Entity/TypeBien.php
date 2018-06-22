<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeBien
 *
 * @ORM\Table(name="type_bien")
 * @ORM\Entity
 */
class TypeBien
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleTypeBien", type="string", length=255, nullable=false)
     */
    private $libelletypebien;



    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of libelletypebien
     *
     * @return  string
     */ 
    public function getLibelletypebien()
    {
        return $this->libelletypebien;
    }

    /**
     * Set the value of libelletypebien
     *
     * @param  string  $libelletypebien
     *
     * @return  self
     */ 
    public function setLibelletypebien(string $libelletypebien)
    {
        $this->libelletypebien = $libelletypebien;

        return $this;
    }
}
