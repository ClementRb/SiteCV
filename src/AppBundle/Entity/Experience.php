<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExperienceRepository")
 */
class Experience
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
     * @ORM\Column(name="entreprise", type="string", length=255)
     */
    private $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text")
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
     * @return Experience
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
     * Set entreprise
     *
     * @param string $entreprise
     *
     * @return Experience
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Experience
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
     * @param \int $anneedebut
     *
     * @return Experience
     */
    public function setAnneedebut($anneedebut)
    {
        $this->anneedebut = $anneedebut;

        return $this;
    }

    /**
     * Get anneedebut
     *
     * @return \int
     */
    public function getAnneedebut()
    {
        return $this->anneedebut;
    }

    /**
     * Set anneefin
     *
     * @param \int $anneefin
     *
     * @return Experience
     */
    public function setAnneefin($anneefin)
    {
        $this->anneefin = $anneefin;

        return $this;
    }

    /**
     * Get anneefin
     *
     * @return \int
     */
    public function getAnneefin()
    {
        return $this->anneefin;
    }
}

