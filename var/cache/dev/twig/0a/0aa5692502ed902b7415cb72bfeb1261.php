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

/* @autoPartsWarehouse/saveAutoPartsManually.html.twig */
class __TwigTemplate_dfc298af96e1f1c6889707fde5f8a04f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@autoPartsWarehouse/saveAutoPartsManually.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@autoPartsWarehouse/saveAutoPartsManually.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@autoPartsWarehouse/saveAutoPartsManually.html.twig", 1);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 15, $this->source); })()), 'form_start');
        yield "

  <div class=\"container-fluid text-center mt-3\">

    <div class=\"row justify-content-evenly\">

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 22, $this->source); })()), "id_details", [], "any", false, false, false, 22), 'label');
        yield "</div>
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 23, $this->source); })()), "id_details", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 24, $this->source); })()), "id_details", [], "any", false, false, false, 24), 'errors');
        yield "
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 28, $this->source); })()), "id_counterparty", [], "any", false, false, false, 28), 'label');
        yield "</div>
        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 29, $this->source); })()), "id_counterparty", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 30, $this->source); })()), "id_counterparty", [], "any", false, false, false, 30), 'errors');
        yield "
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-1 col-xl-1\">
        <div class=\"lb\">";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 34, $this->source); })()), "quantity", [], "any", false, false, false, 34), 'label');
        yield "</div>
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 35, $this->source); })()), "quantity", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 36, $this->source); })()), "quantity", [], "any", false, false, false, 36), 'errors');
        yield "
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-1 col-xl-1\">
        <div class=\"lb\">";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 40, $this->source); })()), "price", [], "any", false, false, false, 40), 'label');
        yield "</div>
        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 41, $this->source); })()), "price", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 42, $this->source); })()), "price", [], "any", false, false, false, 42), 'errors');
        yield "
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 46, $this->source); })()), "date_receipt_auto_parts_warehouse", [], "any", false, false, false, 46), 'label');
        yield "</div>
        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 47, $this->source); })()), "date_receipt_auto_parts_warehouse", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "w-100"]]);
        // line 48
        yield "
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 49, $this->source); })()), "date_receipt_auto_parts_warehouse", [], "any", false, false, false, 49), 'errors');
        yield "
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 53, $this->source); })()), "id_payment_method", [], "any", false, false, false, 53), 'label');
        yield "</div>
        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 54, $this->source); })()), "id_payment_method", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 55, $this->source); })()), "id_payment_method", [], "any", false, false, false, 55), 'errors');
        yield "
      </div>

    </div>
    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), 'widget', ["value" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["arr_saving_information"] ?? null), "id", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["arr_saving_information"] ?? null), "id", [], "any", false, false, false, 59), null)) : (null))]);
        yield "

    <div class=\"row my-3\">
      <div class=\"col-12 d-grid\">
        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 63, $this->source); })()), "button_save_manually", [], "any", false, false, false, 63), 'widget', ["label" => "Сохранить", "attr" => ["class" => "btn btn-danger"]]);
        // line 64
        yield "
      </div>
    </div>

  </div>
  ";
        // line 69
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 69, $this->source); })()), 'form_end');
        yield "

  <div class=\"col-auto m-3\">
    ";
        // line 72
        if ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 72, $this->source); })())) {
            // line 73
            yield "    <h5>Поставка сохранена</h5>
    ";
        }
        // line 75
        yield "
    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "flashes", ["Error"], "method", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 77
            yield "    <h5 class=\"mt-3 ms-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</h5>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "  </div>
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
        return "@autoPartsWarehouse/saveAutoPartsManually.html.twig";
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
        return array (  285 => 79,  276 => 77,  272 => 76,  269 => 75,  265 => 73,  263 => 72,  257 => 69,  250 => 64,  248 => 63,  241 => 59,  234 => 55,  230 => 54,  226 => 53,  219 => 49,  216 => 48,  214 => 47,  210 => 46,  203 => 42,  199 => 41,  195 => 40,  188 => 36,  184 => 35,  180 => 34,  173 => 30,  169 => 29,  165 => 28,  158 => 24,  154 => 23,  150 => 22,  140 => 15,  137 => 14,  134 => 12,  124 => 11,  112 => 8,  102 => 7,  82 => 5,  62 => 3,  39 => 1,);
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

  {{ form_start(form_save_auto_parts_manually) }}

  <div class=\"container-fluid text-center mt-3\">

    <div class=\"row justify-content-evenly\">

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">{{ form_label(form_save_auto_parts_manually.id_details) }}</div>
        {{ form_widget(form_save_auto_parts_manually.id_details, { 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_save_auto_parts_manually.id_details) }}
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">{{ form_label(form_save_auto_parts_manually.id_counterparty) }}</div>
        {{ form_widget(form_save_auto_parts_manually.id_counterparty, { 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_save_auto_parts_manually.id_counterparty) }}
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-1 col-xl-1\">
        <div class=\"lb\">{{ form_label(form_save_auto_parts_manually.quantity) }}</div>
        {{ form_widget(form_save_auto_parts_manually.quantity, { 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_save_auto_parts_manually.quantity) }}
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-1 col-xl-1\">
        <div class=\"lb\">{{ form_label(form_save_auto_parts_manually.price) }}</div>
        {{ form_widget(form_save_auto_parts_manually.price, { 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_save_auto_parts_manually.price) }}
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">{{ form_label(form_save_auto_parts_manually.date_receipt_auto_parts_warehouse) }}</div>
        {{ form_widget(form_save_auto_parts_manually.date_receipt_auto_parts_warehouse, { 'attr': {'class': 'w-100'} })
        }}
        {{ form_errors(form_save_auto_parts_manually.date_receipt_auto_parts_warehouse) }}
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">{{ form_label(form_save_auto_parts_manually.id_payment_method) }}</div>
        {{ form_widget(form_save_auto_parts_manually.id_payment_method, { 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_save_auto_parts_manually.id_payment_method) }}
      </div>

    </div>
    {{ form_widget(form_save_auto_parts_manually.id, {value : arr_saving_information.id|default(null)}) }}

    <div class=\"row my-3\">
      <div class=\"col-12 d-grid\">
        {{ form_widget(form_save_auto_parts_manually.button_save_manually, { 'label': 'Сохранить', 'attr': {'class':
        'btn btn-danger'}}) }}
      </div>
    </div>

  </div>
  {{ form_end(form_save_auto_parts_manually) }}

  <div class=\"col-auto m-3\">
    {% if id %}
    <h5>Поставка сохранена</h5>
    {% endif %}

    {% for message in app.flashes('Error') %}
    <h5 class=\"mt-3 ms-3\">{{ message }}</h5>
    {% endfor %}
  </div>
  {% endblock form %}", "@autoPartsWarehouse/saveAutoPartsManually.html.twig", "/var/www/src/AutoPartsWarehouse/InfrastructureAutoPartsWarehouse/ApiAutoPartsWarehouse/templatesAutoPartsWarehouse/saveAutoPartsManually.html.twig");
    }
}
