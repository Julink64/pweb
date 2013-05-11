<?php
namespace Pweb\MainBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pweb\MainBundle\Entity\Produit;
use Pweb\MainBundle\Entity\Categorie;
use Pweb\MainBundle\Entity\Acheteur;
use Pweb\MainBundle\Entity\Commande;

use JMS\SecurityExtraBundle\Annotation\Secure;


class MainController extends Controller
{
  public function indexAction($page)
  {
$nombre=15;
    $produit = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('PwebMainBundle:Produit')
                  ->findBy(
                    array(),          // Pas de critère
                    array('id' => 'desc'), // On trie par date décroissante
                    $nombre,         // On sélectionne $nombre articles
                    0                // À partir du premier
                  );
      
      
      return $this->render('PwebMainBundle:Main:index.html.twig', array(
    'produit' => $produit
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
    
    return $this->render('PwebMainBundle:Main:voir.html.twig', array(
      'produit'        => $produit));
}

  public function ajouterAction()
  {
	$prod = new Produit();
	// On crée le FormBuilder grâce à la méthode du contrôleur
	$formBuilder = $this->createFormBuilder($prod);
	$formBuilder
		
		->add('libelle',		'text')
		->add('categorie',		'integer')
		->add('description',	'textarea')
		->add('prix',			'text')
		->add('poids',			'text')
		->add('photo',			'text')
		->add('lien',			'text')
		;

	// Pour l'instant, pas de commentaires, catégories, etc., on les gérera plus tard
	// À partir du formBuilder, on génère le formulaire
	$form = $formBuilder->getForm();
	
	// On récupère la requête
	$request = $this->get('request');
	
	// On vérifie qu'elle est de type POST
	if ($request->getMethod() == 'POST') {
	
		// On fait le lien Requête <-> Formulaire
		// A partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
		$form->bind($request);
		
		// On vérifie que les valeurs rentrées sont correctes
		// (Nous verrons la validation des objets en détail dans le prochain chapitre)
		if ($form->isValid()) {
		
			// On l'enregistre notre objet $article dans la base de données
			$em = $this->getDoctrine()->getManager(); 
			$em->persist($prod);
			$em->flush();
			
			// On redirige vers la page de visualisation de l'article nouvellement créé
			return $this->redirect($this->generateUrl('PwebMain_voir', array('id' => $prod->getId())));
			
		} 
	}

// Reste de la méthode qu'on avait déjà écrit
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
      return $this->redirect( $this->generateUrl('PwebMain_voir', array('id' => $produit->getId())) );
    }
 
    return $this->render('PwebMainBundle:Main:ajouter.html.twig', array(
'form' => $form->createView(), ));
  }

// Ajout d'un article existant à plusieurs catégories existantes :

  public function modifierAction($id)
  {
    $em = $this->getDoctrine()
               ->getManager();

    $produit = $em->getRepository('PwebMainBundle:Produit')
                  ->find($id);
 
        if($produit === null)
    {
      throw $this->createNotFoundException('Produit[id='.$id.'] inexistant.');
    }
    
    return $this->render('PwebMainBundle:Main:modifier.html.twig', array(
      'produit'        => $produit));
  }
  
  public function supprimerAction($id)
  {
    $em = $this->getDoctrine()
               ->getManager();
 
    $produit = $em->getRepository('PwebMainBundle:Produit')
                  ->find($id);
    if ($produit === null) {
      throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
    }
    if($produit === null)
    {      throw $this->createNotFoundException('Produit[id='.$id.'] inexistant.');    }
    return $this->render('PwebMainBundle:Main:supprimer.html.twig', array(
      'produit'        => $produit));
  }
  
public function menuAction($nombre)
  {
    $nombre_art=10;$nombre_cat=10;
    $liste_art = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('PwebMainBundle:Produit')
                  ->findBy(
                    array(),          // Pas de critère
                    array('id' => 'desc'), // On trie par date décroissante
                    $nombre_art,         // On sélectionne $nombre articles
                    0                // À partir du premier
                  );
    $liste_cat = $this->getDoctrine()
              ->getManager()
              ->getRepository('PwebMainBundle:Categorie')
              ->findBy(
                array(),          // Pas de critère
                array('id' => 'desc'), // On trie par date décroissante
                $nombre_cat,         // On sélectionne $nombre articles
                0                // À partir du premier
              );

    return $this->render('PwebMainBundle:Main:menu.html.twig', array(
      'liste_articles' => $liste_art,'liste_categories' => $liste_cat));
  }
  
  public function modifierImageAction($id_article)
{
  $em = $this->getDoctrine()->getManager();
  $article = $em->getRepository('PwebMainBundle:Article')->find($id_article);
  $article->getImage()->setUrl('test.png');
  $em->flush();
 
  return new Response('OK');
}

    public function initialiseproduitsAction()
  {
    $em=$this->getDoctrine()->getManager();
	$url = $this->generateUrl('PwebMain_accueil');
// Produits
    $article1 = new Produit();
    $article1->setLibelle('BigMac');
    $article1->setDescription('Le Big Mac est un hamburger vendu par la chaîne de restauration rapide McDonald\'s depuis 1968. Il a apparemment été inspiré par un hamburger similaire à deux étages vendu par la chaîne Big Boy depuis 1936.');
    $article1->setCategorie('3');
    $article1->setPrix('6.05');
    $article1->setPoids('180');
    $article1->setPhoto(str_replace('app_dev.php/','Produits/BigMac.png',$url));
    $article1->setLien('http://fr.wikipedia.org/wiki/Big_Mac‎');
    $em->persist($article1);
    
    $article2 = new Produit();
    $article2->setLibelle('Galaxy S4');
    $article2->setDescription('Le smartphone serait doté d\'un écran 5 pouces 1080p d\'une densité de 440 points par pouce avec le un SoC Exynos quadruple coeur 2 GHz (ou peut-être même l\'Exynos 5 octuple coeurs), 2 Go de RAM et un capteur photo de 13 megapixels.');
    $article2->setCategorie('1');
    $article2->setPrix('634.14');
    $article2->setPoids('110');
    $article2->setPhoto(str_replace('app_dev.php/','Produits/GalaxyS4.jpg',$url));
    $article2->setLien('http://www.galaxys4.fr');
    $em->persist($article2);

    $article3 = new Produit();
    $article3->setLibelle('Porsche Cayenne Diesel V6');
    $article3->setDescription('Toit panoramique, Rampes de pavillon avec barrettes de protection en AluDesign mat, Hayon automatique, Caméra de recul incluant l\' assistance parking AV/AR, Phares Bi xénon avec Porsche Dynamic Light System (PDLS).');
    $article3->setCategorie('2');
    $article3->setPrix('97405.34');
    $article3->setPoids('2467943');
    $article3->setPhoto(str_replace('app_dev.php/','Produits/Porsche.jpg',$url));
    $article3->setLien('http://www.porsche.com/france/');
    $em->persist($article3);
    
    $article4 = new Produit();
    $article4->setLibelle('Iphone 6');
    $article4->setDescription('D’ici quelques semaines, Apple dévoilera enfin son nouveau smartphone au sujet duquel on ne sait pour le moment presque rien, voire rien du tout. Une chose cependant est certaine, iOS7 sera de la partie et proposera de nombreuses nouveautés pour améliorer l’expérience utilisateur.');
    $article4->setCategorie('1');
    $article4->setPrix('654.45');
    $article4->setPoids('107');
    $article4->setPhoto(str_replace('app_dev.php/','Produits/iPhone-6.png',$url));
    $article4->setLien('http://www.terrafemina.com/culture/culture-web/articles/25462-iphone-6-ou-iphone-5s-le-plein-de-nouveautes-pour-ios7.html');
    $em->persist($article4);
    
    $article5 = new Produit();
    $article5->setLibelle('F-22 Raptor');
    $article5->setDescription('Le F-22 Raptor est un avion de chasse de cinquième génération propulsé par deux turboréacteurs Pratt & Whitney F-119-PW-100 à postcombustion d’une poussée unitaire d’environ 35 000 lbf, soit 156 kN. Pour comparaison, la poussée des avions de chasse McDonnell Douglas F-15 Eagle et General Dynamics F-16 Falcon est comprise entre 23 000 et 29 000 lbf.');
    $article5->setCategorie('4');
    $article5->setPrix('350000000.00');
    $article5->setPoids('27000000');
    $article5->setPhoto(str_replace('app_dev.php/','Produits/f22.jpg',$url));
    $article5->setLien('http://info-aviation.com/?p=14120');
    $em->persist($article5);

    $em->flush();
    return $this->render('PwebMainBundle:Main:initialiseproduits.html.twig');
  }
  
    public function initialisecategoriesAction()
  {
    $em=$this->getDoctrine()->getManager();

// Categories
    $categorie1 = new Categorie();
    $categorie1->setLibelleCategorie('Smartphones');
    $em->persist($categorie1);
    
    $categorie2 = new Categorie();
    $categorie2->setLibelleCategorie('Voitures');
    $em->persist($categorie2);
    
    $categorie3 = new Categorie();
    $categorie3->setLibelleCategorie('Restauration');
    $em->persist($categorie3);
    
    $categorie4 = new Categorie();
    $categorie4->setLibelleCategorie('Aéronef');
    $em->persist($categorie4);
    
    $em->flush();
    return $this->render('PwebMainBundle:Main:initialisecategories.html.twig');
  }
  
    public function initialiseclearAction()
  {
// Fonction qui vide toute la base de donnée : missing
    $em=$this->getDoctrine()->getManager();

    $em->flush();
    return $this->render('PwebMainBundle:Main:initialiseclear.html.twig');
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
  
  public function connecterAction()
  {
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'connexion');
    }
    $url = $this->generateUrl('PwebMain_accueil');
    $option = 'login';
    return $this->redirect($url.$option);
  }
  
  	public function enregistrerAction()
  {
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'connexion');
    }
    $url = $this->generateUrl('PwebMain_accueil');
    $option = 'register';
    return $this->redirect($url.$option);
  }

}