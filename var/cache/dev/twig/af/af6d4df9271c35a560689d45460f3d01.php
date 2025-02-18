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

/* counterparty/editCounterparty.html.twig */
class __TwigTemplate_be3d0346daeefc33431204f24563df5a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "counterparty/editCounterparty.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "counterparty/editCounterparty.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "counterparty/editCounterparty.html.twig", 1);
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
        if (is_iterable((isset($context["data_form_edit_counterparty"]) || array_key_exists("data_form_edit_counterparty", $context) ? $context["data_form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "data_form_edit_counterparty" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "  ";
            $context["name_counterparty_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "name_counterparty", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "name_counterparty", [], "any", false, false, false, 16), "")) : (""));
            // line 17
            yield "  ";
            $context["mail_counterparty_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "mail_counterparty", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "mail_counterparty", [], "any", false, false, false, 17), "")) : (""));
            // line 18
            yield "  ";
            $context["manager_phone_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "manager_phone", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "manager_phone", [], "any", false, false, false, 18), "")) : (""));
            // line 19
            yield "  ";
            $context["delivery_phone_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "delivery_phone", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "delivery_phone", [], "any", false, false, false, 19), "")) : (""));
            // line 20
            yield "  ";
            $context["id_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "id", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "id", [], "any", false, false, false, 20), "")) : (""));
        } else {
            // line 22
            yield "  ";
            $context["name_counterparty_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "getNameCounterparty", [], "method", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "getNameCounterparty", [], "method", false, false, false, 22), "")) : (""));
            // line 23
            yield "  ";
            $context["mail_counterparty_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "getMailCounterparty", [], "method", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "getMailCounterparty", [], "method", false, false, false, 23), "")) : (""));
            // line 24
            yield "  ";
            $context["manager_phone_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "getManagerPhone", [], "method", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "getManagerPhone", [], "method", false, false, false, 24), "")) : (""));
            // line 25
            yield "  ";
            $context["delivery_phone_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "getDeliveryPhone", [], "method", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "getDeliveryPhone", [], "method", false, false, false, 25), "")) : (""));
            // line 26
            yield "  ";
            $context["id_find_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "getId", [], "method", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data_form_edit_counterparty"] ?? null), "getId", [], "method", false, false, false, 26), "")) : (""));
        }
        // line 28
        yield "
  ";
        // line 30
        yield "
  ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 31, $this->source); })()), 'form_start', ["attr" => ["class" => "row row-cols-12 text-center
  mt-2"]]);
        // line 32
        yield "

  
  <div class=\"col-auto ms-2\">
    <div class=\"lb\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 36, $this->source); })()), "name_counterparty", [], "any", false, false, false, 36), 'label');
        yield "</div>
    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 37, $this->source); })()), "name_counterparty", [], "any", false, false, false, 37), 'widget', ["value" => (isset($context["name_counterparty_find_id"]) || array_key_exists("name_counterparty_find_id", $context) ? $context["name_counterparty_find_id"] : (function () { throw new RuntimeError('Variable "name_counterparty_find_id" does not exist.', 37, $this->source); })()), "attr" => ["class" => "ps-1"]]);
        // line 38
        yield "
    ";
        // line 39
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 39, $this->source); })()), "name_counterparty", [], "any", false, false, false, 39), 'errors'));
        yield "
  </div>



  <div class=\"col-auto ms-2\">
    <div class=\"lb\">";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 45, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 45), 'label');
        yield "</div>
    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 46, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 46), 'widget', ["value" => (isset($context["mail_counterparty_find_id"]) || array_key_exists("mail_counterparty_find_id", $context) ? $context["mail_counterparty_find_id"] : (function () { throw new RuntimeError('Variable "mail_counterparty_find_id" does not exist.', 46, $this->source); })()), "attr" => ["class" => "ps-1"]]);
        // line 47
        yield "
    ";
        // line 48
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 48, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 48), 'errors'));
        yield "
  </div>


  <div class=\"col-auto ms-2\">
    <div class=\"lb\">";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 53, $this->source); })()), "manager_phone", [], "any", false, false, false, 53), 'label');
        yield "</div>
    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 54, $this->source); })()), "manager_phone", [], "any", false, false, false, 54), 'widget', ["value" => (isset($context["manager_phone_find_id"]) || array_key_exists("manager_phone_find_id", $context) ? $context["manager_phone_find_id"] : (function () { throw new RuntimeError('Variable "manager_phone_find_id" does not exist.', 54, $this->source); })()), "attr" => ["class" => "ps-1", "placeholder" => "+79999999999"]]);
        // line 55
        yield "
    ";
        // line 56
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 56, $this->source); })()), "manager_phone", [], "any", false, false, false, 56), 'errors'));
        yield "
  </div>



  <div class=\"col-auto ms-2\">
    <div class=\"lb\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 62, $this->source); })()), "delivery_phone", [], "any", false, false, false, 62), 'label');
        yield "</div>
    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 63, $this->source); })()), "delivery_phone", [], "any", false, false, false, 63), 'widget', ["value" => (isset($context["delivery_phone_find_id"]) || array_key_exists("delivery_phone_find_id", $context) ? $context["delivery_phone_find_id"] : (function () { throw new RuntimeError('Variable "delivery_phone_find_id" does not exist.', 63, $this->source); })()), "attr" => ["class" => "ps-1", "placeholder" => "+79999999999"]]);
        // line 64
        yield "
    ";
        // line 65
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 65, $this->source); })()), "delivery_phone", [], "any", false, false, false, 65), 'errors'));
        yield "
  </div>


  ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69), 'widget', ["value" => (isset($context["id_find_id"]) || array_key_exists("id_find_id", $context) ? $context["id_find_id"] : (function () { throw new RuntimeError('Variable "id_find_id" does not exist.', 69, $this->source); })())]);
        yield "

  <div class=\"row mt-3\">
    <div class=\"col-9 d-grid gap-2 ms-2\">
      ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 73, $this->source); })()), "button_counterparty", [], "any", false, false, false, 73), 'widget', ["label" => "Изменить", "attr" => ["class" => "btn
      btn-danger"]]);
        // line 74
        yield "
    </div>
  </div>

  ";
        // line 78
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 78, $this->source); })()), 'form_end');
        yield "
  <div class=\"col-auto m-3\">
    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["arr_saving_information"]) || array_key_exists("arr_saving_information", $context) ? $context["arr_saving_information"] : (function () { throw new RuntimeError('Variable "arr_saving_information" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["saving_information"]) {
            // line 81
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["saving_information"]);
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 82
                yield "    ";
                // line 83
                yield "    <h5>";
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["information"], "html", null, true));
                yield "</h5>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['saving_information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
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
        return "counterparty/editCounterparty.html.twig";
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
        return array (  305 => 86,  299 => 85,  290 => 83,  288 => 82,  283 => 81,  279 => 80,  274 => 78,  268 => 74,  265 => 73,  258 => 69,  251 => 65,  248 => 64,  246 => 63,  242 => 62,  233 => 56,  230 => 55,  228 => 54,  224 => 53,  216 => 48,  213 => 47,  211 => 46,  207 => 45,  198 => 39,  195 => 38,  193 => 37,  189 => 36,  183 => 32,  180 => 31,  177 => 30,  174 => 28,  170 => 26,  167 => 25,  164 => 24,  161 => 23,  158 => 22,  154 => 20,  151 => 19,  148 => 18,  145 => 17,  142 => 16,  140 => 15,  137 => 14,  134 => 12,  124 => 11,  112 => 8,  102 => 7,  82 => 5,  62 => 3,  39 => 1,);
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

{% if data_form_edit_counterparty is iterable %}
  {% set name_counterparty_find_id = data_form_edit_counterparty.name_counterparty|default('') %}
  {% set mail_counterparty_find_id = data_form_edit_counterparty.mail_counterparty|default('') %}
  {% set manager_phone_find_id = data_form_edit_counterparty.manager_phone|default('') %}
  {% set delivery_phone_find_id = data_form_edit_counterparty.delivery_phone|default('') %}
  {% set id_find_id = data_form_edit_counterparty.id|default('') %}
{% else %}
  {% set name_counterparty_find_id = data_form_edit_counterparty.getNameCounterparty()|default('') %}
  {% set mail_counterparty_find_id = data_form_edit_counterparty.getMailCounterparty()|default('') %}
  {% set manager_phone_find_id = data_form_edit_counterparty.getManagerPhone()|default('') %}
  {% set delivery_phone_find_id = data_form_edit_counterparty.getDeliveryPhone()|default('') %}
  {% set id_find_id = data_form_edit_counterparty.getId()|default('') %}
{% endif %}

  {#Форма редактирования поступления деталей#}

  {{ form_start(form_edit_counterparty, {'attr': {'class': 'row row-cols-12 text-center
  mt-2'}}) }}

  
  <div class=\"col-auto ms-2\">
    <div class=\"lb\">{{ form_label(form_edit_counterparty.name_counterparty) }}</div>
    {{ form_widget(form_edit_counterparty.name_counterparty, { value : name_counterparty_find_id, 'attr': {'class':
    'ps-1'} }) }}
    {{ form_errors(form_edit_counterparty.name_counterparty) |nl2br }}
  </div>



  <div class=\"col-auto ms-2\">
    <div class=\"lb\">{{ form_label(form_edit_counterparty.mail_counterparty) }}</div>
    {{ form_widget(form_edit_counterparty.mail_counterparty, { value : mail_counterparty_find_id, 'attr': {'class':
    'ps-1'} }) }}
    {{ form_errors(form_edit_counterparty.mail_counterparty) |nl2br }}
  </div>


  <div class=\"col-auto ms-2\">
    <div class=\"lb\">{{ form_label(form_edit_counterparty.manager_phone) }}</div>
    {{ form_widget(form_edit_counterparty.manager_phone, { value : manager_phone_find_id, 'attr': {'class': 'ps-1',
    'placeholder': '+79999999999'} }) }}
    {{ form_errors(form_edit_counterparty.manager_phone) |nl2br }}
  </div>



  <div class=\"col-auto ms-2\">
    <div class=\"lb\">{{ form_label(form_edit_counterparty.delivery_phone) }}</div>
    {{ form_widget(form_edit_counterparty.delivery_phone, { value : delivery_phone_find_id, 'attr': {'class': 'ps-1',
    'placeholder': '+79999999999'} }) }}
    {{ form_errors(form_edit_counterparty.delivery_phone) |nl2br }}
  </div>


  {{ form_widget(form_edit_counterparty.id, {value : id_find_id}) }}

  <div class=\"row mt-3\">
    <div class=\"col-9 d-grid gap-2 ms-2\">
      {{ form_widget(form_edit_counterparty.button_counterparty, { 'label': 'Изменить', 'attr': {'class': 'btn
      btn-danger'}}) }}
    </div>
  </div>

  {{ form_end(form_edit_counterparty) }}
  <div class=\"col-auto m-3\">
    {% for saving_information in arr_saving_information %}
    {% for information in saving_information %}
    {#{{ dump(saving_information) }}#}
    <h5>{{ information |nl2br }}</h5>
    {% endfor %}
    {% endfor %}
  </div>
  {% endblock form %}", "counterparty/editCounterparty.html.twig", "/var/www/templates/counterparty/editCounterparty.html.twig");
    }
}
