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

/* home/index.html.twig */
class __TwigTemplate_1bb035bc19856ad804ec7c85a8e853c5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home page";
        
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
       <h1>Fruits Application</h1>
\t   <a href=\"fruit\">Favorite Fruits</a>
\t   <div class=\"jumbotron text-center\" style=\"width:40%; padding:5%; margin: 10px auto;\">
\t   <form @submit.prevent=\"submit\" name=\"fruits\" method=\"post\" action=\"\">
\t\t\t<div id=\"fruits\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"fruit_name\">Fruit Name</label>
\t\t\t\t\t<input type=\"text\" id=\"fruit_name\" name=\"fruit[name]\" class=\"form-control\" :class=\"{ 'is-invalid': isSubmitted && \$v.form.name.\$error }\" v-model=\"form.name\">
\t\t\t\t\t<div v-if=\"isSubmitted && !\$v.form.name.required\" class=\"invalid-feedback\">Fruit name is required</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"fruit_family\">Fruit Family</label>
\t\t\t\t\t<input type=\"text\" id=\"fruit_family\" name=\"fruit[family]\" class=\"form-control\" :class=\"{ 'is-invalid': isSubmitted && \$v.form.family.\$error }\" v-model=\"form.family\">
\t\t\t\t\t<div v-if=\"isSubmitted && !\$v.form.family.required\" class=\"invalid-feedback\">Family is required</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">Submit</button>
\t\t\t\t</div>

\t\t\t\t<v-dialog />
\t\t\t</div>
\t\t</form>\t
\t\t</div>
\t   <div class=\"jumbotron text-center\">
\t\t   \t
           <table class=\"table text-center\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"text-center\">Favorite</th>
\t\t\t\t\t\t<th class=\"text-center\">Name</th>
\t\t\t\t\t\t<th class=\"text-center\">Family</th>
\t\t\t\t\t\t<th class=\"text-center\">Order</th>
\t\t\t\t\t\t<th class=\"text-center\">Genus</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fruits"]) || array_key_exists("fruits", $context) ? $context["fruits"] : (function () { throw new RuntimeError('Variable "fruits" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fruit"]) {
            // line 46
            echo "\t\t\t\t\t\t<tr v-bind:key=\"item.id\" data-bs-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["fruit"], "nutritions", [], "any", false, false, false, 46), ["," => "
", "\"" => "", "{" => "", "}" => ""]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["fruit"], "favorite", [], "any", false, false, false, 48)) {
                // line 49
                echo "\t\t\t\t\t\t\t   <input type=\"checkbox\" class=\"favoriteFruit\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fruit"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\" name=\"favoritefruit";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fruit"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\" checked/>
\t\t\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t\t   <input type=\"checkbox\" class=\"favoriteFruit\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fruit"], "id", [], "any", false, false, false, 51), "html", null, true);
                echo "\" name=\"favoritefruit";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fruit"], "id", [], "any", false, false, false, 51), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fruit"], "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fruit"], "family", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fruit"], "ordar", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fruit"], "genus", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fruit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t\t

\t\t\t";
        // line 65
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 65, $this->source); })()) > 1)) {
            // line 66
            echo "\t\t\t<ul class=\"pagination pagination-sm\">
\t\t\t\t";
            // line 68
            echo "\t\t\t\t<li ";
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 68, $this->source); })()) == 1)) ? ("class=\"disabled\"") : (""));
            echo ">
\t\t\t\t\t<a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => (((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 69, $this->source); })()) - 1) < 1)) ? (1) : (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 69, $this->source); })()) - 1)))]), "html", null, true);
            echo "\">«</a>
\t\t\t\t</li>

\t\t\t\t";
            // line 73
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 73, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 74
                echo "\t\t\t\t<li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 74, $this->source); })()) == $context["i"])) ? ("class=\"disabled\"") : (""));
                echo ">
\t\t\t\t<a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "
\t\t\t\t";
            // line 80
            echo "\t\t\t\t<li ";
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 80, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 80, $this->source); })()))) ? ("class=\"disabled\"") : (""));
            echo ">
\t\t\t\t\t<a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => (((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 81, $this->source); })()) + 1) <= (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 81, $this->source); })()))) ? (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 81, $this->source); })()) + 1)) : ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new RuntimeError('Variable "thisPage" does not exist.', 81, $this->source); })())))]), "html", null, true);
            echo "\">»</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
        }
        // line 85
        echo "       </div>
   </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 85,  219 => 81,  214 => 80,  211 => 78,  200 => 75,  195 => 74,  190 => 73,  184 => 69,  179 => 68,  176 => 66,  174 => 65,  167 => 60,  158 => 57,  154 => 56,  150 => 55,  146 => 54,  143 => 53,  135 => 51,  127 => 49,  125 => 48,  118 => 46,  114 => 45,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home page{% endblock %}

{% block body %}
   <div class=\"text-center\">
       <h1>Fruits Application</h1>
\t   <a href=\"fruit\">Favorite Fruits</a>
\t   <div class=\"jumbotron text-center\" style=\"width:40%; padding:5%; margin: 10px auto;\">
\t   <form @submit.prevent=\"submit\" name=\"fruits\" method=\"post\" action=\"\">
\t\t\t<div id=\"fruits\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"fruit_name\">Fruit Name</label>
\t\t\t\t\t<input type=\"text\" id=\"fruit_name\" name=\"fruit[name]\" class=\"form-control\" :class=\"{ 'is-invalid': isSubmitted && \$v.form.name.\$error }\" v-model=\"form.name\">
\t\t\t\t\t<div v-if=\"isSubmitted && !\$v.form.name.required\" class=\"invalid-feedback\">Fruit name is required</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"fruit_family\">Fruit Family</label>
\t\t\t\t\t<input type=\"text\" id=\"fruit_family\" name=\"fruit[family]\" class=\"form-control\" :class=\"{ 'is-invalid': isSubmitted && \$v.form.family.\$error }\" v-model=\"form.family\">
\t\t\t\t\t<div v-if=\"isSubmitted && !\$v.form.family.required\" class=\"invalid-feedback\">Family is required</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">Submit</button>
\t\t\t\t</div>

\t\t\t\t<v-dialog />
\t\t\t</div>
\t\t</form>\t
\t\t</div>
\t   <div class=\"jumbotron text-center\">
\t\t   \t
           <table class=\"table text-center\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"text-center\">Favorite</th>
\t\t\t\t\t\t<th class=\"text-center\">Name</th>
\t\t\t\t\t\t<th class=\"text-center\">Family</th>
\t\t\t\t\t\t<th class=\"text-center\">Order</th>
\t\t\t\t\t\t<th class=\"text-center\">Genus</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for fruit in fruits %}
\t\t\t\t\t\t<tr v-bind:key=\"item.id\" data-bs-toggle=\"tooltip\" title=\"{{ fruit.nutritions | replace({',': '\\n', '\"': \"\", '{': \"\", '}': \"\"}) }}\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if fruit.favorite %}
\t\t\t\t\t\t\t   <input type=\"checkbox\" class=\"favoriteFruit\" id=\"{{ fruit.id }}\" name=\"favoritefruit{{ fruit.id }}\" checked/>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t   <input type=\"checkbox\" class=\"favoriteFruit\" id=\"{{ fruit.id }}\" name=\"favoritefruit{{ fruit.id }}\"/>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
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
\t\t\t\t\t<a href=\"{{ path('home', {page: thisPage-1 < 1 ? 1 : thisPage-1}) }}\">«</a>
\t\t\t\t</li>

\t\t\t\t{# Render each page number #}
\t\t\t\t{% for i in 1..maxPages %}
\t\t\t\t<li {{ thisPage == i ? 'class=\"disabled\"' }}>
\t\t\t\t<a href=\"{{ path('home', {page: i}) }}\">{{ i }}</a>
\t\t\t\t</li>
\t\t\t\t{% endfor %}

\t\t\t\t{# `»` arrow #}
\t\t\t\t<li {{ thisPage == maxPages ? 'class=\"disabled\"' }}>
\t\t\t\t\t<a href=\"{{ path('home', {page: thisPage+1 <= maxPages ? thisPage+1 : thisPage}) }}\">»</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t{% endif %}
       </div>
   </div>
{% endblock %}", "home/index.html.twig", "D:\\wamp\\www\\symfony\\fruits\\templates\\home\\index.html.twig");
    }
}
