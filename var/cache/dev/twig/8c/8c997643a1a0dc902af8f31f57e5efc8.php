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

/* musique/show.html.twig */
class __TwigTemplate_944c26ebdc1b48450bb397590e89ebf1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musique/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musique/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "musique/show.html.twig", 1);
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

        echo "Musique
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
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["musique"]) || array_key_exists("musique", $context) ? $context["musique"] : (function () { throw new RuntimeError('Variable "musique" does not exist.', 10, $this->source); })()), "album", [], "any", false, false, false, 10), "urlImage", [], "any", false, false, false, 10), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["musique"]) || array_key_exists("musique", $context) ? $context["musique"] : (function () { throw new RuntimeError('Variable "musique" does not exist.', 10, $this->source); })()), "album", [], "any", false, false, false, 10), "nomAlbum", [], "any", false, false, false, 10), "html", null, true);
        echo "\" class=\"img-fluid rounded\">
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<h1 class=\"mb-4\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["musique"]) || array_key_exists("musique", $context) ? $context["musique"] : (function () { throw new RuntimeError('Variable "musique" does not exist.', 13, $this->source); })()), "nomMusique", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
\t\t\t\t<p class=\"lead\">Album:
\t\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["musique"]) || array_key_exists("musique", $context) ? $context["musique"] : (function () { throw new RuntimeError('Variable "musique" does not exist.', 15, $this->source); })()), "album", [], "any", false, false, false, 15), "nomAlbum", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
\t\t\t\t<p>Artiste:
\t\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["musique"]) || array_key_exists("musique", $context) ? $context["musique"] : (function () { throw new RuntimeError('Variable "musique" does not exist.', 17, $this->source); })()), "album", [], "any", false, false, false, 17), "artiste", [], "any", false, false, false, 17), "nomArtiste", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>

\t\t\t</div>
\t\t</div>
\t\t<hr>

\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_musique_index");
        echo "\" class=\"btn btn-secondary mb-2\">Retour à la liste</a>

\t\t<a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_musique_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["musique"]) || array_key_exists("musique", $context) ? $context["musique"] : (function () { throw new RuntimeError('Variable "musique" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\" class=\"btn btn-primary mb-2\">Modifier</a>

\t\t";
        // line 27
        echo twig_include($this->env, $context, "musique/_delete_form.html.twig");
        echo "
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "musique/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 27,  126 => 25,  121 => 23,  112 => 17,  107 => 15,  102 => 13,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Musique
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<img src=\"{{ musique.album.urlImage }}\" alt=\"{{ musique.album.nomAlbum }}\" class=\"img-fluid rounded\">
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<h1 class=\"mb-4\">{{ musique.nomMusique }}</h1>
\t\t\t\t<p class=\"lead\">Album:
\t\t\t\t\t{{ musique.album.nomAlbum }}</p>
\t\t\t\t<p>Artiste:
\t\t\t\t\t{{ musique.album.artiste.nomArtiste }}</p>

\t\t\t</div>
\t\t</div>
\t\t<hr>

\t\t<a href=\"{{ path('app_musique_index') }}\" class=\"btn btn-secondary mb-2\">Retour à la liste</a>

\t\t<a href=\"{{ path('app_musique_edit', {'id': musique.id}) }}\" class=\"btn btn-primary mb-2\">Modifier</a>

\t\t{{ include('musique/_delete_form.html.twig') }}
\t</div>
{% endblock %}
", "musique/show.html.twig", "/media/luigi/FA442DC3442D840B/Users/luisd/Documents/Cours_IUT/PHP/Music_Library/templates/musique/show.html.twig");
    }
}
