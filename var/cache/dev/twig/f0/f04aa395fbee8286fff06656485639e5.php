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

/* partNumbers/savePartNumbers.html.twig */
class __TwigTemplate_42104c5d093391594e24dcae4b8c58ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partNumbers/savePartNumbers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partNumbers/savePartNumbers.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "partNumbers/savePartNumbers.html.twig", 1);
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
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 34, $this->source); })()), "id_original_number", [], "any", false, false, false, 34), 'label');
        yield "</div>
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 35, $this->source); })()), "id_original_number", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 36
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 36, $this->source); })()), "id_original_number", [], "any", false, false, false, 36), 'errors'));
        yield "
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", ["[original_number_error][Regex]"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 38
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "          </div>



          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 45, $this->source); })()), "manufacturer", [], "any", false, false, false, 45), 'label');
        yield "</div>
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 46, $this->source); })()), "manufacturer", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 47
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 47, $this->source); })()), "manufacturer", [], "any", false, false, false, 47), 'errors'));
        yield "
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "flashes", ["[manufacturer_error][Regex]"], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 49
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "          </div>



          <div class=\"col-sm-12 col-md-6 col-lg-3\">
            <div class=\"lb\">";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 56, $this->source); })()), "additional_descriptions", [], "any", false, false, false, 56), 'label');
        yield "</div>
            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 57, $this->source); })()), "additional_descriptions", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 58
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 58, $this->source); })()), "additional_descriptions", [], "any", false, false, false, 58), 'errors'));
        yield "
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "flashes", ["[additional_descriptions_error][Regex]"], "method", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 60
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "          </div>
        </div>
      </div>



      <div class=\"col-lg-12 col-xl-5 col-xxl-5\">
        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 72, $this->source); })()), "id_part_name", [], "any", false, false, false, 72), 'label');
        yield "</div>
            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 73, $this->source); })()), "id_part_name", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 74
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 74, $this->source); })()), "id_part_name", [], "any", false, false, false, 74), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 78, $this->source); })()), "id_car_brand", [], "any", false, false, false, 78), 'label');
        yield "</div>
            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 79, $this->source); })()), "id_car_brand", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 80
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 80, $this->source); })()), "id_car_brand", [], "any", false, false, false, 80), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 84, $this->source); })()), "id_side", [], "any", false, false, false, 84), 'label');
        yield "</div>
            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 85, $this->source); })()), "id_side", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 86
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 86, $this->source); })()), "id_side", [], "any", false, false, false, 86), 'errors'));
        yield "
          </div>
        </div>
        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 92, $this->source); })()), "id_body", [], "any", false, false, false, 92), 'label');
        yield "</div>
            ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 93, $this->source); })()), "id_body", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 94
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 94, $this->source); })()), "id_body", [], "any", false, false, false, 94), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 98, $this->source); })()), "id_axle", [], "any", false, false, false, 98), 'label');
        yield "</div>
            ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 99, $this->source); })()), "id_axle", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 100
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 100, $this->source); })()), "id_axle", [], "any", false, false, false, 100), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 104, $this->source); })()), "id_in_stock", [], "any", false, false, false, 104), 'label');
        yield "</div>
            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 105, $this->source); })()), "id_in_stock", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 106
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 106, $this->source); })()), "id_in_stock", [], "any", false, false, false, 106), 'errors'));
        yield "
          </div>
        </div>


      </div>
    </div>


    <div class=\"row mt-3\">
      <div class=\"col-12 d-grid gap-2\">
        ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 117, $this->source); })()), "button_part_number", [], "any", false, false, false, 117), 'widget', ["label" => "Сохранить", "attr" => ["class" => "btn
        btn-danger"]]);
        // line 118
        yield "
      </div>
    </div>

  </div>

  ";
        // line 124
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_save_part_numbers"]) || array_key_exists("form_save_part_numbers", $context) ? $context["form_save_part_numbers"] : (function () { throw new RuntimeError('Variable "form_save_part_numbers" does not exist.', 124, $this->source); })()), 'form_end');
        yield "

  <div class=\"col-auto m-3\">
    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "flashes", [["delete", "Error", "successfully"]], "method", false, false, false, 127));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 128
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 129
                yield "    <h2 class=\"mt-3 ms-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</h2>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "
    ";
        // line 133
        if ((isset($context["arr_saving_information"]) || array_key_exists("arr_saving_information", $context) ? $context["arr_saving_information"] : (function () { throw new RuntimeError('Variable "arr_saving_information" does not exist.', 133, $this->source); })())) {
            // line 134
            yield "    <h5>Данные деталей удачно сохранены</h5>
    ";
        }
        // line 136
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
        return "partNumbers/savePartNumbers.html.twig";
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
        return array (  433 => 136,  429 => 134,  427 => 133,  424 => 132,  418 => 131,  409 => 129,  404 => 128,  400 => 127,  394 => 124,  386 => 118,  383 => 117,  369 => 106,  365 => 105,  361 => 104,  354 => 100,  350 => 99,  346 => 98,  339 => 94,  335 => 93,  331 => 92,  322 => 86,  318 => 85,  314 => 84,  307 => 80,  303 => 79,  299 => 78,  292 => 74,  288 => 73,  284 => 72,  272 => 62,  263 => 60,  259 => 59,  255 => 58,  251 => 57,  247 => 56,  240 => 51,  231 => 49,  227 => 48,  223 => 47,  219 => 46,  215 => 45,  208 => 40,  199 => 38,  195 => 37,  191 => 36,  187 => 35,  183 => 34,  176 => 29,  167 => 27,  163 => 26,  159 => 25,  155 => 24,  151 => 23,  140 => 15,  137 => 14,  134 => 12,  124 => 11,  112 => 8,  102 => 7,  82 => 5,  62 => 3,  39 => 1,);
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
            {{ message }}
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
    {% for messages in app.flashes(['delete','Error','successfully']) %}
    {% for message in messages %}
    <h2 class=\"mt-3 ms-3\">{{ message }}</h2>
    {% endfor %}
    {% endfor %}

    {% if arr_saving_information %}
    <h5>Данные деталей удачно сохранены</h5>
    {% endif %}

  </div>
  {% endblock form %}", "partNumbers/savePartNumbers.html.twig", "/var/www/templates/partNumbers/savePartNumbers.html.twig");
    }
}
