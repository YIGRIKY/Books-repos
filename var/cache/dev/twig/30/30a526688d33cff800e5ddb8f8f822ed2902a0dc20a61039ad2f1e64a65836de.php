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

/* main/js/create2.js */
class __TwigTemplate_44af13ad8f0befb72bd15226946d561b0493e421039597ecd5a2703c37940e51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/js/create2.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/js/create2.js"));

        // line 1
        echo "function printForm(e)
{
    // получаем элемент printBlock
    let printBlock = document.getElementById(\"books-menu\");
    printBlock.innerHTML= '';
    let newDiv = document.createElement('div');
    newDiv.innerHTML = ` <ul>
                    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 9
            echo "                        ";
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 9), 3))) {
                // line 10
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
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 21), "js", null, true);
                echo "</a>
                                        </p>
                                        <p class=\"product-desc\" style=\"text-indent: 20px\">
                                            ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 24), "js", null, true);
                echo "</p>
                                        <p class=\"product-title \">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 25), "getAuthorName", [], "method", false, false, false, 25), "js", null, true);
                echo "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 31
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </ul>`;
    // добавляем div в printBlock
    printBlock.appendChild(newDiv);
}
let printButton = document.form.two;
printButton.addEventListener(\"click\", printForm);";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/js/create2.js";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 32,  91 => 31,  82 => 25,  78 => 24,  72 => 21,  59 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("function printForm(e)
{
    // получаем элемент printBlock
    let printBlock = document.getElementById(\"books-menu\");
    printBlock.innerHTML= '';
    let newDiv = document.createElement('div');
    newDiv.innerHTML = ` <ul>
                    {%  for book in books %}
                        {% if book.id <3 %}
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                    {% endfor %}
                </ul>`;
    // добавляем div в printBlock
    printBlock.appendChild(newDiv);
}
let printButton = document.form.two;
printButton.addEventListener(\"click\", printForm);", "main/js/create2.js", "C:\\working\\Books-repos\\templates\\main\\js\\create2.js");
    }
}
