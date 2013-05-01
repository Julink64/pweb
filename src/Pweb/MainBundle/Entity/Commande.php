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
     * @ORM\Column(name="statut", type="string", length=10)
     */
    private $statut;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer")
     */
    private $idProduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_acheteur", type="integer")
     */
    private $idAcheteur;


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
     * Set idProduit
     *
     * @param integer $idProduit
     * @return Commande
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    
        return $this;
    }

    /**
     * Get idProduit
     *
     * @return integer 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set idAcheteur
     *
     * @param integer $idAcheteur
     * @return Commande
     */
    public function setIdAcheteur($idAcheteur)
    {
        $this->idAcheteur = $idAcheteur;
    
        return $this;
    }

    /**
     * Get idAcheteur
     *
     * @return integer 
     */
    public function getIdAcheteur()
    {
        return $this->idAcheteur;
    }
}
