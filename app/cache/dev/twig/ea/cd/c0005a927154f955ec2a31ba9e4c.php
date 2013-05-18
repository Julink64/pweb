<?php

/* PwebMainBundle:Main:categoriesgerer.html.twig */
class __TwigTemplate_eacdc0005a927154f955ec2a31ba9e4c extends Twig_Template
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
        echo "  Gérer les catégories
";
    }

    // line 7
    public function block_PwebMain_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Gérer les catégories</h2>
<br></br>
    <TABLE BORDER=\"0\"> 
  <TR> 
 <TH>  </TH> 
 <TH align=\"left\"> Nom de la catégorie </TH> 
 <TH align=\"left\"> Renommer la catégorie </TH> 
 <TH align=\"left\"> Supprimer cette catégorie sans supprimer les articles liés </TH> 
 <TH align=\"left\"> Supprimer cette catégorie ainsi que les articles liés </TH> 
  </TR> 
      <TR> 
 <TH align=\"left\"> Id de la catégorie  </TH> 
 <TD>  </TD> 
 <TD>  </TD> 
 <TD>  </TD> 
 <TD> </TD> 
  </TR> 
  ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_categories"]) ? $context["liste_categories"] : $this->getContext($context, "liste_categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 27
            echo "    <TR> 
 <TH> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"), "html", null, true);
            echo " </TH> 
 <TD> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "libellecategorie"), "html", null, true);
            echo " </TD> 
 <TD align=\"center\"> <a href=\"#\" class=\"btn btn-info btn-small\"><i class=\"icon-th-list\"></i> Renommer</a> </TD> 
 <TD align=\"center\"> <a href=\"#\" class=\"btn btn-warning btn-small\"><i class=\"icon-warning-sign\"></i> Supprimer cette Categorie</a> </TD> 
 <TD align=\"center\"> <a href=\"#\" class=\"btn btn-danger btn-small\"><i class=\"icon-white icon-warning-sign\"></i><i class=\"icon-white icon-warning-sign\"></i> Supprimer cette Categorie + Articles liés</a> </TD> 
  </TR> 
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</TABLE> 


<br></br>
  <center>
  <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_accueil"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-large\"><i class=\"icon-white icon-home\"></i> Retour à l'accueil</a>
  <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_initialisecategories"), "html", null, true);
        echo "\" class=\"btn btn-success btn-large\"><i class=\"icon-white icon-plus\"></i> Ajouter les catégories par défaut</a>
  <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PwebMain_initialiseclear"), "html", null, true);
        echo "\" class=\"btn btn-danger btn-large\"><i class=\"icon-white icon-flag\"></i> Tout Supprimer</a>
  </center>
";
    }

    public function getTemplateName()
    {
        return "PwebMainBundle:Main:categoriesgerer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  94 => 41,  90 => 40,  83 => 35,  71 => 29,  67 => 28,  64 => 27,  60 => 26,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
