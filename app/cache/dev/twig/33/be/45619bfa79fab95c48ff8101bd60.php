<?php

/* PwebMainBundle:Main:modifier.html.twig */
class __TwigTemplate_33be45619bfa79fab95c48ff8101bd60 extends Twig_Template
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
        echo "  Modifier le produit
";
    }

    // line 9
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 10
        echo " 
  <h2>Vous modifiez le produit :</h2>
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
  <p>
    Vous éditez un produit déjà existant,
    ne le changez pas trop pour éviter
    aux membres de ne pas comprendre
    ce qu'il se passe.
  </p>
  <br></br>

  ";
        // line 26
        $this->env->loadTemplate("PwebMainBundle:Main:formulaire.html.twig")->display($context);
        // line 27
        echo "    <center>
  <p>
    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-small\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste des articles
    </a>
<a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_modifier", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-ok\"></i> Enregistrer les modifications</a>
  </p>
    </center>
 
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 33,  73 => 29,  69 => 27,  67 => 26,  54 => 16,  49 => 14,  45 => 13,  40 => 10,  37 => 9,  32 => 6,  29 => 5,);
    }
}
