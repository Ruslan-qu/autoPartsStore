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

/* counterparty/saveCounterparty.html.twig */
class __TwigTemplate_4a5b81f21adf611d93b2163f5880b6fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "counterparty/saveCounterparty.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "counterparty/saveCounterparty.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "counterparty/saveCounterparty.html.twig", 1);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["class" => "row row-cols-12 text-center
  mt-2"]]);
        // line 16
        yield "

  <div class=\"col-auto ms-2\">
    <div class=\"lb\">";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 19, $this->source); })()), "name_counterparty", [], "any", false, false, false, 19), 'label');
        yield "</div>
    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 20, $this->source); })()), "name_counterparty", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "ps-1"]]);
        yield "
    ";
        // line 21
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 21, $this->source); })()), "name_counterparty", [], "any", false, false, false, 21), 'errors'));
        yield "

  </div>



  <div class=\"col-auto ms-2\">
    <div class=\"lb\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 28, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 28), 'label');
        yield "</div>
    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 29, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "ps-1"]]);
        yield "
    ";
        // line 30
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 30, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 30), 'errors'));
        yield "
  </div>


  <div class=\"col-auto ms-2\">
    <div class=\"lb\">";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 35, $this->source); })()), "manager_phone", [], "any", false, false, false, 35), 'label');
        yield "</div>
    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 36, $this->source); })()), "manager_phone", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "ps-1", "placeholder" => "+79999999999"]]);
        // line 37
        yield "
    ";
        // line 38
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 38, $this->source); })()), "manager_phone", [], "any", false, false, false, 38), 'errors'));
        yield "
  </div>


  <div class=\"col-auto ms-2\">
    <div class=\"lb\">";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 43, $this->source); })()), "delivery_phone", [], "any", false, false, false, 43), 'label');
        yield "</div>
    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 44, $this->source); })()), "delivery_phone", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "ps-1", "placeholder" => "+79999999999"]]);
        // line 45
        yield "
    ";
        // line 46
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 46, $this->source); })()), "delivery_phone", [], "any", false, false, false, 46), 'errors'));
        yield "
  </div>

  <div class=\"row mt-3\">
    <div class=\"col-9 d-grid gap-2 ms-2\">
      ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 51, $this->source); })()), "button_counterparty", [], "any", false, false, false, 51), 'widget', ["label" => "Сохранить", "attr" => ["class" => "btn
      btn-danger"]]);
        // line 52
        yield "
    </div>
  </div>

  ";
        // line 56
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_counterparty"]) || array_key_exists("form_save_counterparty", $context) ? $context["form_save_counterparty"] : (function () { throw new RuntimeError('Variable "form_save_counterparty" does not exist.', 56, $this->source); })()), 'form_end');
        yield "
  <div class=\"col-auto m-3\">
    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["arr_saving_information"]) || array_key_exists("arr_saving_information", $context) ? $context["arr_saving_information"] : (function () { throw new RuntimeError('Variable "arr_saving_information" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["saving_information"]) {
            // line 59
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["saving_information"]);
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 60
                yield "    ";
                // line 61
                yield "    <h5>";
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["information"], "html", null, true));
                yield "</h5>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['saving_information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
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
        return "counterparty/saveCounterparty.html.twig";
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
        return array (  256 => 64,  250 => 63,  241 => 61,  239 => 60,  234 => 59,  230 => 58,  225 => 56,  219 => 52,  216 => 51,  208 => 46,  205 => 45,  203 => 44,  199 => 43,  191 => 38,  188 => 37,  186 => 36,  182 => 35,  174 => 30,  170 => 29,  166 => 28,  156 => 21,  152 => 20,  148 => 19,  143 => 16,  140 => 15,  137 => 14,  134 => 12,  124 => 11,  112 => 8,  102 => 7,  82 => 5,  62 => 3,  39 => 1,);
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

  {{ form_start(form_save_counterparty, {'attr': {'class': 'row row-cols-12 text-center
  mt-2'}}) }}

  <div class=\"col-auto ms-2\">
    <div class=\"lb\">{{ form_label(form_save_counterparty.name_counterparty) }}</div>
    {{ form_widget(form_save_counterparty.name_counterparty, { 'attr': {'class': 'ps-1'} }) }}
    {{ form_errors(form_save_counterparty.name_counterparty) |nl2br }}

  </div>



  <div class=\"col-auto ms-2\">
    <div class=\"lb\">{{ form_label(form_save_counterparty.mail_counterparty) }}</div>
    {{ form_widget(form_save_counterparty.mail_counterparty, { 'attr': {'class': 'ps-1'} }) }}
    {{ form_errors(form_save_counterparty.mail_counterparty) |nl2br }}
  </div>


  <div class=\"col-auto ms-2\">
    <div class=\"lb\">{{ form_label(form_save_counterparty.manager_phone) }}</div>
    {{ form_widget(form_save_counterparty.manager_phone, { 'attr': {'class': 'ps-1', 
    'placeholder': '+79999999999'} }) }}
    {{ form_errors(form_save_counterparty.manager_phone) |nl2br }}
  </div>


  <div class=\"col-auto ms-2\">
    <div class=\"lb\">{{ form_label(form_save_counterparty.delivery_phone) }}</div>
    {{ form_widget(form_save_counterparty.delivery_phone, { 'attr': {'class': 'ps-1', 
    'placeholder': '+79999999999'} }) }}
    {{ form_errors(form_save_counterparty.delivery_phone) |nl2br }}
  </div>

  <div class=\"row mt-3\">
    <div class=\"col-9 d-grid gap-2 ms-2\">
      {{ form_widget(form_save_counterparty.button_counterparty, { 'label': 'Сохранить', 'attr': {'class': 'btn
      btn-danger'}}) }}
    </div>
  </div>

  {{ form_end(form_save_counterparty) }}
  <div class=\"col-auto m-3\">
    {% for saving_information in arr_saving_information %}
    {% for information in saving_information %}
    {#{{ dump(saving_information) }}#}
    <h5>{{ information |nl2br }}</h5>
    {% endfor %}
    {% endfor %}
  </div>
  {% endblock form %}
", "counterparty/saveCounterparty.html.twig", "/var/www/templates/counterparty/saveCounterparty.html.twig");
    }
}
