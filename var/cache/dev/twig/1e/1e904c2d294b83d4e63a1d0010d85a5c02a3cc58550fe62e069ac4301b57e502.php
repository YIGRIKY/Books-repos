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

/* main/book.html.twig */
class __TwigTemplate_07b4ecd349da0fba1f126940c328beef3e0807fb669bf8c7b06a931cc04b0b96 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/book.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/book.html.twig"));

        $this->parent = $this->loadTemplate("main/base.html.twig", "main/book.html.twig", 1);
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
        body{
            background: #ececec;
        }
        img {
            height: 600px;
            max-width: 4000px;
            margin-right: 20px;
            padding: 10px;
            background-color: #aacd4e;
            border: 1px solid#222222;
            border-radius: 20px;
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
        .product-title  {
            color: #000;
            font-weight: 1500;
            text-transform: uppercase;
            text-align: center;
            font-weight: bold;
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

<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"product\">
            <div class=\"col \">
                <div class=\"product-img\">
                    <a href=\"#\"><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 67, $this->source); })()), "image", [], "any", false, false, false, 67), "html", null, true);
        echo "\" alt=\"\" class=\"float-left\"></a>
                </div>
            </div>
            <div class=\"col pl-2\">

                <p class=\"product-title\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 72, $this->source); })()), "title", [], "any", false, false, false, 72), "html", null, true);
        echo "</p>
                <p class=\"product-desc\" style=\"text-indent: 20px\">
                    ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 74, $this->source); })()), "description", [], "any", false, false, false, 74), "html", null, true);
        echo "</p>
                <p class=\"product-title \">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 75, $this->source); })()), "author", [], "any", false, false, false, 75), "getAuthorName", [], "method", false, false, false, 75), "html", null, true);
        echo "</p>
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 77
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "getBooks", [], "method", false, false, false, 77));
            foreach ($context['_seq'] as $context["_key"] => $context["books"]) {
                // line 78
                echo "                        ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["books"], "id", [], "any", false, false, false, 78), twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)))) {
                    // line 79
                    echo "                            <span class=\"product-title \">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getCategoryName", [], "method", false, false, false, 79), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 81
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['books'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 84
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\" class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Редактировать</a>
                ";
        }
        // line 86
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 86,  188 => 84,  185 => 83,  179 => 82,  173 => 81,  167 => 79,  164 => 78,  159 => 77,  155 => 76,  151 => 75,  147 => 74,  142 => 72,  134 => 67,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'main/base.html.twig' %}
{% block body %}
    <style>
        body{
            background: #ececec;
        }
        img {
            height: 600px;
            max-width: 4000px;
            margin-right: 20px;
            padding: 10px;
            background-color: #aacd4e;
            border: 1px solid#222222;
            border-radius: 20px;
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
        .product-title  {
            color: #000;
            font-weight: 1500;
            text-transform: uppercase;
            text-align: center;
            font-weight: bold;
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

<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"product\">
            <div class=\"col \">
                <div class=\"product-img\">
                    <a href=\"#\"><img src=\"{{book.image}}\" alt=\"\" class=\"float-left\"></a>
                </div>
            </div>
            <div class=\"col pl-2\">

                <p class=\"product-title\">{{ book.title }}</p>
                <p class=\"product-desc\" style=\"text-indent: 20px\">
                    {{ book.description }}</p>
                <p class=\"product-title \">{{ book.author.getAuthorName() }}</p>
                {% for category in categories %}
                    {% for books in category.getBooks() %}
                        {% if books.id == book.id %}
                            <span class=\"product-title \">{{ category.getCategoryName() }}</span>
                        {% endif %}
                    {% endfor %}
                {% endfor %}
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <a href=\"{{ path('admin_user_update', {'id': book.id }) }}\" class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Редактировать</a>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}", "main/book.html.twig", "C:\\Users\\egork\\Books-repos\\templates\\main\\book.html.twig");
    }
}
