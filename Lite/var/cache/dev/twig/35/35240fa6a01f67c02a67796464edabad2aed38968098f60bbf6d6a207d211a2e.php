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

/* base.html.twig */
class __TwigTemplate_84910564641f341476d283527aeaa133a64666aed6698b2c99b2f7942e3677bd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <title>STUDYNET - VOTRE ECOLE </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,400\">
    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Droid+Sans\">
    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Lobster\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/prettyPhoto/css/prettyPhoto.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/flexslider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/style.css"), "html", null, true);
        echo "\">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/ico/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">

</head>

<body>

<!-- Header -->
<div class=\"container\">
    <div class=\"header row\">
        <div class=\"span12\">
            <div class=\"navbar\">
                <div class=\"navbar-inner\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <h1>
                        <a class=\"brand\" href=\"index.html\">STUDYNET - a super cool SCHOOL ...</a>
                    </h1>
                    <div class=\"nav-collapse collapse\">
                        <ul class=\"nav pull-right\">
                            <li class=\"current-page\">
                                <a href=\"#\"><i class=\"icon-home\"></i><br />Home</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"icon-camera\"></i><br />Scolarité</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"icon-comments\"></i><br />Administration</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livre_indexFront");
        echo "\"><i class=\"icon-tasks\"></i><br />Bibliothéque</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"icon-user\"></i><br />Evénements</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listcoursetquiz_cours");
        echo "\"><i class=\"icon-user\"></i><br />Cours</a>

                            </li>
                            <li>
                                <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listcoursetquiz");
        echo "\"><i class=\"icon-user\"></i><br />Quizz</a>

                            </li>
                            <li>
                            ";
        // line 78
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 79
            echo "                                ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 80
                echo "                                    <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_new");
                echo "\"><i class=\"icon-user\"></i><br />Espace Admin</a>
                                ";
            }
            // line 82
            echo "                                ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENSEIGNANT")) {
                // line 83
                echo "                                    <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_new");
                echo "\"><i class=\"icon-user\"></i><br />Espace ENSEIGNANT</a>
                                ";
            }
            // line 85
            echo "
                                <a href=\"";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"icon-user\"></i><br />Logout</a>
                            ";
        } else {
            // line 88
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><i class=\"icon-user\"></i><br />Login</a>
                            ";
        }
        // line 90
        echo "                            </li>
                        </ul></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Title -->
<div class=\"page-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <i class=\"icon-tasks page-title-icon\"></i>
                <h2>Services /</h2>
                <p>Here are the services we offer</p>
            </div>
        </div>
    </div>
</div>

";
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "<!-- Footer -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"widget span3\">
                <h4>About Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                <p><a href=\"\">Read more...</a></p>
            </div>
            <div class=\"widget span3\">
                <h4>Latest Tweets</h4>
                <div class=\"show-tweets\"></div>
            </div>
            <div class=\"widget span3\">
                <h4>Flickr Photos</h4>
                <ul class=\"flickr-feed\"></ul>
            </div>
            <div class=\"widget span3\">
                <h4>Contact Us</h4>
                <p><i class=\"icon-map-marker\"></i> Address: Via Principe Amedeo 9, 10100, Torino, TO, Italy</p>
                <p><i class=\"icon-phone\"></i> Phone: 0039 333 12 68 347</p>
                <p><i class=\"icon-user\"></i> Skype: Andia_Agency</p>
                <p><i class=\"icon-envelope-alt\"></i> Email: <a href=\"\">contact@andia.co.uk</a></p>
            </div>
        </div>
        <div class=\"footer-border\"></div>
        <div class=\"row\">
            <div class=\"copyright span4\">
                <p>Copyright 2012 Andia - All rights reserved. Template by <a href=\"http://azmind.com\">Azmind</a>.</p>
            </div>
            <div class=\"social span8\">
                <a class=\"facebook\" href=\"\"></a>
                <a class=\"dribbble\" href=\"\"></a>
                <a class=\"twitter\" href=\"\"></a>
                <a class=\"pinterest\" href=\"\"></a>
            </div>
        </div>
    </div>
</footer>

<!-- Javascript -->
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/jquery.tweet.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/jflickrfeed.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/jquery.ui.map.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/jquery.quicksand.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/prettyPhoto/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>

";
        // line 162
        $this->displayBlock('javascript', $context, $blocks);
        // line 164
        echo "</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 111
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 162
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 162,  303 => 111,  289 => 164,  287 => 162,  282 => 160,  278 => 159,  274 => 158,  270 => 157,  266 => 156,  262 => 155,  258 => 154,  215 => 113,  213 => 111,  190 => 90,  184 => 88,  179 => 86,  176 => 85,  170 => 83,  167 => 82,  161 => 80,  158 => 79,  156 => 78,  149 => 74,  142 => 70,  133 => 64,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  38 => 1,);
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
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <title>STUDYNET - VOTRE ECOLE </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,400\">
    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Droid+Sans\">
    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Lobster\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/bootstrap/css/bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/prettyPhoto/css/prettyPhoto.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/flexslider.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/font-awesome.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/assets/css/style.css')}}\">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel=\"shortcut icon\" href=\"{{ asset('front/assets/ico/favicon.ico')}}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset('front/assets/ico/apple-touch-icon-144-precomposed.png')}}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ asset('front/assets/ico/apple-touch-icon-114-precomposed.png')}}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset('front/assets/ico/apple-touch-icon-72-precomposed.png')}}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('front/assets/ico/apple-touch-icon-57-precomposed.png')}}\">

</head>

<body>

<!-- Header -->
<div class=\"container\">
    <div class=\"header row\">
        <div class=\"span12\">
            <div class=\"navbar\">
                <div class=\"navbar-inner\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <h1>
                        <a class=\"brand\" href=\"index.html\">STUDYNET - a super cool SCHOOL ...</a>
                    </h1>
                    <div class=\"nav-collapse collapse\">
                        <ul class=\"nav pull-right\">
                            <li class=\"current-page\">
                                <a href=\"#\"><i class=\"icon-home\"></i><br />Home</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"icon-camera\"></i><br />Scolarité</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"icon-comments\"></i><br />Administration</a>
                            </li>
                            <li>
                                <a href=\"{{ path(\"livre_indexFront\") }}\"><i class=\"icon-tasks\"></i><br />Bibliothéque</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"icon-user\"></i><br />Evénements</a>
                            </li>
                            <li>
                                <a href=\"{{ path(\"listcoursetquiz_cours\") }}\"><i class=\"icon-user\"></i><br />Cours</a>

                            </li>
                            <li>
                                <a href=\"{{ path(\"listcoursetquiz\") }}\"><i class=\"icon-user\"></i><br />Quizz</a>

                            </li>
                            <li>
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                {% if is_granted('ROLE_ADMIN') %}
                                    <a href=\"{{ path('categorie_new') }}\"><i class=\"icon-user\"></i><br />Espace Admin</a>
                                {% endif %}
                                {% if is_granted('ROLE_ENSEIGNANT') %}
                                    <a href=\"{{ path('categorie_new') }}\"><i class=\"icon-user\"></i><br />Espace ENSEIGNANT</a>
                                {% endif %}

                                <a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"icon-user\"></i><br />Logout</a>
                            {% else %}
                                <a href=\"{{ path('fos_user_security_login') }}\"><i class=\"icon-user\"></i><br />Login</a>
                            {% endif %}
                            </li>
                        </ul></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Title -->
<div class=\"page-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <i class=\"icon-tasks page-title-icon\"></i>
                <h2>Services /</h2>
                <p>Here are the services we offer</p>
            </div>
        </div>
    </div>
</div>

{% block body %}
{% endblock %}
<!-- Footer -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"widget span3\">
                <h4>About Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                <p><a href=\"\">Read more...</a></p>
            </div>
            <div class=\"widget span3\">
                <h4>Latest Tweets</h4>
                <div class=\"show-tweets\"></div>
            </div>
            <div class=\"widget span3\">
                <h4>Flickr Photos</h4>
                <ul class=\"flickr-feed\"></ul>
            </div>
            <div class=\"widget span3\">
                <h4>Contact Us</h4>
                <p><i class=\"icon-map-marker\"></i> Address: Via Principe Amedeo 9, 10100, Torino, TO, Italy</p>
                <p><i class=\"icon-phone\"></i> Phone: 0039 333 12 68 347</p>
                <p><i class=\"icon-user\"></i> Skype: Andia_Agency</p>
                <p><i class=\"icon-envelope-alt\"></i> Email: <a href=\"\">contact@andia.co.uk</a></p>
            </div>
        </div>
        <div class=\"footer-border\"></div>
        <div class=\"row\">
            <div class=\"copyright span4\">
                <p>Copyright 2012 Andia - All rights reserved. Template by <a href=\"http://azmind.com\">Azmind</a>.</p>
            </div>
            <div class=\"social span8\">
                <a class=\"facebook\" href=\"\"></a>
                <a class=\"dribbble\" href=\"\"></a>
                <a class=\"twitter\" href=\"\"></a>
                <a class=\"pinterest\" href=\"\"></a>
            </div>
        </div>
    </div>
</footer>

<!-- Javascript -->
<script src=\"{{ asset('front/assets/js/jquery-1.8.2.min.js')}}\"></script>
<script src=\"{{ asset('front/assets/js/jquery.flexslider.js')}}\"></script>
<script src=\"{{ asset('front/assets/js/jquery.tweet.js')}}\"></script>
<script src=\"{{ asset('front/assets/js/jflickrfeed.js')}}\"></script>
<script src=\"{{ asset('front/assets/js/jquery.ui.map.min.js')}}\"></script>
<script src=\"{{ asset('front/assets/js/jquery.quicksand.js')}}\"></script>
<script src=\"{{ asset('front/assets/prettyPhoto/js/jquery.prettyPhoto.js')}}\"></script>

{% block javascript %}
{% endblock %}
</body>

</html>

", "base.html.twig", "C:\\xampp\\htdocs\\Lite\\app\\Resources\\views\\base.html.twig");
    }
}
