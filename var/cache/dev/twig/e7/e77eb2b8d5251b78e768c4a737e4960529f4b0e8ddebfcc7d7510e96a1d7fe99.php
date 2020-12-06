<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/index.html.twig */
class __TwigTemplate_f58b924d0c67dc57f671dbedbb31df2c8b20e568dd180ac1ccdacd80aa5b0ca3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/adminbase.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>
        ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "
    </h1>
    <style>
        body {
            background: linear-gradient(18deg, #dce5dc, #28e6d6, #28c3e6, #2880e6);
            background-size: 800% 800%;

            -webkit-animation: AnimationName 21s ease infinite;
            -moz-animation: AnimationName 21s ease infinite;
            -o-animation: AnimationName 21s ease infinite;
            animation: AnimationName 21s ease infinite;
        }

        @-webkit-keyframes AnimationName {
            0%{background-position:55% 0%}
            50%{background-position:46% 100%}
            100%{background-position:55% 0%}
        }
        @-moz-keyframes AnimationName {
            0%{background-position:55% 0%}
            50%{background-position:46% 100%}
            100%{background-position:55% 0%}
        }
        @-o-keyframes AnimationName {
            0%{background-position:55% 0%}
            50%{background-position:46% 100%}
            100%{background-position:55% 0%}
        }
        @keyframes AnimationName {
            0%{background-position:55% 0%}
            50%{background-position:46% 100%}
            100%{background-position:55% 0%}
        }

    </style>





        <div class=\"row mt-4\" style=\"padding-left: 778px;\">
            <div class=\"col-md-4\">
                <div class=\"list-group\">
                    <p class=\"list-group-item\">Function:</p>
                    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_create");
        echo "\" class=\"btn btn-primary stretched-link\">User</a>
                    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_books");
        echo "\" class=\"btn btn-primary stretched-link\">Add Books</a>
                    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user");
        echo "\" class=\"btn btn-primary stretched-link\">Create Manager</a>
                    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_category");
        echo "\" class=\"btn btn-primary stretched-link\">Category</a>
                </div>
            </div>
        </div>


        ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "
    </h1>
    <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Log out</a>
    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user");
        echo "\">User</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 60,  144 => 59,  139 => 57,  130 => 51,  126 => 50,  122 => 49,  118 => 48,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/adminbase.html.twig' %}
{% block body %}
    <h1>
        {{ title }}
    </h1>
    <style>
        body {
            background: linear-gradient(18deg, #dce5dc, #28e6d6, #28c3e6, #2880e6);
            background-size: 800% 800%;

            -webkit-animation: AnimationName 21s ease infinite;
            -moz-animation: AnimationName 21s ease infinite;
            -o-animation: AnimationName 21s ease infinite;
            animation: AnimationName 21s ease infinite;
        }

        @-webkit-keyframes AnimationName {
            0%{background-position:55% 0%}
            50%{background-position:46% 100%}
            100%{background-position:55% 0%}
        }
        @-moz-keyframes AnimationName {
            0%{background-position:55% 0%}
            50%{background-position:46% 100%}
            100%{background-position:55% 0%}
        }
        @-o-keyframes AnimationName {
            0%{background-position:55% 0%}
            50%{background-position:46% 100%}
            100%{background-position:55% 0%}
        }
        @keyframes AnimationName {
            0%{background-position:55% 0%}
            50%{background-position:46% 100%}
            100%{background-position:55% 0%}
        }

    </style>





        <div class=\"row mt-4\" style=\"padding-left: 778px;\">
            <div class=\"col-md-4\">
                <div class=\"list-group\">
                    <p class=\"list-group-item\">Function:</p>
                    <a href=\"{{ path('admin_user_create') }}\" class=\"btn btn-primary stretched-link\">User</a>
                    <a href=\"{{ path('admin_user_books') }}\" class=\"btn btn-primary stretched-link\">Add Books</a>
                    <a href=\"{{ path('admin_user') }}\" class=\"btn btn-primary stretched-link\">Create Manager</a>
                    <a href=\"{{ path('admin_user_category') }}\" class=\"btn btn-primary stretched-link\">Category</a>
                </div>
            </div>
        </div>


        {{ title }}
    </h1>
    <a href=\"{{ path('app_logout') }}\">Log out</a>
    <a href=\"{{ path('admin_user') }}\">User</a>

{% endblock %}", "admin/index.html.twig", "C:\\working\\Books-repos\\templates\\admin\\index.html.twig");
    }
}
