<?php

/* PwebMainBundle:Main:statut.html.twig */
class __TwigTemplate_ae5c495ebe8dd2260a1917b08acf3ba4 extends Twig_Template
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
        echo "  Modifier le statut d’une commande
";
    }

    // line 7
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Gérer les commandes et les statuts</h2>
<br></br>

    <TABLE BORDER=\"0\"> 
  <TR> 
 <TH>  </TH> 
 <TH align=\"center\"> Nom de l'acheteur </TH> 
 <TH align=\"center\"> Produits commandés </TH> 
 <TH align=\"center\"> Valider</TH> 
 <TH align=\"center\"> Envoyer</TH> 
 <TH align=\"center\"> Statut</TH> 
 <TH align=\"center\"> Supprimer la commande</TH> 
  </TR> 
      <TR> 
 <TH align=\"center\"> Id </TH> 
 <TD>  </TD> 
 <TD>  </TD> 
 <TD>  </TD> 
 <TD> </TD> 
  </TR> 
  ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_commandes"]) ? $context["liste_commandes"] : $this->getContext($context, "liste_commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 30
            echo "    <TR> 
 <TH> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id"), "html", null, true);
            echo " </TH> 
 <TD align=\"center\"> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "idacheteur"), "html", null, true);
            echo " </TD> 
 <TD align=\"center\"> <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_commandevoirproduits", array("idcommande" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-inverse btn-small\"><i class=\"icon-white icon-shopping-cart\"></i> Panier</a> </TD> 
 <TD align=\"center\"><a href=\"#\" class=\"btn btn-info btn-small\"><i class=\"icon-white icon-ok\"></i> Validée</a></TD> 
 <TD align=\"center\"><a href=\"#\" class=\"btn btn-success btn-small\"><i class=\"icon-white icon-road\"></i> Envoyée</a></TD> 
 <TD align=\"center\"> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "statut"), "html", null, true);
            echo " </TD> 
 <TD align=\"center\"> <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_commandesupprimer", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-small\"><i class=\"icon-white icon-warning-sign\"></i> Supprimer</a></TD> 
 
    </TR> 
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</TABLE> 


<br></br>
  <center>
  <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_initialisecommandes"), "html", null, true);
        echo "\" class=\"btn btn-success btn-large\"><i class=\"icon-white icon-plus\"></i> Ajouter une commande par défaut</a>
  <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_commandetoutsupprimer"), "html", null, true);
        echo "\" class=\"btn btn-danger btn-large\"><i class=\"icon-white icon-flag\"></i> Supprimer toutes les commandes</a>
<br></br>
    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i> Retour à l'accueil</a>
  </center>


";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:statut.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 49,  109 => 47,  105 => 46,  98 => 41,  88 => 37,  84 => 36,  78 => 33,  74 => 32,  70 => 31,  67 => 30,  63 => 29,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
