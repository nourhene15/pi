<?php

namespace BibliothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="BibliothequeBundle\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
    * @Assert\NotBlank
     * @Assert\Length(
     *      min = 3,
     *      max = 255,
     *      minMessage = "Nom must be at least {{ limit }} characters long",
     *      maxMessage = "Nom cannot be longer than {{ limit }} characters"
     * )
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="discreption", type="string", length=2500)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 3,
     *      max = 2000,
     *      minMessage = "Discreption must be at least {{ limit }} characters long",
     *      maxMessage = "Discreption cannot be longer than {{ limit }} characters"
     * )
     */
    private $discreption;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Categorie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set discreption
     *
     * @param string $discreption
     *
     * @return Categorie
     */
    public function setDiscreption($discreption)
    {
        $this->discreption = $discreption;

        return $this;
    }

    /**
     * Get discreption
     *
     * @return string
     */
    public function getDiscreption()
    {
        return $this->discreption;
    }
}

