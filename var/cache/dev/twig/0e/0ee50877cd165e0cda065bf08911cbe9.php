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

/* album/edit.html.twig */
class __TwigTemplate_d3061297476358f426f21b88a80623d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "album/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "album/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "album/edit.html.twig", 1);
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

        echo "Edit Album
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
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

\t\t.card {
\t\t\tborder: none;
\t\t\tborder-radius: 0;
\t\t\tbox-shadow: none;
\t\t}

\t\t.card-body {
\t\t\tpadding: 3rem;
\t\t}

\t\t.btn-outline-secondary {
\t\t\tborder-color: #1DB954;
\t\t\tcolor: #1DB954;
\t\t}

\t\t.btn-outline-secondary:hover {
\t\t\tbackground-color: #1DB954;
\t\t\tcolor: #fff;
\t\t}

\t\t.bi-chevron-left {
\t\t\tfont-size: 1.2rem;
\t\t\tmargin-right: 0.5rem;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 121
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 122
        echo "\t<div class=\"container my-5\">
\t\t<h1 class=\"mb-4\">Edit Album</h1>

\t\t<div class=\"card shadow\">

\t\t\t<div class=\"card-body\">
\t\t\t\t";
        // line 128
        echo twig_include($this->env, $context, "album/_form.html.twig", ["button_label" => "Update"]);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"mt-5 d-flex justify-content-between align-items-center\">
\t\t\t<a class=\"btn btn-outline-secondary\" href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_album_index");
        echo "\">
\t\t\t\t<i class=\"bi bi-chevron-left me-2\"></i>Back to list
\t\t\t</a>

\t\t\t";
        // line 136
        echo twig_include($this->env, $context, "album/_delete_form.html.twig");
        echo "</div>
\t</div>
\t<style>
\t\t.card {
\t\t\tborder: none;
\t\t\tborder-radius: 0;
\t\t\tbox-shadow: none;
\t\t}

\t\t.card-body {
\t\t\tpadding: 3rem;
\t\t}

\t\t.btn-outline-secondary {
\t\t\tborder-color: #1DB954;
\t\t\tcolor: #1DB954;
\t\t}

\t\t.btn-outline-secondary:hover {
\t\t\tbackground-color: #1DB954;
\t\t\tcolor: #fff;
\t\t}

\t\t.bi-chevron-left {
\t\t\tfont-size: 1.2rem;
\t\t\tmargin-right: 0.5rem;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "album/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 136,  239 => 132,  232 => 128,  224 => 122,  214 => 121,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Album
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

\t\t.card {
\t\t\tborder: none;
\t\t\tborder-radius: 0;
\t\t\tbox-shadow: none;
\t\t}

\t\t.card-body {
\t\t\tpadding: 3rem;
\t\t}

\t\t.btn-outline-secondary {
\t\t\tborder-color: #1DB954;
\t\t\tcolor: #1DB954;
\t\t}

\t\t.btn-outline-secondary:hover {
\t\t\tbackground-color: #1DB954;
\t\t\tcolor: #fff;
\t\t}

\t\t.bi-chevron-left {
\t\t\tfont-size: 1.2rem;
\t\t\tmargin-right: 0.5rem;
\t\t}
\t</style>
{% endblock %}

{% block body %}
\t<div class=\"container my-5\">
\t\t<h1 class=\"mb-4\">Edit Album</h1>

\t\t<div class=\"card shadow\">

\t\t\t<div class=\"card-body\">
\t\t\t\t{{ include('album/_form.html.twig', {'button_label': 'Update'}) }}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"mt-5 d-flex justify-content-between align-items-center\">
\t\t\t<a class=\"btn btn-outline-secondary\" href=\"{{ path('app_album_index') }}\">
\t\t\t\t<i class=\"bi bi-chevron-left me-2\"></i>Back to list
\t\t\t</a>

\t\t\t{{ include('album/_delete_form.html.twig') }}</div>
\t</div>
\t<style>
\t\t.card {
\t\t\tborder: none;
\t\t\tborder-radius: 0;
\t\t\tbox-shadow: none;
\t\t}

\t\t.card-body {
\t\t\tpadding: 3rem;
\t\t}

\t\t.btn-outline-secondary {
\t\t\tborder-color: #1DB954;
\t\t\tcolor: #1DB954;
\t\t}

\t\t.btn-outline-secondary:hover {
\t\t\tbackground-color: #1DB954;
\t\t\tcolor: #fff;
\t\t}

\t\t.bi-chevron-left {
\t\t\tfont-size: 1.2rem;
\t\t\tmargin-right: 0.5rem;
\t\t}
\t</style>
{% endblock %}
", "album/edit.html.twig", "/media/luigi/FA442DC3442D840B/Users/luisd/Documents/Cours_IUT/PHP/Music_Library/templates/album/edit.html.twig");
    }
}
