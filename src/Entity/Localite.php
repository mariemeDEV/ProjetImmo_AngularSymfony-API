<?php
namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Localite
 *
 * @ORM\Table(name="localite")
 * @ORM\Entity
 */
class Localite
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
     * @ORM\Column(name="libelleLocalite", type="string", length=100, nullable=false)
     */
    private $libellelocalite;



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
     * Get the value of libellelocalite
     *
     * @return  string
     */ 
    public function getLibellelocalite()
    {
        return $this->libellelocalite;
    }

    /**
     * Set the value of libellelocalite
     *
     * @param  string  $libellelocalite
     *
     * @return  self
     */ 
    public function setLibellelocalite(string $libellelocalite)
    {
        $this->libellelocalite = $libellelocalite;

        return $this;
    }
}
