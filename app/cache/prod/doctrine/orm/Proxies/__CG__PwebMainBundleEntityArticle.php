<?php

namespace Proxies\__CG__\Pweb\MainBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Article extends \Pweb\MainBundle\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setDate($date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function setTitre($titre)
    {
        $this->__load();
        return parent::setTitre($titre);
    }

    public function getTitre()
    {
        $this->__load();
        return parent::getTitre();
    }

    public function setAuteur($auteur)
    {
        $this->__load();
        return parent::setAuteur($auteur);
    }

    public function getAuteur()
    {
        $this->__load();
        return parent::getAuteur();
    }

    public function setContenu($contenu)
    {
        $this->__load();
        return parent::setContenu($contenu);
    }

    public function getContenu()
    {
        $this->__load();
        return parent::getContenu();
    }

    public function setPublication($publication)
    {
        $this->__load();
        return parent::setPublication($publication);
    }

    public function getPublication()
    {
        $this->__load();
        return parent::getPublication();
    }

    public function setImage(\Pweb\MainBundle\Entity\Image $image = NULL)
    {
        $this->__load();
        return parent::setImage($image);
    }

    public function getImage()
    {
        $this->__load();
        return parent::getImage();
    }

    public function addCategorie(\Pweb\MainBundle\Entity\Categorie $categorie)
    {
        $this->__load();
        return parent::addCategorie($categorie);
    }

    public function removeCategorie(\Pweb\MainBundle\Entity\Categorie $categorie)
    {
        $this->__load();
        return parent::removeCategorie($categorie);
    }

    public function getCategories()
    {
        $this->__load();
        return parent::getCategories();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'date', 'titre', 'auteur', 'contenu', 'image');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}