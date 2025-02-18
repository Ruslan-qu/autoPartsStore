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

/* @sales/searchSales.html.twig */
class __TwigTemplate_dd8cf6cace958e6e9d8d622e75bb2ad0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@sales/searchSales.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@sales/searchSales.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@sales/searchSales.html.twig", 1);
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
        yield "<nav class=\"navbar navbar-expand-md bg-dark\" data-bs-theme=\"dark\">
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 15, $this->source); })()), 'form_start');
        yield "
  <div class=\"container-fluid text-center mt-3\">
    <div class=\"row\">

      <div class=\"col-lg-12 col-xl-7 col-xxl-7\">
        <div class=\"row\">

          <div class=\"col-sm-6 col-md-3 col-lg-3\">
            <div class=\"lb\">";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 23, $this->source); })()), "part_number", [], "any", false, false, false, 23), 'label');
        yield "</div>
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 24, $this->source); })()), "part_number", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 25
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 25, $this->source); })()), "part_number", [], "any", false, false, false, 25), 'errors'));
        yield "
          </div>

          <div class=\"col-sm-6 col-md-3 col-lg-3\">
            <div class=\"lb\">";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 29, $this->source); })()), "original_number", [], "any", false, false, false, 29), 'label');
        yield "</div>
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 30, $this->source); })()), "original_number", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 31
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 31, $this->source); })()), "original_number", [], "any", false, false, false, 31), 'errors'));
        yield "
          </div>

          <div class=\"col-sm-6 col-md-3 col-lg-3\">
            <div class=\"lb\">";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 35, $this->source); })()), "from_date_sold", [], "any", false, false, false, 35), 'label');
        yield "</div>
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 36, $this->source); })()), "from_date_sold", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 37
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 37, $this->source); })()), "from_date_sold", [], "any", false, false, false, 37), 'errors'));
        yield "
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "flashes", ["[date_sold]"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 39
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "          </div>

          <div class=\"col-sm-6 col-md-3 col-lg-3\">
            <div class=\"lb\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 44, $this->source); })()), "to_date_sold", [], "any", false, false, false, 44), 'label');
        yield "</div>
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 45, $this->source); })()), "to_date_sold", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 46
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 46, $this->source); })()), "to_date_sold", [], "any", false, false, false, 46), 'errors'));
        yield "
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "flashes", ["[date_sold]"], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 48
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "          </div>

        </div>
      </div>

      <div class=\"col-lg-12 col-xl-5 col-xxl-5\">

        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 60, $this->source); })()), "id_part_name", [], "any", false, false, false, 60), 'label');
        yield "</div>
            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 61, $this->source); })()), "id_part_name", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 62
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 62, $this->source); })()), "id_part_name", [], "any", false, false, false, 62), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 66, $this->source); })()), "id_car_brand", [], "any", false, false, false, 66), 'label');
        yield "</div>
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 67, $this->source); })()), "id_car_brand", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 68
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 68, $this->source); })()), "id_car_brand", [], "any", false, false, false, 68), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 72, $this->source); })()), "id_side", [], "any", false, false, false, 72), 'label');
        yield "</div>
            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 73, $this->source); })()), "id_side", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 74
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 74, $this->source); })()), "id_side", [], "any", false, false, false, 74), 'errors'));
        yield "
          </div>

        </div>

        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 82, $this->source); })()), "id_counterparty", [], "any", false, false, false, 82), 'label');
        yield "</div>
            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 83, $this->source); })()), "id_counterparty", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 84
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 84, $this->source); })()), "id_counterparty", [], "any", false, false, false, 84), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 88, $this->source); })()), "id_body", [], "any", false, false, false, 88), 'label');
        yield "</div>
            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 89, $this->source); })()), "id_body", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 90
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 90, $this->source); })()), "id_body", [], "any", false, false, false, 90), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 94, $this->source); })()), "id_axle", [], "any", false, false, false, 94), 'label');
        yield "</div>
            ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 95, $this->source); })()), "id_axle", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 96
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 96, $this->source); })()), "id_axle", [], "any", false, false, false, 96), 'errors'));
        yield "
          </div>

        </div>

      </div>

    </div>

    <div class=\"row mt-3\">
      <div class=\"col-12\">
        ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 107, $this->source); })()), "button_search_sales", [], "any", false, false, false, 107), 'widget', ["label" => "Поиск", "attr" => ["class" => "btn
        btn-primary w-100"]]);
        // line 108
        yield "
      </div>
    </div>


  </div>
  ";
        // line 114
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search_sales"]) || array_key_exists("form_search_sales", $context) ? $context["form_search_sales"] : (function () { throw new RuntimeError('Variable "form_search_sales" does not exist.', 114, $this->source); })()), 'form_end');
        yield "

  ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "flashes", [["delete", "Error", "successfully"]], "method", false, false, false, 116));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 117
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 118
                yield "  <h2 class=\"mt-3 ms-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</h2>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 123
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 124
        yield "
  ";
        // line 126
        yield "
  <div class=\"container-fluid text-center pt-4 \">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow p-3 mb-5 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">

          ";
        // line 133
        if ((isset($context["list_sales_auto_parts"]) || array_key_exists("list_sales_auto_parts", $context) ? $context["list_sales_auto_parts"] : (function () { throw new RuntimeError('Variable "list_sales_auto_parts" does not exist.', 133, $this->source); })())) {
            // line 134
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
            <th scope=\"col\">Дата</th>
            <th scope=\"col\">Кол-во</th>
            <th scope=\"col\">Цена</th>
            <th scope=\"col\">";
            // line 147
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("bx:edit", ["height" => "30", "width" => "30"]);
            yield "</th>
            <th scope=\"col\">";
            // line 148
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("iconoir:delete-circle", ["height" => "30", "width" => "30"]);
            yield "</th>
          </tr>
          ";
        }
        // line 151
        yield "
        </thead>
        <tbody class=\"table-group-divider\">
          ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["list_sales_auto_parts"]) || array_key_exists("list_sales_auto_parts", $context) ? $context["list_sales_auto_parts"] : (function () { throw new RuntimeError('Variable "list_sales_auto_parts" does not exist.', 154, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 155
            yield "          ";
            if ($context["information"]) {
                // line 156
                yield "          <tr>
            <td>";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, false, false, 157), "getIdDetails", [], "method", false, false, false, 157), "getPartNumber", [], "method", false, false, false, 157), "html", null, true);
                yield "</td>
            <td>";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 158), "getIdDetails", [], "method", false, true, false, 158), "getIdOriginalNumber", [], "method", false, true, false, 158), "getOriginalNumber", [], "method", true, true, false, 159)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 158), "getIdDetails", [], "method", false, true, false, 158), "getIdOriginalNumber", [], "method", false, true, false, 158), "getOriginalNumber", [], "method", false, false, false, 159), "")) : ("")), "html", null, true);
                // line 159
                yield "</td>
            <td>";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 160), "getIdDetails", [], "method", false, true, false, 160), "getManufacturer", [], "method", true, true, false, 160)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 160), "getIdDetails", [], "method", false, true, false, 160), "getManufacturer", [], "method", false, false, false, 160), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 161), "getIdDetails", [], "method", false, true, false, 161), "getAdditionalDescriptions", [], "method", true, true, false, 161)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 161), "getIdDetails", [], "method", false, true, false, 161), "getAdditionalDescriptions", [], "method", false, false, false, 161), "")) : ("")), "html", null, true);
                yield "
            </td>
            <td>";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 163), "getIdDetails", [], "method", false, true, false, 163), "getIdPartName", [], "method", false, true, false, 163), "getPartName", [], "method", true, true, false, 163)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 163), "getIdDetails", [], "method", false, true, false, 163), "getIdPartName", [], "method", false, true, false, 163), "getPartName", [], "method", false, false, false, 163), "")) : ("")), "html", null, true);
                yield "
            </td>
            <td>";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 165), "getIdDetails", [], "method", false, true, false, 165), "getIdCarBrand", [], "method", false, true, false, 165), "getCarBrand", [], "method", true, true, false, 165)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 165), "getIdDetails", [], "method", false, true, false, 165), "getIdCarBrand", [], "method", false, true, false, 165), "getCarBrand", [], "method", false, false, false, 165), "")) : ("")), "html", null, true);
                yield "
            </td>
            <td>";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 167), "getIdDetails", [], "method", false, true, false, 167), "getIdSide", [], "method", false, true, false, 167), "getSide", [], "method", true, true, false, 167)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 167), "getIdDetails", [], "method", false, true, false, 167), "getIdSide", [], "method", false, true, false, 167), "getSide", [], "method", false, false, false, 167), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 168), "getIdDetails", [], "method", false, true, false, 168), "getIdBody", [], "method", false, true, false, 168), "getBody", [], "method", true, true, false, 168)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 168), "getIdDetails", [], "method", false, true, false, 168), "getIdBody", [], "method", false, true, false, 168), "getBody", [], "method", false, false, false, 168), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 169), "getIdDetails", [], "method", false, true, false, 169), "getIdAxle", [], "method", false, true, false, 169), "getAxle", [], "method", true, true, false, 169)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 169), "getIdDetails", [], "method", false, true, false, 169), "getIdAxle", [], "method", false, true, false, 169), "getAxle", [], "method", false, false, false, 169), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getDateSold", [], "method", false, false, false, 170), "d-m-Y"), ""), "html", null, true);
                yield "</td>
            <td>";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantitySold", [], "method", true, true, false, 171)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantitySold", [], "method", false, false, false, 171), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getPriceSold", [], "method", false, false, false, 172) / 100), ""), "html", null, true);
                yield "</td>
            <form action=\"/editSalesAutoParts\" name=\"edit_sales_auto_parts\">

              <td><button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"id\" value=\"";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 175), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("bx:edit", ["height" => "30", "width" => "30"]);
                // line 176
                yield "</button></td>

            </form>
            <form action=\"/deleteSalesAutoParts\" name=\"delete_sales_auto_parts\">

              <td><button class=\"btn btn-outline-danger\" type=\"submit\" name=\"id\" value=\"";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 181), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("iconoir:delete-circle", ["height" => "30", "width" => "30"]);
                // line 182
                yield "</button></td>

            </form>
          </tr>
          ";
            }
            // line 187
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
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
        return "@sales/searchSales.html.twig";
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
        return array (  547 => 188,  541 => 187,  534 => 182,  530 => 181,  523 => 176,  519 => 175,  513 => 172,  509 => 171,  505 => 170,  501 => 169,  497 => 168,  493 => 167,  488 => 165,  483 => 163,  478 => 161,  474 => 160,  471 => 159,  469 => 158,  465 => 157,  462 => 156,  459 => 155,  455 => 154,  450 => 151,  444 => 148,  440 => 147,  425 => 134,  423 => 133,  414 => 126,  411 => 124,  401 => 123,  390 => 121,  384 => 120,  375 => 118,  370 => 117,  366 => 116,  361 => 114,  353 => 108,  350 => 107,  336 => 96,  332 => 95,  328 => 94,  321 => 90,  317 => 89,  313 => 88,  306 => 84,  302 => 83,  298 => 82,  287 => 74,  283 => 73,  279 => 72,  272 => 68,  268 => 67,  264 => 66,  257 => 62,  253 => 61,  249 => 60,  237 => 50,  228 => 48,  224 => 47,  220 => 46,  216 => 45,  212 => 44,  207 => 41,  198 => 39,  194 => 38,  190 => 37,  186 => 36,  182 => 35,  175 => 31,  171 => 30,  167 => 29,  160 => 25,  156 => 24,  152 => 23,  141 => 15,  138 => 14,  135 => 12,  125 => 11,  113 => 8,  103 => 7,  83 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title_logo }}{% endblock title %}

{% block logo %}{{title_logo}}{% endblock logo %}

{% block Responsive_behaviors %}
<nav class=\"navbar navbar-expand-md bg-dark\" data-bs-theme=\"dark\">
  {% endblock Responsive_behaviors %}

  {% block form %}

  {#Форма сохранения номеров деталей#}

  {{ form_start(form_search_sales) }}
  <div class=\"container-fluid text-center mt-3\">
    <div class=\"row\">

      <div class=\"col-lg-12 col-xl-7 col-xxl-7\">
        <div class=\"row\">

          <div class=\"col-sm-6 col-md-3 col-lg-3\">
            <div class=\"lb\">{{ form_label(form_search_sales.part_number) }}</div>
            {{ form_widget(form_search_sales.part_number, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_sales.part_number) |nl2br }}
          </div>

          <div class=\"col-sm-6 col-md-3 col-lg-3\">
            <div class=\"lb\">{{ form_label(form_search_sales.original_number) }}</div>
            {{ form_widget(form_search_sales.original_number, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_sales.original_number) |nl2br }}
          </div>

          <div class=\"col-sm-6 col-md-3 col-lg-3\">
            <div class=\"lb\">{{ form_label(form_search_sales.from_date_sold) }}</div>
            {{ form_widget(form_search_sales.from_date_sold, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_sales.from_date_sold) |nl2br }}
            {% for message in app.flashes('[date_sold]') %}
            {{ message }}
            {% endfor %}
          </div>

          <div class=\"col-sm-6 col-md-3 col-lg-3\">
            <div class=\"lb\">{{ form_label(form_search_sales.to_date_sold) }}</div>
            {{ form_widget(form_search_sales.to_date_sold, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_sales.to_date_sold) |nl2br }}
            {% for message in app.flashes('[date_sold]') %}
            {{ message }}
            {% endfor %}
          </div>

        </div>
      </div>

      <div class=\"col-lg-12 col-xl-5 col-xxl-5\">

        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">{{ form_label(form_search_sales.id_part_name) }}</div>
            {{ form_widget(form_search_sales.id_part_name, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_sales.id_part_name) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_search_sales.id_car_brand) }}</div>
            {{ form_widget(form_search_sales.id_car_brand, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_sales.id_car_brand) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_search_sales.id_side) }}</div>
            {{ form_widget(form_search_sales.id_side, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_sales.id_side) |nl2br }}
          </div>

        </div>

        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">{{ form_label(form_search_sales.id_counterparty) }}</div>
            {{ form_widget(form_search_sales.id_counterparty, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_sales.id_counterparty) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_search_sales.id_body) }}</div>
            {{ form_widget(form_search_sales.id_body, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_sales.id_body) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_search_sales.id_axle) }}</div>
            {{ form_widget(form_search_sales.id_axle, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_sales.id_axle) |nl2br }}
          </div>

        </div>

      </div>

    </div>

    <div class=\"row mt-3\">
      <div class=\"col-12\">
        {{ form_widget(form_search_sales.button_search_sales, { 'label': 'Поиск', 'attr': {'class': 'btn
        btn-primary w-100'}}) }}
      </div>
    </div>


  </div>
  {{ form_end(form_search_sales) }}

  {% for messages in app.flashes(['delete','Error','successfully']) %}
  {% for message in messages %}
  <h2 class=\"mt-3 ms-3\">{{ message }}</h2>
  {% endfor %}
  {% endfor %}
  {% endblock form %}

  {% block table %}

  {#Таблица автодеталей#}

  <div class=\"container-fluid text-center pt-4 \">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow p-3 mb-5 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">

          {% if list_sales_auto_parts %}
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
            <th scope=\"col\">Дата</th>
            <th scope=\"col\">Кол-во</th>
            <th scope=\"col\">Цена</th>
            <th scope=\"col\">{{ ux_icon('bx:edit', {'height': '30', 'width': '30'}) }}</th>
            <th scope=\"col\">{{ ux_icon('iconoir:delete-circle', {'height': '30', 'width': '30'}) }}</th>
          </tr>
          {% endif %}

        </thead>
        <tbody class=\"table-group-divider\">
          {% for information in list_sales_auto_parts %}
          {% if information %}
          <tr>
            <td>{{ information.getIdAutoPartsWarehouse().getIdDetails().getPartNumber() }}</td>
            <td>{{ information.getIdAutoPartsWarehouse().getIdDetails()
              .getIdOriginalNumber().getOriginalNumber()|default('') }}</td>
            <td>{{ information.getIdAutoPartsWarehouse().getIdDetails().getManufacturer()|default('') }}</td>
            <td>{{ information.getIdAutoPartsWarehouse().getIdDetails().getAdditionalDescriptions()|default('') }}
            </td>
            <td>{{ information.getIdAutoPartsWarehouse().getIdDetails().getIdPartName().getPartName()|default('') }}
            </td>
            <td>{{ information.getIdAutoPartsWarehouse().getIdDetails().getIdCarBrand().getCarBrand()|default('') }}
            </td>
            <td>{{ information.getIdAutoPartsWarehouse().getIdDetails().getIdSide().getSide()|default('') }}</td>
            <td>{{ information.getIdAutoPartsWarehouse().getIdDetails().getIdBody().getBody()|default('') }}</td>
            <td>{{ information.getIdAutoPartsWarehouse().getIdDetails().getIdAxle().getAxle()|default('') }}</td>
            <td>{{ information.getDateSold()|date(\"d-m-Y\")|default('') }}</td>
            <td>{{ information.getQuantitySold()|default('') }}</td>
            <td>{{ (information.getPriceSold() / 100)|default('') }}</td>
            <form action=\"/editSalesAutoParts\" name=\"edit_sales_auto_parts\">

              <td><button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"id\" value=\"{{ information.getId() }}\">{{
                  ux_icon('bx:edit', {'height': '30', 'width': '30'}) }}</button></td>

            </form>
            <form action=\"/deleteSalesAutoParts\" name=\"delete_sales_auto_parts\">

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
  {% endblock table %}", "@sales/searchSales.html.twig", "/var/www/src/Sales/InfrastructureSales/ApiSales/templatesSales/searchSales.html.twig");
    }
}
