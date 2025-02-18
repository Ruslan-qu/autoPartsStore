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

/* autoPartsWarehouse/editСartAutoPartsWarehouseSold.html.twig */
class __TwigTemplate_c585eced4a608a1261c5c4bb3bbebc00 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autoPartsWarehouse/editСartAutoPartsWarehouseSold.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autoPartsWarehouse/editСartAutoPartsWarehouseSold.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "autoPartsWarehouse/editСartAutoPartsWarehouseSold.html.twig", 1);
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
        $context["date_sold_find_id"] = Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 15, $this->source); })()), "getDateSold", [], "method", false, false, false, 15), "Y-m-d"), "");
        // line 16
        yield "  ";
        $context["quantity_sold_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getQuantitySold", [], "method", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getQuantitySold", [], "method", false, false, false, 16), "")) : (""));
        // line 17
        yield "  ";
        $context["price_sold_find_id"] = Twig\Extension\CoreExtension::default((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 17, $this->source); })()), "getPriceSold", [], "method", false, false, false, 17) / 100), "");
        // line 18
        yield "  ";
        $context["id_find_id_auto_parts_warehouse"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getIdAutoPartsWarehouse", [], "method", false, true, false, 18), "getId", [], "method", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getIdAutoPartsWarehouse", [], "method", false, true, false, 18), "getId", [], "method", false, false, false, 18), "")) : (""));
        // line 19
        yield "  ";
        $context["id_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getId", [], "method", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getId", [], "method", false, false, false, 19), "")) : (""));
        // line 20
        yield "  ";
        if ((isset($context["valid_form_edit_cart"]) || array_key_exists("valid_form_edit_cart", $context) ? $context["valid_form_edit_cart"] : (function () { throw new RuntimeError('Variable "valid_form_edit_cart" does not exist.', 20, $this->source); })())) {
            // line 21
            yield "  ";
            $context["date_sold_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["valid_form_edit_cart"] ?? null), "date_sold", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["valid_form_edit_cart"] ?? null), "date_sold", [], "any", false, false, false, 21), "")) : (""));
            // line 22
            yield "  ";
            $context["quantity_sold_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["valid_form_edit_cart"] ?? null), "quantity_sold", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["valid_form_edit_cart"] ?? null), "quantity_sold", [], "any", false, false, false, 22), "")) : (""));
            // line 23
            yield "  ";
            $context["price_sold_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["valid_form_edit_cart"] ?? null), "price_sold", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["valid_form_edit_cart"] ?? null), "price_sold", [], "any", false, false, false, 23), "")) : (""));
            // line 24
            yield "  ";
            $context["id_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["valid_form_edit_cart"] ?? null), "id", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["valid_form_edit_cart"] ?? null), "id", [], "any", false, false, false, 24), "")) : (""));
            // line 25
            yield "  ";
        }
        // line 26
        yield "
  ";
        // line 28
        yield "
  <div class=\"container-fluid text-center pt-3\">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow mb-4 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">
          ";
        // line 34
        if ((isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 34, $this->source); })())) {
            // line 35
            yield "          <tr>
            <th scope=\"col\">№ детали</th>
            <th scope=\"col\">Производитель</th>
            <th scope=\"col\">Название детали</th>
            <th scope=\"col\">Марка</th>
            <th scope=\"col\">Сторона</th>
            <th scope=\"col\">Кузов</th>
            <th scope=\"col\">Перед Зад</th>
          </tr>
          ";
        }
        // line 45
        yield "        </thead>

        <tbody class=\"table-group-divider\">
          ";
        // line 48
        if ((isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 48, $this->source); })())) {
            // line 49
            yield "          <tr>
            <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 50, $this->source); })()), "getIdAutoPartsWarehouse", [], "any", false, false, false, 50), "getIdDetails", [], "any", false, false, false, 50), "getPartNumber", [], "method", false, false, false, 50), "html", null, true);
            yield "</td>
            <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 51, $this->source); })()), "getIdAutoPartsWarehouse", [], "any", false, false, false, 51), "getIdDetails", [], "any", false, false, false, 51), "getManufacturer", [], "method", false, false, false, 51), "html", null, true);
            yield "</td>
            <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getIdAutoPartsWarehouse", [], "any", false, true, false, 52), "getIdDetails", [], "any", false, true, false, 52), "getIdPartName", [], "method", false, true, false, 52), "getPartName", [], "method", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getIdAutoPartsWarehouse", [], "any", false, true, false, 52), "getIdDetails", [], "any", false, true, false, 52), "getIdPartName", [], "method", false, true, false, 52), "getPartName", [], "method", false, false, false, 52), "")) : ("")), "html", null, true);
            yield "</td>
            <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getIdAutoPartsWarehouse", [], "any", false, true, false, 53), "getIdDetails", [], "any", false, true, false, 53), "getIdCarBrand", [], "method", false, true, false, 53), "getCarBrand", [], "method", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getIdAutoPartsWarehouse", [], "any", false, true, false, 53), "getIdDetails", [], "any", false, true, false, 53), "getIdCarBrand", [], "method", false, true, false, 53), "getCarBrand", [], "method", false, false, false, 53), "")) : ("")), "html", null, true);
            yield "</td>
            <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getIdAutoPartsWarehouse", [], "any", false, true, false, 54), "getIdDetails", [], "any", false, true, false, 54), "getIdSide", [], "method", false, true, false, 54), "getSide", [], "method", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getIdAutoPartsWarehouse", [], "any", false, true, false, 54), "getIdDetails", [], "any", false, true, false, 54), "getIdSide", [], "method", false, true, false, 54), "getSide", [], "method", false, false, false, 54), "")) : ("")), "html", null, true);
            yield "</td>
            <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getIdAutoPartsWarehouse", [], "any", false, true, false, 55), "getIdDetails", [], "any", false, true, false, 55), "getIdBody", [], "method", false, true, false, 55), "getBody", [], "method", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getIdAutoPartsWarehouse", [], "any", false, true, false, 55), "getIdDetails", [], "any", false, true, false, 55), "getIdBody", [], "method", false, true, false, 55), "getBody", [], "method", false, false, false, 55), "")) : ("")), "html", null, true);
            yield "</td>
            <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getIdAutoPartsWarehouse", [], "any", false, true, false, 56), "getIdDetails", [], "any", false, true, false, 56), "getIdAxle", [], "method", false, true, false, 56), "getAxle", [], "method", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_cart_auto_parts_warehouse"] ?? null), "getIdAutoPartsWarehouse", [], "any", false, true, false, 56), "getIdDetails", [], "any", false, true, false, 56), "getIdAxle", [], "method", false, true, false, 56), "getAxle", [], "method", false, false, false, 56), "")) : ("")), "html", null, true);
            yield "</td>
          </tr>
          ";
        }
        // line 59
        yield "        </tbody>
      </table>
    </div>
  </div>

  <div class=\"container-fluid text-center pt-3\">

    <div class=\"row\">
      <div class=\"col-sm-12 col-lg-6 col-xl-6\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow mb-4 bg-body-tertiary rounded\">
            <thead class=\"table-secondary\">
              
              ";
        // line 73
        if ((isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 73, $this->source); })())) {
            // line 74
            yield "              <tr>
                <th scope=\"col\">Кол-во</th>
                <th scope=\"col\">Цена шт</th>
                <th scope=\"col\">Цена общая</th>
              </tr>
              ";
        }
        // line 80
        yield "
            </thead>
            <tbody class=\"table-group-divider\">
          ";
        // line 84
        yield "              ";
        if ((isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 84, $this->source); })())) {
            // line 85
            yield "              <tr>

                <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 87, $this->source); })()), "getIdAutoPartsWarehouse", [], "method", false, false, false, 87), "getQuantity", [], "method", false, false, false, 87) - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 88
(isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 88, $this->source); })()), "getIdAutoPartsWarehouse", [], "method", false, false, false, 88), "getQuantitySold", [], "method", false, false, false, 88)), ""), "html", null, true);
            yield "</td>

                <td>";
            // line 90
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 90, $this->source); })()), "getIdAutoPartsWarehouse", [], "method", false, false, false, 90), "getQuantity", [], "method", false, false, false, 90) - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 91
(isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 91, $this->source); })()), "getIdAutoPartsWarehouse", [], "method", false, false, false, 91), "getQuantitySold", [], "method", false, false, false, 91)) != 0)) {
                // line 92
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 92, $this->source); })()), "getIdAutoPartsWarehouse", [], "method", false, false, false, 92), "getPrice", [], "method", false, false, false, 92) / 100) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 93
(isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 93, $this->source); })()), "getIdAutoPartsWarehouse", [], "method", false, false, false, 93), "getQuantity", [], "method", false, false, false, 93)), ""), 2, ".", ""), "html", null, true);
                // line 94
                yield "
                  ";
            } else {
                // line 96
                yield "                  ";
                yield 0;
                yield "
                  ";
            }
            // line 97
            yield "</td>

                <td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 99, $this->source); })()), "getIdAutoPartsWarehouse", [], "method", false, false, false, 99), "getPrice", [], "method", false, false, false, 99) / 100) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 100
(isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 100, $this->source); })()), "getIdAutoPartsWarehouse", [], "method", false, false, false, 100), "getQuantity", [], "method", false, false, false, 100)) * (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 101
(isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 101, $this->source); })()), "getIdAutoPartsWarehouse", [], "method", false, false, false, 101), "getQuantity", [], "method", false, false, false, 101) - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 102
(isset($context["data_form_edit_cart_auto_parts_warehouse"]) || array_key_exists("data_form_edit_cart_auto_parts_warehouse", $context) ? $context["data_form_edit_cart_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_cart_auto_parts_warehouse" does not exist.', 102, $this->source); })()), "getIdAutoPartsWarehouse", [], "method", false, false, false, 102), "getQuantitySold", [], "method", false, false, false, 102))), ""), "html", null, true);
            yield "</td>

              </tr>
              ";
        }
        // line 106
        yield "              
            </tbody>
          </table>
        </div>
      </div>


      ";
        // line 114
        yield "      <div class=\"col-sm-12 col-lg-6 col-xl-6\">
        ";
        // line 115
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_edit_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_edit_cart_auto_parts_warehouse_sold", $context) ? $context["form_edit_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_edit_cart_auto_parts_warehouse_sold" does not exist.', 115, $this->source); })()), 'form_start');
        yield "

        <div class=\"row justify-content-start\">

          <div class=\"col-sm-4 col-lg-4 col-xl-4\">
            <div class=\"lb\">";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_edit_cart_auto_parts_warehouse_sold", $context) ? $context["form_edit_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_edit_cart_auto_parts_warehouse_sold" does not exist.', 120, $this->source); })()), "date_sold", [], "any", false, false, false, 120), 'label');
        yield "</div>
            ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_edit_cart_auto_parts_warehouse_sold", $context) ? $context["form_edit_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_edit_cart_auto_parts_warehouse_sold" does not exist.', 121, $this->source); })()), "date_sold", [], "any", false, false, false, 121), 'widget', ["value" => (isset($context["date_sold_find_id"]) || array_key_exists("date_sold_find_id", $context) ? $context["date_sold_find_id"] : (function () { throw new RuntimeError('Variable "date_sold_find_id" does not exist.', 121, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 122
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_edit_cart_auto_parts_warehouse_sold", $context) ? $context["form_edit_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_edit_cart_auto_parts_warehouse_sold" does not exist.', 122, $this->source); })()), "date_sold", [], "any", false, false, false, 122), 'errors'));
        yield "
            ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "flashes", ["[date_sold]"], "method", false, false, false, 123));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 124
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "          </div>


          <div class=\"col-sm-4 col-lg-4 col-xl-4\">
            <div class=\"lb\">";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_edit_cart_auto_parts_warehouse_sold", $context) ? $context["form_edit_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_edit_cart_auto_parts_warehouse_sold" does not exist.', 130, $this->source); })()), "quantity_sold", [], "any", false, false, false, 130), 'label');
        yield "</div>
            ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_edit_cart_auto_parts_warehouse_sold", $context) ? $context["form_edit_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_edit_cart_auto_parts_warehouse_sold" does not exist.', 131, $this->source); })()), "quantity_sold", [], "any", false, false, false, 131), 'widget', ["value" => (isset($context["quantity_sold_find_id"]) || array_key_exists("quantity_sold_find_id", $context) ? $context["quantity_sold_find_id"] : (function () { throw new RuntimeError('Variable "quantity_sold_find_id" does not exist.', 131, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 132
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_edit_cart_auto_parts_warehouse_sold", $context) ? $context["form_edit_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_edit_cart_auto_parts_warehouse_sold" does not exist.', 132, $this->source); })()), "quantity_sold", [], "any", false, false, false, 132), 'errors'));
        yield "
            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "flashes", [["[quantity_sold_error][Range]", "[quantity_sold_error][NotBlank]"]], "method", false, false, false, 133));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 134
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 135
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            yield "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 138
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "flashes", ["[quantity_sold_auto_parts_warehouse_error]"], "method", false, false, false, 138));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 139
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "          </div>


          <div class=\"col-sm-4 col-lg-4 col-xl-4\">
            <div class=\"lb\">";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_edit_cart_auto_parts_warehouse_sold", $context) ? $context["form_edit_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_edit_cart_auto_parts_warehouse_sold" does not exist.', 146, $this->source); })()), "price_sold", [], "any", false, false, false, 146), 'label');
        yield "</div>
            ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_edit_cart_auto_parts_warehouse_sold", $context) ? $context["form_edit_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_edit_cart_auto_parts_warehouse_sold" does not exist.', 147, $this->source); })()), "price_sold", [], "any", false, false, false, 147), 'widget', ["value" => (isset($context["price_sold_find_id"]) || array_key_exists("price_sold_find_id", $context) ? $context["price_sold_find_id"] : (function () { throw new RuntimeError('Variable "price_sold_find_id" does not exist.', 147, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 148
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_edit_cart_auto_parts_warehouse_sold", $context) ? $context["form_edit_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_edit_cart_auto_parts_warehouse_sold" does not exist.', 148, $this->source); })()), "price_sold", [], "any", false, false, false, 148), 'errors'));
        yield "
            ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "flashes", ["[price_sold_error][NotBlank]"], "method", false, false, false, 149));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 150
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "          </div>

          
          ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_edit_cart_auto_parts_warehouse_sold", $context) ? $context["form_edit_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_edit_cart_auto_parts_warehouse_sold" does not exist.', 155, $this->source); })()), "id_auto_parts_warehouse", [], "any", false, false, false, 155), 'widget', ["value" => (isset($context["id_find_id_auto_parts_warehouse"]) || array_key_exists("id_find_id_auto_parts_warehouse", $context) ? $context["id_find_id_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "id_find_id_auto_parts_warehouse" does not exist.', 155, $this->source); })())]);
        yield "
          ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_edit_cart_auto_parts_warehouse_sold", $context) ? $context["form_edit_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_edit_cart_auto_parts_warehouse_sold" does not exist.', 156, $this->source); })()), "id", [], "any", false, false, false, 156), 'widget', ["value" => (isset($context["id_find_id"]) || array_key_exists("id_find_id", $context) ? $context["id_find_id"] : (function () { throw new RuntimeError('Variable "id_find_id" does not exist.', 156, $this->source); })())]);
        yield "
          
        </div>
      </div>
    </div>

    <div class=\"row my-2 pt-2\">
      <div class=\"col-sm-12 col-lg-12 col-xl-12\">
        ";
        // line 164
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_edit_cart_auto_parts_warehouse_sold", $context) ? $context["form_edit_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_edit_cart_auto_parts_warehouse_sold" does not exist.', 164, $this->source); })()), "button_edit_cart_auto_parts", [], "any", false, false, false, 164), 'widget', ["label" => "Изменить", "attr" => ["class" => "btn btn-secondary w-100"]]);
        // line 165
        yield "
      </div>
    </div>

  </div>

  ";
        // line 171
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_edit_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_edit_cart_auto_parts_warehouse_sold", $context) ? $context["form_edit_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_edit_cart_auto_parts_warehouse_sold" does not exist.', 171, $this->source); })()), 'form_end');
        yield "

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
        return "autoPartsWarehouse/editСartAutoPartsWarehouseSold.html.twig";
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
        return array (  480 => 171,  472 => 165,  470 => 164,  459 => 156,  455 => 155,  450 => 152,  441 => 150,  437 => 149,  433 => 148,  429 => 147,  425 => 146,  419 => 142,  413 => 141,  404 => 139,  399 => 138,  394 => 137,  385 => 135,  380 => 134,  375 => 133,  371 => 132,  367 => 131,  363 => 130,  357 => 126,  348 => 124,  344 => 123,  340 => 122,  336 => 121,  332 => 120,  324 => 115,  321 => 114,  312 => 106,  305 => 102,  304 => 101,  303 => 100,  302 => 99,  298 => 97,  292 => 96,  288 => 94,  286 => 93,  284 => 92,  282 => 91,  281 => 90,  276 => 88,  275 => 87,  271 => 85,  268 => 84,  263 => 80,  255 => 74,  253 => 73,  237 => 59,  231 => 56,  227 => 55,  223 => 54,  219 => 53,  215 => 52,  211 => 51,  207 => 50,  204 => 49,  202 => 48,  197 => 45,  185 => 35,  183 => 34,  175 => 28,  172 => 26,  169 => 25,  166 => 24,  163 => 23,  160 => 22,  157 => 21,  154 => 20,  151 => 19,  148 => 18,  145 => 17,  142 => 16,  140 => 15,  137 => 14,  134 => 12,  124 => 11,  112 => 8,  102 => 7,  82 => 5,  62 => 3,  39 => 1,);
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

   {#Переменный для вывода данных в форме #}
  
  {% set date_sold_find_id = data_form_edit_cart_auto_parts_warehouse.getDateSold()|date(\"Y-m-d\")|default('') %}
  {% set quantity_sold_find_id = data_form_edit_cart_auto_parts_warehouse.getQuantitySold()|default('') %}
  {% set price_sold_find_id = (data_form_edit_cart_auto_parts_warehouse.getPriceSold() / 100)|default('') %}
  {% set id_find_id_auto_parts_warehouse = data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse().getId()|default('') %}
  {% set id_find_id = data_form_edit_cart_auto_parts_warehouse.getId()|default('') %}
  {% if valid_form_edit_cart %}
  {% set date_sold_find_id = valid_form_edit_cart.date_sold|default('') %}
  {% set quantity_sold_find_id = valid_form_edit_cart.quantity_sold|default('') %}
  {% set price_sold_find_id = valid_form_edit_cart.price_sold|default('') %}
  {% set id_find_id = valid_form_edit_cart.id|default('') %}
  {% endif %}

  {#Таблица автодеталей#}

  <div class=\"container-fluid text-center pt-3\">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow mb-4 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">
          {% if data_form_edit_cart_auto_parts_warehouse %}
          <tr>
            <th scope=\"col\">№ детали</th>
            <th scope=\"col\">Производитель</th>
            <th scope=\"col\">Название детали</th>
            <th scope=\"col\">Марка</th>
            <th scope=\"col\">Сторона</th>
            <th scope=\"col\">Кузов</th>
            <th scope=\"col\">Перед Зад</th>
          </tr>
          {% endif %}
        </thead>

        <tbody class=\"table-group-divider\">
          {% if data_form_edit_cart_auto_parts_warehouse %}
          <tr>
            <td>{{ data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse.getIdDetails.getPartNumber() }}</td>
            <td>{{ data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse.getIdDetails.getManufacturer() }}</td>
            <td>{{ data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse.getIdDetails.getIdPartName().getPartName()|default('') }}</td>
            <td>{{ data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse.getIdDetails.getIdCarBrand().getCarBrand()|default('') }}</td>
            <td>{{ data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse.getIdDetails.getIdSide().getSide()|default('') }}</td>
            <td>{{ data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse.getIdDetails.getIdBody().getBody()|default('') }}</td>
            <td>{{ data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse.getIdDetails.getIdAxle().getAxle()|default('') }}</td>
          </tr>
          {% endif %}
        </tbody>
      </table>
    </div>
  </div>

  <div class=\"container-fluid text-center pt-3\">

    <div class=\"row\">
      <div class=\"col-sm-12 col-lg-6 col-xl-6\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow mb-4 bg-body-tertiary rounded\">
            <thead class=\"table-secondary\">
              
              {% if data_form_edit_cart_auto_parts_warehouse %}
              <tr>
                <th scope=\"col\">Кол-во</th>
                <th scope=\"col\">Цена шт</th>
                <th scope=\"col\">Цена общая</th>
              </tr>
              {% endif %}

            </thead>
            <tbody class=\"table-group-divider\">
          {#} {{ dump(app.flashes('[quantity_sold_error][NotBlank]')) }}#}
              {% if data_form_edit_cart_auto_parts_warehouse %}
              <tr>

                <td>{{ (data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse().getQuantity() 
                - data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse().getQuantitySold())|default('') }}</td>

                <td>{% if  (data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse().getQuantity() 
                - data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse().getQuantitySold()) != 0 %}
                {{ ((data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse().getPrice() / 100)
                  / data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse().getQuantity()) 
                  |default('')|number_format(2,'.','')}}
                  {% else %}
                  {{0}}
                  {% endif %}</td>

                <td>{{ (((data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse().getPrice() / 100) 
                / data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse().getQuantity()) 
                * (data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse().getQuantity() 
                - data_form_edit_cart_auto_parts_warehouse.getIdAutoPartsWarehouse().getQuantitySold()))|default('') }}</td>

              </tr>
              {% endif %}
              
            </tbody>
          </table>
        </div>
      </div>


      {#Форма изменения в корзину деталей#}
      <div class=\"col-sm-12 col-lg-6 col-xl-6\">
        {{ form_start(form_edit_cart_auto_parts_warehouse_sold) }}

        <div class=\"row justify-content-start\">

          <div class=\"col-sm-4 col-lg-4 col-xl-4\">
            <div class=\"lb\">{{ form_label(form_edit_cart_auto_parts_warehouse_sold.date_sold) }}</div>
            {{ form_widget(form_edit_cart_auto_parts_warehouse_sold.date_sold, { value : date_sold_find_id, 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_edit_cart_auto_parts_warehouse_sold.date_sold) |nl2br }}
            {% for message in app.flashes('[date_sold]') %}
            {{ message }}
            {% endfor %}
          </div>


          <div class=\"col-sm-4 col-lg-4 col-xl-4\">
            <div class=\"lb\">{{ form_label(form_edit_cart_auto_parts_warehouse_sold.quantity_sold) }}</div>
            {{ form_widget(form_edit_cart_auto_parts_warehouse_sold.quantity_sold, { value : quantity_sold_find_id, 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_edit_cart_auto_parts_warehouse_sold.quantity_sold) |nl2br }}
            {% for messages in app.flashes(['[quantity_sold_error][Range]', '[quantity_sold_error][NotBlank]']) %}
            {% for message in messages %}
            {{ message }}
            {% endfor %}
            {% else %}
            {% for message in app.flashes('[quantity_sold_auto_parts_warehouse_error]') %}
            {{ message }}
            {% endfor %}
            {% endfor %}
          </div>


          <div class=\"col-sm-4 col-lg-4 col-xl-4\">
            <div class=\"lb\">{{ form_label(form_edit_cart_auto_parts_warehouse_sold.price_sold) }}</div>
            {{ form_widget(form_edit_cart_auto_parts_warehouse_sold.price_sold, { value : price_sold_find_id, 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_edit_cart_auto_parts_warehouse_sold.price_sold) |nl2br }}
            {% for message in app.flashes('[price_sold_error][NotBlank]') %}
            {{ message }}
            {% endfor %}
          </div>

          
          {{ form_widget(form_edit_cart_auto_parts_warehouse_sold.id_auto_parts_warehouse, { value : id_find_id_auto_parts_warehouse }) }}
          {{ form_widget(form_edit_cart_auto_parts_warehouse_sold.id, { value : id_find_id }) }}
          
        </div>
      </div>
    </div>

    <div class=\"row my-2 pt-2\">
      <div class=\"col-sm-12 col-lg-12 col-xl-12\">
        {{ form_widget(form_edit_cart_auto_parts_warehouse_sold.button_edit_cart_auto_parts,
        { 'label': 'Изменить', 'attr': {'class': 'btn btn-secondary w-100'}}) }}
      </div>
    </div>

  </div>

  {{ form_end(form_edit_cart_auto_parts_warehouse_sold) }}

  {% endblock form %}", "autoPartsWarehouse/editСartAutoPartsWarehouseSold.html.twig", "/var/www/templates/autoPartsWarehouse/editСartAutoPartsWarehouseSold.html.twig");
    }
}
