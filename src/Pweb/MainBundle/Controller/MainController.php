<?php
namespace Pweb\MainBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pweb\MainBundle\Entity\Article;
use Pweb\MainBundle\Entity\Image;
 
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
 
    // On récupère l'entité correspondant à l'id $id
    $article = $em->getRepository('PwebMainBundle:Article')
                  ->find($id);

    if($article === null)
    {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
    }
 
    // On récupère la liste des commentaires
    $liste_commentaires = $em->getRepository('PwebMainBundle:Commentaire')
                             ->findAll();
 
    // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
    return $this->render('PwebMainBundle:Main:voir.html.twig', array(
      'article'        => $article,
      'liste_commentaires' => $liste_commentaires
    ));
  }
     
  public function ajouterAction()
  {
    // Création de l'entité Article
    $article = new Article();
    $article->setTitre('Mon dernier weekend');
    $article->setContenu("C'était vraiment super et on s'est bien amusé.");
    $article->setAuteur('winzou');
 /*
    // Création d'un premier commentaire
    $commentaire1 = new Commentaire();
    $commentaire1->setAuteur('winzou');
    $commentaire1->setContenu('On veut les photos !');
 
    // Création d'un deuxième commentaire, par exemple
    $commentaire2 = new Commentaire();
    $commentaire2->setAuteur('Choupy');
    $commentaire2->setContenu('Les photos arrivent !');
 
    // On lie les commentaires à l'article
    $commentaire1->setArticle($article);
    $commentaire2->setArticle($article);
 
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();
 
    // Étape 1 : On persiste les entités
    $em->persist($article);
    // Pour cette relation pas de cascade, car elle est définie dans l'entité Commentaire et non Article
    // On doit donc tout persister à la main ici
    $em->persist($commentaire1);
    $em->persist($commentaire2);
 
    // Étape 2 : On déclenche l'enregistrement
    $em->flush();
  */
    // Reste de la méthode qu'on avait déjà écrit
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
      return $this->redirect( $this->generateUrl('PwebMain_voir', array('id' => $article->getId())) );
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
 
    // On récupère toutes les catégories :
    /*$liste_categories = $em->getRepository('PwebMainBundle:Categorie')
                           ->findAll();
 */
    // On boucle sur les catégories pour les lier à l'article
    /*foreach($liste_categories as $categorie)
    {
      $article->addCategorie($categorie);
    }
 */
    // Inutile de persister l'article, on l'a récupéré avec Doctrine
 
    // Étape 2 : On déclenche l'enregistrement
    //$em->flush();
         
    // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
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
    $em=$this->getDoctrine()->getManager();/*
    $liste_articles = $em->getRepository('PwebMainBundle:Article')
                           ->findAll();
    
    foreach($liste_categories as $article)
    {
      $em->remove($article);
    }
*/
    $article1 = new Article();
    $article1->setTitre('Iphone 5S');
    $article1->setAuteur('Tim Cook');
    $article1->setContenu("D’après 2 clichés fuités sur la toile, l'Iphone 5S disposerait d’un design revu, corrigé, et désormais courbé.");
    $em->persist($article1);
    
    $article2 = new Article();
    $article2->setTitre('Galaxy S4');
    $article2->setAuteur('Claude Fouquet');
    $article2->setContenu("Le smartphone serait doté d'un écran 5 pouces 1080p d'une densité de 440 points par pouce avec le un SoC Exynos quadruple coeur 2 GHz (ou peut-être même l'Exynos 5 octuple coeurs), 2 Go de RAM et un capteur photo de 13 megapixels.");
    $em->persist($article2);
    
    $article3 = new Article();
    $article3->setTitre('Porsche CAYENNE DIESEL V6');
    $article3->setAuteur('Automobile.fr');
    $article3->setContenu("Toit panoramique, Rampes de pavillon avec barrettes de protection en AluDesign mat, Hayon automatique, Caméra de recul incluant l' assistance parking AV/AR, Phares Bi xénon avec Porsche Dynamic Light System (PDLS).");
    $em->persist($article3);
    
    $em->flush();
    
    return $this->render('PwebMainBundle:Main:renitialisation.html.twig');
  }
  
}