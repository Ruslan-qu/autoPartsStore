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

/* autoPartsWarehouse/editAutoPartsManually.html.twig */
class __TwigTemplate_36f493ff251331b35566b033728d69fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autoPartsWarehouse/editAutoPartsManually.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autoPartsWarehouse/editAutoPartsManually.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "autoPartsWarehouse/editAutoPartsManually.html.twig", 1);
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
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 55, $this->source); })()), "id_counterparty", [], "any", false, false, false, 55), 'label');
        yield "</div>
        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 56, $this->source); })()), "id_counterparty", [], "any", false, false, false, 56), 'widget', ["value" => (isset($context["id_counterparty_find_id"]) || array_key_exists("id_counterparty_find_id", $context) ? $context["id_counterparty_find_id"] : (function () { throw new RuntimeError('Variable "id_counterparty_find_id" does not exist.', 56, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 57, $this->source); })()), "id_counterparty", [], "any", false, false, false, 57), 'errors');
        yield "
      </div>


      <div class=\"col-sm-6 col-md-4 col-lg-1 col-xl-1\">
        <div class=\"lb\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 62, $this->source); })()), "quantity", [], "any", false, false, false, 62), 'label');
        yield "</div>
        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 63, $this->source); })()), "quantity", [], "any", false, false, false, 63), 'widget', ["value" => (isset($context["quantity_find_id"]) || array_key_exists("quantity_find_id", $context) ? $context["quantity_find_id"] : (function () { throw new RuntimeError('Variable "quantity_find_id" does not exist.', 63, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 64, $this->source); })()), "quantity", [], "any", false, false, false, 64), 'errors');
        yield "
      </div>

      <div class=\"col-sm-6 col-md-4 col-lg-1 col-xl-1\">
        <div class=\"lb\">";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 68, $this->source); })()), "price", [], "any", false, false, false, 68), 'label');
        yield "</div>
        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 69, $this->source); })()), "price", [], "any", false, false, false, 69), 'widget', ["value" => (isset($context["price_find_id"]) || array_key_exists("price_find_id", $context) ? $context["price_find_id"] : (function () { throw new RuntimeError('Variable "price_find_id" does not exist.', 69, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 70, $this->source); })()), "price", [], "any", false, false, false, 70), 'errors');
        yield "
      </div>


      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 75, $this->source); })()), "date_receipt_auto_parts_warehouse", [], "any", false, false, false, 75), 'label');
        yield "</div>
        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 76, $this->source); })()), "date_receipt_auto_parts_warehouse", [], "any", false, false, false, 76), 'widget', ["value" => (isset($context["date_receipt_auto_parts_warehouse_find_id"]) || array_key_exists("date_receipt_auto_parts_warehouse_find_id", $context) ? $context["date_receipt_auto_parts_warehouse_find_id"] : (function () { throw new RuntimeError('Variable "date_receipt_auto_parts_warehouse_find_id" does not exist.', 76, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 77, $this->source); })()), "date_receipt_auto_parts_warehouse", [], "any", false, false, false, 77), 'errors');
        yield "
      </div>


      <div class=\"col-sm-6 col-md-4 col-lg-2 col-xl-2\">
        <div class=\"lb\">";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 82, $this->source); })()), "id_payment_method", [], "any", false, false, false, 82), 'label');
        yield "</div>
        ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 83, $this->source); })()), "id_payment_method", [], "any", false, false, false, 83), 'widget', ["value" => (isset($context["id_payment_method_find_id"]) || array_key_exists("id_payment_method_find_id", $context) ? $context["id_payment_method_find_id"] : (function () { throw new RuntimeError('Variable "id_payment_method_find_id" does not exist.', 83, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
        ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 84, $this->source); })()), "id_payment_method", [], "any", false, false, false, 84), 'errors');
        yield "
      </div>

    </div>
    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88), 'widget', ["value" => (isset($context["id_find_id"]) || array_key_exists("id_find_id", $context) ? $context["id_find_id"] : (function () { throw new RuntimeError('Variable "id_find_id" does not exist.', 88, $this->source); })())]);
        yield "
    

    <div class=\"row my-3\">
      <div class=\"col-12 d-grid\">
        ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 93, $this->source); })()), "button_edit_manually", [], "any", false, false, false, 93), 'widget', ["label" => "Изменить", "attr" => ["class" => "btn btn-secondary"]]);
        // line 94
        yield "
      </div>
    </div>

  </div>
  ";
        // line 99
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_edit_auto_parts_warehouse"]) || array_key_exists("form_edit_auto_parts_warehouse", $context) ? $context["form_edit_auto_parts_warehouse"] : (function () { throw new RuntimeError('Variable "form_edit_auto_parts_warehouse" does not exist.', 99, $this->source); })()), 'form_end');
        yield "

  <div class=\"col-auto m-3\">
    
    ";
        // line 103
        if ((isset($context["arr_saving_information"]) || array_key_exists("arr_saving_information", $context) ? $context["arr_saving_information"] : (function () { throw new RuntimeError('Variable "arr_saving_information" does not exist.', 103, $this->source); })())) {
            // line 104
            yield "    <h5>Данные поставки изменены</h5>
    ";
        }
        // line 106
        yield "    
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
        return "autoPartsWarehouse/editAutoPartsManually.html.twig";
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
        return array (  336 => 106,  332 => 104,  330 => 103,  323 => 99,  316 => 94,  314 => 93,  306 => 88,  299 => 84,  295 => 83,  291 => 82,  283 => 77,  279 => 76,  275 => 75,  267 => 70,  263 => 69,  259 => 68,  252 => 64,  248 => 63,  244 => 62,  236 => 57,  232 => 56,  228 => 55,  219 => 49,  215 => 48,  211 => 47,  201 => 40,  198 => 39,  195 => 37,  191 => 35,  188 => 34,  185 => 33,  182 => 32,  180 => 31,  179 => 30,  177 => 29,  175 => 28,  173 => 27,  170 => 26,  167 => 25,  163 => 23,  160 => 22,  157 => 21,  154 => 20,  151 => 19,  148 => 18,  145 => 17,  142 => 16,  140 => 15,  137 => 14,  134 => 12,  124 => 11,  112 => 8,  102 => 7,  82 => 5,  62 => 3,  39 => 1,);
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
    
    {% if arr_saving_information %}
    <h5>Данные поставки изменены</h5>
    {% endif %}
    
  </div>
  {% endblock form %}", "autoPartsWarehouse/editAutoPartsManually.html.twig", "/var/www/templates/autoPartsWarehouse/editAutoPartsManually.html.twig");
    }
}
