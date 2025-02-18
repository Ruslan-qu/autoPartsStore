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

/* autoPartsWarehouse/saveAutoPartsManually.html.twig */
class __TwigTemplate_f4ae5732b17efa8e35bfacf0973859b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autoPartsWarehouse/saveAutoPartsManually.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autoPartsWarehouse/saveAutoPartsManually.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "autoPartsWarehouse/saveAutoPartsManually.html.twig", 1);
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
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 30, $this->source); })()), "id_counterparty", [], "any", false, false, false, 30), 'label');
        yield "</div>
        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 31, $this->source); })()), "id_counterparty", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 32, $this->source); })()), "id_counterparty", [], "any", false, false, false, 32), 'errors');
        yield "
      </div>


      <div class=\"col-sm-6 col-md-4 col-lg-1 col-xl-1\">
        <div class=\"lb\">";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 37, $this->source); })()), "quantity", [], "any", false, false, false, 37), 'label');
        yield "</div>
        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 38, $this->source); })()), "quantity", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 39, $this->source); })()), "quantity", [], "any", false, false, false, 39), 'errors');
        yield "
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-1 col-xl-1\">
        <div class=\"lb\">";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 43, $this->source); })()), "price", [], "any", false, false, false, 43), 'label');
        yield "</div>
        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 44, $this->source); })()), "price", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 45, $this->source); })()), "price", [], "any", false, false, false, 45), 'errors');
        yield "
      </div>


      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 50, $this->source); })()), "date_receipt_auto_parts_warehouse", [], "any", false, false, false, 50), 'label');
        yield "</div>
        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 51, $this->source); })()), "date_receipt_auto_parts_warehouse", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "w-100"]]);
        // line 52
        yield "
        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 53, $this->source); })()), "date_receipt_auto_parts_warehouse", [], "any", false, false, false, 53), 'errors');
        yield "
      </div>


      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 58, $this->source); })()), "id_payment_method", [], "any", false, false, false, 58), 'label');
        yield "</div>
        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 59, $this->source); })()), "id_payment_method", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 60, $this->source); })()), "id_payment_method", [], "any", false, false, false, 60), 'errors');
        yield "
      </div>

    </div>
    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64), 'widget', ["value" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["arr_saving_information"] ?? null), "id", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["arr_saving_information"] ?? null), "id", [], "any", false, false, false, 64), null)) : (null))]);
        yield "

    <div class=\"row my-3\">
      <div class=\"col-12 d-grid\">
        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 68, $this->source); })()), "button_save_manually", [], "any", false, false, false, 68), 'widget', ["label" => "Сохранить", "attr" => ["class" => "btn btn-danger"]]);
        // line 69
        yield "
      </div>
    </div>

  </div>
  ";
        // line 74
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_auto_parts_manually"]) || array_key_exists("form_save_auto_parts_manually", $context) ? $context["form_save_auto_parts_manually"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_manually" does not exist.', 74, $this->source); })()), 'form_end');
        yield "

  <div class=\"col-auto m-3\">
    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["arr_saving_information"]) || array_key_exists("arr_saving_information", $context) ? $context["arr_saving_information"] : (function () { throw new RuntimeError('Variable "arr_saving_information" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["saving_information"]) {
            // line 78
            yield "    ";
            if ($context["saving_information"]) {
                // line 79
                yield "    <h5>Поставка сохранена</h5>
    ";
            }
            // line 81
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['saving_information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "flashes", ["data_save"], "method", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 83
            yield "    <h5>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</h5>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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
        return "autoPartsWarehouse/saveAutoPartsManually.html.twig";
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
        return array (  299 => 85,  290 => 83,  285 => 82,  279 => 81,  275 => 79,  272 => 78,  268 => 77,  262 => 74,  255 => 69,  253 => 68,  246 => 64,  239 => 60,  235 => 59,  231 => 58,  223 => 53,  220 => 52,  218 => 51,  214 => 50,  206 => 45,  202 => 44,  198 => 43,  191 => 39,  187 => 38,  183 => 37,  175 => 32,  171 => 31,  167 => 30,  158 => 24,  154 => 23,  150 => 22,  140 => 15,  137 => 14,  134 => 12,  124 => 11,  112 => 8,  102 => 7,  82 => 5,  62 => 3,  39 => 1,);
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
    {% for saving_information in arr_saving_information %}
    {% if saving_information %}
    <h5>Поставка сохранена</h5>
    {% endif %}
    {% endfor %}
    {% for message in app.flashes('data_save') %}
    <h5>{{ message }}</h5>
    {% endfor %}
  </div>
  {% endblock form %}", "autoPartsWarehouse/saveAutoPartsManually.html.twig", "/var/www/templates/autoPartsWarehouse/saveAutoPartsManually.html.twig");
    }
}
