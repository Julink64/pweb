<?php

/* PwebMainBundle:Main:index.html.twig */
class __TwigTemplate_ba99544a12b5074db1112f6829d5bfb8 extends Twig_Template
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
        echo "  Accueil
";
    }

    // line 7
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 8
        echo "  <h1>Liste des 15 derniers produits</h1>
<br></br>
<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-mini\"><i class=\"icon-font\"></i> Tri alphabétique</a>
<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_triprixcroissant"), "html", null, true);
        echo "\" class=\"btn btn-mini\"><i class=\"icon-arrow-up\"></i> Prix croissant</a>
<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_triprixdecroissant"), "html", null, true);
        echo "\" class=\"btn btn-mini\"><i class=\"icon-arrow-down\"></i> Prix décroissant</a>
<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_trirecent"), "html", null, true);
        echo "\" class=\"btn btn-mini\"><i class=\"icon-time\"></i> Produits récents</a>
<br></br>
<ul>
";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 17
            echo "      <li>
        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_voir", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
            echo "</a>
        disponible à partir de <strong>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
            echo " €</strong> seulement.<br></br>
          <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_voir", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\">
    <p align=\"center\"><img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photo"), "html", null, true);
            echo "\" width=\"200\" height=\"200\" alt=\"Produit\" align=\"center\"/></p>
    </a>
      </li>
      
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "      <li>Il n'y a pas encore de produits disponibles.</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  </ul>

<br></br>
<center>
<div style=\"float:left\"><a href=\"#\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-arrow-left\"></i> Produits précédents</a></div>
<div style=\"float:right\"><a href=\"#\" class=\"btn btn-inverse btn-large\">Produits suivants <i class=\"icon-white icon-arrow-right\"></i></a></div>
</center>
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  94 => 26,  84 => 21,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  62 => 16,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
