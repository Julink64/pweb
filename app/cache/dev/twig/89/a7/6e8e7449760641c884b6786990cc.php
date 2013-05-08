<?php

/* PwebMainBundle:Main:voir.html.twig */
class __TwigTemplate_89a76e8e7449760641c884b6786990cc extends Twig_Template
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
        echo "    Produits
";
    }

    // line 7
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
        echo "</h2>
    <br></br>
";
        // line 11
        if ((!(null === $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photo")))) {
            echo "  
    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photo"), "html", null, true);
            echo "\">
    <p align=\"center\"><img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photo"), "html", null, true);
            echo "\" width=\"330\" height=\"330\" alt=\"Produit\" align=\"center\"/></p>
    </a>
";
        }
        // line 16
        echo "
<br></br>
  <div class=\"well\">
    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description"), "html", null, true);
        echo "
  </div>
<p align=\"center\"><center><h2>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
        echo " € seulement !</h2></center>
<p align=\"center\"><img src=\"http://localhost/Symfony/web/Produits/prix-choc.gif\" width=\"90\" height=\"90\" alt=\"Prix choc\" align=\"center\"/></p>
  <p>
    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_modifier", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier le produit
    </a>
    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_supprimer", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer le produit
    </a>
<a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_panier"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-large\"><i class=\"icon-white icon-check\"></i> Ajouter au panier</a> 
  </p>
  
  
  <p>Libellé : ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
        echo "</p>
  <p>Description : ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description"), "html", null, true);
        echo "</p>
  <p>Catégorie : ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie"), "html", null, true);
        echo "</p>
  <p>Prix : ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
        echo " €</p>
  <p>Poids : ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "poids"), "html", null, true);
        echo " g</p>
  <p>Photo : <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photo"), "html", null, true);
        echo "\"> Voir cet article de plus près </a></p>
  <p>Lien : <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "lien"), "html", null, true);
        echo "\"> Lien vers le fournisseur officiel </a></p>

";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  126 => 45,  122 => 44,  118 => 43,  114 => 42,  110 => 41,  106 => 40,  99 => 36,  92 => 32,  85 => 28,  78 => 24,  72 => 21,  67 => 19,  62 => 16,  56 => 13,  52 => 12,  48 => 11,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
