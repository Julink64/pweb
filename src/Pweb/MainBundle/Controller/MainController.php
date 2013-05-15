<?php
namespace Pweb\MainBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pweb\MainBundle\Entity\Produit;
use Pweb\MainBundle\Entity\Categorie;
use Pweb\MainBundle\Entity\Commande;
use Pweb\MainBundle\Entity\Panier;

use JMS\SecurityExtraBundle\Annotation\Secure;


class MainController extends Controller
{
# ------------------------------------------------------------------------------
# ACCUEIL

  public function indexAction()
  {
$nombre=15;
    $produit = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('PwebMainBundle:Produit')
                  ->findBy(
                    array(),          // Pas de critère
                    array('libelle' => 'asc'), // Trie alphabétique (le Big mac est gagnant)
                    $nombre,         // On sélectionne $nombre produits
                    0                // À partir du premier
                  );
      
      return $this->render('PwebMainBundle:Main:index.html.twig', array(
    'produit' => $produit
  ));
  }

  public function indextriprixcroissantAction()
  {
$nombre=15;
    $produit = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('PwebMainBundle:Produit')
                  ->findBy(
                    array(),          // Pas de critère
                    array('prix' => 'asc'), // Trie par prix croissant
                    $nombre,         // On sélectionne $nombre produits
                    0                // À partir du premier
                  );
      
      return $this->render('PwebMainBundle:Main:index.html.twig', array(
    'produit' => $produit
  ));
  }
  
  public function indextriprixdecroissantAction()
  {
$nombre=15;
    $produit = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('PwebMainBundle:Produit')
                  ->findBy(
                    array(),          // Pas de critère
                    array('prix' => 'desc'), // Trie par prix décroissant
                    $nombre,         // On sélectionne $nombre produits
                    0                // À partir du premier
                  );
      
      return $this->render('PwebMainBundle:Main:index.html.twig', array(
    'produit' => $produit
  ));
  }

  public function indextrirecentAction()
  {
$nombre=15;
    $produit = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('PwebMainBundle:Produit')
                  ->findBy(
                    array(),          // Pas de critère
                    array('id' => 'desc'), // Trie par id décroissant
                    $nombre,         // On sélectionne $nombre produits
                    0                // À partir du premier
                  );
      
      return $this->render('PwebMainBundle:Main:index.html.twig', array(
    'produit' => $produit
  ));
  }

  public function menuAction()
  {
    $nombre_prod=10;$nombre_cat=10;
    $liste_prod = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('PwebMainBundle:Produit')
                  ->findBy(
                    array(),          // Pas de critère
                    array('id' => 'desc'), // On trie par date décroissante
                    $nombre_prod,         // On sélectionne $nombre produits
                    0                // À partir du premier
                  );
    $liste_cat = $this->getDoctrine()
              ->getManager()
              ->getRepository('PwebMainBundle:Categorie')
              ->findBy(
                array(),          // Pas de critère
                array('id' => 'desc'), // On trie par date décroissante
                $nombre_cat,         // On sélectionne $nombre catégories
                0                // À partir du premier
              );

    return $this->render('PwebMainBundle:Main:menu.html.twig', array(
      'liste_produits' => $liste_prod,'liste_categories' => $liste_cat));
  }

# ------------------------------------------------------------------------------
# VOIR UN PRODUIT

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

# ------------------------------------------------------------------------------
# COMMANDES ADMINISTRATEUR : AJOUTER, MODIFIER, SUPPRIMMER, GERER, VALIDER

/**
   * @Secure(roles="ROLE_ADMIN")
*/
 public function ajouterAction()
  {
	$prod = new Produit();
	// On crée le FormBuilder grâce à la méthode du contrôleur
	$formBuilder = $this->createFormBuilder($prod);
	$formBuilder
		
		->add('libelle',		'text')
		//->add('categories',		'integer')
		->add('description',            'textarea')
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
		// A partir de maintenant, la variable $produit contient les valeurs entrées dans le formulaire par le visiteur
		$form->bind($request);
		
		// On vérifie que les valeurs rentrées sont correctes
		// (Nous verrons la validation des objets en détail dans le prochain chapitre)
		if ($form->isValid()) {
		
			// On l'enregistre notre objet $produit dans la base de données
			$em = $this->getDoctrine()->getManager(); 
			$em->persist($prod);
			$em->flush();
			
			// On redirige vers la page de visualisation de le produit nouvellement créé
			return $this->redirect($this->generateUrl('PwebMain_voir', array('id' => $prod->getId())));
			
		} 
	}

// Reste de la méthode qu'on avait déjà écrit
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'Produit bien enregistré');
      return $this->redirect( $this->generateUrl('PwebMain_voir', array('id' => $this->getId())) );
    }

    return $this->render('PwebMainBundle:Main:ajouter.html.twig', array(
'form' => $form->createView(), ));
  }
/**
   * @Secure(roles="ROLE_ADMIN")
*/
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
/**
   * @Secure(roles="ROLE_ADMIN")
*/
  public function modifierImageAction($id_produit)
  {
  $em = $this->getDoctrine()->getManager();
  $produit = $em->getRepository('PwebMainBundle:Produit')->find($id_produit);
  $produit->getImage()->setUrl('test.png');
  $em->flush();
 
  return new Response('OK');
  }
/**
   * @Secure(roles="ROLE_ADMIN")
*/
  public function supprimerAction(Produit $produit)
  {
    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'un produit contre cette faille
    $form = $this->createFormBuilder()->getForm();

    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
      $form->bind($request);

      if ($form->isValid()) { // Ici, isValid ne vérifie donc que le CSRF
        // On supprime le produit
        $em = $this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();

        // On définit un message flash
        $this->get('session')->getFlashBag()->add('info', 'Produit bien supprimé');

        // Puis on redirige vers l'accueil
        return $this->redirect($this->generateUrl('PwebMain_accueil'));
      }
    }

    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    return $this->render('PwebMainBundle:Main:supprimer.html.twig', array(
      'produit' => $produit,
      'form'    => $form->createView()
    ));
  }
/**
   * @Secure(roles="ROLE_ADMIN")
*/
  public function ajoutercategoriesAction($id)  // Ajoute toutes les catégories visibles sur ce produit
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();
 
    // On récupère l'entité correspondant à l'id $id
    $produit = $em->getRepository('PwebMainBundle:Produit')
                  ->find($id);
 
    if ($produit === null) {
      throw $this->createNotFoundException('Produit[id='.$id.'] inexistant.');
    }
 
    // On récupère toutes les catégories :
    $liste_categories = $em->getRepository('PwebMainBundle:Categorie')
                           ->findAll();

    // On boucle sur les catégories pour les lier à le produit
    foreach($liste_categories as $categorie)
    {
      $produit->addCategorie($categorie);
    }

    // Inutile de persister le produit, on l'a récupéré avec Doctrine
 
    // Étape 2 : On déclenche l'enregistrement
    $em->flush();

    return $this->redirect($this->generateUrl('PwebMain_voir', array('id' => $id)));
  }

/**
   * @Secure(roles="ROLE_ADMIN")
*/
public function supprimercategoriesAction($id)  // Supprime toutes les catégories d'un produit
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()
               ->getManager();
 
    // On récupère l'entité correspondant à l'id $id
    $produit = $em->getRepository('PwebMainBundle:Produit')
                  ->find($id);
 
    if ($produit === null) {
      throw $this->createNotFoundException('Produit[id='.$id.'] inexistant.');
    }

    // On récupère toutes les catégories :
    $liste_categories = $em->getRepository('PwebMainBundle:Categorie')
                           ->findAll();
     
    // On enlève toutes ces catégories de le produit
    foreach($liste_categories as $categorie)
    {
      // On fait appel à la méthode removeCategorie() dont on a parlé plus haut
      // Attention ici, $categorie est bien une instance de Categorie, et pas seulement un id
      $produit->removeCategorie($categorie);
    }
 
    // On n'a pas modifié les catégories : inutile de les persister
     
    // On a modifié la relation Produit - Categorie
    // Il faudrait persister l'entité propriétaire pour persister la relation
    // Or le produit a été récupéré depuis Doctrine, inutile de le persister
   
    // On déclenche la modification
    $em->flush();
 
    return $this->redirect($this->generateUrl('PwebMain_voir', array('id' => $id)));
  }
/**
   * @Secure(roles="ROLE_ADMIN")
*/
  public function categoriesgererAction()
  {
$liste_cat = $this->getDoctrine()
  ->getManager()
  ->getRepository('PwebMainBundle:Categorie')
  ->findAll();
    return $this->render('PwebMainBundle:Main:categoriesgerer.html.twig', array(
      'liste_categories' => $liste_cat));
  }
/**
   * @Secure(roles="ROLE_ADMIN")
*/
  public function statutAction()
  {
$nombre_comm=100;
$liste_comm = $this->getDoctrine()
  ->getManager()
  ->getRepository('PwebMainBundle:Commande')
  ->findBy(
    array(),          // Pas de critère
    array('id' => 'asc'), // On trie par date décroissante
    $nombre_comm,         // On sélectionne $nombre produits
    0                // À partir du premier
  );
    return $this->render('PwebMainBundle:Main:statut.html.twig', array(
      'liste_commandes' => $liste_comm));
  }

# ------------------------------------------------------------------------------
# ESPACE CLIENT, PANIER, VALIDATION

  public function espaceclientAction()
  {
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'espace client');
    }
    return $this->render('PwebMainBundle:Main:espaceclient.html.twig');
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

  public function deconnecterAction()
  {
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'deconnexion');
    }
    $url = $this->generateUrl('PwebMain_accueil');
    $option = 'logout';
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
  
  public function profileuserAction()
  {
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'profileuser');
    }
    $url = $this->generateUrl('PwebMain_accueil');
    $option = 'profile';
    return $this->redirect($url.$option);
  }
  
  public function ajouterpanierAction($id)
  {
      $em=$this->getDoctrine()->getManager();
      $produit = $em->getRepository('PwebMainBundle:Produit')->find($id);
          if($produit === null) {      throw $this->createNotFoundException('Produit[id='.$id.'] inexistant.');    }

      $user = $this->container->get('security.context')->getToken()->getUser();
      
      $commande1=new Commande();
      $commande1->setStatut('validé');
      $commande1->setIdProduit($produit->getId());
      $commande1->setIdAcheteur($user->getId());
      $em->persist($commande1);
      $em->flush();
      
  $liste_commande = $this->getDoctrine()
  ->getManager()
  ->getRepository('PwebMainBundle:Commande')
  ->findAll();
    return $this->render('PwebMainBundle:Main:panier.html.twig', array('liste_commande' => $liste_commande));
  }
  
  public function ajouterproduitaupanierAction($idproduit)
  {
// On récupère le respository de Produit
    $respository1=$this->getDoctrine()->getManager()->getRepository('PwebMainBundle:Produit');

// A LA PLACE DE CREER UN NOUVEAU PANIER (chose faite quand l'utilisateur s'inscrit), IL FAUT
// RECUPERER LE PANIER DE L'UTILISATEUR ACTUEL.
    $panier=new Panier();
    $panier->setIdproduit($idproduit);
    $panier->setIdcommande('8');
    
// On trouve l'objet produit avec le bon id
    $produit=$respository1->find($idproduit);
    if($produit === null) {      throw $this->createNotFoundException('Produit[id='.$idproduit.'] inexistant.');    }

// Mise à jours des données
    $em = $this->getDoctrine()->getManager();
    $em->persist($panier);
    $em->flush();

// On récupère la liste des Produits UNIQUEMENT dans le Panier
    //$liste_produits = $this->getDoctrine()->getManager()->getRepository('PwebMainBundle:Produit')->findAll();
    $nombre_prod=10;
        $liste_produits = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('PwebMainBundle:Produit')
                  ->findBy(
                    array('idpanier' => '0'),          // Pas de critère
                    array('id' => 'desc'), // On trie par date décroissante
                    $nombre_prod,         // On sélectionne $nombre produits
                    0                // À partir du premier
                  );
    
    
    return $this->render('PwebMainBundle:Main:panier.html.twig', array('liste_produits' => $liste_produits));
  }
  
  public function panierAction()
  {
// On récupère la liste des Produits UNIQUEMENT dans le Panier
    $liste_produits = $this->getDoctrine()->getManager()->getRepository('PwebMainBundle:Produit')->findAll();

    return $this->render('PwebMainBundle:Main:panier.html.twig', array(
      'liste_produits' => $liste_produits));
  }
  
# ------------------------------------------------------------------------------
# INITIALISER

/**
 * @Secure(roles="ROLE_ADMIN")
 */
  public function initialiseclearAction()
  {
      return $this->render('PwebMainBundle:Main:initialiseclear.html.twig');
  }
/**
   * @Secure(roles="ROLE_ADMIN")
*/
  public function initialisetruncatetableAction()
  {
// MySQL will not be able to truncate any table once it has a foreign key constraint.
$connection=$this->getDoctrine()->getManager()->getConnection();
$platform=$connection->getDatabasePlatform();

// Effacer les Produits
$connection->executeUpdate($platform->getTruncateTableSQL('Produit', true /* whether to cascade */));

// Effacer les Catégories
$connection->executeUpdate($platform->getTruncateTableSQL('Categorie', true /* whether to cascade */));

// Effacer les Commande
$connection->executeUpdate($platform->getTruncateTableSQL('Commande', true /* whether to cascade */));

// Effacer les Acheteur
$connection->executeUpdate($platform->getTruncateTableSQL('Acheteur', true /* whether to cascade */));

    return $this->redirect($this->generateUrl('PwebMain_accueil'));
  }
/**
   * @Secure(roles="ROLE_ADMIN")
*/
  public function initialiseproduitsAction()
  {
    $em=$this->getDoctrine()->getManager();
    $url = $this->generateUrl('PwebMain_accueil');

// Produits
    $produit1 = new Produit();
    $produit1->setLibelle('BigMac');
    $produit1->setDescription('Le Big Mac est un hamburger vendu par la chaîne de restauration rapide McDonald\'s depuis 1968. Il a apparemment été inspiré par un hamburger similaire à deux étages vendu par la chaîne Big Boy depuis 1936.');
    //$produit1->addCategorie('3');
    //$produit1->setCategories('3');
    $produit1->setPrix('6.05');
    $produit1->setPoids('225');
    $produit1->setPhoto(str_replace('app_dev.php/','Produits/BigMac.png',$url));
    $produit1->setLien('http://www.mcdonalds.fr');
    $em->persist($produit1);

    $produit2 = new Produit();
    $produit2->setLibelle('Galaxy S4');
    $produit2->setDescription('Le smartphone serait doté d\'un écran 5 pouces 1080p d\'une densité de 440 points par pouce avec le un SoC Exynos quadruple coeur 2 GHz (ou peut-être même l\'Exynos 5 octuple coeurs), 2 Go de RAM et un capteur photo de 13 megapixels.');
    //$produit2->setCategories('1');
    $produit2->setPrix('634.14');
    $produit2->setPoids('110');
    $produit2->setPhoto(str_replace('app_dev.php/','Produits/GalaxyS4.jpg',$url));
    $produit2->setLien('http://www.galaxys4.fr');
    $em->persist($produit2);

    $produit3 = new Produit();
    $produit3->setLibelle('Porsche Cayenne Diesel V6');
    $produit3->setDescription('Toit panoramique, Rampes de pavillon avec barrettes de protection en AluDesign mat, Hayon automatique, Caméra de recul incluant l\' assistance parking AV/AR, Phares Bi xénon avec Porsche Dynamic Light System (PDLS).');
    //$produit3->setCategories('2');
    $produit3->setPrix('97405.34');
    $produit3->setPoids('2467943');
    $produit3->setPhoto(str_replace('app_dev.php/','Produits/Porsche.jpg',$url));
    $produit3->setLien('http://www.porsche.com/france/');
    $em->persist($produit3);
    
    $produit4 = new Produit();
    $produit4->setLibelle('Iphone 6');
    $produit4->setDescription('D’ici quelques semaines, Apple dévoilera enfin son nouveau smartphone au sujet duquel on ne sait pour le moment presque rien, voire rien du tout. Une chose cependant est certaine, iOS7 sera de la partie et proposera de nombreuses nouveautés pour améliorer l’expérience utilisateur.');
    //$produit4->setCategories('1');
    $produit4->setPrix('654.45');
    $produit4->setPoids('107');
    $produit4->setPhoto(str_replace('app_dev.php/','Produits/iPhone-6.png',$url));
    $produit4->setLien('http://www.terrafemina.com/culture/culture-web/articles/25462-iphone-6-ou-iphone-5s-le-plein-de-nouveautes-pour-ios7.html');
    $em->persist($produit4);
    
    $produit5 = new Produit();
    $produit5->setLibelle('F-22 Raptor');
    $produit5->setDescription('Le F-22 Raptor est un avion de chasse de cinquième génération propulsé par deux turboréacteurs Pratt & Whitney F-119-PW-100 à postcombustion d’une poussée unitaire d’environ 35 000 lbf, soit 156 kN. Pour comparaison, la poussée des avions de chasse McDonnell Douglas F-15 Eagle et General Dynamics F-16 Falcon est comprise entre 23 000 et 29 000 lbf.');
    //$produit5->setCategories('4');
    $produit5->setPrix('350000000.00');
    $produit5->setPoids('27000000');
    $produit5->setPhoto(str_replace('app_dev.php/','Produits/f22.jpg',$url));
    $produit5->setLien('http://info-aviation.com/?p=14120');
    $em->persist($produit5);
    
    $produit6 = new Produit();
    $produit6->setLibelle('Téléviseur LED 3D - 16/9 - 140cm - HDTV 1080p');
    $produit6->setDescription('Résolution HDTV 1080p
Contraste Dynamique : 5 000 000:1
Cinema 3D pour tous. Partagez les films 3D avec vos proches sans contrainte!
Transformez tous vos contenus 2D en 3D
Dual Play, jouez a 2 en même temps et en plein ecran.
TNT HD intégré
3 x HDMI 1.4
DLNA
Rétro-éclairage Edge LED
Compatibilité USB 2.0 (Photo, Musique, Vidéo, DIVX HD)
Smart Energy Saving Plus
Fonction CI+
Design Ultra Fin
Fréquence de 200 Hz (MCI) ');
    //$produit6->setCategories('5');
    $produit->setPrix('849.00');
    $produit6->setPoids('21900');
    $produit6->setPhoto(str_replace('app_dev.php/','Produits/tv.jpg',$url));
    $produit6->setLien('http://www.lg.com/fr');
    $em->persist($produit6);

    $produit7 = new Produit();
    $produit7->setLibelle('Batman - The Dark Knight');
    $produit7->setDescription('
Cet opus décrit la confrontation entre Batman, interprété pour la seconde fois par Christian Bale, et son ennemi juré le Joker, joué par Heath Ledger qui est décédé le 22 janvier 2008, avant la sortie du film.
Dans la continuité de cette série de films, il s\'agit de leur première rencontre, quoique légèrement annoncée à la fin de Batman Begins.        
');
    //$produit7->setCategories('5');
    $produit7->setPrix('10.40');
    $produit7->setPoids('18');
    $produit7->setPhoto(str_replace('app_dev.php/','Produits/batman.jpg',$url));
    $produit7->setLien('http://www.allocine.fr/film/fichefilm_gen_cfilm=132874.html');
    $em->persist($produit7);

    $em->flush();
    return $this->render('PwebMainBundle:Main:initialiseproduits.html.twig');
}
/**
   * @Secure(roles="ROLE_ADMIN")
*/
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
    
    $categorie5 = new Categorie();
    $categorie5->setLibelleCategorie('TV DVD');
    $em->persist($categorie5);
    
    $em->flush();
    return $this->render('PwebMainBundle:Main:initialisecategories.html.twig');
  }

}