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

/* @autoPartsWarehouse/saveAutoPartsFale.html.twig */
class __TwigTemplate_6bc1f9d032470402e2559d5a0006ee0b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'logo' => [$this, 'block_logo'],
            'Responsive_behaviors' => [$this, 'block_Responsive_behaviors'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@autoPartsWarehouse/saveAutoPartsFale.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@autoPartsWarehouse/saveAutoPartsFale.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@autoPartsWarehouse/saveAutoPartsFale.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title_logo"]) || array_key_exists("title_logo", $context) ? $context["title_logo"] : (function () { throw new RuntimeError('Variable "title_logo" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title_logo"]) || array_key_exists("title_logo", $context) ? $context["title_logo"] : (function () { throw new RuntimeError('Variable "title_logo" does not exist.', 5, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_Responsive_behaviors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Responsive_behaviors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Responsive_behaviors"));

        // line 8
        yield "<nav class=\"navbar navbar-expand-xl bg-dark\" data-bs-theme=\"dark\">
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 11
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 12
        yield "
  ";
        // line 14
        yield "
  ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_auto_parts_fale"]) || array_key_exists("form_save_auto_parts_fale", $context) ? $context["form_save_auto_parts_fale"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_fale" does not exist.', 15, $this->source); })()), 'form_start');
        yield "

  <div class=\"container-fluid text-center mt-3\">

    <div class=\"row\">

      <div class=\"col-sm-5 col-md-4 col-lg-4 col-xl-3\">
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_fale"]) || array_key_exists("form_save_auto_parts_fale", $context) ? $context["form_save_auto_parts_fale"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_fale" does not exist.', 22, $this->source); })()), "file_save", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control form-control-md w-100"]]);
        // line 23
        yield "
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_fale"]) || array_key_exists("form_save_auto_parts_fale", $context) ? $context["form_save_auto_parts_fale"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_fale" does not exist.', 24, $this->source); })()), "file_save", [], "any", false, false, false, 24), 'errors');
        yield "
      </div>

      <div class=\"col-sm-3 col-md-2 col-lg-2 col-xl-2\">
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_fale"]) || array_key_exists("form_save_auto_parts_fale", $context) ? $context["form_save_auto_parts_fale"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_fale" does not exist.', 28, $this->source); })()), "button_save_fale", [], "any", false, false, false, 28), 'widget', ["label" => "Загрузить", "attr" => ["class" => "btn btn-danger w-100"]]);
        // line 29
        yield "
      </div>
    </div>

  </div>
  ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_auto_parts_fale"]) || array_key_exists("form_save_auto_parts_fale", $context) ? $context["form_save_auto_parts_fale"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_fale" does not exist.', 34, $this->source); })()), 'form_end');
        yield "

  <div class=\"col-auto m-3\">
    ";
        // line 37
        if ((isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 37, $this->source); })())) {
            // line 38
            yield "    <h5>Поставка сохранена</h5>
    ";
        }
        // line 40
        yield "
    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "flashes", ["Error"], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 42
            yield "    <h5 class=\"mt-3 ms-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</h5>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "  </div>

  <div class=\"col-auto m-3\">
    <h5>
    Для положительной загрузки файла, 'xlsx', 'csv', 'ods' нужно его правильно заполнить:</br> 
    - в первом столбеке указывается название автодетали вы можите посмотреть правильные названия автодеталей</br>
    нажав \"Склад\", \"Поиск\" ,\"Название детали\"</br>
    - во второй столбик указывается производителя автодетали</br>
    - в третий указывается номер автодетали</br>
    - в четверты указывается количества автодетали</br>
    - в пятый указывается цена автодетали общая сумма</br>
    - в шестой указывается названия постовщика</br>
    - в седьмой указывается дата поставки</br>
    - в восьмой указывается способ оплаты поставки 1- без нал, 2- нал</br>
    </h5>
  </div>
  <div class=\"col-auto m-3\">
    <h5>
    Для положительной загрузки файла, 'xml'нужно его правильно заполнить:</br> 
    <a class=\"dropdown-item\" href=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fileXML/pod.xml"), "html", null, true);
        yield "\" download>- по сылке скачайте пример файла заполните и загрузите</a>
    </h5>
  </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@autoPartsWarehouse/saveAutoPartsFale.html.twig";
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
        return array (  220 => 63,  199 => 44,  190 => 42,  186 => 41,  183 => 40,  179 => 38,  177 => 37,  171 => 34,  164 => 29,  162 => 28,  155 => 24,  152 => 23,  150 => 22,  140 => 15,  137 => 14,  134 => 12,  124 => 11,  112 => 8,  102 => 7,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title_logo }}{% endblock title %}

{% block logo %}{{title_logo}}{% endblock logo %}

{% block Responsive_behaviors %}
<nav class=\"navbar navbar-expand-xl bg-dark\" data-bs-theme=\"dark\">
  {% endblock Responsive_behaviors %}

  {% block form %}

  {#Форма сохранения поступления деталей#}

  {{ form_start(form_save_auto_parts_fale) }}

  <div class=\"container-fluid text-center mt-3\">

    <div class=\"row\">

      <div class=\"col-sm-5 col-md-4 col-lg-4 col-xl-3\">
        {{ form_widget(form_save_auto_parts_fale.file_save,
        { 'attr': {'class': 'form-control form-control-md w-100'} })}}
        {{ form_errors(form_save_auto_parts_fale.file_save) }}
      </div>

      <div class=\"col-sm-3 col-md-2 col-lg-2 col-xl-2\">
        {{ form_widget(form_save_auto_parts_fale.button_save_fale, { 'label': 'Загрузить', 'attr': {'class':
        'btn btn-danger w-100'}}) }}
      </div>
    </div>

  </div>
  {{ form_end(form_save_auto_parts_fale) }}

  <div class=\"col-auto m-3\">
    {% if saved %}
    <h5>Поставка сохранена</h5>
    {% endif %}

    {% for message in app.flashes('Error') %}
    <h5 class=\"mt-3 ms-3\">{{ message }}</h5>
    {% endfor %}
  </div>

  <div class=\"col-auto m-3\">
    <h5>
    Для положительной загрузки файла, 'xlsx', 'csv', 'ods' нужно его правильно заполнить:</br> 
    - в первом столбеке указывается название автодетали вы можите посмотреть правильные названия автодеталей</br>
    нажав \"Склад\", \"Поиск\" ,\"Название детали\"</br>
    - во второй столбик указывается производителя автодетали</br>
    - в третий указывается номер автодетали</br>
    - в четверты указывается количества автодетали</br>
    - в пятый указывается цена автодетали общая сумма</br>
    - в шестой указывается названия постовщика</br>
    - в седьмой указывается дата поставки</br>
    - в восьмой указывается способ оплаты поставки 1- без нал, 2- нал</br>
    </h5>
  </div>
  <div class=\"col-auto m-3\">
    <h5>
    Для положительной загрузки файла, 'xml'нужно его правильно заполнить:</br> 
    <a class=\"dropdown-item\" href=\"{{ asset('fileXML/pod.xml')}}\" download>- по сылке скачайте пример файла заполните и загрузите</a>
    </h5>
  </div>
  {% endblock form %}", "@autoPartsWarehouse/saveAutoPartsFale.html.twig", "/var/www/src/AutoPartsWarehouse/InfrastructureAutoPartsWarehouse/ApiAutoPartsWarehouse/templatesAutoPartsWarehouse/saveAutoPartsFale.html.twig");
    }
}
