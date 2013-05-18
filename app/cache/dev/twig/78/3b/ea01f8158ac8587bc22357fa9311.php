<?php

/* PwebMainBundle::layout.html.twig */
class __TwigTemplate_783bea01f8158ac8587bc22357fa9311 extends Twig_Template
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
        return array (  63 => 18,  60 => 17,  55 => 19,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  101 => 28,  94 => 26,  84 => 21,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  62 => 16,  56 => 13,  52 => 17,  48 => 11,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
