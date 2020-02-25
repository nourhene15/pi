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

/* ::baseAdmin.html.twig */
class __TwigTemplate_9b7f680c50af3859646184e320481ede70fd89eb5085f07851b27bd21f78ee8f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "::baseAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "::baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- icheck bootstrap -->
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">

    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "</head>
<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">
    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"nav-link\">Home Client</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"#\" class=\"brand-link\">
            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\"
                 alt=\"AdminLTE Logo\"
                 class=\"brand-image img-circle elevation-3\"
                 style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">StudyNET</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
                </div>
                <div class=\"info\">
                    <a href=\"#\" class=\"d-block\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Questions
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addQuestion");
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>New Questions</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeQuestions");
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Questions List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Cours
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_cours");
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>New Cour</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_cours");
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Cours List</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Categorie
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_new");
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>New Category</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Category List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Livre
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livre_new");
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>New Livre</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livre_index");
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Livre List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Blank Page</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        ";
        // line 184
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", []), "hasPreviousSession", [])) {
            // line 185
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", []), "flashbag", []), "all", [], "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 186
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 187
                    echo "                    <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 188
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "        ";
        }
        // line 193
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 194
        echo "        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class=\"main-footer\">
        <div class=\"float-right d-none d-sm-block\">
            <b>Version</b> 3.0.2
        </div>
        <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong> All rights
        reserved.
    </footer>

</div>

<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 4 -->
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        // line 214
        $this->displayBlock('javascripts', $context, $blocks);
        // line 215
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Admin StudyNET";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 193
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 214
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 214,  393 => 193,  376 => 19,  358 => 6,  347 => 215,  345 => 214,  341 => 213,  337 => 212,  332 => 210,  327 => 208,  311 => 194,  308 => 193,  305 => 192,  299 => 191,  290 => 188,  285 => 187,  280 => 186,  275 => 185,  273 => 184,  237 => 151,  228 => 145,  208 => 128,  199 => 122,  178 => 104,  169 => 98,  149 => 81,  140 => 75,  118 => 56,  112 => 53,  97 => 41,  84 => 31,  71 => 20,  69 => 19,  62 => 15,  54 => 10,  47 => 6,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{% block title %}Admin StudyNET{% endblock %}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('back/plugins/fontawesome-free/css/all.min.css')}}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- icheck bootstrap -->
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('back/dist/css/adminlte.min.css')}}\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">

    {% block stylesheets %}{% endblock %}
</head>
<body class=\"hold-transition sidebar-mini\">
<div class=\"wrapper\">
    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"{{ path('homepage') }}\" class=\"nav-link\">Home Client</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"#\" class=\"brand-link\">
            <img src=\"{{ asset('back/dist/img/AdminLTELogo.png')}}\"
                 alt=\"AdminLTE Logo\"
                 class=\"brand-image img-circle elevation-3\"
                 style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">StudyNET</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img src=\"{{ asset('back/dist/img/user2-160x160.jpg')}}\" class=\"img-circle elevation-2\" alt=\"User Image\">
                </div>
                <div class=\"info\">
                    <a href=\"#\" class=\"d-block\">{{ app.user.username }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Questions
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ path('addQuestion') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>New Questions</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ path('listeQuestions') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Questions List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Cours
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ path('add_cours') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>New Cour</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ path('list_cours') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Cours List</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Categorie
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ path('categorie_new') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>New Category</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ path('categorie_index') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Category List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Livre
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ path('livre_new') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>New Livre</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ path('livre_index') }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Livre List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Blank Page</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}
        {% block body %}{% endblock %}
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class=\"main-footer\">
        <div class=\"float-right d-none d-sm-block\">
            <b>Version</b> 3.0.2
        </div>
        <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong> All rights
        reserved.
    </footer>

</div>

<script src=\"{{ asset('back/plugins/jquery/jquery.min.js')}}\"></script>
<!-- Bootstrap 4 -->
<script src=\"{{ asset('back/plugins/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('back/dist/js/adminlte.min.js')}}\"></script>
<script src=\"{{ asset('back/dist/js/demo.js')}}\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>", "::baseAdmin.html.twig", "C:\\xampp\\htdocs\\Lite\\app/Resources\\views/baseAdmin.html.twig");
    }
}
