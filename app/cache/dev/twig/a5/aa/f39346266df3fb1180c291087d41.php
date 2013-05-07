<?php

/* PwebMainBundle:Main:ajouter.html.twig */
class __TwigTemplate_a5aaf39346266df3fb1180c291087d41 extends Twig_Template
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
        echo "  Ajouter un produit
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
     Attention : ce produit sera ajouté directement
     sur la page d'accueil après validation du formulaire.
  </p>
 
  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour au Main
    </a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 21,  47 => 14,  45 => 13,  40 => 10,  37 => 9,  32 => 6,  29 => 5,);
    }
}
