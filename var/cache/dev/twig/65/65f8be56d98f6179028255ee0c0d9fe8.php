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
        echo "
        <div class=\"header\">
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
      ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "        <div class=\"user-info\">
            <p>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "username", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
            <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Ellipse 5.png"), "html", null, true);
            echo "\" alt=\"Avatar\" class=\"avatar\" />
            
            <form method=\"post\" action=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                <button type=\"submit\" class=\"logout\">Déconnexion</button>
            </form>
        </div>
    ";
        } else {
            // line 30
            echo "        
        <form method=\"post\" action=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
            <button type=\"submit\" class=\"login\">Se connecter</button>
        </form>
    ";
        }
        // line 35
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  117 => 35,  110 => 31,  107 => 30,  99 => 25,  94 => 23,  90 => 22,  87 => 21,  85 => 20,  77 => 15,  72 => 13,  66 => 10,  61 => 8,  57 => 7,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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
      {% if app.user %}
        <div class=\"user-info\">
            <p>{{ app.user.username }}</p>
            <img src=\"{{ asset('images/Ellipse 5.png') }}\" alt=\"Avatar\" class=\"avatar\" />
            
            <form method=\"post\" action=\"{{ path('app_logout') }}\">
                <button type=\"submit\" class=\"logout\">Déconnexion</button>
            </form>
        </div>
    {% else %}
        
        <form method=\"post\" action=\"{{ path('app_login') }}\">
            <button type=\"submit\" class=\"login\">Se connecter</button>
        </form>
    {% endif %}
</div>
", "header.html.twig", "C:\\wamp\\www\\Adrar\\templates\\header.html.twig");
    }
}
