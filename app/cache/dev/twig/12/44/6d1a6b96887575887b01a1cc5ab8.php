<?php

/* PwebMainBundle:Main:renitialisation.html.twig */
class __TwigTemplate_12446d1a6b96887575887b01a1cc5ab8 extends Twig_Template
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
  <h2>Opération effectuée avec succès.</h2>
  <p>Les produits par défaut ont bien étés ajoutés !</p>
  <br></br>
          <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-small\">
        <i class=\"icon-chevron-left\"></i>
          Retour à la liste des produits
        </a>
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:renitialisation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
