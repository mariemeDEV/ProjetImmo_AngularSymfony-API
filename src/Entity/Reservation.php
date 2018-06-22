<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="fk_idcl", columns={"idClient"}), @ORM\Index(name="fk_bien", columns={"idBien"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idReservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreservation;

    /**
     * @var string
     *
     * @ORM\Column(name="dateReservation", type="string", length=10, nullable=false)
     */
    private $datereservation;

    /**
     * @var string
     *
     * @ORM\Column(name="etatReservation", type="string", length=10, nullable=false)
     */
    private $etatreservation;

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
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idclient;


}
