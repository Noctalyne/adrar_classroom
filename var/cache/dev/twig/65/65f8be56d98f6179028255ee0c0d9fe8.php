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

/* header.html.twig */
class __TwigTemplate_f69f8f3c04fc6ec6404aaff99899e474 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        $this->displayBlock('navbar', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 2
        echo "        <div class=\"header\">
    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/adrar-classrooms-logoLogo.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"logo\" />
    <h1>Classrooms</h1>
        <ul class=\"navbar\">
            <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">Accueil</a>
            <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">Formations</a>
            <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">Administration</a>
        </ul>
             <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/magnifying-glass-solid.svg"), "html", null, true);
        echo "\" alt=\"icon\" class=\"icon\"  />

<div id=\"search-container\">
    <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" method=\"POST\">
     <div id=\"search-button\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/magnifying-glass-solid.svg"), "html", null, true);
        echo "\" alt=\"icon\" class=\"icon2\"  />
        </div>
        <input type=\"text\" name=\"q\" placeholder=\"Recherche...\" />
    </form>
</div>
<button type=\"button\" class=\"login\" onclick=\"location.href='/login'\">Se connecter</button>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 15,  91 => 13,  85 => 10,  80 => 8,  76 => 7,  72 => 6,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block navbar %}
        <div class=\"header\">
    <img src=\"{{ asset('images/adrar-classrooms-logoLogo.png') }}\" alt=\"Logo\" class=\"logo\" />
    <h1>Classrooms</h1>
        <ul class=\"navbar\">
            <a href=\"{{ path('app_index') }}\">Accueil</a>
            <a href=\"{{ path('app_index') }}\">Formations</a>
            <a href=\"{{ path('app_index') }}\">Administration</a>
        </ul>
             <img src=\"{{ asset('images/magnifying-glass-solid.svg') }}\" alt=\"icon\" class=\"icon\"  />

<div id=\"search-container\">
    <form action=\"{{ path('app_index') }}\" method=\"POST\">
     <div id=\"search-button\">
            <img src=\"{{ asset('images/magnifying-glass-solid.svg') }}\" alt=\"icon\" class=\"icon2\"  />
        </div>
        <input type=\"text\" name=\"q\" placeholder=\"Recherche...\" />
    </form>
</div>
<button type=\"button\" class=\"login\" onclick=\"location.href='/login'\">Se connecter</button>
</div>
{% endblock %}", "header.html.twig", "C:\\Users\\Antho\\Desktop\\DevWeb\\Symfony\\Adrar\\templates\\header.html.twig");
    }
}
