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

/* album/index.html.twig */
class __TwigTemplate_506ad436ed11f8f3c3c7c811756e21b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "album/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "album/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "album/index.html.twig", 1);
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

        echo "Albums
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
        echo "\t<div class=\"container-fluid\">
\t\t<h1 class=\"fw-bold mb-5\">Albums</h1>
\t\t<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3\">
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["albums"]) || array_key_exists("albums", $context) ? $context["albums"] : (function () { throw new RuntimeError('Variable "albums" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 11
            echo "\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t<img src=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "urlImage", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "nomAlbum", [], "any", false, false, false, 13), "html", null, true);
            echo "\">

\t\t\t\t\t\t<div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t<h5 class=\"card-title fw-bold flex-grow-1\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["album"], "nomAlbum", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>

\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-end\">
\t\t\t\t\t\t\t\t<div class=\"text-muted\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["album"], "artiste", [], "any", false, false, false, 19), "nomArtiste", [], "any", false, false, false, 19), "html", null, true);
            echo "</div>

\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_album_show", ["id" => twig_get_attribute($this->env, $this->source, $context["album"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-success me-2\">Voir</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_album_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["album"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-secondary\">Modifier</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body d-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t\t\t<h5 class=\"card-title fw-bold text-muted\">Aucun album trouvé</h5>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_album_new");
            echo "\" class=\"btn btn-outline-success mt-3\">Créer un nouvel album</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "album/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 39,  145 => 34,  139 => 30,  127 => 23,  123 => 22,  117 => 19,  111 => 16,  103 => 13,  99 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Albums
{% endblock %}

{% block body %}
\t<div class=\"container-fluid\">
\t\t<h1 class=\"fw-bold mb-5\">Albums</h1>
\t\t<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3\">
\t\t\t{% for album in albums %}
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t<img src=\"{{ album.urlImage }}\" class=\"card-img-top\" alt=\"{{ album.nomAlbum }}\">

\t\t\t\t\t\t<div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t<h5 class=\"card-title fw-bold flex-grow-1\">{{ album.nomAlbum }}</h5>

\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-end\">
\t\t\t\t\t\t\t\t<div class=\"text-muted\">{{ album.artiste.nomArtiste }}</div>

\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_album_show', {'id': album.id}) }}\" class=\"btn btn-sm btn-outline-success me-2\">Voir</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_album_edit', {'id': album.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">Modifier</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body d-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t\t\t<h5 class=\"card-title fw-bold text-muted\">Aucun album trouvé</h5>
\t\t\t\t\t\t\t<a href=\"{{ path('app_album_new') }}\" class=\"btn btn-outline-success mt-3\">Créer un nouvel album</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}
", "album/index.html.twig", "/media/luigi/FA442DC3442D840B/Users/luisd/Documents/Cours_IUT/PHP/Music_Library/templates/album/index.html.twig");
    }
}
