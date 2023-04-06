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

/* musique/index.html.twig */
class __TwigTemplate_c6878d9eb9c6b396c067145eead7107c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musique/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musique/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "musique/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Musique index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container\">
\t\t<h1 class=\"text-center my-5\">Musique</h1>
\t\t<div class=\"row justify-content-center\">
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["musiques"]) || array_key_exists("musiques", $context) ? $context["musiques"] : (function () { throw new RuntimeError('Variable "musiques" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["musique"]) {
            // line 11
            echo "\t\t\t\t<div class=\"col-md-4 col-lg-3 mb-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["musique"], "album", [], "any", false, false, false, 13), "urlImage", [], "any", false, false, false, 13), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["musique"], "album", [], "any", false, false, false, 13), "nomAlbum", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"card-img-top\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musique"], "nomMusique", [], "any", false, false, false, 15), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["musique"], "album", [], "any", false, false, false, 16), "nomAlbum", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_musique_show", ["id" => twig_get_attribute($this->env, $this->source, $context["musique"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\" class=\"btn btn-primary mr-2\">Show</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_musique_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["musique"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Edit</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t<p class=\"lead\">No records found.</p>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['musique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</div>
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-4 col-lg-3 mb-4\">
\t\t\t\t<a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_musique_new");
        echo "\" class=\"btn btn-success\">Create new</a>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "musique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 30,  141 => 27,  132 => 23,  122 => 18,  118 => 17,  114 => 16,  110 => 15,  103 => 13,  99 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Musique index
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<h1 class=\"text-center my-5\">Musique</h1>
\t\t<div class=\"row justify-content-center\">
\t\t\t{% for musique in musiques %}
\t\t\t\t<div class=\"col-md-4 col-lg-3 mb-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"{{ musique.album.urlImage }}\" alt=\"{{ musique.album.nomAlbum }}\" class=\"card-img-top\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ musique.nomMusique }}</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">{{ musique.album.nomAlbum }}</p>
\t\t\t\t\t\t\t<a href=\"{{ path('app_musique_show', {'id': musique.id}) }}\" class=\"btn btn-primary mr-2\">Show</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_musique_edit', {'id': musique.id}) }}\" class=\"btn btn-outline-primary\">Edit</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t<p class=\"lead\">No records found.</p>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-4 col-lg-3 mb-4\">
\t\t\t\t<a href=\"{{ path('app_musique_new') }}\" class=\"btn btn-success\">Create new</a>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "musique/index.html.twig", "/media/luigi/FA442DC3442D840B/Users/luisd/Documents/Cours_IUT/PHP/Music_Library/templates/musique/index.html.twig");
    }
}
