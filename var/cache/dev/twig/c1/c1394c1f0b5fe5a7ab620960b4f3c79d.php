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

/* counterparty/searchCounterparty.html.twig */
class __TwigTemplate_526440ab1750f964af75edac684849d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "counterparty/searchCounterparty.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "counterparty/searchCounterparty.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "counterparty/searchCounterparty.html.twig", 1);
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
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_counterparty"]) || array_key_exists("form_search_counterparty", $context) ? $context["form_search_counterparty"] : (function () { throw new RuntimeError('Variable "form_search_counterparty" does not exist.', 20, $this->source); })()), "name_counterparty", [], "any", false, false, false, 20), 'label');
        yield "</div>
    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_counterparty"]) || array_key_exists("form_search_counterparty", $context) ? $context["form_search_counterparty"] : (function () { throw new RuntimeError('Variable "form_search_counterparty" does not exist.', 21, $this->source); })()), "name_counterparty", [], "any", false, false, false, 21), 'widget');
        yield "
    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_counterparty"]) || array_key_exists("form_search_counterparty", $context) ? $context["form_search_counterparty"] : (function () { throw new RuntimeError('Variable "form_search_counterparty" does not exist.', 22, $this->source); })()), "name_counterparty", [], "any", false, false, false, 22), 'errors');
        yield "
  </div>


  <div class=\"row mt-3\">
    <div class=\"col-2 d-grid gap-2 ms-3\">
      ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_counterparty"]) || array_key_exists("form_search_counterparty", $context) ? $context["form_search_counterparty"] : (function () { throw new RuntimeError('Variable "form_search_counterparty" does not exist.', 28, $this->source); })()), "button_search_counterparty", [], "any", false, false, false, 28), 'widget', ["label" => "Поиск", "attr" => ["class" => "button_search btn btn-primary"]]);
        // line 29
        yield "
    </div>
  </div>


  ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search_counterparty"]) || array_key_exists("form_search_counterparty", $context) ? $context["form_search_counterparty"] : (function () { throw new RuntimeError('Variable "form_search_counterparty" does not exist.', 34, $this->source); })()), 'form_end');
        yield "

  ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "flashes", [["delete", "Error", "successfully", "data_counterparty"]], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 37
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 38
                yield "    <h2 class=\"mt-3 ms-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</h2>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 46
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 47
        yield "
  ";
        // line 49
        yield "
  <div class=\"container-fluid text-center pt-4 \">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow p-3 mb-5 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">

          ";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 56, $this->source); })()), 0, [], "any", false, false, false, 56)) {
            // line 57
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
        // line 66
        yield "
        </thead>
        <tbody class=\"table-group-divider\">
          ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 70
            yield "          ";
            if ($context["information"]) {
                // line 71
                yield "
          <tr>
            <td>";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getNameCounterparty", [], "method", false, false, false, 73), "html", null, true);
                yield "</td>
            <td>";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getMailCounterparty", [], "method", false, false, false, 74), "html", null, true);
                yield "</td>
            <td>";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getManagerPhone", [], "method", false, false, false, 75), "html", null, true);
                yield "</td>
            <td>";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getDeliveryPhone", [], "method", false, false, false, 76), "html", null, true);
                yield "</td>
            <form action=\"/editCounterparty\" name=\"edit_counterparty\">

              <td><button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"id\"
                  value=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 80), "html", null, true);
                yield "\">Изменить</button></td>

            </form>
            <form action=\"/deleteCounterparty\" name=\"delete_counterparty\">

              <td><button class=\"btn btn-outline-danger\" type=\"submit\" name=\"id\"
                  value=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 86), "html", null, true);
                yield "\">Удалить</button></td>

            </form>
          </tr>

          ";
            } else {
                // line 92
                yield "          <h2>Данные не найдены. Видите параметры в поиск</h2>
          ";
            }
            // line 94
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
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
        return "counterparty/searchCounterparty.html.twig";
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
        return array (  315 => 95,  309 => 94,  305 => 92,  296 => 86,  287 => 80,  280 => 76,  276 => 75,  272 => 74,  268 => 73,  264 => 71,  261 => 70,  257 => 69,  252 => 66,  241 => 57,  239 => 56,  230 => 49,  227 => 47,  217 => 46,  205 => 41,  199 => 40,  190 => 38,  185 => 37,  181 => 36,  176 => 34,  169 => 29,  167 => 28,  158 => 22,  154 => 21,  150 => 20,  144 => 16,  141 => 15,  138 => 14,  135 => 12,  125 => 11,  113 => 8,  103 => 7,  83 => 5,  63 => 3,  40 => 1,);
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

  {% for messages in app.flashes(['delete','Error','successfully','data_counterparty']) %}
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

          {% if search_data.0 %}
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

          {% else %}
          <h2>Данные не найдены. Видите параметры в поиск</h2>
          {% endif %}
          {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
  {% endblock table %}", "counterparty/searchCounterparty.html.twig", "/var/www/templates/counterparty/searchCounterparty.html.twig");
    }
}
