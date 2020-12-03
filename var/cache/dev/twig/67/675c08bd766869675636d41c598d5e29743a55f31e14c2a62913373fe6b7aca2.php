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

/* main/index.html.twig */
class __TwigTemplate_5189e745d2b0da4f03c850e9b121376b6e434c1df16eea35ba9dd41e8a4f2128 extends Template
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
        return "main/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("main/base.html.twig", "main/index.html.twig", 1);
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
        echo "
    <h1>
        ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "
    </h1>

<style>
    body{
        background: #ececec;
    }
    img {
        height: 175px;
        max-width: 160px;
    }
    .content{
        margin-top: 50px;
    }
    .product {
        background: #fff none repeat scroll 0 0;
        border: 1px solid #c0c0c0;
        height: 230px;
        overflow: visible;
        padding: 5px 5px;
        position: relative;
        text-align: left;
        transition: all 0.5s ease 0s;
        margin-bottom: 20px;
    }
    .product:hover {
        box-shadow: 0 0 16px rgba(0, 0, 0, 5.5);
    }
    .product-img {
        height: 20px;
        position: relative;
        margin-right: 10px;
    }
    .product-title a {
        color: #000;
        font-weight: 1500;
        text-transform: uppercase;
        text-align: center;
    }


    .product-desc {
        max-height: 120px;
        overflow: hidden;
    }
    .product-price {

        left: 0;
        position: relative;
        width: 100%;
        color: #d51e08;
        font-size: 18px;
        font-weight: 500;
    }
</style>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"list-group\">
                    <p class=\"list-group-item\">Жанры:</p>
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 66
            echo "                    <a href=\"#\" class=\"list-group-item ml-4 bg-info text-white\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getCategoryName", [], "method", false, false, false, 66), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </div>

                <div class=\"list-group\">
                    <p class=\"list-group-item\">Автор:</p>
                    <form class=\"form-inline\">
                        <div class=\"list-group-item ml-6 bg-white text-white\">
                            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Укажите Автора:\">
                            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Выбрать</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class=\"col-md-8 products\">
                <ul>
                    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 84
            echo "                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"product\">
                                    <div class=\"col \">
                                        <div class=\"product-img\">
                                            <a href=\"#\"><img src=\"https://cdn1.ozone.ru/s3/multimedia-y/6010159846.jpg\" alt=\"\" class=\"float-left\"></a>
                                        </div>
                                    </div>
                                    <div class=\"col pl-2\">

                                        <p class=\"product-title\">
                                            <a href=\"#\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 95), "html", null, true);
            echo "</a>
                                        </p>
                                        <p class=\"product-desc\" style=\"text-indent: 20px\">
                                            ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 98), "html", null, true);
            echo "
                                        <p class=\"product-title\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 99), "getAuthorName", [], "method", false, false, false, 99), "html", null, true);
            echo "</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                </ul>


        </div>
    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 106,  192 => 99,  188 => 98,  182 => 95,  169 => 84,  165 => 83,  148 => 68,  139 => 66,  135 => 65,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'main/base.html.twig' %}
{% block body %}

    <h1>
        {{ title }}
    </h1>

<style>
    body{
        background: #ececec;
    }
    img {
        height: 175px;
        max-width: 160px;
    }
    .content{
        margin-top: 50px;
    }
    .product {
        background: #fff none repeat scroll 0 0;
        border: 1px solid #c0c0c0;
        height: 230px;
        overflow: visible;
        padding: 5px 5px;
        position: relative;
        text-align: left;
        transition: all 0.5s ease 0s;
        margin-bottom: 20px;
    }
    .product:hover {
        box-shadow: 0 0 16px rgba(0, 0, 0, 5.5);
    }
    .product-img {
        height: 20px;
        position: relative;
        margin-right: 10px;
    }
    .product-title a {
        color: #000;
        font-weight: 1500;
        text-transform: uppercase;
        text-align: center;
    }


    .product-desc {
        max-height: 120px;
        overflow: hidden;
    }
    .product-price {

        left: 0;
        position: relative;
        width: 100%;
        color: #d51e08;
        font-size: 18px;
        font-weight: 500;
    }
</style>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"list-group\">
                    <p class=\"list-group-item\">Жанры:</p>
                    {% for category in categories %}
                    <a href=\"#\" class=\"list-group-item ml-4 bg-info text-white\">{{ category.getCategoryName() }}</a>
                    {% endfor %}
                </div>

                <div class=\"list-group\">
                    <p class=\"list-group-item\">Автор:</p>
                    <form class=\"form-inline\">
                        <div class=\"list-group-item ml-6 bg-white text-white\">
                            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Укажите Автора:\">
                            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Выбрать</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class=\"col-md-8 products\">
                <ul>
                    {%  for book in books %}
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"product\">
                                    <div class=\"col \">
                                        <div class=\"product-img\">
                                            <a href=\"#\"><img src=\"https://cdn1.ozone.ru/s3/multimedia-y/6010159846.jpg\" alt=\"\" class=\"float-left\"></a>
                                        </div>
                                    </div>
                                    <div class=\"col pl-2\">

                                        <p class=\"product-title\">
                                            <a href=\"#\">{{ book.title }}</a>
                                        </p>
                                        <p class=\"product-desc\" style=\"text-indent: 20px\">
                                            {{ book.description }}
                                        <p class=\"product-title\">{{ book.author.getAuthorName() }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </ul>


        </div>
    </div>




{% endblock %}", "main/index.html.twig", "C:\\Users\\egork\\Books-repos\\templates\\main\\index.html.twig");
    }
}
