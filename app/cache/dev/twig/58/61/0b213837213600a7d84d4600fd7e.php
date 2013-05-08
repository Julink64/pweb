<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_58610b213837213600a7d84d4600fd7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  43 => 8,  40 => 7,  146 => 59,  141 => 57,  138 => 56,  131 => 42,  121 => 8,  109 => 61,  107 => 56,  93 => 44,  91 => 42,  85 => 39,  75 => 35,  71 => 34,  65 => 31,  37 => 11,  35 => 8,  30 => 3,  23 => 1,  158 => 47,  155 => 46,  151 => 42,  148 => 41,  143 => 58,  140 => 46,  136 => 43,  134 => 43,  130 => 39,  124 => 9,  115 => 6,  110 => 34,  105 => 33,  101 => 32,  97 => 30,  89 => 28,  83 => 25,  79 => 36,  74 => 23,  69 => 21,  63 => 19,  59 => 17,  54 => 11,  52 => 15,  45 => 17,  34 => 4,  72 => 22,  67 => 18,  60 => 29,  55 => 12,  51 => 11,  46 => 9,  42 => 8,  39 => 7,  33 => 4,  31 => 3,  28 => 3,);
    }
}
