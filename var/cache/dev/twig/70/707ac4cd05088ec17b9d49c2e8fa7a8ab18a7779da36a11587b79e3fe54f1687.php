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
                <div class=\"list-group\">
                    <p class=\"list-group-item\">Жанры:</p>
                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 73
            echo "                        <a href=\"#\" class=\"list-group-item ml-4 bg-info text-white\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getCategoryName", [], "method", false, false, false, 73), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </div>

                <div class=\"list-group\">
                    <p class=\"list-group-item bg-secondary text-white\">Автор:</p>
                    <form class=\"form-group\" action=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" method=\"post\" name=\"src\">
                        <div class=\"list-group-item ml-4 bg-white text-white\">
                            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Укажите Автора:\"  name=\"find\" >
                            <input type=\"button\"  class=\"btn btn-outline-success my-2 my-sm-0\" name=\"set\" value=\"set\">
                        </div>

                    </form>
                </div>

                <div class=\"list-group\">
                    <p class=\"list-group-item bg-warning\">Кол-во отображенных книг:</p>
                    <form class=\"form-group\" name=\"form\">
                        <div class=\"list-group-item ml-4 bg-white text-white\">

                            <input type=\"button\" class=\"btn btn-outline-success my-2 my-sm-0\" name=\"two\" value=\"2\">
                            <input type=\"button\"  class=\"btn btn-outline-success my-2 my-sm-0\" name=\"five\" value=\"5\">
                            <input class=\"btn btn-outline-danger my-2 my-sm-0\" type=\"button\" name=\"twelf\" value=\"10\">
                        </div>
                    </form>
                </div>
            </div>


            <script>
                function printForm(e) {
                    let printBlock = document.getElementById(\"books-menu\");
                    printBlock.innerHTML = '';
                    let newDiv = document.createElement('div');
                    newDiv.innerHTML =  `<ul>
                    ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 108, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 109
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

                                        </p>
                                        <p class=\"product-desc\" style=\"text-indent: 20px\">
                                            ";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 123), "html", null, true);
            echo "</p>
                                        <p class=\"product-title \">";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 124), "getAuthorName", [], "method", false, false, false, 124), "html", null, true);
            echo "</p>
                                        ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryAndBooks"]) || array_key_exists("categoryAndBooks", $context) ? $context["categoryAndBooks"] : (function () { throw new RuntimeError('Variable "categoryAndBooks" does not exist.', 125, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 126
                echo "                                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "bookId", [], "any", false, false, false, 126), "getId", [], "method", false, false, false, 126), twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "method", false, false, false, 126)))) {
                    // line 127
                    echo "                                            <span class=\"product-title \">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 127), "getCategoryName", [], "method", false, false, false, 127), "html", null, true);
                    echo "</span>
                                            ";
                }
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
        // line 136
        echo "                </ul>
                <div class=\"navigation\">
                            ";
        // line 138
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 138, $this->source); })()));
        echo "
                        </div>`;
                    printBlock.appendChild(newDiv);
                }
                let printButton = document.form.two;
                printButton.addEventListener(\"click\", printForm());
            </script>

            <div class=\"col-md-8 products\" id=\"books-menu\">
                <ul >
                    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appointments2"]) || array_key_exists("appointments2", $context) ? $context["appointments2"] : (function () { throw new RuntimeError('Variable "appointments2" does not exist.', 148, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 149
            echo "
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"product\">
                                    <div class=\"col \">
                                        <div class=\"product-img\">
                                            <a href=\"#\"><img src=\"";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, false, 155), "html", null, true);
            echo "\" alt=\"\" class=\"float-left\"></a>
                                        </div>
                                    </div>
                                    <div class=\"col pl-2\">

                                        <p class=\"product-title\">
                                            <a href=\"#\">";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 161), "html", null, true);
            echo "</a>
                                        </p>
                                        <p class=\"product-desc\" style=\"text-indent: 20px\">
                                            ";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 164), "html", null, true);
            echo "</p>
                                        <p class=\"product-title \">";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 165), "getAuthorName", [], "method", false, false, false, 165), "html", null, true);
            echo "</p>
                                        ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryAndBooks"]) || array_key_exists("categoryAndBooks", $context) ? $context["categoryAndBooks"] : (function () { throw new RuntimeError('Variable "categoryAndBooks" does not exist.', 166, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 167
                echo "                                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "bookId", [], "any", false, false, false, 167), "getId", [], "method", false, false, false, 167), twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "method", false, false, false, 167)))) {
                    // line 168
                    echo "                                            <span class=\"product-title \">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 168), "getCategoryName", [], "method", false, false, false, 168), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 170
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "                                    </div>
                                </div>
                            </div>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                    <div class=\"navigation\">
                        ";
        // line 178
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 178, $this->source); })()));
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
        return array (  336 => 178,  333 => 177,  322 => 171,  316 => 170,  310 => 168,  307 => 167,  303 => 166,  299 => 165,  295 => 164,  289 => 161,  280 => 155,  272 => 149,  268 => 148,  255 => 138,  251 => 136,  240 => 130,  234 => 129,  228 => 127,  225 => 126,  221 => 125,  217 => 124,  213 => 123,  197 => 109,  193 => 108,  161 => 79,  155 => 75,  146 => 73,  142 => 72,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
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
                    <form class=\"form-group\" action=\"{{ path('home') }}\" method=\"post\" name=\"src\">
                        <div class=\"list-group-item ml-4 bg-white text-white\">
                            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Укажите Автора:\"  name=\"find\" >
                            <input type=\"button\"  class=\"btn btn-outline-success my-2 my-sm-0\" name=\"set\" value=\"set\">
                        </div>

                    </form>
                </div>

                <div class=\"list-group\">
                    <p class=\"list-group-item bg-warning\">Кол-во отображенных книг:</p>
                    <form class=\"form-group\" name=\"form\">
                        <div class=\"list-group-item ml-4 bg-white text-white\">

                            <input type=\"button\" class=\"btn btn-outline-success my-2 my-sm-0\" name=\"two\" value=\"2\">
                            <input type=\"button\"  class=\"btn btn-outline-success my-2 my-sm-0\" name=\"five\" value=\"5\">
                            <input class=\"btn btn-outline-danger my-2 my-sm-0\" type=\"button\" name=\"twelf\" value=\"10\">
                        </div>
                    </form>
                </div>
            </div>


            <script>
                function printForm(e) {
                    let printBlock = document.getElementById(\"books-menu\");
                    printBlock.innerHTML = '';
                    let newDiv = document.createElement('div');
                    newDiv.innerHTML =  `<ul>
                    {%  for book in  appointments %}
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
                </ul>
                <div class=\"navigation\">
                            {{ knp_pagination_render(appointments) }}
                        </div>`;
                    printBlock.appendChild(newDiv);
                }
                let printButton = document.form.two;
                printButton.addEventListener(\"click\", printForm());
            </script>

            <div class=\"col-md-8 products\" id=\"books-menu\">
                <ul >
                    {%  for book in  appointments2 %}

                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"product\">
                                    <div class=\"col \">
                                        <div class=\"product-img\">
                                            <a href=\"#\"><img src=\"{{ book.image }}\" alt=\"\" class=\"float-left\"></a>
                                        </div>
                                    </div>
                                    <div class=\"col pl-2\">

                                        <p class=\"product-title\">
                                            <a href=\"#\">{{ book.title }}</a>
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
        </div>

    </div>




{% endblock %}", "main/index.html.twig", "C:\\Books-repos\\templates\\main\\index.html.twig");
    }
}
