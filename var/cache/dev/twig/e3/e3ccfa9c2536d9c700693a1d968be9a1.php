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

/* adrar/index.html.twig */
class __TwigTemplate_820bcd51bfebac2a7d3d312ce4742537 extends Template
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
            'header' => [$this, 'block_header'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adrar/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adrar/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adrar/index.html.twig", 1);
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

        echo "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->displayBlock('header', $context, $blocks);
        // line 12
        echo "<div class=\"firstDiv\">
    <div class=\"firstText\">
    <h1>Votre métier de demain, à portée de main</h1>
    <p>Développez de nouvelles compétences dans le domaine de <br>
    l’informatique et intégrer la formation de votre choix.</p>
        <div class=\"buttons\">
    <button class=\"button1\">Démarrer ma candidature</button>
    <button class=\"button2\">Découvrir les formations</button>
        </div>
    </div>
    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/undraw_studying_re_deca.png"), "html", null, true);
        echo "\" alt=\"image\" class=\"undraw\" />
</div>


<div class=\"col\">
        <div class=\"firstCol\">
        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Ellipse 1.png"), "html", null, true);
        echo "\" alt=\"image\" class=\"Ellipse1\" />
        <h2>Diplômes certifiants</h2>
        <p>Nos parcours procurent des titres reconnus par l'état</p>
        </div>

        <div class=\"secondCol\">
        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Ellipse 2.png"), "html", null, true);
        echo "\" alt=\"image\" class=\"Ellipse2\" />
        <h2>Mentor</h2>
        <p>Un expert du scteur vous suit de manière régulière</p>
        </div>

        <div class=\"thirdCol\">
        <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Ellipse 3.png"), "html", null, true);
        echo "\" alt=\"image\" class=\"Ellipse3\" />
        <h2>Remboursé si non embauché</h2>
        <p>Un expert du scteur vous suit de manière régulière</p>
        </div>
</div>

<div class=\"thirdDiv\">
    <h2>Témoignages et sourires</h2>
    <img src=";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "avatar", [], "any", false, false, false, 48), "html", null, true);
        echo " alt=\"image\" class=\"Ellipse4\" />
    <h2>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "username", [], "any", false, false, false, 49), "html", null, true);
        echo "</h2>
    ";
        // line 51
        echo "        <div class=\"chevrons\">
            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/circle-chevron-down-solid 2.svg"), "html", null, true);
        echo "\" alt=\"icon\" class=\"chevron1\" style=\" fill: #ff0000; cursor: pointer;\" />
            <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/circle-chevron-down-solid 2.svg"), "html", null, true);
        echo "\" alt=\"icon\" class=\"chevron2\" style=\"fill: #ff0000; cursor: pointer;\" />
        </div>
</div>

    ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 62
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "
";
        // line 9
        $this->loadTemplate("header.html.twig", "adrar/index.html.twig", 9)->display($context);
        // line 10
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        echo " 

";
        // line 59
        $this->loadTemplate("footer.html.twig", "adrar/index.html.twig", 59)->display($context);
        // line 60
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "adrar/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 60,  219 => 59,  206 => 57,  195 => 10,  193 => 9,  190 => 8,  180 => 7,  169 => 62,  167 => 57,  160 => 53,  156 => 52,  153 => 51,  149 => 49,  145 => 48,  134 => 40,  125 => 34,  116 => 28,  107 => 22,  95 => 12,  93 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

{% block header %}

{% include 'header.html.twig' %}

{% endblock %}
<div class=\"firstDiv\">
    <div class=\"firstText\">
    <h1>Votre métier de demain, à portée de main</h1>
    <p>Développez de nouvelles compétences dans le domaine de <br>
    l’informatique et intégrer la formation de votre choix.</p>
        <div class=\"buttons\">
    <button class=\"button1\">Démarrer ma candidature</button>
    <button class=\"button2\">Découvrir les formations</button>
        </div>
    </div>
    <img src=\"{{ asset('images/undraw_studying_re_deca.png') }}\" alt=\"image\" class=\"undraw\" />
</div>


<div class=\"col\">
        <div class=\"firstCol\">
        <img src=\"{{ asset('images/Ellipse 1.png') }}\" alt=\"image\" class=\"Ellipse1\" />
        <h2>Diplômes certifiants</h2>
        <p>Nos parcours procurent des titres reconnus par l'état</p>
        </div>

        <div class=\"secondCol\">
        <img src=\"{{ asset('images/Ellipse 2.png') }}\" alt=\"image\" class=\"Ellipse2\" />
        <h2>Mentor</h2>
        <p>Un expert du scteur vous suit de manière régulière</p>
        </div>

        <div class=\"thirdCol\">
        <img src=\"{{ asset('images/Ellipse 3.png') }}\" alt=\"image\" class=\"Ellipse3\" />
        <h2>Remboursé si non embauché</h2>
        <p>Un expert du scteur vous suit de manière régulière</p>
        </div>
</div>

<div class=\"thirdDiv\">
    <h2>Témoignages et sourires</h2>
    <img src={{ app.user.avatar }} alt=\"image\" class=\"Ellipse4\" />
    <h2>{{ app.user.username }}</h2>
    {# <p>{{  }}</p> #}
        <div class=\"chevrons\">
            <img src=\"{{ asset('images/circle-chevron-down-solid 2.svg') }}\" alt=\"icon\" class=\"chevron1\" style=\" fill: #ff0000; cursor: pointer;\" />
            <img src=\"{{ asset('images/circle-chevron-down-solid 2.svg') }}\" alt=\"icon\" class=\"chevron2\" style=\"fill: #ff0000; cursor: pointer;\" />
        </div>
</div>

    {% block footer %} 

{% include 'footer.html.twig' %}

    {% endblock %}

{% endblock %}
", "adrar/index.html.twig", "C:\\Users\\Antho\\Desktop\\DevWeb\\Symfony\\Adrar\\templates\\adrar\\index.html.twig");
    }
}
