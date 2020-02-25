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

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_6aa633252178dc11008e399e44a1ddc774ccbc66fa8097697c978cbdd88797f7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"../../index2.html\"><b>Ecole</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class=\"card\">
            <div class=\"card-body login-card-body\">
                <p class=\"login-box-msg\">Sign in to start your session</p>

                <form action=\"../../index3.html\" method=\"post\">
                    <div class=\"input-group mb-3\">
                        <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
                        <div class=\"input-group-append\">
                            <div class=\"input-group-text\">
                                <span class=\"fas fa-envelope\"></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"input-group mb-3\">
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                        <div class=\"input-group-append\">
                            <div class=\"input-group-text\">
                                <span class=\"fas fa-lock\"></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <div class=\"icheck-primary\">
                                <input type=\"checkbox\" id=\"remember\">
                                <label for=\"remember\">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class=\"col-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class=\"social-auth-links text-center mb-3\">
                    <p>- OR -</p>
                    <a href=\"#\" class=\"btn btn-block btn-primary\">
                        <i class=\"fab fa-facebook mr-2\"></i> Sign in using Facebook
                    </a>
                    <a href=\"#\" class=\"btn btn-block btn-danger\">
                        <i class=\"fab fa-google-plus mr-2\"></i> Sign in using Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class=\"mb-1\">
                    <a href=\"forgot-password.html\">I forgot my password</a>
                </p>
                <p class=\"mb-0\">
                    <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 3,  40 => 2,  37 => 1,);
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
{% block content %}
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"../../index2.html\"><b>Ecole</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class=\"card\">
            <div class=\"card-body login-card-body\">
                <p class=\"login-box-msg\">Sign in to start your session</p>

                <form action=\"../../index3.html\" method=\"post\">
                    <div class=\"input-group mb-3\">
                        <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
                        <div class=\"input-group-append\">
                            <div class=\"input-group-text\">
                                <span class=\"fas fa-envelope\"></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"input-group mb-3\">
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                        <div class=\"input-group-append\">
                            <div class=\"input-group-text\">
                                <span class=\"fas fa-lock\"></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <div class=\"icheck-primary\">
                                <input type=\"checkbox\" id=\"remember\">
                                <label for=\"remember\">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class=\"col-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class=\"social-auth-links text-center mb-3\">
                    <p>- OR -</p>
                    <a href=\"#\" class=\"btn btn-block btn-primary\">
                        <i class=\"fab fa-facebook mr-2\"></i> Sign in using Facebook
                    </a>
                    <a href=\"#\" class=\"btn btn-block btn-danger\">
                        <i class=\"fab fa-google-plus mr-2\"></i> Sign in using Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class=\"mb-1\">
                    <a href=\"forgot-password.html\">I forgot my password</a>
                </p>
                <p class=\"mb-0\">
                    <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
{% endblock %}", "FOSUserBundle:Security:login_content.html.twig", "C:\\xampp\\htdocs\\Lite\\app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
