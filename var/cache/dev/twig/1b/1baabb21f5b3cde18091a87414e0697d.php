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

/* autoPartsWarehouse/searchAutoPartsWarehouse.html.twig */
class __TwigTemplate_88482faf5c7367608fae1cd7ee57b399 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autoPartsWarehouse/searchAutoPartsWarehouse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autoPartsWarehouse/searchAutoPartsWarehouse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "autoPartsWarehouse/searchAutoPartsWarehouse.html.twig", 1);
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
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 41, $this->source); })()), "id_body", [], "any", false, false, false, 41), 'label');
        yield "</div>
        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 42, $this->source); })()), "id_body", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 43
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 43, $this->source); })()), "id_body", [], "any", false, false, false, 43), 'errors'));
        yield "
      </div>

      <div class=\"col-sm-4 col-lg-4 col-xl-1\">
        <div class=\"lb\">";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 47, $this->source); })()), "id_axle", [], "any", false, false, false, 47), 'label');
        yield "</div>
        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 48, $this->source); })()), "id_axle", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 49
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 49, $this->source); })()), "id_axle", [], "any", false, false, false, 49), 'errors'));
        yield "
      </div>

    </div>

    <div class=\"row mt-3\">
      <div class=\"col-sm-10 col-lg-10 col-xl-6\">
        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 56, $this->source); })()), "button_search_auto_parts_warehouse", [], "any", false, false, false, 56), 'widget', ["label" => "Поиск", "attr" => ["class" => "btn btn-primary w-100"]]);
        // line 57
        yield "
      </div>
    </div>

  </div>

  ";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search_auto_parts_warehouse"]) || array_key_exists("form_search_auto_parts_warehouse", $context) ? $context["form_search_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_search_auto_parts_warehouse" does not exist.', 63, $this->source); })()), 'form_end');
        yield "

  ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", [["delete", "Error", "successfully"]], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 66
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 67
                yield "  <h2 class=\"mt-3 ms-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</h2>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 73
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 74
        yield "
  ";
        // line 76
        yield "
  <div class=\"container-fluid text-center pt-4 \">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow p-3 mb-5 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">

          ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arr_search_data"]) {
            // line 84
            yield "          ";
            if ($context["arr_search_data"]) {
                // line 85
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
                // line 99
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("bi:basket2", ["height" => "30", "width" => "30"]);
                yield "</th>
            <th scope=\"col\">";
                // line 100
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("bx:edit", ["height" => "30", "width" => "30"]);
                yield "</th>
            <th scope=\"col\">";
                // line 101
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("iconoir:delete-circle", ["height" => "30", "width" => "30"]);
                yield "</th>
          </tr>
          ";
            }
            // line 104
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "
        </thead>
        <tbody class=\"table-group-divider\">
          ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 108, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arr_search_data"]) {
            // line 109
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["arr_search_data"]);
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 110
                yield "          ";
                if ($context["information"]) {
                    // line 111
                    yield "
          <tr>
            <td>";
                    // line 113
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, false, false, 113), "getPartNumber", [], "method", false, false, false, 113), "html", null, true);
                    yield "</td>
            <td>";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 114), "getIdOriginalNumber", [], "method", false, true, false, 114), "getOriginalNumber", [], "method", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 114), "getIdOriginalNumber", [], "method", false, true, false, 114), "getOriginalNumber", [], "method", false, false, false, 114), "")) : ("")), "html", null, true);
                    yield "</td>
            <td>";
                    // line 115
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, false, false, 115), "getManufacturer", [], "method", false, false, false, 115), "html", null, true);
                    yield "</td>
            <td>";
                    // line 116
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, false, false, 116), "getAdditionalDescriptions", [], "method", false, false, false, 116), "html", null, true);
                    yield "</td>
            <td>";
                    // line 117
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 117), "getIdPartName", [], "method", false, true, false, 117), "getPartName", [], "method", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 117), "getIdPartName", [], "method", false, true, false, 117), "getPartName", [], "method", false, false, false, 117), "")) : ("")), "html", null, true);
                    yield "</td>
            <td>";
                    // line 118
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 118), "getIdCarBrand", [], "method", false, true, false, 118), "getCarBrand", [], "method", true, true, false, 118)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 118), "getIdCarBrand", [], "method", false, true, false, 118), "getCarBrand", [], "method", false, false, false, 118), "")) : ("")), "html", null, true);
                    yield "</td>
            <td>";
                    // line 119
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 119), "getIdSide", [], "method", false, true, false, 119), "getSide", [], "method", true, true, false, 119)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 119), "getIdSide", [], "method", false, true, false, 119), "getSide", [], "method", false, false, false, 119), "")) : ("")), "html", null, true);
                    yield "</td>
            <td>";
                    // line 120
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 120), "getIdBody", [], "method", false, true, false, 120), "getBody", [], "method", true, true, false, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 120), "getIdBody", [], "method", false, true, false, 120), "getBody", [], "method", false, false, false, 120), "")) : ("")), "html", null, true);
                    yield "</td>
            <td>";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 121), "getIdAxle", [], "method", false, true, false, 121), "getAxle", [], "method", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 121), "getIdAxle", [], "method", false, true, false, 121), "getAxle", [], "method", false, false, false, 121), "")) : ("")), "html", null, true);
                    yield "</td>
            <td>";
                    // line 122
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdPaymentMethod", [], "any", false, true, false, 122), "getmethod", [], "method", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdPaymentMethod", [], "any", false, true, false, 122), "getmethod", [], "method", false, false, false, 122), "")) : ("")), "html", null, true);
                    yield "</td>
            <td>";
                    // line 123
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantity", [], "method", false, false, false, 123) - CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantitySold", [], "method", false, false, false, 123)), ""), "html", null, true);
                    yield "</td>
            <td>";
                    // line 124
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getPrice", [], "method", false, false, false, 124) / 100) / CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantity", [], "method", false, false, false, 124)), ""), 2, ".", ""), "html", null, true);
                    yield "</td>
            <td>";
                    // line 125
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default((((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getPrice", [], "method", false, false, false, 125) / 100) / CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantity", [], "method", false, false, false, 125)) * (CoreExtension::getAttribute($this->env, $this->source,                     // line 126
$context["information"], "getQuantity", [], "method", false, false, false, 126) - CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantitySold", [], "method", false, false, false, 126))), ""), "html", null, true);
                    yield "</td>
            
            <form action=\"cartAutoPartsWarehouseSold\" name=\"cart_auto_parts_warehouse_sold\">

              <td><button class=\"btn btn-outline-success\" type=\"submit\" name=\"id\"
                  value=\"";
                    // line 131
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 131), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("bi:basket2", ["height" => "30", "width" => "30"]);
                    yield "</button></td>

            </form>
            <form action=\"/editAutoPartsWarehouse\" name=\"edit_auto_parts_warehouse\">

              <td><button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"id\"
                  value=\"";
                    // line 137
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 137), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("bx:edit", ["height" => "30", "width" => "30"]);
                    yield "</button></td>

            </form>
            <form action=\"/deleteAutoPartsWarehouse\" name=\"delete_auto_parts_warehouse\">

              <td><button class=\"btn btn-outline-danger\" type=\"submit\" name=\"id\"
                  value=\"";
                    // line 143
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 143), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("iconoir:delete-circle", ["height" => "30", "width" => "30"]);
                    yield "</button></td>

            </form>
          </tr>
          ";
                }
                // line 148
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        yield "
          ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arr_search_data"]) {
            // line 152
            yield "          ";
            if ((Twig\Extension\CoreExtension::testEmpty($context["arr_search_data"]) != ($context["arr_search_data"] === null))) {
                // line 153
                yield "          <h2>Данные не найдены.</h2>
          ";
            }
            // line 155
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr_search_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "
          ";
        // line 157
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["search_data"] ?? null), 0, [], "array", true, true, false, 157)) {
            // line 158
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 158, $this->source); })()), 0, [], "array", false, false, false, 158) === null)) {
                // line 159
                yield "          <h2>Видите параметры в поиск</h2>
          ";
            }
            // line 161
            yield "          ";
        }
        // line 162
        yield "
        </tbody>
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
        return "autoPartsWarehouse/searchAutoPartsWarehouse.html.twig";
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
        return array (  502 => 162,  499 => 161,  495 => 159,  492 => 158,  490 => 157,  487 => 156,  481 => 155,  477 => 153,  474 => 152,  470 => 151,  467 => 150,  461 => 149,  455 => 148,  445 => 143,  434 => 137,  423 => 131,  415 => 126,  414 => 125,  410 => 124,  406 => 123,  402 => 122,  398 => 121,  394 => 120,  390 => 119,  386 => 118,  382 => 117,  378 => 116,  374 => 115,  370 => 114,  366 => 113,  362 => 111,  359 => 110,  354 => 109,  350 => 108,  345 => 105,  339 => 104,  333 => 101,  329 => 100,  325 => 99,  309 => 85,  306 => 84,  302 => 83,  293 => 76,  290 => 74,  280 => 73,  269 => 70,  263 => 69,  254 => 67,  249 => 66,  245 => 65,  240 => 63,  232 => 57,  230 => 56,  220 => 49,  216 => 48,  212 => 47,  205 => 43,  201 => 42,  197 => 41,  189 => 36,  185 => 35,  181 => 34,  174 => 30,  170 => 29,  166 => 28,  159 => 24,  155 => 23,  151 => 22,  141 => 15,  138 => 14,  135 => 12,  125 => 11,  113 => 8,  103 => 7,  83 => 5,  63 => 3,  40 => 1,);
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

  {% for messages in app.flashes(['delete','Error','successfully']) %}
  {% for message in messages %}
  <h2 class=\"mt-3 ms-3\">{{ message }}</h2>
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

          {% for arr_search_data in search_data %}
          {% if arr_search_data %}
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
          {% endfor %}

        </thead>
        <tbody class=\"table-group-divider\">
          {% for arr_search_data in search_data %}
          {% for information in arr_search_data %}
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
            <td>{{ ((information.getPrice() / 100) / information.getQuantity())|default('')|number_format(2, '.', '') }}</td>
            <td>{{ (((information.getPrice() / 100) / information.getQuantity())
            * (information.getQuantity()- information.getQuantitySold()))|default('') }}</td>
            
            <form action=\"cartAutoPartsWarehouseSold\" name=\"cart_auto_parts_warehouse_sold\">

              <td><button class=\"btn btn-outline-success\" type=\"submit\" name=\"id\"
                  value=\"{{ information.getId() }}\">{{ ux_icon('bi:basket2', {'height': '30', 'width': '30'}) }}</button></td>

            </form>
            <form action=\"/editAutoPartsWarehouse\" name=\"edit_auto_parts_warehouse\">

              <td><button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"id\"
                  value=\"{{ information.getId() }}\">{{ ux_icon('bx:edit', {'height': '30', 'width': '30'}) }}</button></td>

            </form>
            <form action=\"/deleteAutoPartsWarehouse\" name=\"delete_auto_parts_warehouse\">

              <td><button class=\"btn btn-outline-danger\" type=\"submit\" name=\"id\"
                  value=\"{{ information.getId() }}\">{{ ux_icon('iconoir:delete-circle', {'height': '30', 'width': '30'}) }}</button></td>

            </form>
          </tr>
          {% endif %}
          {% endfor %}
          {% endfor %}

          {% for arr_search_data in search_data %}
          {% if arr_search_data is empty != arr_search_data is same as NULL %}
          <h2>Данные не найдены.</h2>
          {% endif %}
          {% endfor %}

          {% if search_data[0] is defined %}
          {% if search_data[0] is same as NULL %}
          <h2>Видите параметры в поиск</h2>
          {% endif %}
          {% endif %}

        </tbody>
      </table>
    </div>
  </div>
  {% endblock table %}", "autoPartsWarehouse/searchAutoPartsWarehouse.html.twig", "/var/www/templates/autoPartsWarehouse/searchAutoPartsWarehouse.html.twig");
    }
}
