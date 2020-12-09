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
class __TwigTemplate_0014ef631384f578e55d69fd971b16f0abadb0658bff9638d594a2b34bdfeb3a extends Template
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
        height: 200px;
        max-width: 150px;
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

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <form class=\"form-group\" method=\"post\" name=\"form\">
                    <div class=\"list-group\">
                        <p class=\"list-group-item\">Жанры:</p>
                        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 74
            echo "                            <span >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getCategoryName", [], "method", false, false, false, 74), "html", null, true);
            echo "</span>
                            <input type=\"checkbox\" class=\"btn btn-outline-success my-2 my-sm-0\" name=\"categoryName\" value=";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getCategoryName", [], "method", false, false, false, 75), "html", null, true);
            echo ">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        <input type=\"submit\"  class=\"btn btn-outline-success my-2 my-sm-0\" name=\"set\" value=\"Найти\">
                    </div>
                </form>
                <div class=\"list-group\">
                    <p class=\"list-group-item bg-secondary text-white\">Автор:</p>
                    <form class=\"form-group\" action=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" method=\"post\" name=\"src\">
                        <div class=\"list-group-item ml-4 bg-white text-white\">
                            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Укажите Автора:\"  name=\"find\">
                            <input type=\"submit\"  class=\"btn btn-outline-success my-2 my-sm-0\" name=\"set\" value=\"Найти\">
                        </div>

                    </form>
                </div>

                <div class=\"list-group\">
                    <p class=\"list-group-item bg-warning\">Кол-во отображенных книг:</p>
                        <h1></h1>
                    <form class=\"form-group\" method=\"post\" name=\"form\">
                        <div class=\"list-group-item ml-4 bg-white text-white\">
                            <span style=\"background: black\">2</span><input type=\"radio\"  class=\"btn btn-outline-success my-2 my-sm-0\" name=\"num\" value=2>
                            <span style=\"background: black\">5</span><input type=\"radio\"   class=\"btn btn-outline-success my-2 my-sm-0\" name=\"num\" value=5>
                            <span style=\"background: black\">12</span><input type=\"radio\"  class=\"btn btn-outline-success my-2 my-sm-0\" name=\"num\" value=\"12\">
                            <input type=\"submit\" class=\"btn btn-outline-danger my-2 my-sm-0\" name=\"submit\" value=\"Подтвердить\">
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"col-md-8 products\" id=\"books-menu\">
                <ul >
                    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 107
            echo "                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"product\">
                                    <div class=\"col \">
                                        <div class=\"product-img\">
                                            <a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, false, 112), "html", null, true);
            echo "\" alt=\"\" class=\"float-left\"></a>
                                        </div>
                                    </div>
                                    <div class=\"col pl-2\">

                                        <p class=\"product-title\">
                                            <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 118), "html", null, true);
            echo "</a>
                                        </p>
                                        <p class=\"product-desc\" style=\"text-indent: 20px\">
                                            ";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 121), "html", null, true);
            echo "</p>
                                        <p class=\"product-title \">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 122), "getAuthorName", [], "method", false, false, false, 122), "html", null, true);
            echo "</p>
                                        ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 123, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 124
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "getBooks", [], "method", false, false, false, 124));
                foreach ($context['_seq'] as $context["_key"] => $context["books"]) {
                    // line 125
                    echo "                                                ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["books"], "id", [], "any", false, false, false, 125), twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 125)))) {
                        // line 126
                        echo "                                                    <span class=\"product-title \">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getCategoryName", [], "method", false, false, false, 126), "html", null, true);
                        echo "</span>
                                                ";
                    }
                    // line 128
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['books'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                    <div class=\"navigation\">
                        ";
        // line 136
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 136, $this->source); })()));
        echo "
                    </div>
                </ul>
            </div>
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
        return array (  275 => 136,  272 => 135,  262 => 130,  256 => 129,  250 => 128,  244 => 126,  241 => 125,  236 => 124,  232 => 123,  228 => 122,  224 => 121,  216 => 118,  205 => 112,  198 => 107,  194 => 106,  167 => 82,  160 => 77,  152 => 75,  147 => 74,  143 => 73,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
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
        height: 200px;
        max-width: 150px;
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

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <form class=\"form-group\" method=\"post\" name=\"form\">
                    <div class=\"list-group\">
                        <p class=\"list-group-item\">Жанры:</p>
                        {% for category in categories %}
                            <span >{{ category.getCategoryName() }}</span>
                            <input type=\"checkbox\" class=\"btn btn-outline-success my-2 my-sm-0\" name=\"categoryName\" value={{ category.getCategoryName() }}>
                        {% endfor %}
                        <input type=\"submit\"  class=\"btn btn-outline-success my-2 my-sm-0\" name=\"set\" value=\"Найти\">
                    </div>
                </form>
                <div class=\"list-group\">
                    <p class=\"list-group-item bg-secondary text-white\">Автор:</p>
                    <form class=\"form-group\" action=\"{{ path('home') }}\" method=\"post\" name=\"src\">
                        <div class=\"list-group-item ml-4 bg-white text-white\">
                            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Укажите Автора:\"  name=\"find\">
                            <input type=\"submit\"  class=\"btn btn-outline-success my-2 my-sm-0\" name=\"set\" value=\"Найти\">
                        </div>

                    </form>
                </div>

                <div class=\"list-group\">
                    <p class=\"list-group-item bg-warning\">Кол-во отображенных книг:</p>
                        <h1></h1>
                    <form class=\"form-group\" method=\"post\" name=\"form\">
                        <div class=\"list-group-item ml-4 bg-white text-white\">
                            <span style=\"background: black\">2</span><input type=\"radio\"  class=\"btn btn-outline-success my-2 my-sm-0\" name=\"num\" value=2>
                            <span style=\"background: black\">5</span><input type=\"radio\"   class=\"btn btn-outline-success my-2 my-sm-0\" name=\"num\" value=5>
                            <span style=\"background: black\">12</span><input type=\"radio\"  class=\"btn btn-outline-success my-2 my-sm-0\" name=\"num\" value=\"12\">
                            <input type=\"submit\" class=\"btn btn-outline-danger my-2 my-sm-0\" name=\"submit\" value=\"Подтвердить\">
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"col-md-8 products\" id=\"books-menu\">
                <ul >
                    {%  for book in  appointments %}
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"product\">
                                    <div class=\"col \">
                                        <div class=\"product-img\">
                                            <a href=\"{{ path('book_detail', {'id': book.id }) }}\"><img src=\"{{ book.image }}\" alt=\"\" class=\"float-left\"></a>
                                        </div>
                                    </div>
                                    <div class=\"col pl-2\">

                                        <p class=\"product-title\">
                                            <a href=\"{{ path('book_detail', {'id': book.id}) }}\">{{ book.title }}</a>
                                        </p>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                    <div class=\"navigation\">
                        {{ knp_pagination_render(appointments) }}
                    </div>
                </ul>
            </div>
        </div>

    </div>




{% endblock %}", "main/index.html.twig", "C:\\Users\\egork\\Books-repos\\templates\\main\\index.html.twig");
    }
}
