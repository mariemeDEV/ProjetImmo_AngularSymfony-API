<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_60349993F900B9F8", columns={"idTypeBien"})}, indexes={@ORM\Index(name="IDX_6034999336109D18", columns={"idBien"}), @ORM\Index(name="IDX_60349993A455ACCF", columns={"idClient"})})
 * @ORM\Entity
 */
class Contrat
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateContrat", type="datetime", nullable=false)
     */
    private $datecontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=false)
     */
    private $etat;

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

    /**
     * @var \TypeBien
     *
     * @ORM\ManyToOne(targetEntity="TypeBien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTypeBien", referencedColumnName="id")
     * })
     */
    private $idtypebien;


}
