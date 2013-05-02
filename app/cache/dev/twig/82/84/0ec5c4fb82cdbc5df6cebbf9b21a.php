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
        <p><a class=\"btn btn-primary btn-large\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_espaceclient"), "html", null, true);
        echo "\">
          Se connecter »</a></p>
                                        <!--
                                        <div style=\"float:left\">gauche</div>
                                        <div style=\"float:right\">droite</div>
                                        <div style=\"clear:both\">suite</div>
                                        -->
        </div>
            
            
            
            
            
            
            
      <div class=\"row\">
    <div id=\"menu\" class=\"span3\">
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_espaceclient"), "html", null, true);
        echo "\" class=\"btn\">
        <i class=\"icon-chevron-right\"></i>
          Espace client
        </a>
        <br></br>
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_panier"), "html", null, true);
        echo "\" class=\"btn\">
        <i class=\"icon-chevron-right\"></i>
          Mon panier
        </a>
            <h3>Le site</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\">Accueil</a></li>
            <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_ajouter"), "html", null, true);
        echo "\">Ajouter un produit</a></li>
            <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_reinitialiser"), "html", null, true);
        echo "\">Ajouter les produits par défaut</a></li>
          </ul>
                     
          ";
        // line 50
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PwebMainBundle:Main:menu", array("nombre" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "        </div>
      </div>
 
            

      <hr>
 
      <footer>
        <p>All rights reserved © 2013</p>
      </footer>
    </div>
 
  ";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
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

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "          ";
    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        // line 68
        echo "    ";
        // line 69
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 70
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
        return array (  157 => 70,  154 => 69,  152 => 68,  149 => 67,  145 => 54,  142 => 53,  135 => 9,  132 => 8,  126 => 6,  120 => 72,  118 => 67,  104 => 55,  102 => 53,  96 => 50,  90 => 47,  86 => 46,  82 => 45,  73 => 39,  65 => 34,  45 => 17,  35 => 8,  23 => 1,  63 => 18,  55 => 19,  52 => 17,  44 => 10,  41 => 8,  38 => 7,  33 => 4,  30 => 6,  79 => 21,  72 => 19,  64 => 16,  60 => 17,  54 => 14,  51 => 13,  46 => 12,  40 => 8,  37 => 11,  32 => 4,  29 => 3,);
    }
}