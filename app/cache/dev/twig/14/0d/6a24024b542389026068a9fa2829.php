<?php

/* PwebMainBundle:Main:menu.html.twig */
class __TwigTemplate_140d6a24024b542389026068a9fa2829 extends Twig_Template
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
<h3>Les derniers produits</h3>
 
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 6,  19 => 2,  157 => 70,  154 => 69,  152 => 68,  149 => 67,  145 => 54,  142 => 53,  135 => 9,  132 => 8,  126 => 6,  120 => 72,  118 => 67,  104 => 55,  102 => 53,  96 => 50,  90 => 47,  86 => 46,  82 => 45,  73 => 39,  65 => 34,  45 => 17,  35 => 8,  23 => 1,  63 => 18,  55 => 19,  52 => 17,  44 => 10,  41 => 8,  38 => 7,  33 => 4,  30 => 6,  79 => 21,  72 => 19,  64 => 16,  60 => 17,  54 => 14,  51 => 13,  46 => 12,  40 => 9,  37 => 11,  32 => 4,  29 => 7,);
    }
}
