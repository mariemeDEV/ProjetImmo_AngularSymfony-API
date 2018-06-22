<?php
namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Bien
 *
 * @ORM\Table(name="bien", indexes={@ORM\Index(name="IDX_45EDC386A674CEF2", columns={"idLocalite"}), @ORM\Index(name="IDX_45EDC386F900B9F8", columns={"idTypeBien"})})
 * @ORM\Entity
 */
class Bien
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
     * @ORM\Column(name="nomBien", type="string", length=40, nullable=false)
     */
    private $nombien;

    /**
     * @var bool
     *
     * @ORM\Column(name="etatBien", type="boolean", nullable=false)
     */
    private $etatbien;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionBien", type="string", length=255, nullable=false)
     */
    private $descriptionbien;

    /**
     * @var string
     *
     * @ORM\Column(name="prixLoction", type="string", length=80, nullable=false)
     */
    private $prixloction;

    /**
     * @var \Localite
     *
     * @ORM\ManyToOne(targetEntity="Localite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLocalite", referencedColumnName="id")
     * })
     */
    private $idlocalite;

    /**
     * @var \TypeBien
     *
     * @ORM\ManyToOne(targetEntity="TypeBien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTypeBien", referencedColumnName="id")
     * })
     */
    private $idtypebien;



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
     * Get the value of nombien
     *
     * @return  string
     */ 
    public function getNombien()
    {
        return $this->nombien;
    }

    /**
     * Set the value of nombien
     *
     * @param  string  $nombien
     *
     * @return  self
     */ 
    public function setNombien(string $nombien)
    {
        $this->nombien = $nombien;

        return $this;
    }

    /**
     * Get the value of etatbien
     *
     * @return  bool
     */ 
    public function getEtatbien()
    {
        return $this->etatbien;
    }

    /**
     * Set the value of etatbien
     *
     * @param  bool  $etatbien
     *
     * @return  self
     */ 
    public function setEtatbien(bool $etatbien)
    {
        $this->etatbien = $etatbien;

        return $this;
    }

    /**
     * Get the value of descriptionbien
     *
     * @return  string
     */ 
    public function getDescriptionbien()
    {
        return $this->descriptionbien;
    }

    /**
     * Set the value of descriptionbien
     *
     * @param  string  $descriptionbien
     *
     * @return  self
     */ 
    public function setDescriptionbien(string $descriptionbien)
    {
        $this->descriptionbien = $descriptionbien;

        return $this;
    }

    /**
     * Get the value of prixloction
     *
     * @return  string
     */ 
    public function getPrixloction()
    {
        return $this->prixloction;
    }

    /**
     * Set the value of prixloction
     *
     * @param  string  $prixloction
     *
     * @return  self
     */ 
    public function setPrixloction(string $prixloction)
    {
        $this->prixloction = $prixloction;

        return $this;
    }

    /**
     * Get the value of idlocalite
     *
     * @return  \Localite
     */ 
    public function getIdlocalite()
    {
        return $this->idlocalite;
    }

    /**
     * Set the value of idlocalite
     *
     * @param  \Localite  $idlocalite
     *
     * @return  self
     */ 
    public function setIdlocalite(\Localite $idlocalite)
    {
        $this->idlocalite = $idlocalite;

        return $this;
    }

    /**
     * Get the value of idtypebien
     *
     * @return  \TypeBien
     */ 
    public function getIdtypebien()
    {
        return $this->idtypebien;
    }

    /**
     * Set the value of idtypebien
     *
     * @param  \TypeBien  $idtypebien
     *
     * @return  self
     */ 
    public function setIdtypebien(\TypeBien $idtypebien)
    {
        $this->idtypebien = $idtypebien;

        return $this;
    }
}
