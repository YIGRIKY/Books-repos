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

/* main/indexPaging.html.twig */
class __TwigTemplate_b750b61acfc07f1136a1c004208f69278d205d73b7340bceb273458136b79847 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/indexPaging.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/indexPaging.html.twig"));

        $this->parent = $this->loadTemplate("main/base.html.twig", "main/indexPaging.html.twig", 1);
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
        <div class=\"list-group\">
            <p class=\"list-group-item\">Жанры:</p>
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 73
            echo "                <a href=\"#\" class=\"list-group-item ml-4 bg-info text-white\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getCategoryName", [], "method", false, false, false, 73), "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </div>

        <div class=\"list-group\">
            <p class=\"list-group-item bg-secondary text-white\">Автор:</p>
            <form class=\"form-group\" action=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["page" => (isset($context["paging"]) || array_key_exists("paging", $context) ? $context["paging"] : (function () { throw new RuntimeError('Variable "paging" does not exist.', 79, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\" name=\"src\">
                <div class=\"list-group-item ml-4 bg-white text-white\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Укажите Автора:\"  name=\"find\" >
                    <input type=\"button\"  class=\"btn btn-outline-success my-2 my-sm-0\" name=\"set\" value=\"set\">
                </div>

            </form>
        </div>

        <div class=\"list-group\">
            <p class=\"list-group-item bg-warning\">Кол-во отображенных книг:</p>
            <h1></h1>
            <div class=\"list-group-item ml-4 bg-white text-white\">
                <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_paging", ["page" => 2]);
        echo "\" class=\"btn btn-outline-success my-2 my-sm-0\" id=\"two\" >2</a>
                <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_paging", ["page" => 5]);
        echo "\" class=\"btn btn-outline-success my-2 my-sm-0\" id=\"five\" >5</a>
                <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_paging", ["page" => 12]);
        echo "\" class=\"btn btn-outline-danger my-2 my-sm-0\" id=\"twelve\" >12</a>
            </div>

        </div>
    </div>
    <div class=\"col-md-8 products\" id=\"books-menu\">
        <ul >
            ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 102
            echo "                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"product\">
                            <div class=\"col \">
                                <div class=\"product-img\">
                                    <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 107)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, false, 107), "html", null, true);
            echo "\" alt=\"\" class=\"float-left\"></a>
                                </div>
                            </div>
                            <div class=\"col pl-2\">
                                <p class=\"product-title\">
                                    <a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 112), "html", null, true);
            echo "</a>
                                </p>
                                <p class=\"product-desc\" style=\"text-indent: 20px\">
                                    ";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 115), "html", null, true);
            echo "</p>
                                <p class=\"product-title \">";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 116), "getAuthorName", [], "method", false, false, false, 116), "html", null, true);
            echo "</p>
                                ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryAndBooks"]) || array_key_exists("categoryAndBooks", $context) ? $context["categoryAndBooks"] : (function () { throw new RuntimeError('Variable "categoryAndBooks" does not exist.', 117, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 118
                echo "                                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "bookId", [], "any", false, false, false, 118), "getId", [], "method", false, false, false, 118), twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "method", false, false, false, 118)))) {
                    // line 119
                    echo "                                        <span class=\"product-title \">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 119), "getCategoryName", [], "method", false, false, false, 119), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 121
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "            <div class=\"navigation\">
                ";
        // line 128
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 128, $this->source); })()));
        echo "
            </div>
        </ul>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/indexPaging.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 128,  261 => 127,  251 => 122,  245 => 121,  239 => 119,  236 => 118,  232 => 117,  228 => 116,  224 => 115,  216 => 112,  206 => 107,  199 => 102,  195 => 101,  185 => 94,  181 => 93,  177 => 92,  161 => 79,  155 => 75,  146 => 73,  142 => 72,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
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
        <div class=\"list-group\">
            <p class=\"list-group-item\">Жанры:</p>
            {% for category in categories %}
                <a href=\"#\" class=\"list-group-item ml-4 bg-info text-white\">{{ category.getCategoryName() }}</a>
            {% endfor %}
        </div>

        <div class=\"list-group\">
            <p class=\"list-group-item bg-secondary text-white\">Автор:</p>
            <form class=\"form-group\" action=\"{{ path('home', {'page': paging}) }}\" method=\"post\" name=\"src\">
                <div class=\"list-group-item ml-4 bg-white text-white\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Укажите Автора:\"  name=\"find\" >
                    <input type=\"button\"  class=\"btn btn-outline-success my-2 my-sm-0\" name=\"set\" value=\"set\">
                </div>

            </form>
        </div>

        <div class=\"list-group\">
            <p class=\"list-group-item bg-warning\">Кол-во отображенных книг:</p>
            <h1></h1>
            <div class=\"list-group-item ml-4 bg-white text-white\">
                <a href=\"{{ path('home_paging', {'page': 2}) }}\" class=\"btn btn-outline-success my-2 my-sm-0\" id=\"two\" >2</a>
                <a href=\"{{ path('home_paging', {'page': 5}) }}\" class=\"btn btn-outline-success my-2 my-sm-0\" id=\"five\" >5</a>
                <a href=\"{{ path('home_paging', {'page': 12}) }}\" class=\"btn btn-outline-danger my-2 my-sm-0\" id=\"twelve\" >12</a>
            </div>

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
                                    <a href=\"{{ path('book_detail', {'id': book.id}) }}\"><img src=\"{{ book.image }}\" alt=\"\" class=\"float-left\"></a>
                                </div>
                            </div>
                            <div class=\"col pl-2\">
                                <p class=\"product-title\">
                                    <a href=\"{{ path('book_detail', {'id': book.id}) }}\">{{ book.title }}</a>
                                </p>
                                <p class=\"product-desc\" style=\"text-indent: 20px\">
                                    {{ book.description }}</p>
                                <p class=\"product-title \">{{ book.author.getAuthorName() }}</p>
                                {% for category in categoryAndBooks %}
                                    {% if category.bookId.getId() == book.getId() %}
                                        <span class=\"product-title \">{{ category.categoryId.getCategoryName() }}</span>
                                    {% endif %}
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

{% endblock %}", "main/indexPaging.html.twig", "C:\\Users\\egork\\Books-repos\\templates\\main\\indexPaging.html.twig");
    }
}
