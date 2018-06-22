<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire
 *
 * @ORM\Table(name="proprietaire", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_69E399D6E9505DD2", columns={"numPiece"})})
 * @ORM\Entity
 */
class Proprietaire
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
     * @var intnum
     *
     * @ORM\Column(name="idProprietaire", type="integer", nullable=false)
     */
    private $idproprietaire;

    /**
     * @var string
     *
     * @ORM\Column(name="numPiece", type="string", length=255, nullable=false)
     */
    private $numpiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nomComplet", type="string", length=30, nullable=false)
     */
    private $nomcomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=4, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=40, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=40, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="codeBanque", type="string", length=80, nullable=false)
     */
    private $codebanque;


}
