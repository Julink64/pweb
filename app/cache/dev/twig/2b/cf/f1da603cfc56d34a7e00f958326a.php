<?php

/* ::layout.html.twig */
class __TwigTemplate_2bcff1da603cfc56d34a7e00f958326a extends Twig_Template
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
        <p><a class=\"btn btn-info btn-small\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_espaceclient"), "html", null, true);
        echo "\">
          Se connecter »</a></p>
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
        echo "\" class=\"btn btn-success btn-small\">
        <i class=\"icon-chevron-right\"></i>
          Mon panier
        </a>
        <br></br>
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_espaceclient"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-small\">
        <i class=\"icon-chevron-right\"></i>
          Espace client
        </a>

            <h3>Le site</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\">Accueil</a></li>
            <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_ajouter"), "html", null, true);
        echo "\">Ajouter un produit</a></li>
            <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_reinitialiser"), "html", null, true);
        echo "\">Ajouter les produits par défaut</a></li>
          </ul>
                     
          ";
        // line 47
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PwebMainBundle:Main:menu", array("nombre" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "        </div>
      </div>
 
            

      <hr>
 
      <footer>
        <p>All rights reserved © 2013</p>
      </footer>
    </div>
 
  ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
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

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "          ";
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        // line 66
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 67
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
        return array (  154 => 67,  151 => 66,  149 => 65,  146 => 64,  142 => 51,  139 => 50,  132 => 9,  129 => 8,  123 => 6,  117 => 69,  115 => 64,  101 => 52,  99 => 50,  93 => 47,  87 => 44,  83 => 43,  79 => 42,  69 => 35,  61 => 30,  45 => 17,  37 => 11,  35 => 8,  30 => 6,  23 => 1,);
    }
}
