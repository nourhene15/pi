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

/* @activite/Questions/listeQuestions.html.twig */
class __TwigTemplate_cb6a8007c444d8014a104b46cf230d4be5d312d802cb475d24d9ee89f1b6e0e3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@activite/Questions/listeQuestions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@activite/Questions/listeQuestions.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "@activite/Questions/listeQuestions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style>
      .correct {
          color: red;
      }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
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
                                <th>Question ID</th>
                                <th>Question</th>

                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 32
            echo "                                <tr>
                                    <td>questions ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", []), "html", null, true);
            echo "

                                    </td>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "question", []), "html", null, true);
            echo "
                                        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reponseList"]) ? $context["reponseList"] : $this->getContext($context, "reponseList")));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 38
                echo "                                            ";
                if (($context["i"] == $this->getAttribute($context["j"], "question", []))) {
                    // line 39
                    echo "                                         <p class=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "valeur", []), "html", null, true);
                    echo " \">   ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "reponse", []), "html", null, true);
                    echo " </p>
                                            ";
                }
                // line 41
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                                    </td>


                                    <td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_questions", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\">Delete</a>
                                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_questions", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\">Update</a>
                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_reponse", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\">addReponse</a> </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Question ID</th>
                                <th>Question</th>

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

    // line 72
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    <!-- DataTables -->
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
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
        return "@activite/Questions/listeQuestions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 75,  209 => 74,  206 => 73,  197 => 72,  168 => 50,  159 => 47,  155 => 46,  151 => 45,  146 => 42,  140 => 41,  132 => 39,  129 => 38,  125 => 37,  121 => 36,  115 => 33,  112 => 32,  108 => 31,  86 => 11,  77 => 10,  62 => 4,  53 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block stylesheets  %}
    <style>
      .correct {
          color: red;
      }
    </style>
{% endblock %}
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
                                <th>Question ID</th>
                                <th>Question</th>

                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for i in questions %}
                                <tr>
                                    <td>questions {{ i.id }}

                                    </td>
                                    <td>{{ i.question }}
                                        {% for j in reponseList %}
                                            {% if (i == j.question) %}
                                         <p class=\" {{ j.valeur }} \">   {{ j.reponse }} </p>
                                            {% endif %}
                                        {% endfor %}
                                    </td>


                                    <td><a href=\"{{ path('delete_questions',{'id':i.id}) }}\">Delete</a>
                                        <a href=\"{{ path('update_questions',{'id':i.id}) }}\">Update</a>
                                    <a href=\"{{ path('add_reponse',{'id':i.id}) }}\">addReponse</a> </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Question ID</th>
                                <th>Question</th>

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
{% endblock %}", "@activite/Questions/listeQuestions.html.twig", "C:\\xampp\\htdocs\\Lite\\src\\activiteBundle\\Resources\\views\\Questions\\listeQuestions.html.twig");
    }
}
