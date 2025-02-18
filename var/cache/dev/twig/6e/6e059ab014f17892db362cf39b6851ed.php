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

/* @autoPartsWarehouse/searchAutoPartsWarehouse.html.twig */
class __TwigTemplate_42fc40815a9d10a4bce72666dae02a43 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@autoPartsWarehouse/searchAutoPartsWarehouse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@autoPartsWarehouse/searchAutoPartsWarehouse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@autoPartsWarehouse/searchAutoPartsWarehouse.html.twig", 1);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 15, $this->source); })()), 'form_start');
        yield "

  <div class=\"container-fluid text-center mt-3\">

    <div class=\"row justify-content-start\">

      <div class=\"col-sm-4 col-lg-4 col-xl-2\">
        <div class=\"lb\">";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 22, $this->source); })()), "id_part_name", [], "any", false, false, false, 22), 'label');
        yield "</div>
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 23, $this->source); })()), "id_part_name", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 24
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 24, $this->source); })()), "id_part_name", [], "any", false, false, false, 24), 'errors'));
        yield "
      </div>

      <div class=\"col-sm-3 col-lg-3 col-xl-1\">
        <div class=\"lb\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 28, $this->source); })()), "id_car_brand", [], "any", false, false, false, 28), 'label');
        yield "</div>
        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 29, $this->source); })()), "id_car_brand", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 30
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 30, $this->source); })()), "id_car_brand", [], "any", false, false, false, 30), 'errors'));
        yield "
      </div>

      <div class=\"col-sm-3 col-lg-3 col-xl-1\">
        <div class=\"lb\">";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 34, $this->source); })()), "id_side", [], "any", false, false, false, 34), 'label');
        yield "</div>
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 35, $this->source); })()), "id_side", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 36
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 36, $this->source); })()), "id_side", [], "any", false, false, false, 36), 'errors'));
        yield "
      </div>

      <div class=\"col-sm-3 col-lg-3 col-xl-1\">
        <div class=\"lb\">";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 40, $this->source); })()), "id_body", [], "any", false, false, false, 40), 'label');
        yield "</div>
        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 41, $this->source); })()), "id_body", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 42
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 42, $this->source); })()), "id_body", [], "any", false, false, false, 42), 'errors'));
        yield "
      </div>

      <div class=\"col-sm-4 col-lg-4 col-xl-1\">
        <div class=\"lb\">";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 46, $this->source); })()), "id_axle", [], "any", false, false, false, 46), 'label');
        yield "</div>
        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 47, $this->source); })()), "id_axle", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 48
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 48, $this->source); })()), "id_axle", [], "any", false, false, false, 48), 'errors'));
        yield "
      </div>

    </div>

    <div class=\"row mt-3\">
      <div class=\"col-sm-10 col-lg-10 col-xl-6\">
        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 55, $this->source); })()), "button_search_auto_parts_warehouse", [], "any", false, false, false, 55), 'widget', ["label" => "Поиск", "attr" => ["class" => "btn btn-primary w-100"]]);
        // line 56
        yield "
      </div>
    </div>

  </div>

  ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 62, $this->source); })()), 'form_end');
        yield "

  ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", [["delete", "Error"]], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 65
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 66
                yield "    <h5 class=\"mt-3 ms-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</h5>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 71
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 72
        yield "
  ";
        // line 74
        yield "
  <div class=\"container-fluid text-center pt-4 \">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow p-3 mb-5 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">

          ";
        // line 81
        if ((isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 81, $this->source); })())) {
            // line 82
            yield "          <tr>
            <th scope=\"col\">№<br>детали</th>
            <th scope=\"col\">№<br>оригинал</th>
            <th scope=\"col\">Производитель</th>
            <th scope=\"col\">Описание<br>детали</th>
            <th scope=\"col\">Название<br>детали</th>
            <th scope=\"col\">Марка</th>
            <th scope=\"col\">Сторона</th>
            <th scope=\"col\">Кузов</th>
            <th scope=\"col\">Перед<br>Зад</th>
            <th scope=\"col\">Сп.<br>оплаты</th>
            <th scope=\"col\">Кол-во</th>
            <th scope=\"col\">Цена<br>шт</th>
            <th scope=\"col\">Цена<br>общая</th>
            <th scope=\"col\">";
            // line 96
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("bi:basket2", ["height" => "30", "width" => "30"]);
            yield "</th>
            <th scope=\"col\">";
            // line 97
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("bx:edit", ["height" => "30", "width" => "30"]);
            yield "</th>
            <th scope=\"col\">";
            // line 98
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("iconoir:delete-circle", ["height" => "30", "width" => "30"]);
            yield "</th>
          </tr>
          ";
        }
        // line 101
        yield "
        </thead>
        <tbody class=\"table-group-divider\">
          ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 105
            yield "          ";
            if ($context["information"]) {
                // line 106
                yield "
          <tr>
            <td>";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, false, false, 108), "getPartNumber", [], "method", false, false, false, 108), "html", null, true);
                yield "</td>
            <td>";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 109), "getIdOriginalNumber", [], "method", false, true, false, 109), "getOriginalNumber", [], "method", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 109), "getIdOriginalNumber", [], "method", false, true, false, 109), "getOriginalNumber", [], "method", false, false, false, 109), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, false, false, 110), "getManufacturer", [], "method", false, false, false, 110), "html", null, true);
                yield "</td>
            <td>";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, false, false, 111), "getAdditionalDescriptions", [], "method", false, false, false, 111), "html", null, true);
                yield "</td>
            <td>";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 112), "getIdPartName", [], "method", false, true, false, 112), "getPartName", [], "method", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 112), "getIdPartName", [], "method", false, true, false, 112), "getPartName", [], "method", false, false, false, 112), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 113), "getIdCarBrand", [], "method", false, true, false, 113), "getCarBrand", [], "method", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 113), "getIdCarBrand", [], "method", false, true, false, 113), "getCarBrand", [], "method", false, false, false, 113), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 114), "getIdSide", [], "method", false, true, false, 114), "getSide", [], "method", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 114), "getIdSide", [], "method", false, true, false, 114), "getSide", [], "method", false, false, false, 114), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 115), "getIdBody", [], "method", false, true, false, 115), "getBody", [], "method", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 115), "getIdBody", [], "method", false, true, false, 115), "getBody", [], "method", false, false, false, 115), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 116), "getIdAxle", [], "method", false, true, false, 116), "getAxle", [], "method", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 116), "getIdAxle", [], "method", false, true, false, 116), "getAxle", [], "method", false, false, false, 116), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdPaymentMethod", [], "any", false, true, false, 117), "getmethod", [], "method", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdPaymentMethod", [], "any", false, true, false, 117), "getmethod", [], "method", false, false, false, 117), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantity", [], "method", false, false, false, 118) - CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantitySold", [], "method", false, false, false, 118)), ""), "html", null, true);
                yield "</td>
            <td>";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getPrice", [], "method", false, false, false, 119) / 100) / CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantity", [], "method", false, false, false, 119)), ""), 2, ".", ""), "html", null, true);
                yield "
            </td>
            <td>";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default((((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getPrice", [], "method", false, false, false, 121) / 100) / CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantity", [], "method", false, false, false, 121)) * (CoreExtension::getAttribute($this->env, $this->source,                 // line 122
$context["information"], "getQuantity", [], "method", false, false, false, 122) - CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantitySold", [], "method", false, false, false, 122))), ""), "html", null, true);
                yield "</td>

            <form action=\"cartAutoPartsWarehouseSold\" name=\"cart_auto_parts_warehouse_sold\">

              <td><button class=\"btn btn-outline-success\" type=\"submit\" name=\"id\" value=\"";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 126), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("bi:basket2", ["height" => "30", "width" => "30"]);
                // line 127
                yield "</button></td>

            </form>
            <form action=\"/editAutoPartsWarehouse\" name=\"edit_auto_parts_warehouse\">

              <td><button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"id\" value=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 132), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("bx:edit", ["height" => "30", "width" => "30"]);
                // line 133
                yield "</button></td>

            </form>
            <form action=\"/deleteAutoPartsWarehouse\" name=\"delete_auto_parts_warehouse\">

              <td><button class=\"btn btn-outline-danger\" type=\"submit\" name=\"id\" value=\"";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 138), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("iconoir:delete-circle", ["height" => "30", "width" => "30"]);
                // line 139
                yield "</button></td>

            </form>
          </tr>
          ";
            }
            // line 144
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
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
        return "@autoPartsWarehouse/searchAutoPartsWarehouse.html.twig";
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
        return array (  445 => 145,  439 => 144,  432 => 139,  428 => 138,  421 => 133,  417 => 132,  410 => 127,  406 => 126,  399 => 122,  398 => 121,  393 => 119,  389 => 118,  385 => 117,  381 => 116,  377 => 115,  373 => 114,  369 => 113,  365 => 112,  361 => 111,  357 => 110,  353 => 109,  349 => 108,  345 => 106,  342 => 105,  338 => 104,  333 => 101,  327 => 98,  323 => 97,  319 => 96,  303 => 82,  301 => 81,  292 => 74,  289 => 72,  279 => 71,  268 => 69,  262 => 68,  253 => 66,  248 => 65,  244 => 64,  239 => 62,  231 => 56,  229 => 55,  219 => 48,  215 => 47,  211 => 46,  204 => 42,  200 => 41,  196 => 40,  189 => 36,  185 => 35,  181 => 34,  174 => 30,  170 => 29,  166 => 28,  159 => 24,  155 => 23,  151 => 22,  141 => 15,  138 => 14,  135 => 12,  125 => 11,  113 => 8,  103 => 7,  83 => 5,  63 => 3,  40 => 1,);
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

  {#Форма сохранения номеров деталей#}

  {{ form_start(form_search_auto_parts_warehouse) }}

  <div class=\"container-fluid text-center mt-3\">

    <div class=\"row justify-content-start\">

      <div class=\"col-sm-4 col-lg-4 col-xl-2\">
        <div class=\"lb\">{{ form_label(form_search_auto_parts_warehouse.id_part_name) }}</div>
        {{ form_widget(form_search_auto_parts_warehouse.id_part_name, { 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_search_auto_parts_warehouse.id_part_name) |nl2br }}
      </div>

      <div class=\"col-sm-3 col-lg-3 col-xl-1\">
        <div class=\"lb\">{{ form_label(form_search_auto_parts_warehouse.id_car_brand) }}</div>
        {{ form_widget(form_search_auto_parts_warehouse.id_car_brand, { 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_search_auto_parts_warehouse.id_car_brand) |nl2br }}
      </div>

      <div class=\"col-sm-3 col-lg-3 col-xl-1\">
        <div class=\"lb\">{{ form_label(form_search_auto_parts_warehouse.id_side) }}</div>
        {{ form_widget(form_search_auto_parts_warehouse.id_side, { 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_search_auto_parts_warehouse.id_side) |nl2br }}
      </div>

      <div class=\"col-sm-3 col-lg-3 col-xl-1\">
        <div class=\"lb\">{{ form_label(form_search_auto_parts_warehouse.id_body) }}</div>
        {{ form_widget(form_search_auto_parts_warehouse.id_body, { 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_search_auto_parts_warehouse.id_body) |nl2br }}
      </div>

      <div class=\"col-sm-4 col-lg-4 col-xl-1\">
        <div class=\"lb\">{{ form_label(form_search_auto_parts_warehouse.id_axle) }}</div>
        {{ form_widget(form_search_auto_parts_warehouse.id_axle, { 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_search_auto_parts_warehouse.id_axle) |nl2br }}
      </div>

    </div>

    <div class=\"row mt-3\">
      <div class=\"col-sm-10 col-lg-10 col-xl-6\">
        {{ form_widget(form_search_auto_parts_warehouse.button_search_auto_parts_warehouse,
        { 'label': 'Поиск', 'attr': {'class': 'btn btn-primary w-100'}}) }}
      </div>
    </div>

  </div>

  {{ form_end(form_search_auto_parts_warehouse) }}

  {% for messages in app.flashes(['delete','Error']) %}
  {% for message in messages %}
    <h5 class=\"mt-3 ms-3\">{{ message }}</h5>
  {% endfor %}
  {% endfor %}
  {% endblock form %}

  {% block table %}

  {#Таблица автодеталей на складе#}

  <div class=\"container-fluid text-center pt-4 \">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow p-3 mb-5 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">

          {% if search_data %}
          <tr>
            <th scope=\"col\">№<br>детали</th>
            <th scope=\"col\">№<br>оригинал</th>
            <th scope=\"col\">Производитель</th>
            <th scope=\"col\">Описание<br>детали</th>
            <th scope=\"col\">Название<br>детали</th>
            <th scope=\"col\">Марка</th>
            <th scope=\"col\">Сторона</th>
            <th scope=\"col\">Кузов</th>
            <th scope=\"col\">Перед<br>Зад</th>
            <th scope=\"col\">Сп.<br>оплаты</th>
            <th scope=\"col\">Кол-во</th>
            <th scope=\"col\">Цена<br>шт</th>
            <th scope=\"col\">Цена<br>общая</th>
            <th scope=\"col\">{{ ux_icon('bi:basket2', {'height': '30', 'width': '30'}) }}</th>
            <th scope=\"col\">{{ ux_icon('bx:edit', {'height': '30', 'width': '30'}) }}</th>
            <th scope=\"col\">{{ ux_icon('iconoir:delete-circle', {'height': '30', 'width': '30'}) }}</th>
          </tr>
          {% endif %}

        </thead>
        <tbody class=\"table-group-divider\">
          {% for information in search_data %}
          {% if information %}

          <tr>
            <td>{{ information.getIdDetails.getPartNumber() }}</td>
            <td>{{ information.getIdDetails.getIdOriginalNumber().getOriginalNumber()|default('') }}</td>
            <td>{{ information.getIdDetails.getManufacturer() }}</td>
            <td>{{ information.getIdDetails.getAdditionalDescriptions() }}</td>
            <td>{{ information.getIdDetails.getIdPartName().getPartName()|default('') }}</td>
            <td>{{ information.getIdDetails.getIdCarBrand().getCarBrand()|default('') }}</td>
            <td>{{ information.getIdDetails.getIdSide().getSide()|default('') }}</td>
            <td>{{ information.getIdDetails.getIdBody().getBody()|default('') }}</td>
            <td>{{ information.getIdDetails.getIdAxle().getAxle()|default('') }}</td>
            <td>{{ information.getIdPaymentMethod.getmethod()|default('') }}</td>
            <td>{{ (information.getQuantity() - information.getQuantitySold())|default('') }}</td>
            <td>{{ ((information.getPrice() / 100) / information.getQuantity())|default('')|number_format(2, '.', '') }}
            </td>
            <td>{{ (((information.getPrice() / 100) / information.getQuantity())
              * (information.getQuantity()- information.getQuantitySold()))|default('') }}</td>

            <form action=\"cartAutoPartsWarehouseSold\" name=\"cart_auto_parts_warehouse_sold\">

              <td><button class=\"btn btn-outline-success\" type=\"submit\" name=\"id\" value=\"{{ information.getId() }}\">{{
                  ux_icon('bi:basket2', {'height': '30', 'width': '30'}) }}</button></td>

            </form>
            <form action=\"/editAutoPartsWarehouse\" name=\"edit_auto_parts_warehouse\">

              <td><button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"id\" value=\"{{ information.getId() }}\">{{
                  ux_icon('bx:edit', {'height': '30', 'width': '30'}) }}</button></td>

            </form>
            <form action=\"/deleteAutoPartsWarehouse\" name=\"delete_auto_parts_warehouse\">

              <td><button class=\"btn btn-outline-danger\" type=\"submit\" name=\"id\" value=\"{{ information.getId() }}\">{{
                  ux_icon('iconoir:delete-circle', {'height': '30', 'width': '30'}) }}</button></td>

            </form>
          </tr>
          {% endif %}
          {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
  {% endblock table %}", "@autoPartsWarehouse/searchAutoPartsWarehouse.html.twig", "/var/www/src/AutoPartsWarehouse/InfrastructureAutoPartsWarehouse/ApiAutoPartsWarehouse/templatesAutoPartsWarehouse/searchAutoPartsWarehouse.html.twig");
    }
}
