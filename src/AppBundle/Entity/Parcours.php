<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parcours
 *
 * @ORM\Table(name="parcours")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ParcoursRepository")
 */
class Parcours
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="ecole", type="string", length=255)
     */
    private $ecole;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=500)
     */
    private $texte;

    /**
     * @var int
     *
     * @ORM\Column(name="anneedebut", type="integer")
     */
    private $anneedebut;

    /**
     * @var int
     *
     * @ORM\Column(name="anneefin", type="integer")
     */
    private $anneefin;


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
     * Set name
     *
     * @param string $name
     *
     * @return Parcours
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Set ecole
     *
     * @param string $ecole
     *
     * @return Parcours
     */
    public function setEcole($ecole)
    {
        $this->ecole = $ecole;

        return $this;
    }

    /**
     * Get ecole
     *
     * @return string
     */
    public function getEcole()
    {
        return $this->ecole;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Parcours
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set anneedebut
     *
     * @param integer $anneedebut
     *
     * @return Parcours
     */
    public function setAnneedebut($anneedebut)
    {
        $this->anneedebut = $anneedebut;

        return $this;
    }

    /**
     * Get anneedebut
     *
     * @return int
     */
    public function getAnneedebut()
    {
        return $this->anneedebut;
    }

    /**
     * Set anneefin
     *
     * @param integer $anneefin
     *
     * @return Parcours
     */
    public function setAnneefin($anneefin)
    {
        $this->anneefin = $anneefin;

        return $this;
    }

    /**
     * Get anneefin
     *
     * @return int
     */
    public function getAnneefin()
    {
        return $this->anneefin;
    }
}

