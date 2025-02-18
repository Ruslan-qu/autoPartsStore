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

/* @autoPartsWarehouse/editAutoPartsManually.html.twig */
class __TwigTemplate_04666fe4c3591100fe120fb36a8386cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@autoPartsWarehouse/editAutoPartsManually.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@autoPartsWarehouse/editAutoPartsManually.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@autoPartsWarehouse/editAutoPartsManually.html.twig", 1);
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
        if (is_iterable((isset($context["data_form_edit_auto_parts_warehouse"]) || array_key_exists("data_form_edit_auto_parts_warehouse", $context) ? $context["data_form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_auto_parts_warehouse" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "  ";
            $context["part_number_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "id_details", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "id_details", [], "any", false, false, false, 16), "")) : (""));
            // line 17
            yield "  ";
            $context["id_counterparty_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "id_counterparty", [], "any", false, true, false, 17), "getId", [], "method", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "id_counterparty", [], "any", false, true, false, 17), "getId", [], "method", false, false, false, 17), "")) : (""));
            // line 18
            yield "  ";
            $context["quantity_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "quantity", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "quantity", [], "any", false, false, false, 18), "")) : (""));
            // line 19
            yield "  ";
            $context["price_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "price", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "price", [], "any", false, false, false, 19), "")) : (""));
            // line 20
            yield "  ";
            $context["date_receipt_auto_parts_warehouse_find_id"] = Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_form_edit_auto_parts_warehouse"]) || array_key_exists("data_form_edit_auto_parts_warehouse", $context) ? $context["data_form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_auto_parts_warehouse" does not exist.', 20, $this->source); })()), "date_receipt_auto_parts_warehouse", [], "any", false, false, false, 20), "Y-m-d"), "");
            // line 21
            yield "  ";
            $context["id_payment_method_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "id_payment_method", [], "any", false, true, false, 21), "getId", [], "method", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "id_payment_method", [], "any", false, true, false, 21), "getId", [], "method", false, false, false, 21), "")) : (""));
            // line 22
            yield "  ";
            $context["id_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "id", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "id", [], "any", false, false, false, 22), "")) : (""));
            // line 23
            yield "  
";
        } else {
            // line 25
            yield "  ";
            $context["part_number_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "getIdDetails", [], "method", false, true, false, 25), "getPartNumber", [], "method", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "getIdDetails", [], "method", false, true, false, 25), "getPartNumber", [], "method", false, false, false, 25), "")) : (""));
            // line 26
            yield "  ";
            $context["id_counterparty_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "getIdCounterparty", [], "method", false, true, false, 26), "getId", [], "method", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "getIdCounterparty", [], "method", false, true, false, 26), "getId", [], "method", false, false, false, 26), "")) : (""));
            // line 27
            yield "  ";
            $context["quantity_find_id"] = Twig\Extension\CoreExtension::default((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_form_edit_auto_parts_warehouse"]) || array_key_exists("data_form_edit_auto_parts_warehouse", $context) ? $context["data_form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_auto_parts_warehouse" does not exist.', 27, $this->source); })()), "getQuantity", [], "method", false, false, false, 27) - CoreExtension::getAttribute($this->env, $this->source,             // line 28
(isset($context["data_form_edit_auto_parts_warehouse"]) || array_key_exists("data_form_edit_auto_parts_warehouse", $context) ? $context["data_form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_auto_parts_warehouse" does not exist.', 28, $this->source); })()), "getQuantitySold", [], "method", false, false, false, 28)), "");
            // line 29
            yield "  ";
            $context["price_find_id"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_form_edit_auto_parts_warehouse"]) || array_key_exists("data_form_edit_auto_parts_warehouse", $context) ? $context["data_form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_auto_parts_warehouse" does not exist.', 29, $this->source); })()), "getPrice", [], "method", false, false, false, 29) / 100) / CoreExtension::getAttribute($this->env, $this->source,             // line 30
(isset($context["data_form_edit_auto_parts_warehouse"]) || array_key_exists("data_form_edit_auto_parts_warehouse", $context) ? $context["data_form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_auto_parts_warehouse" does not exist.', 30, $this->source); })()), "getQuantity", [], "method", false, false, false, 30)) * Twig\Extension\CoreExtension::default((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_form_edit_auto_parts_warehouse"]) || array_key_exists("data_form_edit_auto_parts_warehouse", $context) ? $context["data_form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_auto_parts_warehouse" does not exist.', 30, $this->source); })()), "getQuantity", [], "method", false, false, false, 30) - CoreExtension::getAttribute($this->env, $this->source,             // line 31
(isset($context["data_form_edit_auto_parts_warehouse"]) || array_key_exists("data_form_edit_auto_parts_warehouse", $context) ? $context["data_form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_auto_parts_warehouse" does not exist.', 31, $this->source); })()), "getQuantitySold", [], "method", false, false, false, 31)), ""));
            // line 32
            yield "  ";
            $context["date_receipt_auto_parts_warehouse_find_id"] = Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data_form_edit_auto_parts_warehouse"]) || array_key_exists("data_form_edit_auto_parts_warehouse", $context) ? $context["data_form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "data_form_edit_auto_parts_warehouse" does not exist.', 32, $this->source); })()), "getDateReceiptAutoPartsWarehouse", [], "method", false, false, false, 32), "Y-m-d"), "");
            // line 33
            yield "  ";
            $context["id_payment_method_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "getIdPaymentMethod", [], "method", false, true, false, 33), "getId", [], "method", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "getIdPaymentMethod", [], "method", false, true, false, 33), "getId", [], "method", false, false, false, 33), "")) : (""));
            // line 34
            yield "  ";
            $context["id_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "getId", [], "method", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_auto_parts_warehouse"] ?? null), "getId", [], "method", false, false, false, 34), "")) : (""));
            // line 35
            yield "  
";
        }
        // line 37
        yield "
  ";
        // line 39
        yield "
  ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 40, $this->source); })()), 'form_start');
        yield "

  <div class=\"container-fluid text-center mt-3\">

    <div class=\"row justify-content-evenly\">

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 47, $this->source); })()), "id_details", [], "any", false, false, false, 47), 'label');
        yield "</div>
        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 48, $this->source); })()), "id_details", [], "any", false, false, false, 48), 'widget', ["value" => (isset($context["part_number_find_id"]) || array_key_exists("part_number_find_id", $context) ? $context["part_number_find_id"] : (function () { throw new RuntimeError('Variable "part_number_find_id" does not exist.', 48, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 49, $this->source); })()), "id_details", [], "any", false, false, false, 49), 'errors');
        yield "
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 53, $this->source); })()), "id_counterparty", [], "any", false, false, false, 53), 'label');
        yield "</div>
        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 54, $this->source); })()), "id_counterparty", [], "any", false, false, false, 54), 'widget', ["value" => (isset($context["id_counterparty_find_id"]) || array_key_exists("id_counterparty_find_id", $context) ? $context["id_counterparty_find_id"] : (function () { throw new RuntimeError('Variable "id_counterparty_find_id" does not exist.', 54, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 55, $this->source); })()), "id_counterparty", [], "any", false, false, false, 55), 'errors');
        yield "
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-1 col-xl-1\">
        <div class=\"lb\">";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 59, $this->source); })()), "quantity", [], "any", false, false, false, 59), 'label');
        yield "</div>
        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 60, $this->source); })()), "quantity", [], "any", false, false, false, 60), 'widget', ["value" => (isset($context["quantity_find_id"]) || array_key_exists("quantity_find_id", $context) ? $context["quantity_find_id"] : (function () { throw new RuntimeError('Variable "quantity_find_id" does not exist.', 60, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 61, $this->source); })()), "quantity", [], "any", false, false, false, 61), 'errors');
        yield "
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-1 col-xl-1\">
        <div class=\"lb\">";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 65, $this->source); })()), "price", [], "any", false, false, false, 65), 'label');
        yield "</div>
        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 66, $this->source); })()), "price", [], "any", false, false, false, 66), 'widget', ["value" => (isset($context["price_find_id"]) || array_key_exists("price_find_id", $context) ? $context["price_find_id"] : (function () { throw new RuntimeError('Variable "price_find_id" does not exist.', 66, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 67, $this->source); })()), "price", [], "any", false, false, false, 67), 'errors');
        yield "
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 71, $this->source); })()), "date_receipt_auto_parts_warehouse", [], "any", false, false, false, 71), 'label');
        yield "</div>
        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 72, $this->source); })()), "date_receipt_auto_parts_warehouse", [], "any", false, false, false, 72), 'widget', ["value" => (isset($context["date_receipt_auto_parts_warehouse_find_id"]) || array_key_exists("date_receipt_auto_parts_warehouse_find_id", $context) ? $context["date_receipt_auto_parts_warehouse_find_id"] : (function () { throw new RuntimeError('Variable "date_receipt_auto_parts_warehouse_find_id" does not exist.', 72, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 73, $this->source); })()), "date_receipt_auto_parts_warehouse", [], "any", false, false, false, 73), 'errors');
        yield "
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 77, $this->source); })()), "id_payment_method", [], "any", false, false, false, 77), 'label');
        yield "</div>
        ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 78, $this->source); })()), "id_payment_method", [], "any", false, false, false, 78), 'widget', ["value" => (isset($context["id_payment_method_find_id"]) || array_key_exists("id_payment_method_find_id", $context) ? $context["id_payment_method_find_id"] : (function () { throw new RuntimeError('Variable "id_payment_method_find_id" does not exist.', 78, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 79, $this->source); })()), "id_payment_method", [], "any", false, false, false, 79), 'errors');
        yield "
      </div>

    </div>
    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83), 'widget', ["value" => (isset($context["id_find_id"]) || array_key_exists("id_find_id", $context) ? $context["id_find_id"] : (function () { throw new RuntimeError('Variable "id_find_id" does not exist.', 83, $this->source); })())]);
        yield "
    
    <div class=\"row my-3\">
      <div class=\"col-12 d-grid\">
        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 87, $this->source); })()), "button_edit_manually", [], "any", false, false, false, 87), 'widget', ["label" => "Изменить", "attr" => ["class" => "btn btn-secondary"]]);
        // line 88
        yield "
      </div>
    </div>

  </div>
  ";
        // line 93
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 93, $this->source); })()), 'form_end');
        yield "

  <div class=\"col-auto m-3\"> 
    ";
        // line 96
        if ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 96, $this->source); })())) {
            // line 97
            yield "    <h5>Данные поставки изменены</h5>
    ";
        }
        // line 99
        yield "
    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "flashes", ["Error"], "method", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 101
            yield "    <h5 class=\"mt-3 ms-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</h5>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
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
        return "@autoPartsWarehouse/editAutoPartsManually.html.twig";
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
        return array (  345 => 103,  336 => 101,  332 => 100,  329 => 99,  325 => 97,  323 => 96,  317 => 93,  310 => 88,  308 => 87,  301 => 83,  294 => 79,  290 => 78,  286 => 77,  279 => 73,  275 => 72,  271 => 71,  264 => 67,  260 => 66,  256 => 65,  249 => 61,  245 => 60,  241 => 59,  234 => 55,  230 => 54,  226 => 53,  219 => 49,  215 => 48,  211 => 47,  201 => 40,  198 => 39,  195 => 37,  191 => 35,  188 => 34,  185 => 33,  182 => 32,  180 => 31,  179 => 30,  177 => 29,  175 => 28,  173 => 27,  170 => 26,  167 => 25,  163 => 23,  160 => 22,  157 => 21,  154 => 20,  151 => 19,  148 => 18,  145 => 17,  142 => 16,  140 => 15,  137 => 14,  134 => 12,  124 => 11,  112 => 8,  102 => 7,  82 => 5,  62 => 3,  39 => 1,);
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

{% if data_form_edit_auto_parts_warehouse is iterable %}
  {% set part_number_find_id = data_form_edit_auto_parts_warehouse.id_details|default('') %}
  {% set id_counterparty_find_id = data_form_edit_auto_parts_warehouse.id_counterparty.getId()|default('') %}
  {% set quantity_find_id = data_form_edit_auto_parts_warehouse.quantity|default('') %}
  {% set price_find_id = data_form_edit_auto_parts_warehouse.price|default('') %}
  {% set date_receipt_auto_parts_warehouse_find_id = data_form_edit_auto_parts_warehouse.date_receipt_auto_parts_warehouse|date(\"Y-m-d\")|default('') %}
  {% set id_payment_method_find_id = data_form_edit_auto_parts_warehouse.id_payment_method.getId()|default('') %}
  {% set id_find_id = data_form_edit_auto_parts_warehouse.id|default('') %}
  
{% else %}
  {% set part_number_find_id = data_form_edit_auto_parts_warehouse.getIdDetails().getPartNumber()|default('') %}
  {% set id_counterparty_find_id = data_form_edit_auto_parts_warehouse.getIdCounterparty().getId()|default('') %}
  {% set quantity_find_id = (data_form_edit_auto_parts_warehouse.getQuantity() 
  - data_form_edit_auto_parts_warehouse.getQuantitySold())|default('') %}
  {% set price_find_id = ((data_form_edit_auto_parts_warehouse.getPrice() / 100) 
  / data_form_edit_auto_parts_warehouse.getQuantity()) * (data_form_edit_auto_parts_warehouse.getQuantity() 
  - data_form_edit_auto_parts_warehouse.getQuantitySold())|default('') %}
  {% set date_receipt_auto_parts_warehouse_find_id = data_form_edit_auto_parts_warehouse.getDateReceiptAutoPartsWarehouse()|date(\"Y-m-d\")|default('') %}
  {% set id_payment_method_find_id = data_form_edit_auto_parts_warehouse.getIdPaymentMethod().getId()|default('') %}
  {% set id_find_id = data_form_edit_auto_parts_warehouse.getId()|default('') %}
  
{% endif %}

  {#Форма сохранения поступления деталей#}

  {{ form_start(form_edit_auto_parts_warehouse) }}

  <div class=\"container-fluid text-center mt-3\">

    <div class=\"row justify-content-evenly\">

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">{{ form_label(form_edit_auto_parts_warehouse.id_details) }}</div>
        {{ form_widget(form_edit_auto_parts_warehouse.id_details, { value : part_number_find_id, 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_edit_auto_parts_warehouse.id_details) }}
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">{{ form_label(form_edit_auto_parts_warehouse.id_counterparty) }}</div>
        {{ form_widget(form_edit_auto_parts_warehouse.id_counterparty, { value : id_counterparty_find_id, 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_edit_auto_parts_warehouse.id_counterparty) }}
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-1 col-xl-1\">
        <div class=\"lb\">{{ form_label(form_edit_auto_parts_warehouse.quantity) }}</div>
        {{ form_widget(form_edit_auto_parts_warehouse.quantity, { value : quantity_find_id, 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_edit_auto_parts_warehouse.quantity) }}
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-1 col-xl-1\">
        <div class=\"lb\">{{ form_label(form_edit_auto_parts_warehouse.price) }}</div>
        {{ form_widget(form_edit_auto_parts_warehouse.price, { value : price_find_id, 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_edit_auto_parts_warehouse.price) }}
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">{{ form_label(form_edit_auto_parts_warehouse.date_receipt_auto_parts_warehouse) }}</div>
        {{ form_widget(form_edit_auto_parts_warehouse.date_receipt_auto_parts_warehouse, { value : date_receipt_auto_parts_warehouse_find_id, 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_edit_auto_parts_warehouse.date_receipt_auto_parts_warehouse) }}
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">{{ form_label(form_edit_auto_parts_warehouse.id_payment_method) }}</div>
        {{ form_widget(form_edit_auto_parts_warehouse.id_payment_method, { value : id_payment_method_find_id, 'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_edit_auto_parts_warehouse.id_payment_method) }}
      </div>

    </div>
    {{ form_widget(form_edit_auto_parts_warehouse.id, { value : id_find_id }) }}
    
    <div class=\"row my-3\">
      <div class=\"col-12 d-grid\">
        {{ form_widget(form_edit_auto_parts_warehouse.button_edit_manually, { 'label': 'Изменить', 'attr': {'class':
        'btn btn-secondary'}}) }}
      </div>
    </div>

  </div>
  {{ form_end(form_edit_auto_parts_warehouse) }}

  <div class=\"col-auto m-3\"> 
    {% if id %}
    <h5>Данные поставки изменены</h5>
    {% endif %}

    {% for message in app.flashes('Error') %}
    <h5 class=\"mt-3 ms-3\">{{ message }}</h5>
    {% endfor %}
  </div>
  {% endblock form %}", "@autoPartsWarehouse/editAutoPartsManually.html.twig", "/var/www/src/AutoPartsWarehouse/InfrastructureAutoPartsWarehouse/ApiAutoPartsWarehouse/templatesAutoPartsWarehouse/editAutoPartsManually.html.twig");
    }
}
