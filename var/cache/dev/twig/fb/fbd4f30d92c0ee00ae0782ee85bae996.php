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

/* @counterparty/saveCounterparty.html.twig */
class __TwigTemplate_a6c405e06fe29263d9251ab0b3f4d1e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@counterparty/saveCounterparty.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@counterparty/saveCounterparty.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@counterparty/saveCounterparty.html.twig", 1);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 15, $this->source); })()), 'form_start');
        yield "
  <div class=\"container-fluid text-center mt-3\">
    <div class=\"row\">

      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 20, $this->source); })()), "name_counterparty", [], "any", false, false, false, 20), 'label');
        yield "</div>
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 21, $this->source); })()), "name_counterparty", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 22
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 22, $this->source); })()), "name_counterparty", [], "any", false, false, false, 22), 'errors'));
        yield "
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["[name_counterparty_error][Regex]"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "
      </div>

      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 30, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 30), 'label');
        yield "</div>
        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 31, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 32
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 32, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 32), 'errors'));
        yield "
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", ["[mail_counterparty_error][Email]"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "      </div>


      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 40, $this->source); })()), "manager_phone", [], "any", false, false, false, 40), 'label');
        yield "</div>
        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 41, $this->source); })()), "manager_phone", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "+79999999999"]]);
        // line 42
        yield "
        ";
        // line 43
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 43, $this->source); })()), "manager_phone", [], "any", false, false, false, 43), 'errors'));
        yield "
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", ["[manager_phone_error][Regex]"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 45
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "      </div>


      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 51, $this->source); })()), "delivery_phone", [], "any", false, false, false, 51), 'label');
        yield "</div>
        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 52, $this->source); })()), "delivery_phone", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "+79999999999"]]);
        // line 53
        yield "
        ";
        // line 54
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 54, $this->source); })()), "delivery_phone", [], "any", false, false, false, 54), 'errors'));
        yield "
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", ["[delivery_phone_error][Regex]"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 56
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "      </div>
    </div>



    <div class=\"row my-2 pt-2\">
      <div class=\"col-sm-12 col-lg-8\">
        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 65, $this->source); })()), "button_counterparty", [], "any", false, false, false, 65), 'widget', ["label" => "Сохранить", "attr" => ["class" => "btn
        btn-danger w-100"]]);
        // line 66
        yield "
      </div>
    </div>
  </div>


  ";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 72, $this->source); })()), 'form_end');
        yield "

  ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "flashes", [["delete", "Error"]], "method", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 75
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 76
                yield "    <h2 class=\"mt-3 ms-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</h2>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "
  <div class=\"m-3\">
    ";
        // line 81
        if ((isset($context["id_handler"]) || array_key_exists("id_handler", $context) ? $context["id_handler"] : (function () { throw new RuntimeError('Variable "id_handler" does not exist.', 81, $this->source); })())) {
            // line 82
            yield "    <h5>Поставщик сохранен</h5>
    ";
        }
        // line 84
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
        return "@counterparty/saveCounterparty.html.twig";
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
        return array (  327 => 84,  323 => 82,  321 => 81,  317 => 79,  311 => 78,  302 => 76,  297 => 75,  293 => 74,  288 => 72,  280 => 66,  277 => 65,  268 => 58,  259 => 56,  255 => 55,  251 => 54,  248 => 53,  246 => 52,  242 => 51,  236 => 47,  227 => 45,  223 => 44,  219 => 43,  216 => 42,  214 => 41,  210 => 40,  204 => 36,  195 => 34,  191 => 33,  187 => 32,  183 => 31,  179 => 30,  173 => 26,  164 => 24,  160 => 23,  156 => 22,  152 => 21,  148 => 20,  140 => 15,  137 => 14,  134 => 12,  124 => 11,  112 => 8,  102 => 7,  82 => 5,  62 => 3,  39 => 1,);
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

  {#Форма сохранения постовщиков#}

  {{ form_start(form_save_counterparty) }}
  <div class=\"container-fluid text-center mt-3\">
    <div class=\"row\">

      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">{{ form_label(form_save_counterparty.name_counterparty) }}</div>
        {{ form_widget(form_save_counterparty.name_counterparty, { 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_save_counterparty.name_counterparty) |nl2br }}
        {% for message in app.flashes('[name_counterparty_error][Regex]') %}
        {{ message }}
        {% endfor %}

      </div>

      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">{{ form_label(form_save_counterparty.mail_counterparty) }}</div>
        {{ form_widget(form_save_counterparty.mail_counterparty, { 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_save_counterparty.mail_counterparty) |nl2br }}
        {% for message in app.flashes('[mail_counterparty_error][Email]') %}
        {{ message }}
        {% endfor %}
      </div>


      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">{{ form_label(form_save_counterparty.manager_phone) }}</div>
        {{ form_widget(form_save_counterparty.manager_phone, { 'attr': {'class': 'w-100',
        'placeholder': '+79999999999'} }) }}
        {{ form_errors(form_save_counterparty.manager_phone) |nl2br }}
        {% for message in app.flashes('[manager_phone_error][Regex]') %}
        {{ message }}
        {% endfor %}
      </div>


      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">{{ form_label(form_save_counterparty.delivery_phone) }}</div>
        {{ form_widget(form_save_counterparty.delivery_phone, { 'attr': {'class': 'w-100',
        'placeholder': '+79999999999'} }) }}
        {{ form_errors(form_save_counterparty.delivery_phone) |nl2br }}
        {% for message in app.flashes('[delivery_phone_error][Regex]') %}
        {{ message }}
        {% endfor %}
      </div>
    </div>



    <div class=\"row my-2 pt-2\">
      <div class=\"col-sm-12 col-lg-8\">
        {{ form_widget(form_save_counterparty.button_counterparty, { 'label': 'Сохранить', 'attr': {'class': 'btn
        btn-danger w-100'}}) }}
      </div>
    </div>
  </div>


  {{ form_end(form_save_counterparty) }}

  {% for messages in app.flashes(['delete','Error']) %}
  {% for message in messages %}
    <h2 class=\"mt-3 ms-3\">{{ message }}</h2>
  {% endfor %}
  {% endfor %}

  <div class=\"m-3\">
    {% if id_handler %}
    <h5>Поставщик сохранен</h5>
    {% endif %}
  </div>

  {% endblock form %}", "@counterparty/saveCounterparty.html.twig", "/var/www/src/Counterparty/InfrastructureCounterparty/ApiCounterparty/templatesCounterparty/saveCounterparty.html.twig");
    }
}
