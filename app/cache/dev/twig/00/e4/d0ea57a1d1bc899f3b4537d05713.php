<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_00e4d0ea57a1d1bc899f3b4537d05713 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  87 => 20,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 3,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  156 => 66,  142 => 59,  133 => 55,  123 => 47,  117 => 44,  112 => 42,  86 => 28,  66 => 15,  62 => 23,  49 => 19,  19 => 1,  98 => 40,  88 => 6,  80 => 19,  78 => 40,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 14,  43 => 8,  40 => 8,  146 => 59,  141 => 57,  138 => 57,  131 => 42,  121 => 46,  109 => 61,  107 => 56,  93 => 9,  91 => 31,  85 => 19,  75 => 17,  71 => 34,  65 => 31,  37 => 11,  35 => 4,  30 => 3,  23 => 1,  158 => 67,  155 => 46,  151 => 63,  148 => 41,  143 => 58,  140 => 46,  136 => 56,  134 => 43,  130 => 39,  124 => 9,  115 => 43,  110 => 34,  105 => 40,  101 => 24,  97 => 30,  89 => 20,  83 => 25,  79 => 18,  74 => 23,  69 => 25,  63 => 19,  59 => 17,  54 => 21,  52 => 15,  45 => 17,  34 => 4,  72 => 16,  67 => 18,  60 => 29,  55 => 13,  51 => 12,  46 => 7,  42 => 8,  39 => 6,  33 => 5,  31 => 5,  28 => 3,);
    }
}
