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

/* security/login.html.twig */
class __TwigTemplate_9d9e01389c6b4454498fd7d3fe60964cbae824ab78a7f5b10e271143d7543597 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "main/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("main/base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .width
        {
            max-width: 100%;
            margin-left: 130px;
            margin-bottom: 20px;
        }
        .login-block
        {
            border: 10px solid #313131;
            max-width: 50%;
            margin-left: 250px;
            margin-top: 300px;
            border-radius: 10px;

        }
        tenor-gif-embed
        {
            position: relative;
        }
        html
        {

        }

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





<form method=\"post\" class=\"container content \">

    <div class=\"login-block\">

        <div class=\"col-md-6 col-md-offset-3 text-center\">
    ";
        // line 72
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 72, $this->source); })())) {
            // line 73
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 73, $this->source); })()), "messageKey", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 73, $this->source); })()), "messageData", [], "any", false, false, false, 73), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 75
        echo "
    ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76)) {
            // line 77
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "username", [], "any", false, false, false, 78), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 81
        echo "
    <h1 class=\"h3 mb-3 font-weight-normal\" style=\"margin-left: 206px;\" >Вход</h1>

            <label for=\"inputEmail\" style=\"margin-left: 205px; font-size: 20px\" class=\"badge badge-radius badge-success\">Email</label>
            <input type=\"email\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control width\" required autofocus>



            <label for=\"inputPassword\" style=\"margin-left: 186px; font-size: 20px\" class=\"badge badge-radius badge-warning\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control width\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >







    <button class=\"btn btn-block btn-primary mt-5 width\" type=\"submit\">
        Sign in
    </button>
    </div>
    </div>

</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 93,  186 => 85,  180 => 81,  172 => 78,  169 => 77,  167 => 76,  164 => 75,  158 => 73,  156 => 72,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'main/base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
    <style>
        .width
        {
            max-width: 100%;
            margin-left: 130px;
            margin-bottom: 20px;
        }
        .login-block
        {
            border: 10px solid #313131;
            max-width: 50%;
            margin-left: 250px;
            margin-top: 300px;
            border-radius: 10px;

        }
        tenor-gif-embed
        {
            position: relative;
        }
        html
        {

        }

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





<form method=\"post\" class=\"container content \">

    <div class=\"login-block\">

        <div class=\"col-md-6 col-md-offset-3 text-center\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    <h1 class=\"h3 mb-3 font-weight-normal\" style=\"margin-left: 206px;\" >Вход</h1>

            <label for=\"inputEmail\" style=\"margin-left: 205px; font-size: 20px\" class=\"badge badge-radius badge-success\">Email</label>
            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control width\" required autofocus>



            <label for=\"inputPassword\" style=\"margin-left: 186px; font-size: 20px\" class=\"badge badge-radius badge-warning\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control width\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >







    <button class=\"btn btn-block btn-primary mt-5 width\" type=\"submit\">
        Sign in
    </button>
    </div>
    </div>

</form>
{% endblock %}
", "security/login.html.twig", "C:\\working\\Books-repos\\templates\\security\\login.html.twig");
    }
}
