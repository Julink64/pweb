<?php 
namespace Pweb\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 */
class CommandeProduit
{
  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Pweb\MainBundle\Entity\Produit")
   */
  private $produit;
 
  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Pweb\MainBundle\Entity\Commande")
   */
  private $commande;
 
  /**
   * @ORM\Column()
   */
  private $quantite; // L'attribut de relation « quantite » sert à définir le nombre de produits identiques.

    /**
     * Set quantite
     *
     * @param string $quantite
     * @return CommandeProduit
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return string 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set produit
     *
     * @param \Pweb\MainBundle\Entity\Produit $produit
     * @return CommandeProduit
     */
    public function setProduit(\Pweb\MainBundle\Entity\Produit $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Pweb\MainBundle\Entity\Produit 
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set commande
     *
     * @param \Pweb\MainBundle\Entity\Commande $commande
     * @return CommandeProduit
     */
    public function setCommande(\Pweb\MainBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \Pweb\MainBundle\Entity\Commande 
     */
    public function getCommande()
    {
        return $this->commande;
    }
}
