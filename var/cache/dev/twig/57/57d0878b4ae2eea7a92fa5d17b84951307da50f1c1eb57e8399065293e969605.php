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

/* manager/index.html.twig */
class __TwigTemplate_e87d97fdef38419de81c4d2f6d846b371a867f45954a6bef26343f1d7c90bc32 extends Template
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
        return "manager/managerbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manager/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manager/index.html.twig"));

        $this->parent = $this->loadTemplate("manager/managerbase.html.twig", "manager/index.html.twig", 1);
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
        echo "    <style>
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
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manager_books");
        echo "\" class=\"btn btn-primary stretched-link\">Add Books</a>
                    <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manager_category");
        echo "\" class=\"btn btn-primary stretched-link\">Category</a>
                </div>
            </div>
        </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "manager/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 46,  112 => 45,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'manager/managerbase.html.twig' %}
{% block body %}
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
                    <a href=\"{{ path('manager_books') }}\" class=\"btn btn-primary stretched-link\">Add Books</a>
                    <a href=\"{{ path('manager_category') }}\" class=\"btn btn-primary stretched-link\">Category</a>
                </div>
            </div>
        </div>


{% endblock %}", "manager/index.html.twig", "C:\\Users\\egork\\Books-repos\\templates\\manager\\index.html.twig");
    }
}
