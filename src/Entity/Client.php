<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_C7440455E9505DD2", columns={"numPiece"}), @ORM\UniqueConstraint(name="UNIQ_C7440455450FF010", columns={"telephone"}), @ORM\UniqueConstraint(name="UNIQ_C7440455E7927C74", columns={"email"})})
 * @ORM\Entity
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;nump

    /**
     * @var string
     *
     * @ORM\Column(name="numPiece", type="string", length=40, nullable=false)
     */
    private $numpiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nomComplet", type="string", length=40, nullable=false)
     */
    private $nomcomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=40, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="
email", type="string", length=40, nullable=false)
     */
    private $email;


}
