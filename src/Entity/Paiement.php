<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="Paiement", indexes={@ORM\Index(name="fk_idCont", columns={"idContrat"})})
 * @ORM\Entity
 */
class Paiement
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPaiement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="datePaiement", type="string", length=10, nullable=false)
     */
    private $datepaiement;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var int
     *
     * @ORM\Column(name="periode", type="integer", nullable=false)
     */
    private $periode;

    /**
     * @var \Contrat
     *
     * @ORM\ManyToOne(targetEntity="Contrat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idContrat", referencedColumnName="id")
     * })
     */
    private $idcontrat;


}
