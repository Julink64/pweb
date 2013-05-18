<?php

/* PwebMainBundle:Main:coordonnees.html.twig */
class __TwigTemplate_bca16620e1e10b33c517073d137bb590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PwebMainBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'PwebMain_body' => array($this, 'block_PwebMain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PwebMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Ajouter mes coordonnées
";
    }

    // line 9
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 10
        echo " 
  <h2>Ajouter un produit</h2>
 
  ";
        // line 13
        $this->env->loadTemplate("PwebMainBundle:Main:formulaire.html.twig")->display($context);
        // line 14
        echo " 
  <p>
     Attention : ces informations ne pourront plus être modifiées par la suite.
  </p>
 
  <p>
<a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i> Retour à l'accueil</a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:coordonnees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  47 => 14,  45 => 13,  40 => 10,  37 => 9,  32 => 6,  29 => 5,);
    }
}
