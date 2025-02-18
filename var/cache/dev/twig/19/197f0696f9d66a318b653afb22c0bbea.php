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

/* @partNumbers/savePartNumbers.html.twig */
class __TwigTemplate_e2b5989f6e5e1120e3c801863d2e63fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@partNumbers/savePartNumbers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@partNumbers/savePartNumbers.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@partNumbers/savePartNumbers.html.twig", 1);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 15, $this->source); })()), 'form_start');
        yield "
  <div class=\"container-fluid text-center mt-3\">
    <div class=\"row\">

      <div class=\"col-lg-12 col-xl-7 col-xxl-7\">
        <div class=\"row\">

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 23, $this->source); })()), "part_number", [], "any", false, false, false, 23), 'label');
        yield "</div>
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 24, $this->source); })()), "part_number", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 25
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 25, $this->source); })()), "part_number", [], "any", false, false, false, 25), 'errors'));
        yield "
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", ["[part_number_error][Regex]"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "          </div>

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 32, $this->source); })()), "id_original_number", [], "any", false, false, false, 32), 'label');
        yield "</div>
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 33, $this->source); })()), "id_original_number", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 34
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 34, $this->source); })()), "id_original_number", [], "any", false, false, false, 34), 'errors'));
        yield "
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", ["[original_number_error][Regex]"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<br>
            Исправьте нарушения для продолжения работы
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "          </div>

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 42, $this->source); })()), "manufacturer", [], "any", false, false, false, 42), 'label');
        yield "</div>
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 43, $this->source); })()), "manufacturer", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 44
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 44, $this->source); })()), "manufacturer", [], "any", false, false, false, 44), 'errors'));
        yield "
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", ["[manufacturer_error][Regex]"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 46
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "          </div>

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 51, $this->source); })()), "additional_descriptions", [], "any", false, false, false, 51), 'label');
        yield "</div>
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 52, $this->source); })()), "additional_descriptions", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 53
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 53, $this->source); })()), "additional_descriptions", [], "any", false, false, false, 53), 'errors'));
        yield "
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "flashes", ["[additional_descriptions_error][Regex]"], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "          </div>
        </div>
      </div>

      <div class=\"col-lg-12 col-xl-5 col-xxl-5\">
        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 65, $this->source); })()), "id_part_name", [], "any", false, false, false, 65), 'label');
        yield "</div>
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 66, $this->source); })()), "id_part_name", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 67
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 67, $this->source); })()), "id_part_name", [], "any", false, false, false, 67), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 71, $this->source); })()), "id_car_brand", [], "any", false, false, false, 71), 'label');
        yield "</div>
            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 72, $this->source); })()), "id_car_brand", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 73
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 73, $this->source); })()), "id_car_brand", [], "any", false, false, false, 73), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 77, $this->source); })()), "id_side", [], "any", false, false, false, 77), 'label');
        yield "</div>
            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 78, $this->source); })()), "id_side", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 79
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 79, $this->source); })()), "id_side", [], "any", false, false, false, 79), 'errors'));
        yield "
          </div>
        </div>

        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 86, $this->source); })()), "id_body", [], "any", false, false, false, 86), 'label');
        yield "</div>
            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 87, $this->source); })()), "id_body", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 88
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 88, $this->source); })()), "id_body", [], "any", false, false, false, 88), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 92, $this->source); })()), "id_axle", [], "any", false, false, false, 92), 'label');
        yield "</div>
            ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 93, $this->source); })()), "id_axle", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 94
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 94, $this->source); })()), "id_axle", [], "any", false, false, false, 94), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 98, $this->source); })()), "id_in_stock", [], "any", false, false, false, 98), 'label');
        yield "</div>
            ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 99, $this->source); })()), "id_in_stock", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 100
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 100, $this->source); })()), "id_in_stock", [], "any", false, false, false, 100), 'errors'));
        yield "
          </div>
        </div>

      </div>
    </div>

    <div class=\"row mt-3\">
      <div class=\"col-12 d-grid gap-2\">
        ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 109, $this->source); })()), "button_part_number", [], "any", false, false, false, 109), 'widget', ["label" => "Сохранить", "attr" => ["class" => "btn
        btn-danger"]]);
        // line 110
        yield "
      </div>
    </div>

  </div>

  ";
        // line 116
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 116, $this->source); })()), 'form_end');
        yield "
 
  <div class=\"col-auto m-3\">
    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "flashes", ["Error"], "method", false, false, false, 119));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 120
            yield "    <h5 class=\"mt-3 ms-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</h5>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "
    ";
        // line 123
        if ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 123, $this->source); })())) {
            // line 124
            yield "    <h5>Данные деталей удачно сохранены</h5>
    ";
        }
        // line 126
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
        return "@partNumbers/savePartNumbers.html.twig";
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
        return array (  414 => 126,  410 => 124,  408 => 123,  405 => 122,  396 => 120,  392 => 119,  386 => 116,  378 => 110,  375 => 109,  363 => 100,  359 => 99,  355 => 98,  348 => 94,  344 => 93,  340 => 92,  333 => 88,  329 => 87,  325 => 86,  315 => 79,  311 => 78,  307 => 77,  300 => 73,  296 => 72,  292 => 71,  285 => 67,  281 => 66,  277 => 65,  267 => 57,  258 => 55,  254 => 54,  250 => 53,  246 => 52,  242 => 51,  237 => 48,  228 => 46,  224 => 45,  220 => 44,  216 => 43,  212 => 42,  207 => 39,  197 => 36,  193 => 35,  189 => 34,  185 => 33,  181 => 32,  176 => 29,  167 => 27,  163 => 26,  159 => 25,  155 => 24,  151 => 23,  140 => 15,  137 => 14,  134 => 12,  124 => 11,  112 => 8,  102 => 7,  82 => 5,  62 => 3,  39 => 1,);
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

  {{ form_start(form_save_part_numbers) }}
  <div class=\"container-fluid text-center mt-3\">
    <div class=\"row\">

      <div class=\"col-lg-12 col-xl-7 col-xxl-7\">
        <div class=\"row\">

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">{{ form_label(form_save_part_numbers.part_number) }}</div>
            {{ form_widget(form_save_part_numbers.part_number, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_save_part_numbers.part_number) |nl2br }}
            {% for message in app.flashes('[part_number_error][Regex]') %}
            {{ message }}
            {% endfor %}
          </div>

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">{{ form_label(form_save_part_numbers.id_original_number) }}</div>
            {{ form_widget(form_save_part_numbers.id_original_number, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_save_part_numbers.id_original_number) |nl2br }}
            {% for message in app.flashes('[original_number_error][Regex]') %}
            {{ message}}<br>
            Исправьте нарушения для продолжения работы
            {% endfor %}
          </div>

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">{{ form_label(form_save_part_numbers.manufacturer) }}</div>
            {{ form_widget(form_save_part_numbers.manufacturer, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_save_part_numbers.manufacturer) |nl2br }}
            {% for message in app.flashes('[manufacturer_error][Regex]') %}
            {{ message }}
            {% endfor %}
          </div>

          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">{{ form_label(form_save_part_numbers.additional_descriptions) }}</div>
            {{ form_widget(form_save_part_numbers.additional_descriptions, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_save_part_numbers.additional_descriptions) |nl2br }}
            {% for message in app.flashes('[additional_descriptions_error][Regex]') %}
            {{ message }}
            {% endfor %}
          </div>
        </div>
      </div>

      <div class=\"col-lg-12 col-xl-5 col-xxl-5\">
        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">{{ form_label(form_save_part_numbers.id_part_name) }}</div>
            {{ form_widget(form_save_part_numbers.id_part_name, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_save_part_numbers.id_part_name) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_save_part_numbers.id_car_brand) }}</div>
            {{ form_widget(form_save_part_numbers.id_car_brand, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_save_part_numbers.id_car_brand) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_save_part_numbers.id_side) }}</div>
            {{ form_widget(form_save_part_numbers.id_side, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_save_part_numbers.id_side) |nl2br }}
          </div>
        </div>

        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">{{ form_label(form_save_part_numbers.id_body) }}</div>
            {{ form_widget(form_save_part_numbers.id_body, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_save_part_numbers.id_body) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_save_part_numbers.id_axle) }}</div>
            {{ form_widget(form_save_part_numbers.id_axle, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_save_part_numbers.id_axle) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_save_part_numbers.id_in_stock) }}</div>
            {{ form_widget(form_save_part_numbers.id_in_stock, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_save_part_numbers.id_in_stock) |nl2br }}
          </div>
        </div>

      </div>
    </div>

    <div class=\"row mt-3\">
      <div class=\"col-12 d-grid gap-2\">
        {{ form_widget(form_save_part_numbers.button_part_number, { 'label': 'Сохранить', 'attr': {'class': 'btn
        btn-danger'}}) }}
      </div>
    </div>

  </div>

  {{ form_end(form_save_part_numbers) }}
 
  <div class=\"col-auto m-3\">
    {% for message in app.flashes('Error') %}
    <h5 class=\"mt-3 ms-3\">{{ message }}</h5>
    {% endfor %}

    {% if id %}
    <h5>Данные деталей удачно сохранены</h5>
    {% endif %}
  </div>
  {% endblock form %}", "@partNumbers/savePartNumbers.html.twig", "/var/www/src/PartNumbers/InfrastructurePartNumbers/ApiPartNumbers/templatesPartNumbers/savePartNumbers.html.twig");
    }
}
