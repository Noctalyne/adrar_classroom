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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "

        <div class=\"header\">
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/adrar-classrooms-logoLogo.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"logo\" />
    <h1>Classrooms</h1>
        <ul class=\"navbar\">
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">Accueil</a>
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">Formations</a>
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">Administration</a>
        </ul>
             <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/magnifying-glass-solid.svg"), "html", null, true);
        echo "\" alt=\"icon\" class=\"icon\"  />

<div id=\"search-container\">
    <form action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" method=\"POST\" >
     <div id=\"search-button\">
            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/magnifying-glass-solid.svg"), "html", null, true);
        echo "\" alt=\"icon\" class=\"icon2\"  />
        </div>
        <input type=\"text\" name=\"q\" placeholder=\"Recherche...\" />
    </form>
</div>
<button type=\"button\" class=\"login\" onclick=\"location.href='/login'\">Se connecter</button>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/header.css"), "html", null, true);
        echo "\">
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 2,  99 => 1,  81 => 19,  76 => 17,  70 => 14,  65 => 12,  61 => 11,  57 => 10,  51 => 7,  46 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{asset('css/header.css')}}\">
 {% endblock %}


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
    <form action=\"{{ path('app_index') }}\" method=\"POST\" >
     <div id=\"search-button\">
            <img src=\"{{ asset('images/magnifying-glass-solid.svg') }}\" alt=\"icon\" class=\"icon2\"  />
        </div>
        <input type=\"text\" name=\"q\" placeholder=\"Recherche...\" />
    </form>
</div>
<button type=\"button\" class=\"login\" onclick=\"location.href='/login'\">Se connecter</button>
</div>
", "header.html.twig", "C:\\Users\\Antho\\Desktop\\DevWeb\\Symfony\\Adrar\\templates\\header.html.twig");
    }
}
