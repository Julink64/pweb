<?php

/* PwebMainBundle::layout.html.twig */
class __TwigTemplate_7443bb201f08024990495d80a690573b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'PwebMain_body' => array($this, 'block_PwebMain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Accueil
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  ";
        // line 10
        echo "  <!--
  <h1>Outil de vente en ligne</h1>
  <hr>
 -->
  
 
  ";
        // line 17
        echo "  ";
        $this->displayBlock('PwebMain_body', $context, $blocks);
        // line 19
        echo " 
";
    }

    // line 17
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 18
        echo "  ";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  55 => 19,  52 => 17,  44 => 10,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  79 => 21,  72 => 19,  64 => 16,  60 => 17,  54 => 14,  51 => 13,  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}