<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* livre/indexF.html.twig */
class __TwigTemplate_f1978c3a54ea7792a7660834b5cc10921d936c442b754724a8b5dd7828916ac7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/indexF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/indexF.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "livre/indexF.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <!-- Portfolio -->
    <div class=\"portfolio portfolio-page container\">
        <div class=\"row\">
            <div class=\"portfolio-navigator span12\">
                <h4 class=\"filter-portfolio\">
                    <a class=\"all\" id=\"active-imgs\" href=\"#\">All</a> /
                    <a class=\"web-design\" id=\"\" href=\"#\">Web Design</a> /
                    <a class=\"logo-design\" id=\"\" href=\"#\">Logo Design</a> /
                    <a class=\"print-design\" id=\"\" href=\"#\">Print Design</a>
                </h4>
            </div>
        </div>
        <div class=\"row\">
            <ul class=\"portfolio-img\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) ? $context["livres"] : $this->getContext($context, "livres")));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 20
            echo "                <li data-id=\"p-1\" data-type=\"web-design\" class=\"span3\">
                    <div class=\"work\">
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/uploads/images/livres/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "photo", []), "html", null, true);
            echo "\" rel=\"prettyPhoto\">
                            <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/uploads/images/livres/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "photo", []), "html", null, true);
            echo "\" alt=\"\">
                        </a>
                        <h4>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "nom", []), "html", null, true);
            echo "</h4>
                        <p>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "resume", []), "html", null, true);
            echo "</p>
                        <div class=\"ca-button\">
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_new", ["id" => $this->getAttribute($context["livre"], "id", [])]), "html", null, true);
            echo "\">reserver</a>
                        </div>
                    </div>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </ul>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "livre/indexF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  104 => 28,  99 => 26,  95 => 25,  89 => 23,  84 => 22,  80 => 20,  76 => 19,  60 => 5,  51 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block body %}
    <!-- Portfolio -->
    <div class=\"portfolio portfolio-page container\">
        <div class=\"row\">
            <div class=\"portfolio-navigator span12\">
                <h4 class=\"filter-portfolio\">
                    <a class=\"all\" id=\"active-imgs\" href=\"#\">All</a> /
                    <a class=\"web-design\" id=\"\" href=\"#\">Web Design</a> /
                    <a class=\"logo-design\" id=\"\" href=\"#\">Logo Design</a> /
                    <a class=\"print-design\" id=\"\" href=\"#\">Print Design</a>
                </h4>
            </div>
        </div>
        <div class=\"row\">
            <ul class=\"portfolio-img\">
                {% for livre in livres %}
                <li data-id=\"p-1\" data-type=\"web-design\" class=\"span3\">
                    <div class=\"work\">
                        <a href=\"{{ asset('/uploads/images/livres/') }}{{ livre.photo }}\" rel=\"prettyPhoto\">
                            <img src=\"{{ asset('/uploads/images/livres/') }}{{ livre.photo }}\" alt=\"\">
                        </a>
                        <h4>{{livre.nom}}</h4>
                        <p>{{livre.resume}}</p>
                        <div class=\"ca-button\">
                            <a href=\"{{ path('reservation_new',{'id':livre.id}) }}\">reserver</a>
                        </div>
                    </div>
                </li>
                {% endfor %}
            </ul>
        </div>
    </div>
{% endblock %}


", "livre/indexF.html.twig", "C:\\xampp\\htdocs\\Lite\\app\\Resources\\views\\livre\\indexF.html.twig");
    }
}
