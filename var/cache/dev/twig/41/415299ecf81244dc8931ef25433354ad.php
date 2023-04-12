<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* fruit/index.html.twig */
class __TwigTemplate_06a13d3a815b3e1313ad9304487e22e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fruit/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Favorite Fruits page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "   <div class=\"text-center\">
       <h1>Favorite Fruits</h1>
\t   <a href=\"home\">Home</a>
\t   
\t   <div class=\"jumbotron text-center\">
\t\t   \t
           <table class=\"table text-center\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"text-center\">Name</th>
\t\t\t\t\t\t<th class=\"text-center\">Family</th>
\t\t\t\t\t\t<th class=\"text-center\">Order</th>
\t\t\t\t\t\t<th class=\"text-center\">Genus</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fruits"]) || array_key_exists("fruits", $context) ? $context["fruits"] : (function () { throw new RuntimeError('Variable "fruits" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fruit"]) {
            // line 23
            echo "\t\t\t\t\t\t<tr v-bind:key=\"item.id\" data-bs-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["fruit"], "nutritions", [], "any", false, false, false, 23), ["," => "
", "\"" => "", "{" => "", "}" => ""]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fruit"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fruit"], "family", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fruit"], "ordar", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fruit"], "genus", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fruit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t\t

\t\t\t";
        // line 35
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 35, $this->source); })()) > 1)) {
            // line 36
            echo "\t\t\t<ul class=\"pagination pagination-sm\">
\t\t\t\t";
            // line 38
            echo "\t\t\t\t<li ";
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 38, $this->source); })()) == 1)) ? ("class=\"disabled\"") : (""));
            echo ">
\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fruit", ["page" => (((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 39, $this->source); })()) - 1) < 1)) ? (1) : (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 39, $this->source); })()) - 1)))]), "html", null, true);
            echo "\">«</a>
\t\t\t\t</li>

\t\t\t\t";
            // line 43
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 43, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 44
                echo "\t\t\t\t<li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 44, $this->source); })()) == $context["i"])) ? ("class=\"disabled\"") : (""));
                echo ">
\t\t\t\t<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fruit", ["page" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
\t\t\t\t";
            // line 50
            echo "\t\t\t\t<li ";
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 50, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 50, $this->source); })()))) ? ("class=\"disabled\"") : (""));
            echo ">
\t\t\t\t\t<a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fruit", ["page" => (((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 51, $this->source); })()) + 1) <= (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 51, $this->source); })()))) ? (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 51, $this->source); })()) + 1)) : ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 51, $this->source); })())))]), "html", null, true);
            echo "\">»</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
        }
        // line 55
        echo "       </div>
   </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "fruit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 55,  174 => 51,  169 => 50,  166 => 48,  155 => 45,  150 => 44,  145 => 43,  139 => 39,  134 => 38,  131 => 36,  129 => 35,  122 => 30,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  95 => 23,  91 => 22,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Favorite Fruits page{% endblock %}

{% block body %}
   <div class=\"text-center\">
       <h1>Favorite Fruits</h1>
\t   <a href=\"home\">Home</a>
\t   
\t   <div class=\"jumbotron text-center\">
\t\t   \t
           <table class=\"table text-center\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"text-center\">Name</th>
\t\t\t\t\t\t<th class=\"text-center\">Family</th>
\t\t\t\t\t\t<th class=\"text-center\">Order</th>
\t\t\t\t\t\t<th class=\"text-center\">Genus</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for fruit in fruits %}
\t\t\t\t\t\t<tr v-bind:key=\"item.id\" data-bs-toggle=\"tooltip\" title=\"{{ fruit.nutritions | replace({',': '\\n', '\"': \"\", '{': \"\", '}': \"\"}) }}\">
\t\t\t\t\t\t\t<td>{{ fruit.name }}</td>
\t\t\t\t\t\t\t<td>{{ fruit.family }}</td>
\t\t\t\t\t\t\t<td>{{ fruit.ordar }}</td>
\t\t\t\t\t\t\t<td>{{ fruit.genus }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t\t

\t\t\t{% if maxPages > 1 %}
\t\t\t<ul class=\"pagination pagination-sm\">
\t\t\t\t{# `«` arrow  #}
\t\t\t\t<li {{ thisPage == 1 ? 'class=\"disabled\"' }}>
\t\t\t\t\t<a href=\"{{ path('fruit', {page: thisPage-1 < 1 ? 1 : thisPage-1}) }}\">«</a>
\t\t\t\t</li>

\t\t\t\t{# Render each page number #}
\t\t\t\t{% for i in 1..maxPages %}
\t\t\t\t<li {{ thisPage == i ? 'class=\"disabled\"' }}>
\t\t\t\t<a href=\"{{ path('fruit', {page: i}) }}\">{{ i }}</a>
\t\t\t\t</li>
\t\t\t\t{% endfor %}

\t\t\t\t{# `»` arrow #}
\t\t\t\t<li {{ thisPage == maxPages ? 'class=\"disabled\"' }}>
\t\t\t\t\t<a href=\"{{ path('fruit', {page: thisPage+1 <= maxPages ? thisPage+1 : thisPage}) }}\">»</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t{% endif %}
       </div>
   </div>
{% endblock %}", "fruit/index.html.twig", "D:\\wamp\\www\\symfony\\fruits\\templates\\fruit\\index.html.twig");
    }
}
