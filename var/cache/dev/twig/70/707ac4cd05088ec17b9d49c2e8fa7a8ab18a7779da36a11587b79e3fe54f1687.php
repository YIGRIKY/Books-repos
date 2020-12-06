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
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 68
            echo "                        <a href=\"#\" class=\"list-group-item ml-4 bg-info text-white\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getCategoryName", [], "method", false, false, false, 68), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                </div>

                <div class=\"list-group\">
                    <p class=\"list-group-item bg-secondary text-white\">Автор:</p>
                    <form class=\"form-group\">
                        <div class=\"list-group-item ml-4 bg-white text-white\">
                            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Укажите Автора:\" onkeyup=\"myFilter()\" id=\"MyInput\">
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

                        newDiv.innerHTML =  ` <ul>
                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 103
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
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 114), "html", null, true);
            echo "</a>
                                        </p>
                                        <p class=\"product-desc\" style=\"text-indent: 20px\">
                                            ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 117), "html", null, true);
            echo "</p>
                                        <p class=\"product-title \">";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 118), "getAuthorName", [], "method", false, false, false, 118), "html", null, true);
            echo "</p>
                                        ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryAndBooks"]) || array_key_exists("categoryAndBooks", $context) ? $context["categoryAndBooks"] : (function () { throw new RuntimeError('Variable "categoryAndBooks" does not exist.', 119, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 120
                echo "                                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "bookId", [], "any", false, false, false, 120), "getId", [], "method", false, false, false, 120), twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "method", false, false, false, 120)))) {
                    // line 121
                    echo "                                            <span class=\"product-title \">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 121), "getCategoryName", [], "method", false, false, false, 121), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 123
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                </ul>
                <div class=\"navigation\">
                            ";
        // line 131
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 131, $this->source); })()));
        echo "
                        </div>`;
                        printBlock.appendChild(newDiv);
                    }
                let printButton = document.form.two;
                printButton.addEventListener(\"click\", printForm);

                function printFormFive(e)
                {
                    // получаем элемент printBlock
                    let printBlock = document.getElementById(\"books-menu\");
                    printBlock.innerHTML= '';
                    let newDiv = document.createElement('div');
                    newDiv.innerHTML = ` <ul>
                    ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 145, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 146
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
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 157), "html", null, true);
            echo "</a>
                                        </p>
                                        <p class=\"product-desc\" style=\"text-indent: 20px\">
                                            ";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 160), "html", null, true);
            echo "</p>
                                        <p class=\"product-title \">";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 161), "getAuthorName", [], "method", false, false, false, 161), "html", null, true);
            echo "</p>
                                        ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryAndBooks"]) || array_key_exists("categoryAndBooks", $context) ? $context["categoryAndBooks"] : (function () { throw new RuntimeError('Variable "categoryAndBooks" does not exist.', 162, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 163
                echo "                                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "bookId", [], "any", false, false, false, 163), "getId", [], "method", false, false, false, 163), twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "method", false, false, false, 163)))) {
                    // line 164
                    echo "                                            <span class=\"product-title \">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 164), "getCategoryName", [], "method", false, false, false, 164), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 166
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                </ul>
                <div class=\"navigation\">
                            ";
        // line 174
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 174, $this->source); })()));
        echo "
                        </div>`;
                    // добавляем div в printBlock
                    printBlock.appendChild(newDiv);
                }
                let printButtonFive = document.form.five;
                printButtonFive.addEventListener(\"click\", printFormFive);

                function printFormTwelf(e)
                {
                    // получаем элемент printBlock
                    let printBlock = document.getElementById(\"books-menu\");
                    printBlock.innerHTML= '';
                    let newDiv = document.createElement('div');
                    newDiv.innerHTML = ` <ul>
                    ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 189, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 190
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
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 201), "html", null, true);
            echo "</a>
                                        </p>
                                        <p class=\"product-desc\" style=\"text-indent: 20px\">
                                            ";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 204), "html", null, true);
            echo "</p>
                                        <p class=\"product-title \">";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 205), "getAuthorName", [], "method", false, false, false, 205), "html", null, true);
            echo "</p>
                                        ";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryAndBooks"]) || array_key_exists("categoryAndBooks", $context) ? $context["categoryAndBooks"] : (function () { throw new RuntimeError('Variable "categoryAndBooks" does not exist.', 206, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 207
                echo "                                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "bookId", [], "any", false, false, false, 207), "getId", [], "method", false, false, false, 207), twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "method", false, false, false, 207)))) {
                    // line 208
                    echo "                                            <span class=\"product-title \">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 208), "getCategoryName", [], "method", false, false, false, 208), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 210
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "                </ul>
                <div class=\"navigation\">
                            ";
        // line 218
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 218, $this->source); })()));
        echo "
                        </div>`;
                    // добавляем div в printBlock
                    printBlock.appendChild(newDiv);
                }
                let printButtonTwelf = document.form.twelf;
                printButtonTwelf.addEventListener(\"click\", printFormTwelf);
            </script>
            <div class=\"col-md-8 products\" id=\"books-menu\">
                <ul id=\"MyUl\">
                    ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 228, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 229
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
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 240), "html", null, true);
            echo "</a>
                                        </p>
                                        <p class=\"product-desc\" style=\"text-indent: 20px\">
                                            ";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 243), "html", null, true);
            echo "</p>
                                        <p class=\"product-title \">";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 244), "getAuthorName", [], "method", false, false, false, 244), "html", null, true);
            echo "</p>
                                        ";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryAndBooks"]) || array_key_exists("categoryAndBooks", $context) ? $context["categoryAndBooks"] : (function () { throw new RuntimeError('Variable "categoryAndBooks" does not exist.', 245, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 246
                echo "                                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "bookId", [], "any", false, false, false, 246), "getId", [], "method", false, false, false, 246), twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "method", false, false, false, 246)))) {
                    // line 247
                    echo "                                            <span class=\"product-title \">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "categoryId", [], "any", false, false, false, 247), "getCategoryName", [], "method", false, false, false, 247), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 249
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "                    <div class=\"navigation\">
                        ";
        // line 256
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 256, $this->source); })()));
        echo "
                    </div>
                </ul>

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
        return array (  487 => 256,  484 => 255,  474 => 250,  468 => 249,  462 => 247,  459 => 246,  455 => 245,  451 => 244,  447 => 243,  441 => 240,  428 => 229,  424 => 228,  411 => 218,  407 => 216,  397 => 211,  391 => 210,  385 => 208,  382 => 207,  378 => 206,  374 => 205,  370 => 204,  364 => 201,  351 => 190,  347 => 189,  329 => 174,  325 => 172,  315 => 167,  309 => 166,  303 => 164,  300 => 163,  296 => 162,  292 => 161,  288 => 160,  282 => 157,  269 => 146,  265 => 145,  248 => 131,  244 => 129,  234 => 124,  228 => 123,  222 => 121,  219 => 120,  215 => 119,  211 => 118,  207 => 117,  201 => 114,  188 => 103,  184 => 102,  150 => 70,  141 => 68,  137 => 67,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
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
                    <form class=\"form-group\">
                        <div class=\"list-group-item ml-4 bg-white text-white\">
                            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Укажите Автора:\" onkeyup=\"myFilter()\" id=\"MyInput\">
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

                        newDiv.innerHTML =  ` <ul>
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
                </ul>
                <div class=\"navigation\">
                            {{ knp_pagination_render(appointments) }}
                        </div>`;
                        printBlock.appendChild(newDiv);
                    }
                let printButton = document.form.two;
                printButton.addEventListener(\"click\", printForm);

                function printFormFive(e)
                {
                    // получаем элемент printBlock
                    let printBlock = document.getElementById(\"books-menu\");
                    printBlock.innerHTML= '';
                    let newDiv = document.createElement('div');
                    newDiv.innerHTML = ` <ul>
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
                </ul>
                <div class=\"navigation\">
                            {{ knp_pagination_render(appointments) }}
                        </div>`;
                    // добавляем div в printBlock
                    printBlock.appendChild(newDiv);
                }
                let printButtonFive = document.form.five;
                printButtonFive.addEventListener(\"click\", printFormFive);

                function printFormTwelf(e)
                {
                    // получаем элемент printBlock
                    let printBlock = document.getElementById(\"books-menu\");
                    printBlock.innerHTML= '';
                    let newDiv = document.createElement('div');
                    newDiv.innerHTML = ` <ul>
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
                </ul>
                <div class=\"navigation\">
                            {{ knp_pagination_render(appointments) }}
                        </div>`;
                    // добавляем div в printBlock
                    printBlock.appendChild(newDiv);
                }
                let printButtonTwelf = document.form.twelf;
                printButtonTwelf.addEventListener(\"click\", printFormTwelf);
            </script>
            <div class=\"col-md-8 products\" id=\"books-menu\">
                <ul id=\"MyUl\">
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




{% endblock %}", "main/index.html.twig", "C:\\Users\\egork\\Books-repos\\templates\\main\\index.html.twig");
    }
}