<?php

/* PwebMainBundle:Main:formulaire.html.twig */
class __TwigTemplate_eb2a41e2d06f938653745a8851de2c1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
";
        // line 5
        echo " 
<h3>Formulaire d'ajout et de suppression d'un produit</h3>
 
";
        // line 9
        echo "<div class=\"well\">
\t<form method=\"post\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t<input type=\"submit\" class=\"btn btn-primary\" /> </form>
</div>";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  30 => 10,  27 => 9,  22 => 5,  19 => 2,  56 => 21,  47 => 14,  45 => 13,  40 => 10,  37 => 9,  32 => 6,  29 => 5,);
    }
}
