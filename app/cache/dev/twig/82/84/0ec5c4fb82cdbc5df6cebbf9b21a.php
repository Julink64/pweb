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
        echo "  </head>
  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Outil de vente en ligne</h1>
        <p>Application Symfony 2 : Outil de vente en ligne</p>
<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i></a>
<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_espaceclient"), "html", null, true);
        echo "\" class=\"btn btn-success btn-large\"><i class=\"icon-white icon-resize-small\"></i> Espace Client</a>
<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_enregistrer"), "html", null, true);
        echo "\" class=\"btn btn-success btn-large\"><i class=\"icon-white icon-resize-small\"></i> Pas encore inscrit ?</a>
<a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_panier"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-large\"><i class=\"icon-white icon-user\"></i> Mon panier</a>
</div>
                                        <!--
                                        <div style=\"float:left\">gauche</div>
                                        <div style=\"float:right\">droite</div>
                                        <div style=\"clear:both\">suite</div>
                                        -->
      <div class=\"row\">
    <div id=\"menu\" class=\"span3\">
<h3>Administrateur</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_ajouter"), "html", null, true);
        echo "\">Ajouter un produit</a></li>
            <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_initialiseproduits"), "html", null, true);
        echo "\">Ajouter produits par défaut</a></li>
            <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_initialisecategories"), "html", null, true);
        echo "\">Ajouter catégories par défaut</a></li>
            <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_initialiseclear"), "html", null, true);
        echo "\">Tout nettoyer</a></li>
          </ul>
                     
          ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PwebMainBundle:Main:menu", array("nombre" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        </div>
      </div>
 
            

      <hr>
 
      <footer>
        <p>All rights reserved © 2013</p>
      </footer>
    </div>
 
  ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo " 
  </body>
</html>";
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

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "          ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        // line 56
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 57
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
        return array (  150 => 57,  147 => 56,  145 => 55,  142 => 54,  138 => 41,  135 => 40,  128 => 9,  125 => 8,  119 => 6,  113 => 59,  111 => 54,  97 => 42,  95 => 40,  89 => 37,  83 => 34,  79 => 33,  75 => 32,  71 => 31,  57 => 20,  49 => 18,  45 => 17,  35 => 8,  23 => 1,  63 => 18,  60 => 17,  55 => 19,  52 => 17,  44 => 10,  41 => 8,  38 => 7,  33 => 4,  30 => 6,  87 => 26,  80 => 24,  70 => 19,  66 => 18,  62 => 17,  56 => 16,  53 => 19,  48 => 14,  40 => 8,  37 => 11,  32 => 4,  29 => 3,);
    }
}
