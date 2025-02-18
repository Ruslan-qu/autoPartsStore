<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_f0821a10ec5309ea42bcd956b133b08e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'Responsive_behaviors' => [$this, 'block_Responsive_behaviors'],
            'logo' => [$this, 'block_logo'],
            'form' => [$this, 'block_form'],
            'table' => [$this, 'block_table'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"ru\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" />
</head>

<body>
    <header class=\"sticky-top\">
        ";
        // line 14
        yield from $this->unwrap()->yieldBlock('Responsive_behaviors', $context, $blocks);
        // line 15
        yield "        <div class=\"container-fluid\">
            <a class=\"navbar-brand fs-2 ps-3\">";
        // line 16
        yield from $this->unwrap()->yieldBlock('logo', $context, $blocks);
        yield "</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ms-auto pe-4 mb-2 mb-lg-0\">
                    <li class=\"nav-item pe-2\">
                        <a class=\"nav-link\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_page");
        yield "\">Главная</a>
                    </li>
                    <li class=\"nav-item dropdown px-2\">
                        <a class=\"nav-link dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\">
                            Склад
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_auto_parts_warehouse");
        yield "\">Поиск</a></li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_auto_parts_manually");
        yield "\">
                                    Сохранить в ручную
                                </a>
                            </li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_auto_parts_file");
        yield "\">Сохранить из файла</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_auto_parts_imap");
        yield "\">Сохранить из майла</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_auto_parts_api");
        yield "\">Сохранить по API</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_warehouse");
        yield "\">Корзина</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item px-2\">
                        <a class=\"nav-link\" role=\"button\" aria-expanded=\"false\"
                            href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_sales");
        yield "\">Продажи</a>
                    </li>
                    <li class=\"nav-item dropdown px-2\">
                        <a class=\"nav-link dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\">
                            Контрагент
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_counterparty");
        yield "\">Поиск</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_counterparty");
        yield "\">Сохранить</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown ps-2\">
                        <a class=\"nav-link dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\">
                            Детали
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_part_numbers");
        yield "\">Поиск</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_part_numbers");
        yield "\">Сохранить</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
    </header>
    <main>
        ";
        // line 75
        yield from $this->unwrap()->yieldBlock('form', $context, $blocks);
        // line 77
        yield "        ";
        yield from $this->unwrap()->yieldBlock('table', $context, $blocks);
        // line 79
        yield "    </main>
    <script src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 14
    public function block_Responsive_behaviors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Responsive_behaviors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Responsive_behaviors"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 16
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 75
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 76
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 77
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 78
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  287 => 78,  277 => 77,  266 => 76,  256 => 75,  237 => 16,  218 => 14,  199 => 7,  184 => 80,  181 => 79,  178 => 77,  176 => 75,  164 => 66,  160 => 65,  148 => 56,  144 => 55,  133 => 47,  125 => 42,  121 => 41,  117 => 40,  113 => 39,  106 => 35,  101 => 33,  90 => 25,  78 => 16,  75 => 15,  73 => 14,  65 => 9,  61 => 8,  57 => 7,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"ru\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}{% endblock title %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
</head>

<body>
    <header class=\"sticky-top\">
        {% block Responsive_behaviors %}{% endblock Responsive_behaviors %}
        <div class=\"container-fluid\">
            <a class=\"navbar-brand fs-2 ps-3\">{% block logo %}{% endblock logo %}</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ms-auto pe-4 mb-2 mb-lg-0\">
                    <li class=\"nav-item pe-2\">
                        <a class=\"nav-link\" href=\"{{ path('main_page')}}\">Главная</a>
                    </li>
                    <li class=\"nav-item dropdown px-2\">
                        <a class=\"nav-link dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\">
                            Склад
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('search_auto_parts_warehouse')}}\">Поиск</a></li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('save_auto_parts_manually')}}\">
                                    Сохранить в ручную
                                </a>
                            </li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('save_auto_parts_file')}}\">Сохранить из файла</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('save_auto_parts_imap')}}\">Сохранить из майла</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('save_auto_parts_api')}}\">Сохранить по API</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('cart_warehouse')}}\">Корзина</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item px-2\">
                        <a class=\"nav-link\" role=\"button\" aria-expanded=\"false\"
                            href=\"{{ path('search_sales')}}\">Продажи</a>
                    </li>
                    <li class=\"nav-item dropdown px-2\">
                        <a class=\"nav-link dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\">
                            Контрагент
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('search_counterparty')}}\">Поиск</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('save_counterparty')}}\">Сохранить</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown ps-2\">
                        <a class=\"nav-link dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\">
                            Детали
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('search_part_numbers')}}\">Поиск</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('save_part_numbers')}}\">Сохранить</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
    </header>
    <main>
        {% block form %}
        {% endblock form %}
        {% block table %}
        {% endblock table %}
    </main>
    <script src=\"{{ asset('js/bootstrap.bundle.min.js') }}\"></script>
</body>

</html>", "base.html.twig", "/var/www/templates/base.html.twig");
    }
}
