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

/* @counterparty/searchCounterparty.html.twig */
class __TwigTemplate_67fa940a442f218b311168564c95ba21 extends Template
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
            'table' => [$this, 'block_table'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@counterparty/searchCounterparty.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@counterparty/searchCounterparty.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@counterparty/searchCounterparty.html.twig", 1);
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
        yield "<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search_counterparty"]) || array_key_exists("form_search_counterparty", $context) ? $context["form_search_counterparty"] : (function () { throw new RuntimeError('Variable "form_search_counterparty" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["class" => "row row-cols-12 text-center
  mt-2"]]);
        // line 16
        yield "

  <div class=\"col-auto ms-3\">
    <div class=\"lb\">";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_counterparty"]) || array_key_exists("form_search_counterparty", $context) ? $context["form_search_counterparty"] : (function () { throw new RuntimeError('Variable "form_search_counterparty" does not exist.', 19, $this->source); })()), "name_counterparty", [], "any", false, false, false, 19), 'label');
        yield "</div>
    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_counterparty"]) || array_key_exists("form_search_counterparty", $context) ? $context["form_search_counterparty"] : (function () { throw new RuntimeError('Variable "form_search_counterparty" does not exist.', 20, $this->source); })()), "name_counterparty", [], "any", false, false, false, 20), 'widget');
        yield "
    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_counterparty"]) || array_key_exists("form_search_counterparty", $context) ? $context["form_search_counterparty"] : (function () { throw new RuntimeError('Variable "form_search_counterparty" does not exist.', 21, $this->source); })()), "name_counterparty", [], "any", false, false, false, 21), 'errors');
        yield "
  </div>

  <div class=\"row mt-3\">
    <div class=\"col-2 d-grid gap-2 ms-3\">
      ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_counterparty"]) || array_key_exists("form_search_counterparty", $context) ? $context["form_search_counterparty"] : (function () { throw new RuntimeError('Variable "form_search_counterparty" does not exist.', 26, $this->source); })()), "button_search_counterparty", [], "any", false, false, false, 26), 'widget', ["label" => "Поиск", "attr" => ["class" => "button_search btn btn-primary"]]);
        // line 27
        yield "
    </div>
  </div>

  ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search_counterparty"]) || array_key_exists("form_search_counterparty", $context) ? $context["form_search_counterparty"] : (function () { throw new RuntimeError('Variable "form_search_counterparty" does not exist.', 31, $this->source); })()), 'form_end');
        yield "

  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", [["delete", "Error"]], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 34
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 35
                yield "    <h2 class=\"mt-3 ms-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</h2>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 41
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 42
        yield "
  ";
        // line 44
        yield "
  <div class=\"container-fluid text-center pt-4 \">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow p-3 mb-5 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">

          ";
        // line 51
        if ((isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 51, $this->source); })())) {
            // line 52
            yield "          <tr>
            <th scope=\"col\">Поставщик</th>
            <th scope=\"col\">E-mail</th>
            <th scope=\"col\">Телефон менеджера</th>
            <th scope=\"col\">Телефон доставки</th>
            <th scope=\"col\">Редактировать</th>
            <th scope=\"col\">Удалить</th>
          </tr>
          ";
        }
        // line 61
        yield "
        </thead>
        <tbody class=\"table-group-divider\">
          ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 65
            yield "          ";
            if ($context["information"]) {
                // line 66
                yield "
          <tr>
            <td>";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getNameCounterparty", [], "method", false, false, false, 68), "html", null, true);
                yield "</td>
            <td>";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getMailCounterparty", [], "method", false, false, false, 69), "html", null, true);
                yield "</td>
            <td>";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getManagerPhone", [], "method", false, false, false, 70), "html", null, true);
                yield "</td>
            <td>";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getDeliveryPhone", [], "method", false, false, false, 71), "html", null, true);
                yield "</td>
            <form action=\"/editCounterparty\" name=\"edit_counterparty\">

              <td><button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"id\"
                  value=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 75), "html", null, true);
                yield "\">Изменить</button></td>

            </form>
            <form action=\"/deleteCounterparty\" name=\"delete_counterparty\">

              <td><button class=\"btn btn-outline-danger\" type=\"submit\" name=\"id\"
                  value=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 81), "html", null, true);
                yield "\">Удалить</button></td>

            </form>
          </tr>
          ";
            }
            // line 86
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "        </tbody>
      </table>
    </div>
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
        return "@counterparty/searchCounterparty.html.twig";
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
        return array (  307 => 87,  301 => 86,  293 => 81,  284 => 75,  277 => 71,  273 => 70,  269 => 69,  265 => 68,  261 => 66,  258 => 65,  254 => 64,  249 => 61,  238 => 52,  236 => 51,  227 => 44,  224 => 42,  214 => 41,  202 => 38,  196 => 37,  187 => 35,  182 => 34,  178 => 33,  173 => 31,  167 => 27,  165 => 26,  157 => 21,  153 => 20,  149 => 19,  144 => 16,  141 => 15,  138 => 14,  135 => 12,  125 => 11,  113 => 8,  103 => 7,  83 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title_logo }}{% endblock title %}

{% block logo %}{{title_logo}}{% endblock logo %}

{% block Responsive_behaviors %}
<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  {% endblock Responsive_behaviors %}

  {% block form %}

  {#Форма поиска постовщиков#}

  {{ form_start(form_search_counterparty, {'attr': {'class': 'row row-cols-12 text-center
  mt-2'}}) }}

  <div class=\"col-auto ms-3\">
    <div class=\"lb\">{{ form_label(form_search_counterparty.name_counterparty) }}</div>
    {{ form_widget(form_search_counterparty.name_counterparty) }}
    {{ form_errors(form_search_counterparty.name_counterparty) }}
  </div>

  <div class=\"row mt-3\">
    <div class=\"col-2 d-grid gap-2 ms-3\">
      {{ form_widget(form_search_counterparty.button_search_counterparty, { 'label': 'Поиск', 'attr': {'class':
      'button_search btn btn-primary'}}) }}
    </div>
  </div>

  {{ form_end(form_search_counterparty) }}

  {% for messages in app.flashes(['delete','Error']) %}
  {% for message in messages %}
    <h2 class=\"mt-3 ms-3\">{{ message }}</h2>
  {% endfor %}
  {% endfor %}

  {% endblock form %}

  {% block table %}

  {#Таблица постовщиков#}

  <div class=\"container-fluid text-center pt-4 \">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow p-3 mb-5 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">

          {% if search_data %}
          <tr>
            <th scope=\"col\">Поставщик</th>
            <th scope=\"col\">E-mail</th>
            <th scope=\"col\">Телефон менеджера</th>
            <th scope=\"col\">Телефон доставки</th>
            <th scope=\"col\">Редактировать</th>
            <th scope=\"col\">Удалить</th>
          </tr>
          {% endif %}

        </thead>
        <tbody class=\"table-group-divider\">
          {% for information in search_data %}
          {% if information %}

          <tr>
            <td>{{ information.getNameCounterparty() }}</td>
            <td>{{ information.getMailCounterparty() }}</td>
            <td>{{ information.getManagerPhone() }}</td>
            <td>{{ information.getDeliveryPhone() }}</td>
            <form action=\"/editCounterparty\" name=\"edit_counterparty\">

              <td><button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"id\"
                  value=\"{{ information.getId() }}\">Изменить</button></td>

            </form>
            <form action=\"/deleteCounterparty\" name=\"delete_counterparty\">

              <td><button class=\"btn btn-outline-danger\" type=\"submit\" name=\"id\"
                  value=\"{{ information.getId() }}\">Удалить</button></td>

            </form>
          </tr>
          {% endif %}
          {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
  {% endblock table %}", "@counterparty/searchCounterparty.html.twig", "/var/www/src/Counterparty/InfrastructureCounterparty/ApiCounterparty/templatesCounterparty/searchCounterparty.html.twig");
    }
}
