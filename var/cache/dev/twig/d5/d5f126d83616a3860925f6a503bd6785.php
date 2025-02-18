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

/* @partNumbers/searchPartNumbers.html.twig */
class __TwigTemplate_e521e380dc48782deb56ff843844a99c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@partNumbers/searchPartNumbers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@partNumbers/searchPartNumbers.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@partNumbers/searchPartNumbers.html.twig", 1);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 15, $this->source); })()), 'form_start');
        yield "
  <div class=\"container-fluid text-center mt-3\">
    <div class=\"row\">

      <div class=\"col-lg-12 col-xl-7 col-xxl-7\">
        <div class=\"row\">

          <div class=\"col-sm-12 col-md-6 col-lg-4\">
            <div class=\"lb\">";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 23, $this->source); })()), "part_number", [], "any", false, false, false, 23), 'label');
        yield "</div>
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 24, $this->source); })()), "part_number", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 25
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 25, $this->source); })()), "part_number", [], "any", false, false, false, 25), 'errors'));
        yield "
          </div>



          <div class=\"col-sm-12 col-md-6 col-lg-4\">
            <div class=\"lb\">";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 31, $this->source); })()), "id_original_number", [], "any", false, false, false, 31), 'label');
        yield "</div>
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 32, $this->source); })()), "id_original_number", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 33
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 33, $this->source); })()), "id_original_number", [], "any", false, false, false, 33), 'errors'));
        yield "
          </div>



          <div class=\"col-sm-12 col-md-12 col-lg-4\">
            <div class=\"lb\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 39, $this->source); })()), "manufacturer", [], "any", false, false, false, 39), 'label');
        yield "</div>
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 40, $this->source); })()), "manufacturer", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 41
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 41, $this->source); })()), "manufacturer", [], "any", false, false, false, 41), 'errors'));
        yield "
          </div>

        </div>
      </div>



      <div class=\"col-lg-12 col-xl-5 col-xxl-5\">
        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 53, $this->source); })()), "id_part_name", [], "any", false, false, false, 53), 'label');
        yield "</div>
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 54, $this->source); })()), "id_part_name", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 55
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 55, $this->source); })()), "id_part_name", [], "any", false, false, false, 55), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 59, $this->source); })()), "id_car_brand", [], "any", false, false, false, 59), 'label');
        yield "</div>
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 60, $this->source); })()), "id_car_brand", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 61
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 61, $this->source); })()), "id_car_brand", [], "any", false, false, false, 61), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 65, $this->source); })()), "id_side", [], "any", false, false, false, 65), 'label');
        yield "</div>
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 66, $this->source); })()), "id_side", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 67
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 67, $this->source); })()), "id_side", [], "any", false, false, false, 67), 'errors'));
        yield "
          </div>
        </div>
        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 73, $this->source); })()), "id_body", [], "any", false, false, false, 73), 'label');
        yield "</div>
            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 74, $this->source); })()), "id_body", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 75
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 75, $this->source); })()), "id_body", [], "any", false, false, false, 75), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 79, $this->source); })()), "id_axle", [], "any", false, false, false, 79), 'label');
        yield "</div>
            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 80, $this->source); })()), "id_axle", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 81
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 81, $this->source); })()), "id_axle", [], "any", false, false, false, 81), 'errors'));
        yield "
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 85, $this->source); })()), "id_in_stock", [], "any", false, false, false, 85), 'label');
        yield "</div>
            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 86, $this->source); })()), "id_in_stock", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 87
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 87, $this->source); })()), "id_in_stock", [], "any", false, false, false, 87), 'errors'));
        yield "
          </div>
        </div>


      </div>
    </div>


    <div class=\"row mt-3\">
      <div class=\"col-12 d-grid gap-2\">
        ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 98, $this->source); })()), "button_part_number", [], "any", false, false, false, 98), 'widget', ["label" => "Поиск", "attr" => ["class" => "btn
        btn-primary"]]);
        // line 99
        yield "
      </div>
    </div>

  </div>

  ";
        // line 105
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_search_part_numbers"]) || array_key_exists("form_search_part_numbers", $context) ? $context["form_search_part_numbers"] : (function () { throw new RuntimeError('Variable "form_search_part_numbers" does not exist.', 105, $this->source); })()), 'form_end');
        yield "

  ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "flashes", [["delete", "Error"]], "method", false, false, false, 107));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 108
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 109
                yield "    <h2 class=\"mt-3 ms-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</h2>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 116
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 117
        yield "
  ";
        // line 119
        yield "
  <div class=\"container-fluid text-center pt-4 \">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow p-3 mb-5 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">

          ";
        // line 126
        if ((isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 126, $this->source); })())) {
            // line 127
            yield "          <tr>
            <th scope=\"col\">№ детали</th>
            <th scope=\"col\">№ оригинал</th>
            <th scope=\"col\">Производитель</th>
            <th scope=\"col\">Описание детали</th>
            <th scope=\"col\">Название детали</th>
            <th scope=\"col\">Марка</th>
            <th scope=\"col\">Сторона</th>
            <th scope=\"col\">Кузов</th>
            <th scope=\"col\">Перед Зад</th>
            <th scope=\"col\">Наличие</th>
            <th scope=\"col\">Редактировать</th>
            <th scope=\"col\">Удалить</th>
          </tr>
           ";
        }
        // line 142
        yield "
        </thead>
        <tbody class=\"table-group-divider\">
          ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["search_data"]) || array_key_exists("search_data", $context) ? $context["search_data"] : (function () { throw new RuntimeError('Variable "search_data" does not exist.', 145, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 146
            yield "            ";
            if ($context["information"]) {
                // line 147
                yield "
          <tr>
            <td>";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getPartNumber", [], "method", false, false, false, 149), "html", null, true);
                yield "</td>
            <td>";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdOriginalNumber", [], "method", false, true, false, 150), "getOriginalNumber", [], "method", true, true, false, 150)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdOriginalNumber", [], "method", false, true, false, 150), "getOriginalNumber", [], "method", false, false, false, 150), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getManufacturer", [], "method", false, false, false, 151), "html", null, true);
                yield "</td>
            <td>";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getAdditionalDescriptions", [], "method", false, false, false, 152), "html", null, true);
                yield "</td>
            <td>";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdPartName", [], "method", false, true, false, 153), "getPartName", [], "method", true, true, false, 153)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdPartName", [], "method", false, true, false, 153), "getPartName", [], "method", false, false, false, 153), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdCarBrand", [], "method", false, true, false, 154), "getCarBrand", [], "method", true, true, false, 154)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdCarBrand", [], "method", false, true, false, 154), "getCarBrand", [], "method", false, false, false, 154), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdSide", [], "method", false, true, false, 155), "getSide", [], "method", true, true, false, 155)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdSide", [], "method", false, true, false, 155), "getSide", [], "method", false, false, false, 155), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdBody", [], "method", false, true, false, 156), "getBody", [], "method", true, true, false, 156)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdBody", [], "method", false, true, false, 156), "getBody", [], "method", false, false, false, 156), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAxle", [], "method", false, true, false, 157), "getAxle", [], "method", true, true, false, 157)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAxle", [], "method", false, true, false, 157), "getAxle", [], "method", false, false, false, 157), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdInStock", [], "method", false, true, false, 158), "getInStock", [], "method", true, true, false, 158)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdInStock", [], "method", false, true, false, 158), "getInStock", [], "method", false, false, false, 158), "")) : ("")), "html", null, true);
                yield "</td>
            <form action=\"/editPartNumbers\" name=\"edit_part_numbers\">

              <td><button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"id\"
                  value=\"";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 162), "html", null, true);
                yield "\">Изменить</button></td>

            </form>
            <form action=\"/deletePartNumbers\" name=\"delete_part_numbers\">

              <td><button class=\"btn btn-outline-danger\" type=\"submit\" name=\"id\"
                  value=\"";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 168), "html", null, true);
                yield "\">Удалить</button></td>

            </form>
          </tr>
          ";
            }
            // line 173
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
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
        return "@partNumbers/searchPartNumbers.html.twig";
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
        return array (  483 => 174,  477 => 173,  469 => 168,  460 => 162,  453 => 158,  449 => 157,  445 => 156,  441 => 155,  437 => 154,  433 => 153,  429 => 152,  425 => 151,  421 => 150,  417 => 149,  413 => 147,  410 => 146,  406 => 145,  401 => 142,  384 => 127,  382 => 126,  373 => 119,  370 => 117,  360 => 116,  348 => 112,  342 => 111,  333 => 109,  328 => 108,  324 => 107,  319 => 105,  311 => 99,  308 => 98,  294 => 87,  290 => 86,  286 => 85,  279 => 81,  275 => 80,  271 => 79,  264 => 75,  260 => 74,  256 => 73,  247 => 67,  243 => 66,  239 => 65,  232 => 61,  228 => 60,  224 => 59,  217 => 55,  213 => 54,  209 => 53,  194 => 41,  190 => 40,  186 => 39,  177 => 33,  173 => 32,  169 => 31,  160 => 25,  156 => 24,  152 => 23,  141 => 15,  138 => 14,  135 => 12,  125 => 11,  113 => 8,  103 => 7,  83 => 5,  63 => 3,  40 => 1,);
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

  {{ form_start(form_search_part_numbers) }}
  <div class=\"container-fluid text-center mt-3\">
    <div class=\"row\">

      <div class=\"col-lg-12 col-xl-7 col-xxl-7\">
        <div class=\"row\">

          <div class=\"col-sm-12 col-md-6 col-lg-4\">
            <div class=\"lb\">{{ form_label(form_search_part_numbers.part_number) }}</div>
            {{ form_widget(form_search_part_numbers.part_number, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_part_numbers.part_number) |nl2br }}
          </div>



          <div class=\"col-sm-12 col-md-6 col-lg-4\">
            <div class=\"lb\">{{ form_label(form_search_part_numbers.id_original_number) }}</div>
            {{ form_widget(form_search_part_numbers.id_original_number, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_part_numbers.id_original_number) |nl2br }}
          </div>



          <div class=\"col-sm-12 col-md-12 col-lg-4\">
            <div class=\"lb\">{{ form_label(form_search_part_numbers.manufacturer) }}</div>
            {{ form_widget(form_search_part_numbers.manufacturer, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_part_numbers.manufacturer) |nl2br }}
          </div>

        </div>
      </div>



      <div class=\"col-lg-12 col-xl-5 col-xxl-5\">
        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">{{ form_label(form_search_part_numbers.id_part_name) }}</div>
            {{ form_widget(form_search_part_numbers.id_part_name, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_part_numbers.id_part_name) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_search_part_numbers.id_car_brand) }}</div>
            {{ form_widget(form_search_part_numbers.id_car_brand, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_part_numbers.id_car_brand) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_search_part_numbers.id_side) }}</div>
            {{ form_widget(form_search_part_numbers.id_side, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_part_numbers.id_side) |nl2br }}
          </div>
        </div>
        <div class=\"row justify-content-evenly\">

          <div class=\"col-6\">
            <div class=\"lb\">{{ form_label(form_search_part_numbers.id_body) }}</div>
            {{ form_widget(form_search_part_numbers.id_body, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_part_numbers.id_body) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_search_part_numbers.id_axle) }}</div>
            {{ form_widget(form_search_part_numbers.id_axle, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_part_numbers.id_axle) |nl2br }}
          </div>

          <div class=\"col-3\">
            <div class=\"lb\">{{ form_label(form_search_part_numbers.id_in_stock) }}</div>
            {{ form_widget(form_search_part_numbers.id_in_stock, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_search_part_numbers.id_in_stock) |nl2br }}
          </div>
        </div>


      </div>
    </div>


    <div class=\"row mt-3\">
      <div class=\"col-12 d-grid gap-2\">
        {{ form_widget(form_search_part_numbers.button_part_number, { 'label': 'Поиск', 'attr': {'class': 'btn
        btn-primary'}}) }}
      </div>
    </div>

  </div>

  {{ form_end(form_search_part_numbers) }}

  {% for messages in app.flashes(['delete','Error']) %}
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

          {% if search_data %}
          <tr>
            <th scope=\"col\">№ детали</th>
            <th scope=\"col\">№ оригинал</th>
            <th scope=\"col\">Производитель</th>
            <th scope=\"col\">Описание детали</th>
            <th scope=\"col\">Название детали</th>
            <th scope=\"col\">Марка</th>
            <th scope=\"col\">Сторона</th>
            <th scope=\"col\">Кузов</th>
            <th scope=\"col\">Перед Зад</th>
            <th scope=\"col\">Наличие</th>
            <th scope=\"col\">Редактировать</th>
            <th scope=\"col\">Удалить</th>
          </tr>
           {% endif %}

        </thead>
        <tbody class=\"table-group-divider\">
          {% for information in search_data %}
            {% if information %}

          <tr>
            <td>{{ information.getPartNumber() }}</td>
            <td>{{ information.getIdOriginalNumber().getOriginalNumber()|default('') }}</td>
            <td>{{ information.getManufacturer() }}</td>
            <td>{{ information.getAdditionalDescriptions() }}</td>
            <td>{{ information.getIdPartName().getPartName()|default('') }}</td>
            <td>{{ information.getIdCarBrand().getCarBrand()|default('') }}</td>
            <td>{{ information.getIdSide().getSide()|default('') }}</td>
            <td>{{ information.getIdBody().getBody()|default('') }}</td>
            <td>{{ information.getIdAxle().getAxle()|default('') }}</td>
            <td>{{ information.getIdInStock().getInStock()|default('') }}</td>
            <form action=\"/editPartNumbers\" name=\"edit_part_numbers\">

              <td><button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"id\"
                  value=\"{{ information.getId() }}\">Изменить</button></td>

            </form>
            <form action=\"/deletePartNumbers\" name=\"delete_part_numbers\">

              <td><button class=\"btn btn-outline-danger\" type=\"submit\" name=\"id\"
                  value=\"{{ information.getId() }}\">Удалить</button></td>

            </form>
          </tr>
          {% endif %}
          {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
  {% endblock table %}", "@partNumbers/searchPartNumbers.html.twig", "/var/www/src/PartNumbers/InfrastructurePartNumbers/ApiPartNumbers/templatesPartNumbers/searchPartNumbers.html.twig");
    }
}
