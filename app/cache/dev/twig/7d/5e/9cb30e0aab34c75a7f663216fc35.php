<?php

/* PwebMainBundle:Main:initialiseclear.html.twig */
class __TwigTemplate_7d5e9cb30e0aab34c75a7f663216fc35 extends Twig_Template
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
  <h2>Voulez vous vraiment effacer tout le contenu de la base de donnée ?</h2>
  <br></br>
  <p>Liste des éléments qui seront effacés :</p>
  <ol>
<li> Produits </li>
<li> Catégories </li>
<li> Commande </li>
<li> Acheteur </li>
</ol>
<br></br>
<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i> Retour à l'accueil</a>
<a href=\"#\" class=\"btn btn-danger btn-large\">
    <i class=\"icon-white icon-warning-sign\"></i> Confirmer la suppression !</a>
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:initialiseclear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
