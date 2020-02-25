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

/* :livre:index.html.twig */
class __TwigTemplate_c7e55712940c12373704b372fa81af59b8a07e1f592cc217f4eb564f5b2986d7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":livre:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":livre:index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", ":livre:index.html.twig", 2);
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
        echo "    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- /.card -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Livre list</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                        <table id=\"example1\" class=\"table table-bordered table-striped\">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Resume</th>
                                <th>Photo</th>
                                <th>Auteur</th>
                                <th>Nbdepages</th>
                                <th>Editur</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) ? $context["livres"] : $this->getContext($context, "livres")));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 30
            echo "                                <tr>
                                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "id", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "nom", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "resume", []), "html", null, true);
            echo "</td>
                                    <td class=\"patient-img sorting_1\" style=\" width: 40px; height: 40px\">
                                        <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/uploads/images/livres/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "photo", []), "html", null, true);
            echo "\"  style=\" width: 80px; height: 80px\" alt=\"\">
                                    </td>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "auteur", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "nbDePages", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "editur", []), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livre_edit", ["id" => $this->getAttribute($context["livre"], "id", [])]), "html", null, true);
            echo "\" class=\"badge bg-warning\">Edit</a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Resume</th>
                                <th>Photo</th>
                                <th>Auteur</th>
                                <th>Nbdepages</th>
                                <th>Editur</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/datatables-bs4/js/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <!-- page script -->
    <script>
        \$(function () {
            \$('#example2').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":livre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 72,  178 => 71,  169 => 70,  136 => 45,  126 => 41,  121 => 39,  117 => 38,  113 => 37,  107 => 35,  102 => 33,  98 => 32,  94 => 31,  91 => 30,  87 => 29,  61 => 5,  52 => 4,  30 => 2,);
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
{% extends 'baseAdmin.html.twig' %}

{% block body %}
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- /.card -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Livre list</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                        <table id=\"example1\" class=\"table table-bordered table-striped\">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Resume</th>
                                <th>Photo</th>
                                <th>Auteur</th>
                                <th>Nbdepages</th>
                                <th>Editur</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for livre in livres %}
                                <tr>
                                    <td>{{ livre.id }}</td>
                                    <td>{{ livre.nom }}</td>
                                    <td>{{ livre.resume }}</td>
                                    <td class=\"patient-img sorting_1\" style=\" width: 40px; height: 40px\">
                                        <img src=\"{{ asset('/uploads/images/livres/') }}{{ livre.photo }}\"  style=\" width: 80px; height: 80px\" alt=\"\">
                                    </td>
                                    <td>{{ livre.auteur }}</td>
                                    <td>{{ livre.nbDePages }}</td>
                                    <td>{{ livre.editur }}</td>
                                    <td>
                                        <a href=\"{{ path('livre_edit', { 'id': livre.id }) }}\" class=\"badge bg-warning\">Edit</a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Resume</th>
                                <th>Photo</th>
                                <th>Auteur</th>
                                <th>Nbdepages</th>
                                <th>Editur</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset(\"back/plugins/datatables/jquery.dataTables.js\") }}\"></script>
    <script src=\"{{ asset(\"back/plugins/datatables-bs4/js/dataTables.bootstrap4.js\") }}\"></script>
    <!-- page script -->
    <script>
        \$(function () {
            \$('#example2').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false,
            });
        });
    </script>
{% endblock %}
", ":livre:index.html.twig", "C:\\xampp\\htdocs\\Lite\\app/Resources\\views/livre/index.html.twig");
    }
}
