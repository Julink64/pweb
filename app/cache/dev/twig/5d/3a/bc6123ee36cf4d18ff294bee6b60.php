<?php

/* PwebMainBundle:Main:supprimer.html.twig */
class __TwigTemplate_5d3abc6123ee36cf4d18ff294bee6b60 extends Twig_Template
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Supprimer le produit
";
    }

    // line 9
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 10
        echo " 
  <h2>Désirez vous supprimer ce produit ?</h2>
 <br></br>
    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photo"), "html", null, true);
        echo "\">
    <p align=\"center\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photo"), "html", null, true);
        echo "\" width=\"330\" height=\"330\" alt=\"Produit\" align=\"center\"/></p>
    </a>
    <center><h3>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
        echo "</h3></center>
<br></br>
<p>Votre stock pèsera <strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "poids"), "html", null, true);
        echo " grammes</strong> en moins.</p>
<p>Êtes vous sùr de vouloir vous délester de ce produit ?</p>
  <br></br>
  <center>
  <p>
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-small\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste des articles
    </a>
<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_supprimer", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-danger btn-large\">
    <i class=\"icon-white icon-warning-sign\"></i> Confirmer la suppression !</a>
  </p>
  </center>
 
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 27,  67 => 23,  59 => 18,  54 => 16,  49 => 14,  45 => 13,  40 => 10,  37 => 9,  32 => 6,  29 => 5,);
    }
}
