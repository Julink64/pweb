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
<h3>Les 10 derniers produits</h3>
 
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 7
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_voir", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
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
        return array (  25 => 6,  19 => 2,  63 => 18,  55 => 19,  52 => 17,  44 => 10,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  85 => 24,  78 => 22,  68 => 17,  64 => 16,  60 => 17,  54 => 14,  51 => 13,  46 => 12,  40 => 9,  37 => 7,  32 => 4,  29 => 7,);
    }
}
