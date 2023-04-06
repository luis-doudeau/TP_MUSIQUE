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

/* musique/edit.html.twig */
class __TwigTemplate_2d8f3e36824ae46dd549c1d93c57a497 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musique/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musique/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "musique/edit.html.twig", 1);
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

        echo "Edit Musique
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
        echo "\t<div class=\"container mt-5\">
\t\t<h1 class=\"mb-4\">Edit Musique</h1>

\t\t<div class=\"card\">
\t\t\t<div class=\"card-body\">
\t\t\t\t";
        // line 12
        echo twig_include($this->env, $context, "musique/_form.html.twig", ["button_label" => "Update"]);
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mt-3 d-flex justify-content-between\">
\t\t\t<a class=\"btn btn-secondary\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_musique_index");
        echo "\">back to list</a>

\t\t\t";
        // line 19
        echo twig_include($this->env, $context, "musique/_delete_form.html.twig");
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css\">
\t<style>
\t\t.container {
\t\t\tmax-width: 600px;
\t\t}

\t\th1 {
\t\t\tfont-size: 2.5rem;
\t\t\tfont-weight: bold;
\t\t\ttext-align: center;
\t\t\tmargin-bottom: 2rem;
\t\t}

\t\t.card {
\t\t\tborder: none;
\t\t\tbox-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
\t\t}

\t\t.btn-secondary {
\t\t\tbackground-color: #1db954;
\t\t\tborder-color: #1db954;
\t\t\tcolor: #fff;
\t\t\tfont-weight: bold;
\t\t\tpadding: 0.5rem 1rem;
\t\t\tborder-radius: 0;
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 1px;
\t\t}

\t\t.btn-secondary:hover {
\t\t\tbackground-color: #1ed760;
\t\t\tborder-color: #1ed760;
\t\t\tcolor: #fff;
\t\t}

\t\tform label {
\t\t\tfont-weight: bold;
\t\t\tfont-size: 1.2rem;
\t\t}

\t\tform input,
\t\tform select {
\t\t\tborder: none;
\t\t\tborder-radius: 0;
\t\t\tborder-bottom: 1px solid #e1e1e1;
\t\t\tfont-size: 1.2rem;
\t\t\tpadding: 0.5rem;
\t\t\tmargin-bottom: 1.5rem;
\t\t}

\t\tform input:focus,
\t\tform select:focus {
\t\t\tborder: none;
\t\t\tborder-radius: 0;
\t\t\tbox-shadow: none;
\t\t\tborder-bottom: 2px solid #1db954;
\t\t}

\t\tform input[type=\"submit\"] {
\t\t\tbackground-color: #1db954;
\t\t\tborder-color: #1db954;
\t\t\tcolor: #fff;
\t\t\tfont-weight: bold;
\t\t\tpadding: 0.5rem 1rem;
\t\t\tborder-radius: 0;
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 1px;
\t\t}

\t\tform input[type=\"submit\"]:hover {
\t\t\tbackground-color: #1ed760;
\t\t\tborder-color: #1ed760;
\t\t\tcolor: #fff;
\t\t}

\t\t.alert-danger {
\t\t\tbackground-color: #f8d7da;
\t\t\tborder-color: #f5c6cb;
\t\t\tcolor: #721c24;
\t\t\tpadding: 1rem;
\t\t\tmargin-bottom: 1rem;
\t\t\tborder-radius: 0;
\t\t\tfont-size: 1.2rem;
\t\t\tfont-weight: bold;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "musique/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 25,  124 => 24,  110 => 19,  105 => 17,  97 => 12,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Musique
{% endblock %}

{% block body %}
\t<div class=\"container mt-5\">
\t\t<h1 class=\"mb-4\">Edit Musique</h1>

\t\t<div class=\"card\">
\t\t\t<div class=\"card-body\">
\t\t\t\t{{ include('musique/_form.html.twig', {'button_label': 'Update'}) }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mt-3 d-flex justify-content-between\">
\t\t\t<a class=\"btn btn-secondary\" href=\"{{ path('app_musique_index') }}\">back to list</a>

\t\t\t{{ include('musique/_delete_form.html.twig') }}
\t\t</div>
\t</div>
{% endblock %}

{% block stylesheets %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css\">
\t<style>
\t\t.container {
\t\t\tmax-width: 600px;
\t\t}

\t\th1 {
\t\t\tfont-size: 2.5rem;
\t\t\tfont-weight: bold;
\t\t\ttext-align: center;
\t\t\tmargin-bottom: 2rem;
\t\t}

\t\t.card {
\t\t\tborder: none;
\t\t\tbox-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
\t\t}

\t\t.btn-secondary {
\t\t\tbackground-color: #1db954;
\t\t\tborder-color: #1db954;
\t\t\tcolor: #fff;
\t\t\tfont-weight: bold;
\t\t\tpadding: 0.5rem 1rem;
\t\t\tborder-radius: 0;
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 1px;
\t\t}

\t\t.btn-secondary:hover {
\t\t\tbackground-color: #1ed760;
\t\t\tborder-color: #1ed760;
\t\t\tcolor: #fff;
\t\t}

\t\tform label {
\t\t\tfont-weight: bold;
\t\t\tfont-size: 1.2rem;
\t\t}

\t\tform input,
\t\tform select {
\t\t\tborder: none;
\t\t\tborder-radius: 0;
\t\t\tborder-bottom: 1px solid #e1e1e1;
\t\t\tfont-size: 1.2rem;
\t\t\tpadding: 0.5rem;
\t\t\tmargin-bottom: 1.5rem;
\t\t}

\t\tform input:focus,
\t\tform select:focus {
\t\t\tborder: none;
\t\t\tborder-radius: 0;
\t\t\tbox-shadow: none;
\t\t\tborder-bottom: 2px solid #1db954;
\t\t}

\t\tform input[type=\"submit\"] {
\t\t\tbackground-color: #1db954;
\t\t\tborder-color: #1db954;
\t\t\tcolor: #fff;
\t\t\tfont-weight: bold;
\t\t\tpadding: 0.5rem 1rem;
\t\t\tborder-radius: 0;
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 1px;
\t\t}

\t\tform input[type=\"submit\"]:hover {
\t\t\tbackground-color: #1ed760;
\t\t\tborder-color: #1ed760;
\t\t\tcolor: #fff;
\t\t}

\t\t.alert-danger {
\t\t\tbackground-color: #f8d7da;
\t\t\tborder-color: #f5c6cb;
\t\t\tcolor: #721c24;
\t\t\tpadding: 1rem;
\t\t\tmargin-bottom: 1rem;
\t\t\tborder-radius: 0;
\t\t\tfont-size: 1.2rem;
\t\t\tfont-weight: bold;
\t\t}
\t</style>
{% endblock %}
", "musique/edit.html.twig", "/media/luigi/FA442DC3442D840B/Users/luisd/Documents/Cours_IUT/PHP/Music_Library/templates/musique/edit.html.twig");
    }
}
