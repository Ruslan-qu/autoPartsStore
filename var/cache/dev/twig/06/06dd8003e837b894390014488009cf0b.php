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

/* @counterparty/editCounterparty.html.twig */
class __TwigTemplate_2fc1830a63cae04308afc7ad108f5b8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@counterparty/editCounterparty.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@counterparty/editCounterparty.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@counterparty/editCounterparty.html.twig", 1);
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
            // line 21
            yield "  ";
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
            // line 27
            yield "  ";
        }
        // line 28
        yield "
  ";
        // line 30
        yield "
  ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 31, $this->source); })()), 'form_start');
        yield "
  <div class=\"container-fluid text-center mt-3\">
    <div class=\"row\">

      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 36, $this->source); })()), "name_counterparty", [], "any", false, false, false, 36), 'label');
        yield "</div>
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 37, $this->source); })()), "name_counterparty", [], "any", false, false, false, 37), 'widget', ["value" => (isset($context["name_counterparty_find_id"]) || array_key_exists("name_counterparty_find_id", $context) ? $context["name_counterparty_find_id"] : (function () { throw new RuntimeError('Variable "name_counterparty_find_id" does not exist.', 37, $this->source); })()), "attr" => ["class" => "w-100"]]);
        // line 38
        yield "
        ";
        // line 39
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 39, $this->source); })()), "name_counterparty", [], "any", false, false, false, 39), 'errors'));
        yield "
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "flashes", ["[name_counterparty_error][Regex]"], "method", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 41
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "      </div>

      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 46, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 46), 'label');
        yield "</div>
        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 47, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 47), 'widget', ["value" => (isset($context["mail_counterparty_find_id"]) || array_key_exists("mail_counterparty_find_id", $context) ? $context["mail_counterparty_find_id"] : (function () { throw new RuntimeError('Variable "mail_counterparty_find_id" does not exist.', 47, $this->source); })()), "attr" => ["class" => "w-100"]]);
        // line 48
        yield "
        ";
        // line 49
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 49, $this->source); })()), "mail_counterparty", [], "any", false, false, false, 49), 'errors'));
        yield "
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "flashes", ["[mail_counterparty_error][Email]"], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 51
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "      </div>

      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 56, $this->source); })()), "manager_phone", [], "any", false, false, false, 56), 'label');
        yield "</div>
        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 57, $this->source); })()), "manager_phone", [], "any", false, false, false, 57), 'widget', ["value" => (isset($context["manager_phone_find_id"]) || array_key_exists("manager_phone_find_id", $context) ? $context["manager_phone_find_id"] : (function () { throw new RuntimeError('Variable "manager_phone_find_id" does not exist.', 57, $this->source); })()), "attr" => ["class" => "w-100", "placeholder" => "+79999999999"]]);
        // line 58
        yield "
        ";
        // line 59
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 59, $this->source); })()), "manager_phone", [], "any", false, false, false, 59), 'errors'));
        yield "
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "flashes", ["[manager_phone_error][Regex]"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 61
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "      </div>

      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 66, $this->source); })()), "delivery_phone", [], "any", false, false, false, 66), 'label');
        yield "</div>
        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 67, $this->source); })()), "delivery_phone", [], "any", false, false, false, 67), 'widget', ["value" => (isset($context["delivery_phone_find_id"]) || array_key_exists("delivery_phone_find_id", $context) ? $context["delivery_phone_find_id"] : (function () { throw new RuntimeError('Variable "delivery_phone_find_id" does not exist.', 67, $this->source); })()), "attr" => ["class" => "w-100", "placeholder" => "+79999999999"]]);
        // line 68
        yield "
        ";
        // line 69
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 69, $this->source); })()), "delivery_phone", [], "any", false, false, false, 69), 'errors'));
        yield "
        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "flashes", ["[delivery_phone_error][Regex]"], "method", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 71
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "      </div>
    </div>
  </div>

  ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77), 'widget', ["value" => (isset($context["id_find_id"]) || array_key_exists("id_find_id", $context) ? $context["id_find_id"] : (function () { throw new RuntimeError('Variable "id_find_id" does not exist.', 77, $this->source); })())]);
        yield "

  <div class=\"row my-2 pt-2\">
    <div class=\"col-sm-12 col-lg-8\">
      ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 81, $this->source); })()), "button_counterparty", [], "any", false, false, false, 81), 'widget', ["label" => "Изменить", "attr" => ["class" => "btn
      btn-secondary w-100"]]);
        // line 82
        yield "
    </div>
  </div>

  ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_edit_counterparty"]) || array_key_exists("form_edit_counterparty", $context) ? $context["form_edit_counterparty"] : (function () { throw new RuntimeError('Variable "form_edit_counterparty" does not exist.', 86, $this->source); })()), 'form_end');
        yield "

  ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "flashes", [["delete", "Error"]], "method", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 89
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 90
                yield "    <h2 class=\"mt-3 ms-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</h2>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "
  <div class=\"m-3\">
    ";
        // line 95
        if ((isset($context["id_handler"]) || array_key_exists("id_handler", $context) ? $context["id_handler"] : (function () { throw new RuntimeError('Variable "id_handler" does not exist.', 95, $this->source); })())) {
            // line 96
            yield "    <h5>Данные поставщика изменены </h5>
    ";
        }
        // line 98
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
        return "@counterparty/editCounterparty.html.twig";
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
        return array (  372 => 98,  368 => 96,  366 => 95,  362 => 93,  356 => 92,  347 => 90,  342 => 89,  338 => 88,  333 => 86,  327 => 82,  324 => 81,  317 => 77,  311 => 73,  302 => 71,  298 => 70,  294 => 69,  291 => 68,  289 => 67,  285 => 66,  280 => 63,  271 => 61,  267 => 60,  263 => 59,  260 => 58,  258 => 57,  254 => 56,  249 => 53,  240 => 51,  236 => 50,  232 => 49,  229 => 48,  227 => 47,  223 => 46,  218 => 43,  209 => 41,  205 => 40,  201 => 39,  198 => 38,  196 => 37,  192 => 36,  184 => 31,  181 => 30,  178 => 28,  175 => 27,  172 => 26,  169 => 25,  166 => 24,  163 => 23,  160 => 22,  157 => 21,  154 => 20,  151 => 19,  148 => 18,  145 => 17,  142 => 16,  140 => 15,  137 => 14,  134 => 12,  124 => 11,  112 => 8,  102 => 7,  82 => 5,  62 => 3,  39 => 1,);
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

  {{ form_start(form_edit_counterparty) }}
  <div class=\"container-fluid text-center mt-3\">
    <div class=\"row\">

      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">{{ form_label(form_edit_counterparty.name_counterparty) }}</div>
        {{ form_widget(form_edit_counterparty.name_counterparty, { value : name_counterparty_find_id,
        'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_edit_counterparty.name_counterparty) |nl2br }}
        {% for message in app.flashes('[name_counterparty_error][Regex]') %}
        {{ message }}
        {% endfor %}
      </div>

      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">{{ form_label(form_edit_counterparty.mail_counterparty) }}</div>
        {{ form_widget(form_edit_counterparty.mail_counterparty, { value : mail_counterparty_find_id,
        'attr': {'class': 'w-100'} }) }}
        {{ form_errors(form_edit_counterparty.mail_counterparty) |nl2br }}
        {% for message in app.flashes('[mail_counterparty_error][Email]') %}
        {{ message }}
        {% endfor %}
      </div>

      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">{{ form_label(form_edit_counterparty.manager_phone) }}</div>
        {{ form_widget(form_edit_counterparty.manager_phone, { value : manager_phone_find_id,
        'attr': {'class': 'w-100', 'placeholder': '+79999999999'} }) }}
        {{ form_errors(form_edit_counterparty.manager_phone) |nl2br }}
        {% for message in app.flashes('[manager_phone_error][Regex]') %}
        {{ message }}
        {% endfor %}
      </div>

      <div class=\"col-sm-3 col-md-3 col-lg-2\">
        <div class=\"lb\">{{ form_label(form_edit_counterparty.delivery_phone) }}</div>
        {{ form_widget(form_edit_counterparty.delivery_phone, { value : delivery_phone_find_id,
        'attr': {'class': 'w-100', 'placeholder': '+79999999999'} }) }}
        {{ form_errors(form_edit_counterparty.delivery_phone) |nl2br }}
        {% for message in app.flashes('[delivery_phone_error][Regex]') %}
        {{ message }}
        {% endfor %}
      </div>
    </div>
  </div>

  {{ form_widget(form_edit_counterparty.id, {value : id_find_id}) }}

  <div class=\"row my-2 pt-2\">
    <div class=\"col-sm-12 col-lg-8\">
      {{ form_widget(form_edit_counterparty.button_counterparty, { 'label': 'Изменить', 'attr': {'class': 'btn
      btn-secondary w-100'}}) }}
    </div>
  </div>

  {{ form_end(form_edit_counterparty) }}

  {% for messages in app.flashes(['delete','Error']) %}
  {% for message in messages %}
    <h2 class=\"mt-3 ms-3\">{{ message }}</h2>
  {% endfor %}
  {% endfor %}

  <div class=\"m-3\">
    {% if id_handler %}
    <h5>Данные поставщика изменены </h5>
    {% endif %}
  </div>
  {% endblock form %}", "@counterparty/editCounterparty.html.twig", "/var/www/src/Counterparty/InfrastructureCounterparty/ApiCounterparty/templatesCounterparty/editCounterparty.html.twig");
    }
}
