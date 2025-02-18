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

/* @autoPartsWarehouse/saveAutoPartsEmail.html.twig */
class __TwigTemplate_39c6ce3084fcdad0ffe020561f055ac0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@autoPartsWarehouse/saveAutoPartsEmail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@autoPartsWarehouse/saveAutoPartsEmail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@autoPartsWarehouse/saveAutoPartsEmail.html.twig", 1);
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
        yield "  <div class=\"col-auto m-3\">
    ";
        // line 15
        if ((isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 15, $this->source); })())) {
            // line 16
            yield "    <h5>Поставка сохранена</h5>
    ";
        }
        // line 18
        yield "  </div>
  <div class=\"container-fluid text-center pt-4 \">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow p-3 mb-5 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">

          ";
        // line 25
        if ((isset($context["email_data_array"]) || array_key_exists("email_data_array", $context) ? $context["email_data_array"] : (function () { throw new RuntimeError('Variable "email_data_array" does not exist.', 25, $this->source); })())) {
            // line 26
            yield "          <tr>
            <th scope=\"col\">№ детали</th>
            <th scope=\"col\">Поставщик</th>
            <th scope=\"col\">Кол-во</th>
            <th scope=\"col\">Цена</th>
            <th scope=\"col\">Дата</th>
            <th scope=\"col\">Сп. оплаты</th>
          </tr>
          ";
        }
        // line 35
        yield "
        </thead>
        <tbody class=\"table-group-divider\">
          ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["email_data_array"]) || array_key_exists("email_data_array", $context) ? $context["email_data_array"] : (function () { throw new RuntimeError('Variable "email_data_array" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 39
            yield "          ";
            if ($context["information"]) {
                // line 40
                yield "          <tr>
            <td>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "part_number", [], "any", false, false, false, 41), "html", null, true);
                yield "</td>
            <td>";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "counterparty", [], "any", false, false, false, 42), "html", null, true);
                yield "</td>
            <td>";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "quantity", [], "any", false, false, false, 43), "html", null, true);
                yield "</td>
            <td>";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "price", [], "any", false, false, false, 44), "html", null, true);
                yield "</td>
            <td>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "date_receipt_auto_parts_warehouse", [], "any", false, false, false, 45), "d-m-Y"), "html", null, true);
                yield "</td>
            <td>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "payment_method", [], "any", false, false, false, 46), "html", null, true);
                yield "</td>
          </tr>
          ";
            }
            // line 49
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "        </tbody>
      </table>
    </div>
  </div>
  ";
        // line 54
        if ((isset($context["email_data_array"]) || array_key_exists("email_data_array", $context) ? $context["email_data_array"] : (function () { throw new RuntimeError('Variable "email_data_array" does not exist.', 54, $this->source); })())) {
            // line 55
            yield "  ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_auto_parts_email"]) || array_key_exists("form_save_auto_parts_email", $context) ? $context["form_save_auto_parts_email"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_email" does not exist.', 55, $this->source); })()), 'form_start');
            yield "
  <div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12\">
    ";
            // line 57
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_auto_parts_email"]) || array_key_exists("form_save_auto_parts_email", $context) ? $context["form_save_auto_parts_email"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_email" does not exist.', 57, $this->source); })()), "button_save_Email", [], "any", false, false, false, 57), 'widget', ["label" => "Продолжить", "attr" => ["class" => "btn btn-danger w-100"]]);
            // line 58
            yield "
  </div>
  ";
            // line 60
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_auto_parts_email"]) || array_key_exists("form_save_auto_parts_email", $context) ? $context["form_save_auto_parts_email"] : (function () { throw new RuntimeError('Variable "form_save_auto_parts_email" does not exist.', 60, $this->source); })()), 'form_end');
            yield "
  ";
        }
        // line 62
        yield "  ";
        if ((Twig\Extension\CoreExtension::testEmpty((isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 62, $this->source); })())) && ((isset($context["email_data_array"]) || array_key_exists("email_data_array", $context) ? $context["email_data_array"] : (function () { throw new RuntimeError('Variable "email_data_array" does not exist.', 62, $this->source); })()) == null))) {
            // line 63
            yield "  <div class=\"col-auto m-3\">
    <h5>Поставок нет</h5>
  </div>
  ";
        }
        // line 67
        yield "  <div class=\"col-auto m-3\">
    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "flashes", ["Error"], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 69
            yield "    <h5>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</h5>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
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
        return "@autoPartsWarehouse/saveAutoPartsEmail.html.twig";
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
        return array (  265 => 71,  256 => 69,  252 => 68,  249 => 67,  243 => 63,  240 => 62,  235 => 60,  231 => 58,  229 => 57,  223 => 55,  221 => 54,  215 => 50,  209 => 49,  203 => 46,  199 => 45,  195 => 44,  191 => 43,  187 => 42,  183 => 41,  180 => 40,  177 => 39,  173 => 38,  168 => 35,  157 => 26,  155 => 25,  146 => 18,  142 => 16,  140 => 15,  137 => 14,  134 => 12,  124 => 11,  112 => 8,  102 => 7,  82 => 5,  62 => 3,  39 => 1,);
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

  {#Таблица автодеталей из Email#}
  <div class=\"col-auto m-3\">
    {% if saved %}
    <h5>Поставка сохранена</h5>
    {% endif %}
  </div>
  <div class=\"container-fluid text-center pt-4 \">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow p-3 mb-5 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">

          {% if email_data_array %}
          <tr>
            <th scope=\"col\">№ детали</th>
            <th scope=\"col\">Поставщик</th>
            <th scope=\"col\">Кол-во</th>
            <th scope=\"col\">Цена</th>
            <th scope=\"col\">Дата</th>
            <th scope=\"col\">Сп. оплаты</th>
          </tr>
          {% endif %}

        </thead>
        <tbody class=\"table-group-divider\">
          {% for information in email_data_array %}
          {% if information %}
          <tr>
            <td>{{ information.part_number }}</td>
            <td>{{ information.counterparty }}</td>
            <td>{{ information.quantity }}</td>
            <td>{{ information.price }}</td>
            <td>{{ information.date_receipt_auto_parts_warehouse|date(\"d-m-Y\") }}</td>
            <td>{{ information.payment_method }}</td>
          </tr>
          {% endif %}
          {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
  {% if email_data_array %}
  {{ form_start(form_save_auto_parts_email) }}
  <div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12\">
    {{ form_widget(form_save_auto_parts_email.button_save_Email, { 'label': 'Продолжить', 'attr': {'class':
    'btn btn-danger w-100'}}) }}
  </div>
  {{ form_end(form_save_auto_parts_email) }}
  {% endif %}
  {% if saved is empty and email_data_array == null %}
  <div class=\"col-auto m-3\">
    <h5>Поставок нет</h5>
  </div>
  {% endif %}
  <div class=\"col-auto m-3\">
    {% for message in app.flashes('Error') %}
    <h5>{{ message }}</h5>
    {% endfor %}
  </div>
  {% endblock form %}", "@autoPartsWarehouse/saveAutoPartsEmail.html.twig", "/var/www/src/AutoPartsWarehouse/InfrastructureAutoPartsWarehouse/ApiAutoPartsWarehouse/templatesAutoPartsWarehouse/saveAutoPartsEmail.html.twig");
    }
}
