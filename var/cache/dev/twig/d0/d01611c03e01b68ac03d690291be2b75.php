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

/* @partNumbers/editPartNumbers.html.twig */
class __TwigTemplate_add70fbe39ff11b10bfcd4a71c362c0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@partNumbers/editPartNumbers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@partNumbers/editPartNumbers.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@partNumbers/editPartNumbers.html.twig", 1);
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
        if (is_iterable((isset($context["data_form_edit_part_numbers"]) || array_key_exists("data_form_edit_part_numbers", $context) ? $context["data_form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "data_form_edit_part_numbers" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "  ";
            $context["part_number_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "part_number", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "part_number", [], "any", false, false, false, 16), "")) : (""));
            // line 17
            yield "  ";
            $context["original_number_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "original_number", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "original_number", [], "any", false, false, false, 17), "")) : (""));
            // line 18
            yield "  ";
            $context["manufacturer_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "manufacturer", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "manufacturer", [], "any", false, false, false, 18), "")) : (""));
            // line 19
            yield "  ";
            $context["additional_descriptions_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "additional_descriptions", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "additional_descriptions", [], "any", false, false, false, 19), "")) : (""));
            // line 20
            yield "  ";
            $context["part_name_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id_part_name", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id_part_name", [], "any", false, false, false, 20), "")) : (""));
            // line 21
            yield "  ";
            $context["car_brand_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id_car_brand", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id_car_brand", [], "any", false, false, false, 21), "")) : (""));
            // line 22
            yield "  ";
            $context["side_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id_side", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id_side", [], "any", false, false, false, 22), "")) : (""));
            // line 23
            yield "  ";
            $context["body_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id_body", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id_body", [], "any", false, false, false, 23), "")) : (""));
            // line 24
            yield "  ";
            $context["axle_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id_axle", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id_axle", [], "any", false, false, false, 24), "")) : (""));
            // line 25
            yield "  ";
            $context["in_stock_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id_in_stock", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id_in_stock", [], "any", false, false, false, 25), "")) : (""));
            // line 26
            yield "  ";
            $context["id_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id", [], "any", false, false, false, 26), "")) : (""));
            // line 27
            yield "  ";
            $context["id_original_number_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id_original_number", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "id_original_number", [], "any", false, false, false, 27), "")) : (""));
        } else {
            // line 29
            yield "  ";
            $context["part_number_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getPartNumber", [], "method", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getPartNumber", [], "method", false, false, false, 29), "")) : (""));
            // line 30
            yield "  ";
            $context["original_number_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdOriginalNumber", [], "method", false, true, false, 30), "getOriginalNumber", [], "method", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdOriginalNumber", [], "method", false, true, false, 30), "getOriginalNumber", [], "method", false, false, false, 30), "")) : (""));
            // line 31
            yield "  ";
            $context["manufacturer_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getManufacturer", [], "method", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getManufacturer", [], "method", false, false, false, 31), "")) : (""));
            // line 32
            yield "  ";
            $context["additional_descriptions_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getAdditionalDescriptions", [], "method", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getAdditionalDescriptions", [], "method", false, false, false, 32), "")) : (""));
            // line 33
            yield "  ";
            $context["part_name_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdPartName", [], "method", false, true, false, 33), "getId", [], "method", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdPartName", [], "method", false, true, false, 33), "getId", [], "method", false, false, false, 33), "")) : (""));
            // line 34
            yield "  ";
            $context["car_brand_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdCarBrand", [], "method", false, true, false, 34), "getId", [], "method", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdCarBrand", [], "method", false, true, false, 34), "getId", [], "method", false, false, false, 34), "")) : (""));
            // line 35
            yield "  ";
            $context["side_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdSide", [], "method", false, true, false, 35), "getId", [], "method", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdSide", [], "method", false, true, false, 35), "getId", [], "method", false, false, false, 35), "")) : (""));
            // line 36
            yield "  ";
            $context["body_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdBody", [], "method", false, true, false, 36), "getId", [], "method", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdBody", [], "method", false, true, false, 36), "getId", [], "method", false, false, false, 36), "")) : (""));
            // line 37
            yield "  ";
            $context["axle_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdAxle", [], "method", false, true, false, 37), "getId", [], "method", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdAxle", [], "method", false, true, false, 37), "getId", [], "method", false, false, false, 37), "")) : (""));
            // line 38
            yield "  ";
            $context["in_stock_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdInStock", [], "method", false, true, false, 38), "getId", [], "method", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdInStock", [], "method", false, true, false, 38), "getId", [], "method", false, false, false, 38), "")) : (""));
            // line 39
            yield "  ";
            $context["id_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getId", [], "method", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getId", [], "method", false, false, false, 39), "")) : (""));
            // line 40
            yield "  ";
            $context["id_original_number_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdOriginalNumber", [], "method", false, true, false, 40), "getId", [], "method", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_part_numbers"] ?? null), "getIdOriginalNumber", [], "method", false, true, false, 40), "getId", [], "method", false, false, false, 40), "")) : (""));
        }
        // line 42
        yield "
  ";
        // line 44
        yield "
  ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 45, $this->source); })()), 'form_start');
        yield "
  <div class=\"container-fluid text-center mt-3\">
    <div class=\"row\">

      <div class=\"col-lg-12 col-xl-7 col-xxl-7\">
        <div class=\"row\">

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 53, $this->source); })()), "part_number", [], "any", false, false, false, 53), 'label');
        yield "</div>
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 54, $this->source); })()), "part_number", [], "any", false, false, false, 54), 'widget', ["value" => (isset($context["part_number_find_id"]) || array_key_exists("part_number_find_id", $context) ? $context["part_number_find_id"] : (function () { throw new RuntimeError('Variable "part_number_find_id" does not exist.', 54, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 55
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 55, $this->source); })()), "part_number", [], "any", false, false, false, 55), 'errors'));
        yield "
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "flashes", ["[part_number_error][Regex]"], "method", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 57
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "          </div>

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 62, $this->source); })()), "original_number", [], "any", false, false, false, 62), 'label');
        yield "</div>
            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 63, $this->source); })()), "original_number", [], "any", false, false, false, 63), 'widget', ["value" => (isset($context["original_number_find_id"]) || array_key_exists("original_number_find_id", $context) ? $context["original_number_find_id"] : (function () { throw new RuntimeError('Variable "original_number_find_id" does not exist.', 63, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 64
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 64, $this->source); })()), "original_number", [], "any", false, false, false, 64), 'errors'));
        yield "
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", ["[original_number_error][Regex]"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 66
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <br>
            Исправьте нарушения для продолжения работы
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "          </div>

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 73, $this->source); })()), "manufacturer", [], "any", false, false, false, 73), 'label');
        yield "</div>
            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 74, $this->source); })()), "manufacturer", [], "any", false, false, false, 74), 'widget', ["value" => (isset($context["manufacturer_find_id"]) || array_key_exists("manufacturer_find_id", $context) ? $context["manufacturer_find_id"] : (function () { throw new RuntimeError('Variable "manufacturer_find_id" does not exist.', 74, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 75
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 75, $this->source); })()), "manufacturer", [], "any", false, false, false, 75), 'errors'));
        yield "
            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "flashes", ["[manufacturer_error]"], "method", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 77
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "          </div>

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 82, $this->source); })()), "additional_descriptions", [], "any", false, false, false, 82), 'label');
        yield "</div>
            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 83, $this->source); })()), "additional_descriptions", [], "any", false, false, false, 83), 'widget', ["value" =>         // line 84
(isset($context["additional_descriptions_find_id"]) || array_key_exists("additional_descriptions_find_id", $context) ? $context["additional_descriptions_find_id"] : (function () { throw new RuntimeError('Variable "additional_descriptions_find_id" does not exist.', 84, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 85
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 85, $this->source); })()), "additional_descriptions", [], "any", false, false, false, 85), 'errors'));
        yield "
            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "flashes", ["[additional_descriptions_error]"], "method", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 87
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "          </div>

        </div>
      </div>

      <div class=\"col-lg-12 col-xl-5 col-xxl-5\">
        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 98, $this->source); })()), "id_part_name", [], "any", false, false, false, 98), 'label');
        yield "</div>
            ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 99, $this->source); })()), "id_part_name", [], "any", false, false, false, 99), 'widget', ["value" => (isset($context["part_name_find_id"]) || array_key_exists("part_name_find_id", $context) ? $context["part_name_find_id"] : (function () { throw new RuntimeError('Variable "part_name_find_id" does not exist.', 99, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 100
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 100, $this->source); })()), "id_part_name", [], "any", false, false, false, 100), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 104, $this->source); })()), "id_car_brand", [], "any", false, false, false, 104), 'label');
        yield "</div>
            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 105, $this->source); })()), "id_car_brand", [], "any", false, false, false, 105), 'widget', ["value" => (isset($context["car_brand_find_id"]) || array_key_exists("car_brand_find_id", $context) ? $context["car_brand_find_id"] : (function () { throw new RuntimeError('Variable "car_brand_find_id" does not exist.', 105, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 106
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 106, $this->source); })()), "id_car_brand", [], "any", false, false, false, 106), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 110, $this->source); })()), "id_side", [], "any", false, false, false, 110), 'label');
        yield "</div>
            ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 111, $this->source); })()), "id_side", [], "any", false, false, false, 111), 'widget', ["value" => (isset($context["side_find_id"]) || array_key_exists("side_find_id", $context) ? $context["side_find_id"] : (function () { throw new RuntimeError('Variable "side_find_id" does not exist.', 111, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 112
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 112, $this->source); })()), "id_side", [], "any", false, false, false, 112), 'errors'));
        yield "
          </div>
        </div>

        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 119, $this->source); })()), "id_body", [], "any", false, false, false, 119), 'label');
        yield "</div>
            ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 120, $this->source); })()), "id_body", [], "any", false, false, false, 120), 'widget', ["value" => (isset($context["body_find_id"]) || array_key_exists("body_find_id", $context) ? $context["body_find_id"] : (function () { throw new RuntimeError('Variable "body_find_id" does not exist.', 120, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 121
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 121, $this->source); })()), "id_body", [], "any", false, false, false, 121), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 125, $this->source); })()), "id_axle", [], "any", false, false, false, 125), 'label');
        yield "</div>
            ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 126, $this->source); })()), "id_axle", [], "any", false, false, false, 126), 'widget', ["value" => (isset($context["axle_find_id"]) || array_key_exists("axle_find_id", $context) ? $context["axle_find_id"] : (function () { throw new RuntimeError('Variable "axle_find_id" does not exist.', 126, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 127
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 127, $this->source); })()), "id_axle", [], "any", false, false, false, 127), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 131, $this->source); })()), "id_in_stock", [], "any", false, false, false, 131), 'label');
        yield "</div>
            ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 132, $this->source); })()), "id_in_stock", [], "any", false, false, false, 132), 'widget', ["value" => (isset($context["in_stock_find_id"]) || array_key_exists("in_stock_find_id", $context) ? $context["in_stock_find_id"] : (function () { throw new RuntimeError('Variable "in_stock_find_id" does not exist.', 132, $this->source); })()), "attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 133
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 133, $this->source); })()), "id_in_stock", [], "any", false, false, false, 133), 'errors'));
        yield "
          </div>

        </div>

      </div>
    </div>
    ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 140, $this->source); })()), "id", [], "any", false, false, false, 140), 'widget', ["value" => (isset($context["id_find_id"]) || array_key_exists("id_find_id", $context) ? $context["id_find_id"] : (function () { throw new RuntimeError('Variable "id_find_id" does not exist.', 140, $this->source); })())]);
        yield "
    ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 141, $this->source); })()), "id_original_number", [], "any", false, false, false, 141), 'widget', ["value" => (isset($context["id_original_number_find_id"]) || array_key_exists("id_original_number_find_id", $context) ? $context["id_original_number_find_id"] : (function () { throw new RuntimeError('Variable "id_original_number_find_id" does not exist.', 141, $this->source); })())]);
        yield "

    <div class=\"row mt-3\">
      <div class=\"col-12 d-grid gap-2\">
        ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 145, $this->source); })()), "button_part_number", [], "any", false, false, false, 145), 'widget', ["label" => "Изменить", "attr" => ["class" => "btn
        btn-secondary"]]);
        // line 146
        yield "
      </div>
    </div>

  </div>

  ";
        // line 152
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_edit_part_numbers"]) || array_key_exists("form_edit_part_numbers", $context) ? $context["form_edit_part_numbers"] : (function () { throw new RuntimeError('Variable "form_edit_part_numbers" does not exist.', 152, $this->source); })()), 'form_end');
        yield "

   <div class=\"col-auto m-3\">
    ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "flashes", ["Error"], "method", false, false, false, 155));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 156
            yield "    <h5 class=\"mt-3 ms-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</h5>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "    
    ";
        // line 159
        if ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 159, $this->source); })())) {
            // line 160
            yield "    <h5>Данные деталей изменены</h5>
    ";
        }
        // line 162
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
        return "@partNumbers/editPartNumbers.html.twig";
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
        return array (  508 => 162,  504 => 160,  502 => 159,  499 => 158,  490 => 156,  486 => 155,  480 => 152,  472 => 146,  469 => 145,  462 => 141,  458 => 140,  448 => 133,  444 => 132,  440 => 131,  433 => 127,  429 => 126,  425 => 125,  418 => 121,  414 => 120,  410 => 119,  400 => 112,  396 => 111,  392 => 110,  385 => 106,  381 => 105,  377 => 104,  370 => 100,  366 => 99,  362 => 98,  351 => 89,  342 => 87,  338 => 86,  334 => 85,  330 => 84,  329 => 83,  325 => 82,  320 => 79,  311 => 77,  307 => 76,  303 => 75,  299 => 74,  295 => 73,  290 => 70,  279 => 66,  275 => 65,  271 => 64,  267 => 63,  263 => 62,  258 => 59,  249 => 57,  245 => 56,  241 => 55,  237 => 54,  233 => 53,  222 => 45,  219 => 44,  216 => 42,  212 => 40,  209 => 39,  206 => 38,  203 => 37,  200 => 36,  197 => 35,  194 => 34,  191 => 33,  188 => 32,  185 => 31,  182 => 30,  179 => 29,  175 => 27,  172 => 26,  169 => 25,  166 => 24,  163 => 23,  160 => 22,  157 => 21,  154 => 20,  151 => 19,  148 => 18,  145 => 17,  142 => 16,  140 => 15,  137 => 14,  134 => 12,  124 => 11,  112 => 8,  102 => 7,  82 => 5,  62 => 3,  39 => 1,);
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

{% if data_form_edit_part_numbers is iterable %}
  {% set part_number_find_id = data_form_edit_part_numbers.part_number|default('') %}
  {% set original_number_find_id = data_form_edit_part_numbers.original_number|default('') %}
  {% set manufacturer_find_id = data_form_edit_part_numbers.manufacturer|default('') %}
  {% set additional_descriptions_find_id = data_form_edit_part_numbers.additional_descriptions|default('') %}
  {% set part_name_find_id = data_form_edit_part_numbers.id_part_name|default('') %}
  {% set car_brand_find_id = data_form_edit_part_numbers.id_car_brand|default('') %}
  {% set side_find_id = data_form_edit_part_numbers.id_side|default('') %}
  {% set body_find_id = data_form_edit_part_numbers.id_body|default('') %}
  {% set axle_find_id = data_form_edit_part_numbers.id_axle|default('') %}
  {% set in_stock_find_id = data_form_edit_part_numbers.id_in_stock|default('') %}
  {% set id_find_id = data_form_edit_part_numbers.id|default('') %}
  {% set id_original_number_find_id = data_form_edit_part_numbers.id_original_number|default('') %}
{% else %}
  {% set part_number_find_id = data_form_edit_part_numbers.getPartNumber()|default('') %}
  {% set original_number_find_id = data_form_edit_part_numbers.getIdOriginalNumber().getOriginalNumber()|default('') %}
  {% set manufacturer_find_id = data_form_edit_part_numbers.getManufacturer()|default('') %}
  {% set additional_descriptions_find_id = data_form_edit_part_numbers.getAdditionalDescriptions()|default('') %}
  {% set part_name_find_id = data_form_edit_part_numbers.getIdPartName().getId()|default('') %}
  {% set car_brand_find_id = data_form_edit_part_numbers.getIdCarBrand().getId()|default('') %}
  {% set side_find_id = data_form_edit_part_numbers.getIdSide().getId()|default('') %}
  {% set body_find_id = data_form_edit_part_numbers.getIdBody().getId()|default('') %}
  {% set axle_find_id = data_form_edit_part_numbers.getIdAxle().getId()|default('') %}
  {% set in_stock_find_id = data_form_edit_part_numbers.getIdInStock().getId()|default('') %}
  {% set id_find_id = data_form_edit_part_numbers.getId()|default('') %}
  {% set id_original_number_find_id = data_form_edit_part_numbers.getIdOriginalNumber().getId()|default('') %}
{% endif %}

  {#Форма изменения номеров деталей#}

  {{ form_start(form_edit_part_numbers) }}
  <div class=\"container-fluid text-center mt-3\">
    <div class=\"row\">

      <div class=\"col-lg-12 col-xl-7 col-xxl-7\">
        <div class=\"row\">

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">{{ form_label(form_edit_part_numbers.part_number) }}</div>
            {{ form_widget(form_edit_part_numbers.part_number, { value : part_number_find_id, 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_edit_part_numbers.part_number) |nl2br }}
            {% for message in app.flashes('[part_number_error][Regex]') %}
            {{ message }}
            {% endfor %}
          </div>

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">{{ form_label(form_edit_part_numbers.original_number) }}</div>
            {{ form_widget(form_edit_part_numbers.original_number, { value : original_number_find_id, 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_edit_part_numbers.original_number) |nl2br }}
            {% for message in app.flashes('[original_number_error][Regex]') %}
            {{ message }}
            <br>
            Исправьте нарушения для продолжения работы
            {% endfor %}
          </div>

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">{{ form_label(form_edit_part_numbers.manufacturer) }}</div>
            {{ form_widget(form_edit_part_numbers.manufacturer, { value : manufacturer_find_id, 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_edit_part_numbers.manufacturer) |nl2br }}
            {% for message in app.flashes('[manufacturer_error]') %}
            {{ message }}
            {% endfor %}
          </div>

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">{{ form_label(form_edit_part_numbers.additional_descriptions) }}</div>
            {{ form_widget(form_edit_part_numbers.additional_descriptions, 
            { value : additional_descriptions_find_id, 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_edit_part_numbers.additional_descriptions) |nl2br }}
            {% for message in app.flashes('[additional_descriptions_error]') %}
            {{ message }}
            {% endfor %}
          </div>

        </div>
      </div>

      <div class=\"col-lg-12 col-xl-5 col-xxl-5\">
        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">{{ form_label(form_edit_part_numbers.id_part_name) }}</div>
            {{ form_widget(form_edit_part_numbers.id_part_name, { value : part_name_find_id, 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_edit_part_numbers.id_part_name) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_edit_part_numbers.id_car_brand) }}</div>
            {{ form_widget(form_edit_part_numbers.id_car_brand, { value : car_brand_find_id, 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_edit_part_numbers.id_car_brand) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_edit_part_numbers.id_side) }}</div>
            {{ form_widget(form_edit_part_numbers.id_side, { value : side_find_id, 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_edit_part_numbers.id_side) |nl2br }}
          </div>
        </div>

        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">{{ form_label(form_edit_part_numbers.id_body) }}</div>
            {{ form_widget(form_edit_part_numbers.id_body, { value : body_find_id, 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_edit_part_numbers.id_body) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_edit_part_numbers.id_axle) }}</div>
            {{ form_widget(form_edit_part_numbers.id_axle, { value : axle_find_id, 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_edit_part_numbers.id_axle) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_edit_part_numbers.id_in_stock) }}</div>
            {{ form_widget(form_edit_part_numbers.id_in_stock, { value : in_stock_find_id, 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_edit_part_numbers.id_in_stock) |nl2br }}
          </div>

        </div>

      </div>
    </div>
    {{ form_widget(form_edit_part_numbers.id, {value : id_find_id}) }}
    {{ form_widget(form_edit_part_numbers.id_original_number, {value : id_original_number_find_id}) }}

    <div class=\"row mt-3\">
      <div class=\"col-12 d-grid gap-2\">
        {{ form_widget(form_edit_part_numbers.button_part_number, { 'label': 'Изменить', 'attr': {'class': 'btn
        btn-secondary'}}) }}
      </div>
    </div>

  </div>

  {{ form_end(form_edit_part_numbers) }}

   <div class=\"col-auto m-3\">
    {% for message in app.flashes('Error') %}
    <h5 class=\"mt-3 ms-3\">{{ message }}</h5>
    {% endfor %}
    
    {% if id %}
    <h5>Данные деталей изменены</h5>
    {% endif %}
  </div>
  {% endblock form %}", "@partNumbers/editPartNumbers.html.twig", "/var/www/src/PartNumbers/InfrastructurePartNumbers/ApiPartNumbers/templatesPartNumbers/editPartNumbers.html.twig");
    }
}
