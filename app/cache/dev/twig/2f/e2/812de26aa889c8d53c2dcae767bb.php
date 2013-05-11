<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_2fe2812de26aa889c8d53c2dcae767bb extends Twig_Template
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
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,  138 => 40,  135 => 39,  131 => 35,  128 => 34,  123 => 41,  120 => 39,  116 => 36,  114 => 34,  110 => 32,  104 => 31,  95 => 28,  90 => 27,  85 => 26,  81 => 25,  77 => 23,  69 => 21,  63 => 18,  59 => 17,  54 => 16,  52 => 15,  45 => 10,  42 => 8,  39 => 7,  34 => 4,  31 => 4,  28 => 3,);
    }
}
