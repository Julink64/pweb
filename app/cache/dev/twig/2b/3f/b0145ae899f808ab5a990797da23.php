<?php

/* PwebMainBundle:Main:voir.html.twig */
class __TwigTemplate_2b3fb0145ae899f808ab5a990797da23 extends Twig_Template
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

    // line 6
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 7
        echo " 
  <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
        echo "</h2>
    <br></br>
  ";
        // line 10
        if ((!(null === $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photo")))) {
            echo "  
    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photo"), "html", null, true);
            echo "\">
    <p align=\"center\"><img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photo"), "html", null, true);
            echo "\" width=\"330\" height=\"330\" alt=\"Produit\" align=\"center\"/></p>
    </a>
";
        }
        // line 15
        echo "
<p align=\"center\"><center><h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
        echo " € seulement ! <img src=\"http://localhost/Symfony/web/Produits/prix-choc.gif\" width=\"90\" height=\"90\" alt=\"Prix choc\" align=\"center\"/></h2></center>

<h3>Description :</h3>
<div class=\"well\">
    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description"), "html", null, true);
        echo "
  </div>
<h3>Caractéristiques techniques :</h3>
<div class=\"well\">
  <p>Libellé : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
        echo "</p>
  <p>Prix : ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
        echo " €</p>
  <p>Poids : ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "poids"), "html", null, true);
        echo " g</p>
  <p>Photo : <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photo"), "html", null, true);
        echo "\"> Voir cet article de plus près </a></p>
  <p>Lien : <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "lien"), "html", null, true);
        echo "\"> Lien vers le fournisseur officiel </a></p>
  </div>
<h3>Prix :</h3>
<div class=\"well\">
  <p>Prix sans les frais de ports : ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
        echo " €</p>
  <p>Frais de ports : 0,10 € x ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "poids"), "html", null, true);
        echo " = </p>
  <p>Prix total : ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
        echo " + = </p>
  </div>

";
        // line 37
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 38
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_ajoutercategories", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-mini\"><i class=\"icon-plus\"></i> Ajouter des categories à ce produit</a>
<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_supprimercategories", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-mini\"><i class=\"icon-minus\"></i> Supprimer les catégories de ce produit</a>
";
        }
        // line 41
        echo "<h3>Catégories du produit :</h3>

<div class=\"well\">
    <p>Ce produit appartient à <strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categories"), "count"), "html", null, true);
        echo "</strong> catégories différentes.</p>
  
  ";
        // line 46
        if (($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categories"), "count") > 0)) {
            // line 47
            echo "    <ol>
    ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categories"));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 49
                echo "      <li> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "libellecategorie"), "html", null, true);
                echo " </li> 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "      </ol>
  
  ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categories"), "count") == 0)) {
            // line 54
            echo "    <p>Ce produit n'appartient à aucune catégorie</p>
  ";
        }
        // line 56
        echo "  

  </div>
<center>
  <p>
<a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i> Retour à l'accueil</a>
";
        // line 62
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 63
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_modifier", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier le produit
    </a>
    <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_supprimer", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer le produit
    </a>
";
        }
        // line 72
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_ajouterpanier", array("idproduit" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-check\"></i> Ajouter au panier</a> 
  </p>
 </center>
  

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
        return array (  194 => 72,  186 => 67,  178 => 63,  176 => 62,  172 => 61,  165 => 56,  161 => 54,  156 => 51,  147 => 49,  143 => 48,  140 => 47,  138 => 46,  133 => 44,  128 => 41,  123 => 39,  118 => 38,  116 => 37,  110 => 34,  106 => 33,  102 => 32,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  72 => 20,  65 => 16,  62 => 15,  56 => 12,  52 => 11,  48 => 10,  43 => 8,  40 => 7,  37 => 6,  32 => 4,  29 => 3,);
    }
}
