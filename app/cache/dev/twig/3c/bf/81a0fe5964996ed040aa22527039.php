<?php

/* PwebMainBundle:Main:menu.html.twig */
class __TwigTemplate_3cbf81a0fe5964996ed040aa22527039 extends Twig_Template
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
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>


<h3>Les 10 derniers produits</h3>

<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_produits"]) ? $context["liste_produits"] : $this->getContext($context, "liste_produits")));
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
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  46 => 15,  25 => 6,  19 => 2,  274 => 110,  271 => 109,  269 => 108,  266 => 107,  262 => 98,  259 => 97,  252 => 9,  249 => 8,  243 => 6,  231 => 112,  229 => 107,  219 => 99,  217 => 97,  209 => 92,  196 => 81,  190 => 79,  184 => 76,  180 => 75,  176 => 74,  172 => 73,  168 => 71,  162 => 68,  158 => 67,  154 => 66,  150 => 65,  146 => 64,  142 => 63,  138 => 61,  136 => 60,  114 => 40,  109 => 38,  105 => 37,  100 => 36,  95 => 34,  91 => 33,  87 => 32,  83 => 31,  78 => 30,  73 => 28,  69 => 27,  65 => 26,  61 => 18,  57 => 24,  50 => 16,  35 => 8,  23 => 1,  63 => 18,  60 => 17,  55 => 19,  41 => 8,  38 => 9,  33 => 4,  30 => 6,  101 => 28,  94 => 26,  84 => 21,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  62 => 16,  56 => 13,  52 => 23,  48 => 11,  44 => 10,  40 => 8,  37 => 11,  32 => 4,  29 => 7,);
    }
}
