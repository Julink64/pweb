<?php
namespace Pweb\MainBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pweb\MainBundle\Entity\Article;
use Pweb\MainBundle\Entity\Image;

use Pweb\MainBundle\Entity\Produit;
use Pweb\MainBundle\Entity\Categorie;
use Pweb\MainBundle\Entity\Acheteur;
use Pweb\MainBundle\Entity\Commande;


class MainController extends Controller
{
  public function indexAction($page)
  {
      /*
       *   public function indexAction($page)
  {
    if( $page < 1 )
        {      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');    }
        
    $repository = $this->getDoctrine()
               ->getManager()
               ->getRepository('PwebMainBundle:Article');
  
    $article = $repository->findAll();
  
  if($article === null)
  {
    throw $this->createNotFoundException('Aucun article n\'est présent. Utiliser l\'option réinitialiser pour ajouter les articles par défault.');
  }

  return $this->render('PwebMainBundle:Main:voir.html.twig', array('article' => $article));
  }
       */
      
      
      
    if( $page < 1 )
        {      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');    }

  // Les articles :
  $articles = array(
    array(
      'titre'   => 'Iphone 5S',
      'id'      => 1,
      'auteur'  => 'Tim Cook',
      'contenu' => 'D’après 2 clichés fuités sur la toile, l\'Iphone 5S disposerait d’un design revu, corrigé, et désormais courbé.',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Galaxy S4',
      'id'      => 2,
      'auteur' => 'Claude Fouquet',
      'contenu' => 'Le smartphone serait doté d\'un écran 5 pouces 1080p d\'une densité de 440 points par pouce avec le un SoC Exynos quadruple coeur 2 GHz (ou peut-être même l\'Exynos 5 octuple coeurs), 2 Go de RAM et un capteur photo de 13 megapixels.',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Porsche CAYENNE DIESEL V6',
      'id'      => 3,
      'auteur' => 'Automobile.fr',
      'contenu' => 'Toit panoramique, Rampes de pavillon avec barrettes de protection en AluDesign mat, Hayon automatique, Caméra de recul incluant l\' assistance parking AV/AR, Phares Bi xénon avec Porsche Dynamic Light System (PDLS);',
      'date'    => new \Datetime())
  );
     
  // Puis modifiez la ligne du render comme ceci, pour prendre en compte nos articles :
  return $this->render('PwebMainBundle:Main:index.html.twig', array(
    'articles' => $articles
  ));
  }
  
public function voirAction($id)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();
 
    $produit = $em->getRepository('PwebMainBundle:Produit')
              ->find($id);

        if($produit === null)
    {
      throw $this->createNotFoundException('Produit[id='.$id.'] inexistant.');
    }
    
/*
    return $this->render('PwebMainBundle:Main:voir.html.twig', array(
      'article'        => $article,
      'liste_commentaires' => $liste_commentaires
    ));
 */

    return $this->render('PwebMainBundle:Main:voir.html.twig', array(
      'produit'        => $produit));
}

  public function ajouterAction()
  {
// A la place du BigMac : mettre un formulaire d'enregistrement des produits.
    $produit = new Produit();
    $produit->setLibelle('BigMac');
    $produit->setDescription('Le Big Mac est un hamburger vendu par la chaîne de restauration rapide McDonald\'s depuis 1968. Il a apparemment été inspiré par un hamburger similaire à deux étages vendu par la chaîne Big Boy depuis 1936.');
    $produit->setCategorie('0');
    $produit->setPrix('6.05');
    $produit->setPoids('180');
    $produit->setPhoto('http://localhost/Symfony/web/Produits/BigMac.png');
    $produit->setLien('fr.wikipedia.org/wiki/Big_Mac‎');

    $em = $this->getDoctrine()->getManager();
    $em->persist($produit);
    $em->flush();

// Reste de la méthode qu'on avait déjà écrit
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
      return $this->redirect( $this->generateUrl('PwebMain_voir', array('id' => $produit->getId())) );
    }
 
    return $this->render('PwebMainBundle:Main:ajouter.html.twig');
  }

// Ajout d'un article existant à plusieurs catégories existantes :
  public function modifierAction($id)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();
 
    // On récupère l'entité correspondant à l'id $id
    $article = $em->getRepository('PwebMainBundle:Article')
                  ->find($id);
 
    if ($article === null) {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
    }
 
    return $this->render('PwebMainBundle:Main:modifier.html.twig', array(
      'article' => $article
    ));
  }
  
// Suppression des catégories d'un article :
  public function supprimerAction($id)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();
 
    // On récupère l'entité correspondant à l'id $id
    $article = $em->getRepository('PwebMainBundle:Article')
                  ->find($id);
 
    if ($article === null) {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
    }
     
    // On récupère toutes les catégories :
    $liste_categories = $em->getRepository('PwebMainBundle:Categorie')
                           ->findAll();
     
    // On enlève toutes ces catégories de l'article
    foreach($liste_categories as $categorie)
    {
      // On fait appel à la méthode removeCategorie() dont on a parlé plus haut
      // Attention ici, $categorie est bien une instance de Categorie, et pas seulement un id
      $article->removeCategorie($categorie);
    }
 
    // On n'a pas modifié les catégories : inutile de les persister
     
    // On a modifié la relation Article - Categorie
    // Il faudrait persister l'entité propriétaire pour persister la relation
    // Or l'article a été récupéré depuis Doctrine, inutile de le persister
   
    // On déclenche la modification
    $em->flush();
 
    return new Response('OK');
  }

  
  public function menuAction($nombre) // Ici, nouvel argument $nombre, on l'a transmis via le render() depuis la vue
  {
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
    // On pourra récupérer $nombre articles depuis la BDD,
    // avec $nombre un paramètre qu'on peut changer lorsqu'on appelle cette action
    $liste = array(
      array('id' => 1, 'titre' => 'Iphone 5S'),
      array('id' => 2, 'titre' => 'Galaxy S4'),
      array('id' => 3, 'titre' => 'Porsche CAYENNE DIESEL V6')
    );
     
    return $this->render('PwebMainBundle:Main:menu.html.twig', array(
      'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
    $doctrine = $this->getDoctrine()->getManager()->getRepository('PwebMainBundle:Article');
  }
  
  public function modifierImageAction($id_article)
{
  $em = $this->getDoctrine()->getManager();
  $article = $em->getRepository('PwebMainBundle:Article')->find($id_article);
  $article->getImage()->setUrl('test.png');
  $em->flush();
 
  return new Response('OK');
}
  
    public function reinitialiserAction()
  {
    $em=$this->getDoctrine()->getManager();
    
    $article1 = new Produit();
    $article1->setLibelle('Iphone 6');
    $article1->setDescription('D’ici quelques semaines, Apple dévoilera enfin son nouveau smartphone au sujet duquel on ne sait pour le moment presque rien, voire rien du tout. Une chose cependant est certaine, iOS7 sera de la partie et proposera de nombreuses nouveautés pour améliorer l’expérience utilisateur.');
    $article1->setCategorie('1');
    $article1->setPrix('654.45');
    $article1->setPoids('107');
    $article1->setPhoto('http://localhost/Symfony/web/Produits/iPhone-6.png');
    $article1->setLien('http://www.terrafemina.com/culture/culture-web/articles/25462-iphone-6-ou-iphone-5s-le-plein-de-nouveautes-pour-ios7.html');
    $em->persist($article1);

    $article2 = new Produit();
    $article2->setLibelle('Galaxy S4');
    $article2->setDescription('Le smartphone serait doté d\'un écran 5 pouces 1080p d\'une densité de 440 points par pouce avec le un SoC Exynos quadruple coeur 2 GHz (ou peut-être même l\'Exynos 5 octuple coeurs), 2 Go de RAM et un capteur photo de 13 megapixels.');
    $article2->setCategorie('1');
    $article2->setPrix('634.14');
    $article2->setPoids('110');
    $article2->setPhoto('http://localhost/Symfony/web/Produits/GalaxyS4.jpg');
    $article2->setLien('http://www.galaxys4.fr');
    $em->persist($article2);

    $article3 = new Produit();
    $article3->setLibelle('Porsche Cayenne Diesel V6');
    $article3->setDescription('Toit panoramique, Rampes de pavillon avec barrettes de protection en AluDesign mat, Hayon automatique, Caméra de recul incluant l\' assistance parking AV/AR, Phares Bi xénon avec Porsche Dynamic Light System (PDLS).');
    $article3->setCategorie('2');
    $article3->setPrix('97405.34');
    $article3->setPoids('2467943');
    $article3->setPhoto('http://localhost/Symfony/web/Produits/Porsche.jpg');
    $article3->setLien('http://www.porsche.com/france/');
    $em->persist($article3);
    
    $article4 = new Produit();
    $article4->setLibelle('BigMac');
    $article4->setDescription('Le Big Mac est un hamburger vendu par la chaîne de restauration rapide McDonald\'s depuis 1968. Il a apparemment été inspiré par un hamburger similaire à deux étages vendu par la chaîne Big Boy depuis 1936.');
    $article4->setCategorie('1');
    $article4->setPrix('6.05');
    $article4->setPoids('180');
    $article4->setPhoto('http://localhost/Symfony/web/Produits/BigMac.png');
    $article4->setLien('fr.wikipedia.org/wiki/Big_Mac‎');
    $em->persist($article4);
    
    $em->flush();
    return $this->render('PwebMainBundle:Main:renitialisation.html.twig');
  }
  
    public function espaceclientAction()
  {
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'espace client');
    }
    return $this->render('PwebMainBundle:Main:espaceclient.html.twig');
  }
  
      public function panierAction()
  {
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'panier');
    }
    return $this->render('PwebMainBundle:Main:panier.html.twig');
  }

}