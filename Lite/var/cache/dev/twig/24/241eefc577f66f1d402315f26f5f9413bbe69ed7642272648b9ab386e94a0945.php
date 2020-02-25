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

/* livre/new.html.twig */
class __TwigTemplate_5047720c1ce65c9010c70de9587736bef475dfaded7448ef8e32a47366f43df6 extends \Twig\Template
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
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/new.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "livre/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content\">

        <!-- Default box -->
        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">Categorie creation</h3>
            </div>
            <div class=\"card-body\">
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Nom : </label>
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Discreption : </label>
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", []), 'widget', ["attr" => ["class" => "form-control", "rows" => "5"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Auteur : </label>
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", []), 'widget', ["attr" => ["class" => "form-control", "rows" => "5"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Nombre De Page : </label>
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbDePages", []), 'widget', ["attr" => ["class" => "form-control", "rows" => "5"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Editeur : </label>
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editur", []), 'widget', ["attr" => ["class" => "form-control", "rows" => "5"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Photo : </label>
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo", []), 'widget', ["attr" => ["class" => "form-control", "rows" => "5"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Photo : </label>
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", []), 'widget', ["attr" => ["class" => "form-control", "rows" => "5"]]);
        echo "
                </div>
            </div>
            <div class=\"card-footer\">
                <button type=\"submit\" class=\"btn btn-primary btn-block\">Submit</button>
            </div>
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
        <!-- /.card -->

    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "livre/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  118 => 39,  111 => 35,  104 => 31,  97 => 27,  90 => 23,  83 => 19,  76 => 15,  70 => 12,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
    <section class=\"content\">

        <!-- Default box -->
        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">Categorie creation</h3>
            </div>
            <div class=\"card-body\">
                {{ form_start(form) }}
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Nom : </label>
                    {{ form_widget(form.nom, { 'attr': {'class': 'form-control'} }) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Discreption : </label>
                    {{ form_widget(form.resume, { 'attr': {'class': 'form-control','rows':'5'} }) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Auteur : </label>
                    {{ form_widget(form.auteur, { 'attr': {'class': 'form-control','rows':'5'} }) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Nombre De Page : </label>
                    {{ form_widget(form.nbDePages, { 'attr': {'class': 'form-control','rows':'5'} }) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Editeur : </label>
                    {{ form_widget(form.editur, { 'attr': {'class': 'form-control','rows':'5'} }) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Photo : </label>
                    {{ form_widget(form.photo, { 'attr': {'class': 'form-control','rows':'5'} }) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Photo : </label>
                    {{ form_widget(form.category, { 'attr': {'class': 'form-control','rows':'5'} }) }}
                </div>
            </div>
            <div class=\"card-footer\">
                <button type=\"submit\" class=\"btn btn-primary btn-block\">Submit</button>
            </div>
            {{ form_end(form) }}

        </div>
        <!-- /.card -->

    </section>
{% endblock %}
", "livre/new.html.twig", "C:\\xampp\\htdocs\\Lite\\app\\Resources\\views\\livre\\new.html.twig");
    }
}
