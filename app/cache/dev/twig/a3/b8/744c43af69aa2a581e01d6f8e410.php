<?php

/* PwebMainBundle:Main:panier.html.twig */
class __TwigTemplate_a3b8744c43af69aa2a581e01d6f8e410 extends Twig_Template
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
        echo "  Mon panier
";
    }

    // line 7
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 8
        echo "<h2>Mon panier</h2>
<br></br>
    <TABLE BORDER=\"0\"> 
  <TR> 
 <TH>  </TH> 
 <TH align=\"center\"> Aperçu</TH> 
 <TH align=\"center\"> Nom</TH> 

 <TH align=\"center\"> Prix </TH> 
 <TH align=\"center\"> Frais de port</TH> 
 <TH align=\"center\"> Prix total</TH> 
  </TR> 
<TR> 
 <TH align=\"center\"> Id</TH> 
 <TD> </TD> 
 <TD> </TD> 
 <TD> </TD> 
 <TD> </TD> 
 <TD> </TD> 
</TR> 
  
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_produits"]) ? $context["liste_produits"] : $this->getContext($context, "liste_produits")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 30
            echo "
    <TR> 
 <TH> </TH> 
 <TD> ---------- </TD> 
 <TD>  </TD> 
 <TD>  </TD> 
 <TD> </TD> 
 <TD> </TD> 
</TR> 

    <TR>
 <TH align=\"center\"> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"), "html", null, true);
            echo " </TH> 
 <TH align=\"center\"><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_voir", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photo"), "html", null, true);
            echo "\" width=\"200\" height=\"200\" alt=\"Produit\" align=\"center\"/></a></TH> 
 <TH align=\"center\"> <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_voir", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
            echo " </a></TH> 
 <TD align=\"center\"> <strong>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
            echo " €</strong></TD> 
 <TD align=\"center\"> ";
            // line 45
            echo twig_escape_filter($this->env, (0.1 * $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "poids")), "html", null, true);
            echo " €</TD> 
 <TD align=\"center\"> <h3>";
            // line 46
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix") + (0.1 * $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "poids"))), "html", null, true);
            echo " €</h3></TD> 
    </TR> 

    
    
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "    <TD> Le panier est vide.</td>
    <TD> Le panier est vide.</td>
    <TD> Le panier est vide.</td>
    <TD> Le panier est vide.</td>
    <TD> Le panier est vide.</td>
    <TD> Le panier est vide.</td>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "</TABLE> 
      
      
<br></br>
<center>
<h2>Prix total du panier :</h2>
";
        // line 66
        $context["res"] = 0;
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_produits"]) ? $context["liste_produits"] : $this->getContext($context, "liste_produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 68
            $context["res"] = ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix") + (isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "<h3>";
        echo twig_escape_filter($this->env, (isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "html", null, true);
        echo " €<h3>
</center>
<br></br>

<br></br>
<center>
<h2>Prix total du panier avec les frais de ports :</h2>
";
        // line 77
        $context["res"] = 0;
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_produits"]) ? $context["liste_produits"] : $this->getContext($context, "liste_produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 79
            $context["res"] = (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix") + (0.1 * $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "poids"))) + (isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "<h3>";
        echo twig_escape_filter($this->env, (isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "html", null, true);
        echo " €<h3>
</center>
<br></br>
      
      
      
      
      
      
      
  <center>
  <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-home\"></i> Continuer vos achats</a>
  </center>
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 92,  172 => 81,  166 => 79,  162 => 78,  160 => 77,  149 => 70,  143 => 68,  139 => 67,  137 => 66,  129 => 60,  116 => 52,  105 => 46,  101 => 45,  97 => 44,  91 => 43,  85 => 42,  81 => 41,  68 => 30,  63 => 29,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
