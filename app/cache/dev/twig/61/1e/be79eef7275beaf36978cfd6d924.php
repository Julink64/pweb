<?php

/* PwebMainBundle:Main:initialisecategories.html.twig */
class __TwigTemplate_611ebe79eef7275beaf36978cfd6d924 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Réinitialisation
";
    }

    // line 7
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>Initialisation des Catégories</h2>
  <br></br>
  <p>Les catégories par défaut ont bien étés ajoutés !</p>
  <br></br>
<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i> Retour à l'accueil</a>
<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_categoriesgerer"), "html", null, true);
        echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-list-alt\"></i> Gérer les catégories</a>
<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_initialiseclear"), "html", null, true);
        echo "\" class=\"btn btn-danger btn-large\"><i class=\"icon-white icon-flag\"></i> Tout Supprimer</a>
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:initialisecategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  51 => 14,  47 => 13,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
