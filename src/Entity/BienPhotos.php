<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * BienPhotos
 *
 * @ORM\Table(name="bien_photos", indexes={@ORM\Index(name="IDX_F1711FE936109D18", columns={"idBien"}), @ORM\Index(name="IDX_F1711FE9D2F94742", columns={"idImage"})})
 * @ORM\Entity
 */
class BienPhotos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id",type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Bien
     *
     * @ORM\ManyToOne(targetEntity="Bien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idBien", referencedColumnName="id")
     * })
     */
    private $idbien;

    /**
     * @var \Image
     *
     * @ORM\ManyToOne(targetEntity="Image")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idImage", referencedColumnName="id")
     * })
     */
    private $idimage;



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
     * Get the value of idimage
     *
     * @return  \Image
     */ 
    public function getIdimage()
    {
        return $this->idimage;
    }

    /**
     * Set the value of idimage
     *
     * @param  \Image  $idimage
     *
     * @return  self
     */ 
    public function setIdimage(\Image $idimage)
    {
        $this->idimage = $idimage;

        return $this;
    }

    /**
     * Get the value of idbien
     *
     * @return  \Bien
     */ 
    public function getIdbien()
    {
        return $this->idbien;
    }

    /**
     * Set the value of idbien
     *
     * @param  \Bien  $idbien
     *
     * @return  self
     */ 
    public function setIdbien(\Bien $idbien)
    {
        $this->idbien = $idbien;

        return $this;
    }
}
