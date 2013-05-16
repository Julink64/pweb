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
     * @ORM\Column(name="idproduit", type="integer")
     */
    private $idproduit;

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
     * Set idproduit
     *
     * @param integer $idproduit
     * @return Commande
     */
    public function setIdproduit($idproduit)
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    /**
     * Get idproduit
     *
     * @return integer 
     */
    public function getIdproduit()
    {
        return $this->idproduit;
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
