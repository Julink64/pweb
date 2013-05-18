<?php

/* PwebMainBundle:Main:espaceclient.html.twig */
class __TwigTemplate_6943468d2ccd5eb9f493183353fe1bb0 extends Twig_Template
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
        echo "  Espace client
";
    }

    // line 7
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Bonjour et bienvenue sur votre espace client</h2>
  <br></br>
  Cet espace sécurisé et personnel vous permet de suivre, de modifier et de valider vos commandes en ligne.
    <br></br>
  <center>
  <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-home\"></i> Continuer vos achats</a>
  </center>
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:espaceclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
