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

/* livre/edit.html.twig */
class __TwigTemplate_f46fe3f94d4833e3ce1cb5d3d0699c3af991db4d28c5fb409adcaa211ed18bb7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "livre/edit.html.twig", 1);
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
                <h3 class=\"card-title\">Livre edit</h3>
            </div>
            <div class=\"card-body\">
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Nom : </label>
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Discreption : </label>
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "resume", []), 'widget', ["attr" => ["class" => "form-control", "rows" => "5"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Auteur : </label>
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "auteur", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Nombre De Page : </label>
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nbDePages", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Editeur : </label>
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "editur", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Photo : </label>
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"card-footer\">
                <button type=\"submit\" class=\"btn btn-primary btn-block\">Edit</button>
                <br>

            </div>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <button type=\"submit\" class=\"btn btn-primary btn-block btn-danger\">Delete</button>
            ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
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
        return "livre/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 46,  126 => 44,  122 => 43,  111 => 35,  104 => 31,  97 => 27,  90 => 23,  83 => 19,  76 => 15,  70 => 12,  60 => 4,  51 => 3,  29 => 1,);
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
                <h3 class=\"card-title\">Livre edit</h3>
            </div>
            <div class=\"card-body\">
                {{ form_start(edit_form) }}
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Nom : </label>
                    {{ form_widget(edit_form.nom, { 'attr': {'class': 'form-control'} }) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Discreption : </label>
                    {{ form_widget(edit_form.resume, { 'attr': {'class': 'form-control','rows':'5'} }) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Auteur : </label>
                    {{ form_widget(edit_form.auteur, { 'attr': {'class': 'form-control'} }) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Nombre De Page : </label>
                    {{ form_widget(edit_form.nbDePages, { 'attr': {'class': 'form-control'} }) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Editeur : </label>
                    {{ form_widget(edit_form.editur, { 'attr': {'class': 'form-control'} }) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputFile\">Photo : </label>
                    {{ form_widget(edit_form.category, { 'attr': {'class': 'form-control'} }) }}
                </div>
            </div>
            <div class=\"card-footer\">
                <button type=\"submit\" class=\"btn btn-primary btn-block\">Edit</button>
                <br>

            </div>
            {{ form_end(edit_form) }}
            {{ form_start(delete_form) }}
            <button type=\"submit\" class=\"btn btn-primary btn-block btn-danger\">Delete</button>
            {{ form_end(delete_form) }}

        </div>
        <!-- /.card -->

    </section>
{% endblock %}
", "livre/edit.html.twig", "C:\\xampp\\htdocs\\Lite\\app\\Resources\\views\\livre\\edit.html.twig");
    }
}
