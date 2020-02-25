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

/* @activite/Questions/ResultQuizzPdf.html.twig */
class __TwigTemplate_958c00aff171eb68863f3ad69cce946ebb457258b3d928ee82fd5276ad1efbe8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@activite/Questions/ResultQuizzPdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@activite/Questions/ResultQuizzPdf.html.twig"));

        // line 1
        echo " <div style=\"width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878\">
        <div style=\"width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878\">
            <span style=\"font-size:50px; font-weight:bold\">Certificate of Completion</span>
            <br><br>
            <span style=\"font-size:25px\"><i>This is to certify that</i></span>
            <br><br>
            <span style=\"font-size:30px\"><b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenom", []), "html", null, true);
        echo "</b></span><br/><br/>
            <span style=\"font-size:25px\"><i>has completed the course</i></span> <br/><br/>
            <span style=\"font-size:20px\">with score of <b>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")), "html", null, true);
        echo "</b></span> <br/><br/><br/><br/>
            <span style=\"font-size:25px\"><i>dated</i></span><br>
            <span style=\"font-size:30px\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "</span>
        </div>
 </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@activite/Questions/ResultQuizzPdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  51 => 9,  44 => 7,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source(" <div style=\"width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878\">
        <div style=\"width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878\">
            <span style=\"font-size:50px; font-weight:bold\">Certificate of Completion</span>
            <br><br>
            <span style=\"font-size:25px\"><i>This is to certify that</i></span>
            <br><br>
            <span style=\"font-size:30px\"><b>{{ eleve.nom }} {{ eleve.prenom }}</b></span><br/><br/>
            <span style=\"font-size:25px\"><i>has completed the course</i></span> <br/><br/>
            <span style=\"font-size:20px\">with score of <b>{{ score }}</b></span> <br/><br/><br/><br/>
            <span style=\"font-size:25px\"><i>dated</i></span><br>
            <span style=\"font-size:30px\">{{ date }}</span>
        </div>
 </div>", "@activite/Questions/ResultQuizzPdf.html.twig", "C:\\xampp\\htdocs\\Lite\\src\\activiteBundle\\Resources\\views\\Questions\\ResultQuizzPdf.html.twig");
    }
}
