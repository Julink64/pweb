<?php

namespace Pweb\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pweb\MainBundle\Entity\CategorieRepository")
 */
class Categorie
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
     * @ORM\Column(name="libelle_categorie", type="string", length=50)
     * @ORM\JoinColumn(name="libelle_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $libelleCategorie;


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
     * Set libelleCategorie
     *
     * @param string $libelleCategorie
     * @return Categorie
     */
    public function setLibelleCategorie($libelleCategorie)
    {
        $this->libelleCategorie = $libelleCategorie;
    
        return $this;
    }

    /**
     * Get libelleCategorie
     *
     * @return string 
     */
    public function getLibelleCategorie()
    {
        return $this->libelleCategorie;
    }
}
