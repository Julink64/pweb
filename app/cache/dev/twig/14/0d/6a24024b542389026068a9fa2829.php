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
<h3>Tri par catégorie</h3>
 
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_categories"]) ? $context["liste_categories"] : $this->getContext($context, "liste_categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 7
            echo "    <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "libellecategorie"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "</ul>


<h3>Les 10 derniers produits</h3>

<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 16
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
        // line 18
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
        return array (  61 => 18,  50 => 16,  46 => 15,  25 => 6,  19 => 2,  150 => 57,  147 => 56,  145 => 55,  142 => 54,  138 => 41,  135 => 40,  128 => 9,  125 => 8,  119 => 6,  113 => 59,  111 => 54,  97 => 42,  95 => 40,  89 => 37,  83 => 34,  79 => 33,  75 => 32,  71 => 31,  57 => 20,  49 => 18,  45 => 17,  35 => 8,  23 => 1,  63 => 18,  60 => 17,  55 => 19,  52 => 17,  44 => 10,  41 => 8,  38 => 9,  33 => 4,  30 => 6,  87 => 26,  80 => 24,  70 => 19,  66 => 18,  62 => 17,  56 => 16,  53 => 19,  48 => 14,  40 => 8,  37 => 11,  32 => 4,  29 => 7,);
    }
}
