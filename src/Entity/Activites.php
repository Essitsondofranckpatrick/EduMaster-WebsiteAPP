<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activites
 *
 * @ORM\Table(name="activites")
 * @ORM\Entity
 */
class Activites
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_activites", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActivites;

    /**
     * @var string
     *
     * @ORM\Column(name="date_activite", type="string", length=255, nullable=false)
     */
    private $dateActivite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_activite", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="type_activite", type="string", length=30, nullable=false)
     */
    private $typeActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=false)
     */
    private $lieu;


}
