<?php

namespace Pweb\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pweb\MainBundle\Entity\ArticleRepository")
 */
class Article
{

      /**
   * @ORM\OneToOne(targetEntity="Pweb\MainBundle\Entity\Image", cascade={"persist"})
   */
  private $image;
  
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    
    public function __construct()
  {
    $this->date = new \Datetime(); // Par défaut, la date de l'article est la date d'aujourd'hui
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
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set publication
     *
     * @param boolean $publication
     * @return Article
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
    
        return $this;
    }

    /**
     * Get publication
     *
     * @return boolean 
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set image
     *
     * @param \Pweb\MainBundle\Entity\Image $image
     * @return Article
     */
    public function setImage(\Pweb\MainBundle\Entity\Image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \Pweb\MainBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }
    
    // Comme la propriété $categories doit être un ArrayCollection, souvenez-vous
  // On doit la définir dans un constructeur :
  
  /**
    * Add categories
    *
    * @param Pweb\MainBundle\Entity\Categorie $categories
    */
  public function addCategorie(\Pweb\MainBundle\Entity\Categorie $categorie) // addCategorie sans « s » !
  {
    // Ici, on utilise l'ArrayCollection vraiment comme un tableau, avec la syntaxe []
    $this->categories[] = $categorie;
  }
 
  /**
    * Remove categories
    *
    * @param Pweb\MainBundle\Entity\Categorie $categories
    */
  public function removeCategorie(\Pweb\MainBundle\Entity\Categorie $categorie) // removeCategorie sans « s » !
  {
    // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
    $this->categories->removeElement($categorie);
  }
 
  /**
    * Get categories
    *
    * @return Doctrine\Common\Collections\Collection
    */
  public function getCategories() // Notez le « s », on récupère une liste de catégories ici !
  {
    return $this->categories;
  }
  
}