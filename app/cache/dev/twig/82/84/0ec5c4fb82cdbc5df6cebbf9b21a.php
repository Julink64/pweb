<?php

/* ::layout.html.twig */
class __TwigTemplate_82840ec5c4fb82cdbc5df6cebbf9b21a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <script src=\"/js-global/FancyZoom.js\" type=\"text/javascript\"></script>
    <script src=\"/js-global/FancyZoomHTML.js\" type=\"text/javascript\"></script>
  </head>
  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Outil de vente en ligne</h1>
        <p>Application Symfony 2 : Outil de vente en ligne</p>

        
        
";
        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
            echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i></a>
    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_deconnecter"), "html", null, true);
            echo "\" class=\"btn btn-success btn-large\"><i class=\"icon-white icon-resize-full\"></i> Déconnection</a>
    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_profileuser"), "html", null, true);
            echo "\" class=\"btn btn-success btn-large\"><i class=\"icon-white icon-user\"></i> Profile</a>
    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_categoriesgerer"), "html", null, true);
            echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-th-list\"></i> Catégories</a>
    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_statut"), "html", null, true);
            echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-pencil\"></i> Gérer les commandes</a>
    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_ajouter"), "html", null, true);
            echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-pencil\"></i> Ajouter</a>
";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 30
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
            echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i></a>
    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_deconnecter"), "html", null, true);
            echo "\" class=\"btn btn-success btn-large\"><i class=\"icon-white icon-resize-full\"></i> Se déconnecter</a>
    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_profileuser"), "html", null, true);
            echo "\" class=\"btn btn-success btn-large\"><i class=\"icon-white icon-user\"></i> Profile</a>
    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_espaceclient"), "html", null, true);
            echo "\" class=\"btn btn-success btn-large\"><i class=\"icon-white icon-star-empty\"></i> Espace client</a>
    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_panier"), "html", null, true);
            echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-shopping-cart\"></i> Mon panier</a>
    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_coordonnees"), "html", null, true);
            echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-shopping-cart\"></i> Ajouter mes coordonnées</a>
";
        } else {
            // line 37
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
            echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i></a>
    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_connecter"), "html", null, true);
            echo "\" class=\"btn btn-success btn-large\"><i class=\"icon-white icon-resize-small\"></i> Se connecter</a>
    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_enregistrer"), "html", null, true);
            echo "\" class=\"btn btn-success btn-large\"><i class=\"icon-white icon-user\"></i> Pas encore inscrit ?</a>
";
        }
        // line 41
        echo "        


    

    


      </div>
      <div class=\"row\">
    <div id=\"menu\" class=\"span3\">


        
        
        
        
        


";
        // line 61
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 62
            echo "    <h3>Administrateur</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_ajouter"), "html", null, true);
            echo "\">Ajouter un produit</a></li>
        <li><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_initialiseproduits"), "html", null, true);
            echo "\">Ajouter produits par défaut</a></li>
        <li><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_initialisecategories"), "html", null, true);
            echo "\">Ajouter catégories par défaut</a></li>
        <li><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_categoriesgerer"), "html", null, true);
            echo "\">Gérer les catégories</a></li>
        <li><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_statut"), "html", null, true);
            echo "\">Modifier le statut des commandes</a></li>
        <li><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_initialiseclear"), "html", null, true);
            echo "\">Tout nettoyer</a></li>
    </ul>
";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 72
            echo "    <h3>Espace client</h3>
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_espaceclient"), "html", null, true);
            echo "\">Mes commandes</a></li>
        <li><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_panier"), "html", null, true);
            echo "\">Mon panier</a></li>
        <li><a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_profileuser"), "html", null, true);
            echo "\">Mon profile</a></li>
        <li><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_deconnecter"), "html", null, true);
            echo "\">Déconnection</a></li>
    </ul>
";
        } else {
            // line 80
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_connecter"), "html", null, true);
            echo "\" class=\"btn btn-primary btn-mini\"><i class=\"icon-white icon-user\"></i>Non connecté</a>
";
        }
        // line 82
        echo "
 
    
    
    
    
    
    
    
    
    
";
        // line 93
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PwebMainBundle:Main:menu", array("nombre" => 3)));
        echo "
        

</div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "        </div>
      </div>
      <hr>
      <footer>
        <p>All rights reserved © 2013</p>
      </footer>
    </div>
 
  ";
        // line 108
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo " 
  </body>
</html>

<!--
<div style=\"float:left\">gauche</div>
<div style=\"float:right\">droite</div>
<div style=\"clear:both\">suite</div>
-->";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Pweb";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        // line 99
        echo "          ";
    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        // line 109
        echo "    ";
        // line 110
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 111,  275 => 110,  273 => 109,  270 => 108,  266 => 99,  263 => 98,  256 => 9,  253 => 8,  247 => 6,  235 => 113,  233 => 108,  223 => 100,  221 => 98,  213 => 93,  200 => 82,  194 => 80,  188 => 77,  184 => 76,  180 => 75,  176 => 74,  172 => 72,  166 => 69,  162 => 68,  158 => 67,  154 => 66,  150 => 65,  146 => 64,  142 => 62,  140 => 61,  118 => 41,  113 => 39,  109 => 38,  104 => 37,  99 => 35,  95 => 34,  91 => 33,  87 => 32,  83 => 31,  78 => 30,  73 => 28,  69 => 27,  65 => 26,  61 => 25,  57 => 24,  52 => 23,  50 => 22,  37 => 11,  35 => 8,  30 => 6,  23 => 1,);
    }
}
