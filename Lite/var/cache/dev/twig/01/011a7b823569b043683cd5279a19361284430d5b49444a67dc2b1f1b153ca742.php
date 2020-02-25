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

/* @activite/Cours/liste.cour.html.twig */
class __TwigTemplate_411220565f08a3f1da3612689088c58da4069dc23c28b56baf77a9ea776525b4 extends \Twig\Template
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
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@activite/Cours/liste.cour.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@activite/Cours/liste.cour.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "@activite/Cours/liste.cour.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- /.card -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                        <table id=\"CourTable\" class=\"table table-bordered table-striped\">
                            <thead>
                            <tr>
                                <th>Cours ID</th>
                                <th>Cours Libelle</th>
                                <th>nom </th>
                                <th>File</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scours"]) ? $context["scours"] : $this->getContext($context, "scours")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 25
            echo "                                <tr>
                                    <td>Cours";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "libelle", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", []), "html", null, true);
            echo "</td>
                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "image", []), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_cours", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\">Delete</a>
                                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_cours", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\">Update</a> </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Cours ID</th>
                                <th>Cours Libelle</th>
                                <th>nom </th>
                                <th>File</th>
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

    // line 57
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    <!-- DataTables -->
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/datatables-bs4/js/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            \$(\"#CourTable\").DataTable();
            \$('#example2').DataTable({
                \"paging\": true,
                \"lengthChange\": true,
                \"searching\": true,
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": true,
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@activite/Cours/liste.cour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 60,  162 => 59,  159 => 58,  150 => 57,  120 => 34,  111 => 31,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  88 => 25,  84 => 24,  61 => 3,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source(" {% extends \"baseAdmin.html.twig\" %}
{% block body %}
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- /.card -->
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                        <table id=\"CourTable\" class=\"table table-bordered table-striped\">
                            <thead>
                            <tr>
                                <th>Cours ID</th>
                                <th>Cours Libelle</th>
                                <th>nom </th>
                                <th>File</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for i in scours %}
                                <tr>
                                    <td>Cours{{ i.id }}</td>
                                    <td>{{ i.libelle }}</td>
                                    <td>{{ i.nom }}</td>
                                    <td>{{  i.image }}</td>
                                    <td><a href=\"{{ path('delete_cours',{'id':i.id}) }}\">Delete</a>
                                        <a href=\"{{ path('update_cours',{'id':i.id}) }}\">Update</a> </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Cours ID</th>
                                <th>Cours Libelle</th>
                                <th>nom </th>
                                <th>File</th>
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
    <!-- DataTables -->
    <script src=\"{{ asset(\"back/plugins/datatables/jquery.dataTables.js\") }}\"></script>
    <script src=\"{{ asset(\"back/plugins/datatables-bs4/js/dataTables.bootstrap4.js\") }}\"></script>
    <script>
        \$(function () {
            \$(\"#CourTable\").DataTable();
            \$('#example2').DataTable({
                \"paging\": true,
                \"lengthChange\": true,
                \"searching\": true,
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": true,
            });
        });
    </script>
{% endblock %}", "@activite/Cours/liste.cour.html.twig", "C:\\xampp\\htdocs\\Lite\\src\\activiteBundle\\Resources\\views\\Cours\\liste.cour.html.twig");
    }
}
