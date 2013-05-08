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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_connecter"), "html", null, true);
        echo "\" class=\"btn btn-success btn-large\"><i class=\"icon-white icon-resize-small\"></i> Se connecter</a>
<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_enregistrer"), "html", null, true);
        echo "\" class=\"btn btn-success btn-large\"><i class=\"icon-white icon-resize-small\"></i> Pas encore inscrit ?</a>
       </div>
        
                                        <!--
                                        <div style=\"float:left\">gauche</div>
                                        <div style=\"float:right\">droite</div>
                                        <div style=\"clear:both\">suite</div>
                                        -->
        
            
      <div class=\"row\">
    <div id=\"menu\" class=\"span3\">
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_panier"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-small\"><i class=\"icon-white icon-user\"></i> Mon panier</a>
        <br></br>
<a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_espaceclient"), "html", null, true);
        echo "\" class=\"btn btn-success btn-small\"><i class=\"icon-white icon-briefcase\"></i> Espace client</a>
            <h3>Le site</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\">Accueil</a></li>
            <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_ajouter"), "html", null, true);
        echo "\">Ajouter un produit (BigMac)</a></li>
            <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_reinitialiser"), "html", null, true);
        echo "\">Ajouter les produits et catégories par défaut</a></li>
          </ul>
                     
          ";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PwebMainBundle:Main:menu", array("nombre" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "        </div>
      </div>
 
            

      <hr>
 
      <footer>
        <p>All rights reserved © 2013</p>
      </footer>
    </div>
 
  ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
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

    // line 43
    public function block_body($context, array $blocks = array())
    {
        // line 44
        echo "          ";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        // line 59
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 60
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
        return array (  150 => 60,  147 => 59,  145 => 58,  142 => 57,  138 => 44,  135 => 43,  128 => 9,  125 => 8,  119 => 6,  113 => 62,  111 => 57,  97 => 45,  95 => 43,  89 => 40,  83 => 37,  79 => 36,  75 => 35,  69 => 32,  64 => 30,  49 => 18,  45 => 17,  37 => 11,  35 => 8,  30 => 6,  23 => 1,);
    }
}
