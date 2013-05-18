<?php

/* PwebMainBundle:Main:commandevoirproduits.html.twig */
class __TwigTemplate_2bc3c577bf0fc201d1baab4eeeab3554 extends Twig_Template
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
        echo "  Commande n°
";
    }

    // line 7
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 8
        echo " 
        <h2>Commande n°</h2>
      <br></br>
      
";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["liste_CommandeProduit"]) ? $context["liste_CommandeProduit"] : $this->getContext($context, "liste_CommandeProduit"))) > 0)) {
            // line 13
            echo "
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
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_CommandeProduit"]) ? $context["liste_CommandeProduit"] : $this->getContext($context, "liste_CommandeProduit")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["CommandeProduit"]) {
                // line 34
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
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["CommandeProduit"]) ? $context["CommandeProduit"] : $this->getContext($context, "CommandeProduit")), "Produit"), "id"), "html", null, true);
                echo " </TH> 
         <TH align=\"center\"><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_voir", array("id" => $this->getAttribute($this->getAttribute((isset($context["CommandeProduit"]) ? $context["CommandeProduit"] : $this->getContext($context, "CommandeProduit")), "Produit"), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["CommandeProduit"]) ? $context["CommandeProduit"] : $this->getContext($context, "CommandeProduit")), "Produit"), "photo"), "html", null, true);
                echo "\" width=\"100\" height=\"100\" alt=\"Produit\" align=\"center\"/></a></TH> 
         <TH align=\"center\"> <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_voir", array("id" => $this->getAttribute($this->getAttribute((isset($context["CommandeProduit"]) ? $context["CommandeProduit"] : $this->getContext($context, "CommandeProduit")), "Produit"), "id"))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["CommandeProduit"]) ? $context["CommandeProduit"] : $this->getContext($context, "CommandeProduit")), "Produit"), "libelle"), "html", null, true);
                echo " </a></TH> 
         <TD align=\"center\"> <strong>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["CommandeProduit"]) ? $context["CommandeProduit"] : $this->getContext($context, "CommandeProduit")), "Produit"), "prix"), "html", null, true);
                echo " €</strong></TD> 
         <TD align=\"center\"> ";
                // line 49
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["CommandeProduit"]) ? $context["CommandeProduit"] : $this->getContext($context, "CommandeProduit")), "Produit"), "poids") * 0.1), "html", null, true);
                echo " €</TD> 
         <TD align=\"center\"> <h3>";
                // line 50
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["CommandeProduit"]) ? $context["CommandeProduit"] : $this->getContext($context, "CommandeProduit")), "Produit"), "prix") + (0.1 * $this->getAttribute($this->getAttribute((isset($context["CommandeProduit"]) ? $context["CommandeProduit"] : $this->getContext($context, "CommandeProduit")), "Produit"), "poids"))), "html", null, true);
                echo " €</h3></TD> 
            </TR> 

";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 54
                echo "
    <TD> Le panier est vide.</td>
    <TD> Le panier est vide.</td>
    <TD> Le panier est vide.</td>
    <TD> Le panier est vide.</td>
    <TD> Le panier est vide.</td>
    <TD> Le panier est vide.</td>
    
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CommandeProduit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "    </TABLE> 
      
    <br></br>
          
        <h3>Prix sans frais de port :</h3>
      <br></br>
   <div class=\"well\">

  </div>
          
      <h3>Prix total :</h3>
      <br></br>
   <div class=\"well\">

  </div>
      
      
      
      <h3>Coordonnées de l'acheteur qui a validé la commande :</h3>
      <br></br>
   <div class=\"well\">
      <p>Nom acheteur : ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Acheteur"]) ? $context["Acheteur"] : $this->getContext($context, "Acheteur")), "nom"), "html", null, true);
            echo "</p>
      <p>prenom acheteur : ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Acheteur"]) ? $context["Acheteur"] : $this->getContext($context, "Acheteur")), "prenom"), "html", null, true);
            echo "</p>
      <p>adresse acheteur : ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Acheteur"]) ? $context["Acheteur"] : $this->getContext($context, "Acheteur")), "adresse"), "html", null, true);
            echo "</p>
      <p>codepostal acheteur : ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Acheteur"]) ? $context["Acheteur"] : $this->getContext($context, "Acheteur")), "codePostal"), "html", null, true);
            echo "</p>
      <p>ville acheteur : ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Acheteur"]) ? $context["Acheteur"] : $this->getContext($context, "Acheteur")), "ville"), "html", null, true);
            echo "</p>
      <p>email acheteur : ";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Acheteur"]) ? $context["Acheteur"] : $this->getContext($context, "Acheteur")), "email"), "html", null, true);
            echo "</p>
      <p>telephone acheteur : ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Acheteur"]) ? $context["Acheteur"] : $this->getContext($context, "Acheteur")), "telephone"), "html", null, true);
            echo "</p>
      <p>login acheteur : ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Acheteur"]) ? $context["Acheteur"] : $this->getContext($context, "Acheteur")), "login"), "html", null, true);
            echo "</p>
      <p>password acheteur : ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Acheteur"]) ? $context["Acheteur"] : $this->getContext($context, "Acheteur")), "password"), "html", null, true);
            echo "</p>
  </div>
    
";
        } else {
            // line 96
            echo "      <p>Cette commande ne contient aucun produit.</p>

";
        }
        // line 99
        echo "      
      <br></br>
        <center>
        <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_statut"), "html", null, true);
        echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-home\"></i> Retour à la liste des commandes</a>
        <a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i> Accueil</a>
        </center>
      
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:commandevoirproduits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 103,  207 => 102,  202 => 99,  197 => 96,  190 => 92,  186 => 91,  182 => 90,  178 => 89,  174 => 88,  170 => 87,  166 => 86,  162 => 85,  158 => 84,  135 => 63,  121 => 54,  112 => 50,  108 => 49,  104 => 48,  98 => 47,  92 => 46,  88 => 45,  75 => 34,  70 => 33,  48 => 13,  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
