<?php

namespace Pweb\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pweb\MainBundle\Entity\ProduitRepository")
 */
class Produit
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
     * @ORM\Column(name="libelle", type="string", length=50)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
   * @ORM\ManyToMany(targetEntity="Pweb\MainBundle\Entity\Categorie", cascade={"all"})
   * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id", onDelete="SET NULL")
   */
  private $categories;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="poids", type="integer")
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="text")
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="text")
     */
    private $lien;

    /**
   * @ORM\ManyToOne(targetEntity="Pweb\MainBundle\Entity\Panier", cascade={"all"})
   *    * @ORM\JoinColumn(name="panier_id", referencedColumnName="id", onDelete="SET NULL")
   */
  private $idpanier;
  

  /**
   * Set panier
   *
   * @param Pweb\MainBundle\Entity\Panier $panier
   */
  public function setPanier(Pweb\MainBundle\Entity\Produit $idpanier)
  {
    $this->panier = $idpanier;
  }
 
  /**
   * Get panier
   *
   * @return Pweb\MainBundle\Entity\Panier 
   */
  public function getPanier()
  {
    return $this->idpanier;
  }


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
     * Set libelle
     *
     * @param string $libelle
     * @return Produit
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set poids
     *
     * @param integer $poids
     * @return Produit
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    
        return $this;
    }

    /**
     * Get poids
     *
     * @return integer 
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Produit
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set lien
     *
     * @param string $lien
     * @return Produit
     */
    public function setLien($lien)
    {
        $this->lien = $lien;
    
        return $this;
    }

    /**
     * Get lien
     *
     * @return string 
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add categories
     *
     * @param \Pweb\MainBundle\Entity\Categorie $categories
     * @return Produit
     */
    public function addCategorie(\Pweb\MainBundle\Entity\Categorie $categorie)
    {
        $this->categories[] = $categorie;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Pweb\MainBundle\Entity\Categorie $categories
     */
    public function removeCategorie(\Pweb\MainBundle\Entity\Categorie $categorie)
    {
        $this->categories->removeElement($categorie);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
