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

/* @activite/Questions/Quizz.html.twig */
class __TwigTemplate_ef417bd50592eeac3b2a934b13b035410b5649962c476d89a920812d1c94fba0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@activite/Questions/Quizz.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@activite/Questions/Quizz.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@activite/Questions/Quizz.html.twig", 1);
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
        echo "    <div class=\"col-lg-12\">
        <h1 class=\"page-header\">Quiz</h1>
    </div>

<div id=\"my_radio_boxes\"  class=\"clearfix\" >
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questionList"]) ? $context["questionList"] : $this->getContext($context, "questionList")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 9
            echo "           <h4> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "question", []), "html", null, true);
            echo "</h4>
        <div class=\"form-group\">
        <label class=\"col-md-4 control-label\" for=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
            echo "\">Réponses :</label>
";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["s"], "reponses", []));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 13
                echo "    <div class=\"checkbox\">
        <label for=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                echo "\">
           <input class=\"ajax";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", []), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                echo "\" type=\"radio\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", []), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                echo "\"  value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", []), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "reponse", []), "html", null, true);
                echo "
        </label>
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <a  class=\"btn btn-primary\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizresult");
        echo "\">J'ai Fini</a>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 29
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questionList"]) ? $context["questionList"] : $this->getContext($context, "questionList")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 33
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["s"], "reponses", []));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 34
                echo "            \$('#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", []), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                echo "').change(function(){

                selected_value = \$(\"input[id=";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", []), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                echo "]:checked\").val();
                that = \$(this);
                \$.ajax({
                    url:'";
                // line 39
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listcoursetquiz");
                echo "',
                    type: \"post\",
                    dataType: \"json\",
                    data: {
                        \"reponse_id\": selected_value ,
                        \"question_id\": ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                echo "
                    },
                    async: true,
                    success: function (data)
                    {
                        console.log(data);
                       // alert(data) ;
                        \$('div#ajax-results').html(data.output);
                    }
                });
                return false;

            });
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        });



    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@activite/Questions/Quizz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 59,  204 => 58,  184 => 44,  176 => 39,  169 => 36,  162 => 34,  157 => 33,  153 => 32,  148 => 29,  139 => 28,  123 => 22,  120 => 21,  113 => 19,  93 => 15,  89 => 14,  86 => 13,  82 => 12,  78 => 11,  72 => 9,  68 => 8,  61 => 3,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"col-lg-12\">
        <h1 class=\"page-header\">Quiz</h1>
    </div>

<div id=\"my_radio_boxes\"  class=\"clearfix\" >
    {%  for s in questionList %}
           <h4> {{ s.question }}</h4>
        <div class=\"form-group\">
        <label class=\"col-md-4 control-label\" for=\"{{ s.id }}\">Réponses :</label>
{% for r in s.reponses %}
    <div class=\"checkbox\">
        <label for=\"{{s.id}}\">
           <input class=\"ajax{{ r.id }}{{s.id}}\" type=\"radio\" name=\"{{ s.id }}\" id=\"{{ r.id }}{{s.id}}\"  value=\"{{r.id}}\" >{{r.reponse}}
        </label>
    </div>
{% endfor %}
        </div>
    {% endfor %}

    <a  class=\"btn btn-primary\" href=\"{{ path('quizresult') }}\">J'ai Fini</a>
</div>



{% endblock %}
{% block javascript %}

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            {%  for s in questionList %}
            {% for r in s.reponses %}
            \$('#{{ r.id }}{{s.id}}').change(function(){

                selected_value = \$(\"input[id={{ r.id }}{{s.id}}]:checked\").val();
                that = \$(this);
                \$.ajax({
                    url:'{{  (path('listcoursetquiz'))  }}',
                    type: \"post\",
                    dataType: \"json\",
                    data: {
                        \"reponse_id\": selected_value ,
                        \"question_id\": {{ s.id }}
                    },
                    async: true,
                    success: function (data)
                    {
                        console.log(data);
                       // alert(data) ;
                        \$('div#ajax-results').html(data.output);
                    }
                });
                return false;

            });
            {% endfor %}
            {% endfor %}
        });



    </script>
{% endblock %}", "@activite/Questions/Quizz.html.twig", "C:\\xampp\\htdocs\\Lite\\src\\activiteBundle\\Resources\\views\\Questions\\Quizz.html.twig");
    }
}
