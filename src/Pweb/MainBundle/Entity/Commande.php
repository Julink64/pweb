<?php

namespace Pweb\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pweb\MainBundle\Entity\CommandeRepository")
 */
class Commande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpanier", type="integer")
     */
    private $idpanier;

    /**
     * @var integer
     *
     * @ORM\Column(name="idacheteur", type="integer")
     */
    private $idacheteur;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Commande
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set idpanier
     *
     * @param integer $idpanier
     * @return Commande
     */
    public function setIdpanier($idpanier)
    {
        $this->idpanier = $idpanier;

        return $this;
    }

    /**
     * Get idpanier
     *
     * @return integer 
     */
    public function getIdpanier()
    {
        return $this->idpanier;
    }

    /**
     * Set idacheteur
     *
     * @param integer $idacheteur
     * @return Commande
     */
    public function setIdacheteur($idacheteur)
    {
        $this->idacheteur = $idacheteur;

        return $this;
    }

    /**
     * Get idacheteur
     *
     * @return integer 
     */
    public function getIdacheteur()
    {
        return $this->idacheteur;
    }
}
