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

/* footer.html.twig */
class __TwigTemplate_e108f368276c458ef1d94657cb70af3d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "
        <div class=\"footer\">
            <p>2023 © ADRAR Classrooms. Tous droits réservés.<p>
            <div class=\"image-container\">
                <button id=\"scrollToTopButton\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/chevron-up-solid.svg"), "html", null, true);
        echo "\" alt=\"icon\" class=\"image2\" id=\"scroll_up\" style=\"filter: invert(1); fill: #ff0000; cursor: pointer;\" />
                <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/chevron-up-solid.svg"), "html", null, true);
        echo "\" alt=\"icon\" class=\"image3\" style=\"filter: invert(1);fill: #ff0000; cursor: pointer;\" />
                </button>
            </div>
        </div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        <div class=\"footer\">
            <p>2023 © ADRAR Classrooms. Tous droits réservés.<p>
            <div class=\"image-container\">
                <button id=\"scrollToTopButton\">
                <img src=\"{{ asset('images/chevron-up-solid.svg') }}\" alt=\"icon\" class=\"image2\" id=\"scroll_up\" style=\"filter: invert(1); fill: #ff0000; cursor: pointer;\" />
                <img src=\"{{ asset('images/chevron-up-solid.svg') }}\" alt=\"icon\" class=\"image3\" style=\"filter: invert(1);fill: #ff0000; cursor: pointer;\" />
                </button>
            </div>
        </div>

", "footer.html.twig", "C:\\wamp\\www\\Adrar\\templates\\footer.html.twig");
    }
}
