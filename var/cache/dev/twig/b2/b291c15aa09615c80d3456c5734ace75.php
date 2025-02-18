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

/* autoPartsWarehouse/cartAutoPartsWarehouseSold.html.twig */
class __TwigTemplate_da36eefe0beada7e9f75bc4a8cb63e72 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autoPartsWarehouse/cartAutoPartsWarehouseSold.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autoPartsWarehouse/cartAutoPartsWarehouseSold.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "autoPartsWarehouse/cartAutoPartsWarehouseSold.html.twig", 1);
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
  <div class=\"container-fluid text-center pt-3\">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow mb-4 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["car_parts_for_sale"]) || array_key_exists("car_parts_for_sale", $context) ? $context["car_parts_for_sale"] : (function () { throw new RuntimeError('Variable "car_parts_for_sale" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 21
            yield "          ";
            if ($context["information"]) {
                // line 22
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
            <th scope=\"col\">Сп.<br>оплаты</th>
          </tr>
          ";
            }
            // line 35
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "        </thead>

        <tbody class=\"table-group-divider\">
          ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["car_parts_for_sale"]) || array_key_exists("car_parts_for_sale", $context) ? $context["car_parts_for_sale"] : (function () { throw new RuntimeError('Variable "car_parts_for_sale" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 40
            yield "          ";
            if ($context["information"]) {
                // line 41
                yield "          <tr>
            <td>";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, false, false, 42), "getPartNumber", [], "method", false, false, false, 42), "html", null, true);
                yield "</td>
            <td>";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 43), "getIdOriginalNumber", [], "method", false, true, false, 43), "getOriginalNumber", [], "method", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 43), "getIdOriginalNumber", [], "method", false, true, false, 43), "getOriginalNumber", [], "method", false, false, false, 43), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, false, false, 44), "getManufacturer", [], "method", false, false, false, 44), "html", null, true);
                yield "</td>
            <td>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, false, false, 45), "getAdditionalDescriptions", [], "method", false, false, false, 45), "html", null, true);
                yield "</td>
            <td>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 46), "getIdPartName", [], "method", false, true, false, 46), "getPartName", [], "method", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 46), "getIdPartName", [], "method", false, true, false, 46), "getPartName", [], "method", false, false, false, 46), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 47), "getIdCarBrand", [], "method", false, true, false, 47), "getCarBrand", [], "method", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 47), "getIdCarBrand", [], "method", false, true, false, 47), "getCarBrand", [], "method", false, false, false, 47), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 48), "getIdSide", [], "method", false, true, false, 48), "getSide", [], "method", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 48), "getIdSide", [], "method", false, true, false, 48), "getSide", [], "method", false, false, false, 48), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 49), "getIdBody", [], "method", false, true, false, 49), "getBody", [], "method", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 49), "getIdBody", [], "method", false, true, false, 49), "getBody", [], "method", false, false, false, 49), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 50), "getIdAxle", [], "method", false, true, false, 50), "getAxle", [], "method", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdDetails", [], "any", false, true, false, 50), "getIdAxle", [], "method", false, true, false, 50), "getAxle", [], "method", false, false, false, 50), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdPaymentMethod", [], "any", false, true, false, 51), "getmethod", [], "method", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdPaymentMethod", [], "any", false, true, false, 51), "getmethod", [], "method", false, false, false, 51), "")) : ("")), "html", null, true);
                yield "</td>
          </tr>
          ";
            }
            // line 54
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["car_parts_for_sale"]) || array_key_exists("car_parts_for_sale", $context) ? $context["car_parts_for_sale"] : (function () { throw new RuntimeError('Variable "car_parts_for_sale" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 70
            yield "              ";
            if ($context["information"]) {
                // line 71
                yield "              <tr>
                <th scope=\"col\">Кол-во</th>
                <th scope=\"col\">Цена шт</th>
                <th scope=\"col\">Цена общая</th>
              </tr>
              ";
            }
            // line 77
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "
            </thead>
            <tbody class=\"table-group-divider\">
              ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["car_parts_for_sale"]) || array_key_exists("car_parts_for_sale", $context) ? $context["car_parts_for_sale"] : (function () { throw new RuntimeError('Variable "car_parts_for_sale" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 82
            yield "              ";
            if ($context["information"]) {
                // line 83
                yield "              <tr>
                <td>";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantity", [], "method", false, false, false, 84) - CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantitySold", [], "method", false, false, false, 84)), ""), "html", null, true);
                yield "</td>
                <td>";
                // line 85
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantity", [], "method", false, false, false, 85) - CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantitySold", [], "method", false, false, false, 85)) != 0)) {
                    // line 86
                    yield "                  ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getPrice", [], "method", false, false, false, 86) / 100) / CoreExtension::getAttribute($this->env, $this->source,                     // line 87
$context["information"], "getQuantity", [], "method", false, false, false, 87)), ""), 2, ".", ""), "html", null, true);
                    yield "
                  ";
                } else {
                    // line 89
                    yield "                  ";
                    yield 0;
                    yield "
                  ";
                }
                // line 90
                yield "</td>
                <td>";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default((((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getPrice", [], "method", false, false, false, 91) / 100) / CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantity", [], "method", false, false, false, 91)) * (CoreExtension::getAttribute($this->env, $this->source,                 // line 92
$context["information"], "getQuantity", [], "method", false, false, false, 92) - CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantitySold", [], "method", false, false, false, 92))), ""), "html", null, true);
                yield "</td>
              </tr>
              ";
            }
            // line 95
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "            </tbody>
          </table>
        </div>
      </div>


      ";
        // line 103
        yield "      <div class=\"col-sm-12 col-lg-6 col-xl-6\">
        ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_cart_auto_parts_warehouse_sold", $context) ? $context["form_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_cart_auto_parts_warehouse_sold" does not exist.', 104, $this->source); })()), 'form_start');
        yield "

        <div class=\"row justify-content-start\">

          <div class=\"col-sm-4 col-lg-4 col-xl-4\">
            <div class=\"lb\">";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_cart_auto_parts_warehouse_sold", $context) ? $context["form_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_cart_auto_parts_warehouse_sold" does not exist.', 109, $this->source); })()), "date_sold", [], "any", false, false, false, 109), 'label');
        yield "</div>
            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_cart_auto_parts_warehouse_sold", $context) ? $context["form_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_cart_auto_parts_warehouse_sold" does not exist.', 110, $this->source); })()), "date_sold", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 111
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_cart_auto_parts_warehouse_sold", $context) ? $context["form_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_cart_auto_parts_warehouse_sold" does not exist.', 111, $this->source); })()), "date_sold", [], "any", false, false, false, 111), 'errors'));
        yield "
            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "flashes", ["[date_sold]"], "method", false, false, false, 112));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 113
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        yield "          </div>

          <div class=\"col-sm-4 col-lg-4 col-xl-4\">
            <div class=\"lb\">";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_cart_auto_parts_warehouse_sold", $context) ? $context["form_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_cart_auto_parts_warehouse_sold" does not exist.', 118, $this->source); })()), "quantity_sold", [], "any", false, false, false, 118), 'label');
        yield "</div>
            ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_cart_auto_parts_warehouse_sold", $context) ? $context["form_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_cart_auto_parts_warehouse_sold" does not exist.', 119, $this->source); })()), "quantity_sold", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 120
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_cart_auto_parts_warehouse_sold", $context) ? $context["form_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_cart_auto_parts_warehouse_sold" does not exist.', 120, $this->source); })()), "quantity_sold", [], "any", false, false, false, 120), 'errors'));
        yield "
            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "flashes", [["[quantity_sold_error][Range]", "[quantity_sold_error][NotBlank]"]], "method", false, false, false, 121));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 122
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 123
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            yield "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 126
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "flashes", ["[quantity_sold_auto_parts_warehouse_error]"], "method", false, false, false, 126));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 127
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "          </div>

          <div class=\"col-sm-4 col-lg-4 col-xl-4\">
            <div class=\"lb\">";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_cart_auto_parts_warehouse_sold", $context) ? $context["form_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_cart_auto_parts_warehouse_sold" does not exist.', 133, $this->source); })()), "price_sold", [], "any", false, false, false, 133), 'label');
        yield "</div>
            ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_cart_auto_parts_warehouse_sold", $context) ? $context["form_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_cart_auto_parts_warehouse_sold" does not exist.', 134, $this->source); })()), "price_sold", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "w-100"]]);
        yield "
            ";
        // line 135
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_cart_auto_parts_warehouse_sold", $context) ? $context["form_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_cart_auto_parts_warehouse_sold" does not exist.', 135, $this->source); })()), "price_sold", [], "any", false, false, false, 135), 'errors'));
        yield "
            ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "flashes", ["[price_sold_error][NotBlank]"], "method", false, false, false, 136));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 137
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "          </div>



          ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["car_parts_for_sale"]) || array_key_exists("car_parts_for_sale", $context) ? $context["car_parts_for_sale"] : (function () { throw new RuntimeError('Variable "car_parts_for_sale" does not exist.', 143, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 144
            yield "          ";
            if ($context["information"]) {
                // line 145
                yield "          ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_cart_auto_parts_warehouse_sold", $context) ? $context["form_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_cart_auto_parts_warehouse_sold" does not exist.', 145, $this->source); })()), "id_auto_parts_warehouse", [], "any", false, false, false, 145), 'widget', ["value" => CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 145)]);
                // line 146
                yield "
          ";
            }
            // line 148
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "        </div>
      </div>
    </div>

    <div class=\"row my-2 pt-2\">
      <div class=\"col-sm-12 col-lg-12 col-xl-12\">
        ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_cart_auto_parts_warehouse_sold", $context) ? $context["form_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_cart_auto_parts_warehouse_sold" does not exist.', 155, $this->source); })()), "button_add_cart", [], "any", false, false, false, 155), 'widget', ["label" => "Добавить в корзину", "attr" => ["class" => "btn btn-success w-100"]]);
        // line 156
        yield "
      </div>
    </div>

  </div>

  ";
        // line 162
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_cart_auto_parts_warehouse_sold"]) || array_key_exists("form_cart_auto_parts_warehouse_sold", $context) ? $context["form_cart_auto_parts_warehouse_sold"] : (function () { throw new RuntimeError('Variable "form_cart_auto_parts_warehouse_sold" does not exist.', 162, $this->source); })()), 'form_end');
        yield "

  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 167
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 168
        yield "
  ";
        // line 170
        yield "
  <div class=\"container-fluid text-center pt-3\">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow p-3 mb-3 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">

          ";
        // line 177
        if ((isset($context["cartAutoParts"]) || array_key_exists("cartAutoParts", $context) ? $context["cartAutoParts"] : (function () { throw new RuntimeError('Variable "cartAutoParts" does not exist.', 177, $this->source); })())) {
            // line 178
            yield "
          <tr>
            <th scope=\"col\">№<br>детали</th>
            <th scope=\"col\">Производитель</th>
            <th scope=\"col\">Название<br>детали</th>
            <th scope=\"col\">Марка</th>
            <th scope=\"col\">Сторона</th>
            <th scope=\"col\">Кузов</th>
            <th scope=\"col\">Перед<br>Зад</th>
            <th scope=\"col\">Дата</th>
            <th scope=\"col\">Кол-во</th>
            <th scope=\"col\">Цена</th>
            <th scope=\"col\">";
            // line 190
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("bx:edit", ["height" => "30", "width" => "30"]);
            yield "</th>
            <th scope=\"col\">";
            // line 191
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("iconoir:delete-circle", ["height" => "30", "width" => "30"]);
            yield "</th>
          </tr>
          ";
        }
        // line 194
        yield "

        </thead>
        <tbody class=\"table-group-divider\">
          ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartAutoParts"]) || array_key_exists("cartAutoParts", $context) ? $context["cartAutoParts"] : (function () { throw new RuntimeError('Variable "cartAutoParts" does not exist.', 198, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 199
            yield "          ";
            if ($context["information"]) {
                // line 200
                yield "
          <tr>
            <td>";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, false, false, 202), "getIdDetails", [], "method", false, false, false, 202), "getPartNumber", [], "method", false, false, false, 202), "html", null, true);
                yield "</td>
            <td>";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, false, false, 203), "getIdDetails", [], "method", false, false, false, 203), "getManufacturer", [], "method", false, false, false, 203), "html", null, true);
                yield "</td>
            <td>";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 204), "getIdDetails", [], "method", false, true, false, 204), "getIdPartName", [], "method", false, true, false, 204), "getPartName", [], "method", true, true, false, 204)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 204), "getIdDetails", [], "method", false, true, false, 204), "getIdPartName", [], "method", false, true, false, 204), "getPartName", [], "method", false, false, false, 204), "")) : ("")), "html", null, true);
                yield "
            </td>
            <td>";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 206), "getIdDetails", [], "method", false, true, false, 206), "getIdCarBrand", [], "method", false, true, false, 206), "getCarBrand", [], "method", true, true, false, 206)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 206), "getIdDetails", [], "method", false, true, false, 206), "getIdCarBrand", [], "method", false, true, false, 206), "getCarBrand", [], "method", false, false, false, 206), "")) : ("")), "html", null, true);
                yield "
            </td>
            <td>";
                // line 208
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 208), "getIdDetails", [], "method", false, true, false, 208), "getIdSide", [], "method", false, true, false, 208), "getSide", [], "method", true, true, false, 208)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 208), "getIdDetails", [], "method", false, true, false, 208), "getIdSide", [], "method", false, true, false, 208), "getSide", [], "method", false, false, false, 208), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 209), "getIdDetails", [], "method", false, true, false, 209), "getIdBody", [], "method", false, true, false, 209), "getBody", [], "method", true, true, false, 209)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 209), "getIdDetails", [], "method", false, true, false, 209), "getIdBody", [], "method", false, true, false, 209), "getBody", [], "method", false, false, false, 209), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 210), "getIdDetails", [], "method", false, true, false, 210), "getIdAxle", [], "method", false, true, false, 210), "getAxle", [], "method", true, true, false, 210)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 210), "getIdDetails", [], "method", false, true, false, 210), "getIdAxle", [], "method", false, true, false, 210), "getAxle", [], "method", false, false, false, 210), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 211
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getDateSold", [], "method", false, false, false, 211), "d-m-Y"), ""), "html", null, true);
                yield "</td>
            <td>";
                // line 212
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantitySold", [], "method", true, true, false, 212)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantitySold", [], "method", false, false, false, 212), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getPriceSold", [], "method", false, false, false, 213) / 100), ""), "html", null, true);
                yield "</td>

            <form action=\"/editСartAutoPartsWarehouseSold\" name=\"edit_cart_auto_parts_warehouse_sold\">

              <td><button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"id\" value=\"";
                // line 217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 217), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("bx:edit", ["height" => "30", "width" => "30"]);
                // line 218
                yield "</button></td>

            </form>
            <form action=\"/deleteСartAutoPartsWarehouseSold\" name=\"delete_cart_auto_parts_warehouse_sold\">

              <td><button class=\"btn btn-outline-danger\" type=\"submit\" name=\"id\" value=\"";
                // line 223
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 223), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("iconoir:delete-circle", ["height" => "30", "width" => "30"]);
                // line 224
                yield "</button></td>

            </form>
          </tr>
          ";
            }
            // line 229
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        yield "
        </tbody>
        <tfoot>
          ";
        // line 233
        if ((isset($context["cartAutoParts"]) || array_key_exists("cartAutoParts", $context) ? $context["cartAutoParts"] : (function () { throw new RuntimeError('Variable "cartAutoParts" does not exist.', 233, $this->source); })())) {
            // line 234
            yield "          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Общая<br>сумма</td>
            <td>";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(((isset($context["sum_price_sold_cart_auto_parts"]) || array_key_exists("sum_price_sold_cart_auto_parts", $context) ? $context["sum_price_sold_cart_auto_parts"] : (function () { throw new RuntimeError('Variable "sum_price_sold_cart_auto_parts" does not exist.', 244, $this->source); })()) / 100), ""), "html", null, true);
            yield "</td>
            <td></td>
            <td></td>
          </tr>
          ";
        }
        // line 249
        yield "        </tfoot>
      </table>
    </div>
  </div>
  ";
        // line 253
        if ((isset($context["cartAutoParts"]) || array_key_exists("cartAutoParts", $context) ? $context["cartAutoParts"] : (function () { throw new RuntimeError('Variable "cartAutoParts" does not exist.', 253, $this->source); })())) {
            // line 254
            yield "  ";
            // line 255
            yield "  <div class=\"container-fluid text-center my-2 pt-2\">
    ";
            // line 256
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_completion_sale"]) || array_key_exists("form_completion_sale", $context) ? $context["form_completion_sale"] : (function () { throw new RuntimeError('Variable "form_completion_sale" does not exist.', 256, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("completion_sale")]);
            yield "

    <div class=\"row\">
      <div class=\"col-sm-12 col-lg-12 col-xl-12\">
        ";
            // line 260
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_completion_sale"]) || array_key_exists("form_completion_sale", $context) ? $context["form_completion_sale"] : (function () { throw new RuntimeError('Variable "form_completion_sale" does not exist.', 260, $this->source); })()), "button_completion_sale", [], "any", false, false, false, 260), 'widget', ["label" => "Продать", "attr" => ["class" => "btn btn-danger w-100"]]);
            // line 261
            yield "
      </div>
    </div>

    ";
            // line 265
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_completion_sale"]) || array_key_exists("form_completion_sale", $context) ? $context["form_completion_sale"] : (function () { throw new RuntimeError('Variable "form_completion_sale" does not exist.', 265, $this->source); })()), 'form_end');
            yield "
  </div>
  ";
        }
        // line 268
        yield "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "autoPartsWarehouse/cartAutoPartsWarehouseSold.html.twig";
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
        return array (  716 => 268,  710 => 265,  704 => 261,  702 => 260,  695 => 256,  692 => 255,  690 => 254,  688 => 253,  682 => 249,  674 => 244,  662 => 234,  660 => 233,  655 => 230,  649 => 229,  642 => 224,  638 => 223,  631 => 218,  627 => 217,  620 => 213,  616 => 212,  612 => 211,  608 => 210,  604 => 209,  600 => 208,  595 => 206,  590 => 204,  586 => 203,  582 => 202,  578 => 200,  575 => 199,  571 => 198,  565 => 194,  559 => 191,  555 => 190,  541 => 178,  539 => 177,  530 => 170,  527 => 168,  517 => 167,  503 => 162,  495 => 156,  493 => 155,  485 => 149,  479 => 148,  475 => 146,  472 => 145,  469 => 144,  465 => 143,  459 => 139,  450 => 137,  446 => 136,  442 => 135,  438 => 134,  434 => 133,  429 => 130,  423 => 129,  414 => 127,  409 => 126,  404 => 125,  395 => 123,  390 => 122,  385 => 121,  381 => 120,  377 => 119,  373 => 118,  368 => 115,  359 => 113,  355 => 112,  351 => 111,  347 => 110,  343 => 109,  335 => 104,  332 => 103,  324 => 96,  318 => 95,  312 => 92,  311 => 91,  308 => 90,  302 => 89,  297 => 87,  295 => 86,  293 => 85,  289 => 84,  286 => 83,  283 => 82,  279 => 81,  274 => 78,  268 => 77,  260 => 71,  257 => 70,  253 => 69,  237 => 55,  231 => 54,  225 => 51,  221 => 50,  217 => 49,  213 => 48,  209 => 47,  205 => 46,  201 => 45,  197 => 44,  193 => 43,  189 => 42,  186 => 41,  183 => 40,  179 => 39,  174 => 36,  168 => 35,  153 => 22,  150 => 21,  146 => 20,  138 => 14,  135 => 12,  125 => 11,  113 => 8,  103 => 7,  83 => 5,  63 => 3,  40 => 1,);
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

  {#Таблица автодеталей#}

  <div class=\"container-fluid text-center pt-3\">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow mb-4 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">
          {% for information in car_parts_for_sale %}
          {% if information %}
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
            <th scope=\"col\">Сп.<br>оплаты</th>
          </tr>
          {% endif %}
          {% endfor %}
        </thead>

        <tbody class=\"table-group-divider\">
          {% for information in car_parts_for_sale %}
          {% if information %}
          <tr>
            <td>{{ information.getIdDetails.getPartNumber() }}</td>
            <td>{{ information.getIdDetails.getIdOriginalNumber().getOriginalNumber()|default('') }}</td>
            <td>{{ information.getIdDetails.getManufacturer() }}</td>
            <td>{{ information.getIdDetails.getAdditionalDescriptions() }}</td>
            <td>{{ information.getIdDetails.getIdPartName().getPartName()|default('') }}</td>
            <td>{{ information.getIdDetails.getIdCarBrand().getCarBrand()|default('') }}</td>
            <td>{{ information.getIdDetails.getIdSide().getSide()|default('') }}</td>
            <td>{{ information.getIdDetails.getIdBody().getBody()|default('') }}</td>
            <td>{{ information.getIdDetails.getIdAxle().getAxle()|default('') }}</td>
            <td>{{ information.getIdPaymentMethod.getmethod()|default('') }}</td>
          </tr>
          {% endif %}
          {% endfor %}
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

              {% for information in car_parts_for_sale %}
              {% if information %}
              <tr>
                <th scope=\"col\">Кол-во</th>
                <th scope=\"col\">Цена шт</th>
                <th scope=\"col\">Цена общая</th>
              </tr>
              {% endif %}
              {% endfor %}

            </thead>
            <tbody class=\"table-group-divider\">
              {% for information in car_parts_for_sale %}
              {% if information %}
              <tr>
                <td>{{ (information.getQuantity() - information.getQuantitySold())|default('') }}</td>
                <td>{% if (information.getQuantity() - information.getQuantitySold()) != 0 %}
                  {{ ((information.getPrice() / 100)
                  / information.getQuantity())|default('')|number_format(2,'.','')}}
                  {% else %}
                  {{0}}
                  {% endif %}</td>
                <td>{{ (((information.getPrice() / 100) / information.getQuantity())
                  * (information.getQuantity()- information.getQuantitySold()))|default('') }}</td>
              </tr>
              {% endif %}
              {% endfor %}
            </tbody>
          </table>
        </div>
      </div>


      {#Форма добавление в корзину деталей#}
      <div class=\"col-sm-12 col-lg-6 col-xl-6\">
        {{ form_start(form_cart_auto_parts_warehouse_sold) }}

        <div class=\"row justify-content-start\">

          <div class=\"col-sm-4 col-lg-4 col-xl-4\">
            <div class=\"lb\">{{ form_label(form_cart_auto_parts_warehouse_sold.date_sold) }}</div>
            {{ form_widget(form_cart_auto_parts_warehouse_sold.date_sold, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_cart_auto_parts_warehouse_sold.date_sold) |nl2br }}
            {% for message in app.flashes('[date_sold]') %}
            {{ message }}
            {% endfor %}
          </div>

          <div class=\"col-sm-4 col-lg-4 col-xl-4\">
            <div class=\"lb\">{{ form_label(form_cart_auto_parts_warehouse_sold.quantity_sold) }}</div>
            {{ form_widget(form_cart_auto_parts_warehouse_sold.quantity_sold, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_cart_auto_parts_warehouse_sold.quantity_sold) |nl2br }}
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
            <div class=\"lb\">{{ form_label(form_cart_auto_parts_warehouse_sold.price_sold) }}</div>
            {{ form_widget(form_cart_auto_parts_warehouse_sold.price_sold, { 'attr': {'class': 'w-100'} }) }}
            {{ form_errors(form_cart_auto_parts_warehouse_sold.price_sold) |nl2br }}
            {% for message in app.flashes('[price_sold_error][NotBlank]') %}
            {{ message }}
            {% endfor %}
          </div>



          {% for information in car_parts_for_sale %}
          {% if information %}
          {{ form_widget(form_cart_auto_parts_warehouse_sold.id_auto_parts_warehouse, { value : information.getId() })
          }}
          {% endif %}
          {% endfor %}
        </div>
      </div>
    </div>

    <div class=\"row my-2 pt-2\">
      <div class=\"col-sm-12 col-lg-12 col-xl-12\">
        {{ form_widget(form_cart_auto_parts_warehouse_sold.button_add_cart,
        { 'label': 'Добавить в корзину', 'attr': {'class': 'btn btn-success w-100'}}) }}
      </div>
    </div>

  </div>

  {{ form_end(form_cart_auto_parts_warehouse_sold) }}

  {% endblock form %}


  {% block table %}

  {#Таблица автодеталей на складе#}

  <div class=\"container-fluid text-center pt-3\">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow p-3 mb-3 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">

          {% if cartAutoParts %}

          <tr>
            <th scope=\"col\">№<br>детали</th>
            <th scope=\"col\">Производитель</th>
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
          {% for information in cartAutoParts %}
          {% if information %}

          <tr>
            <td>{{ information.getIdAutoPartsWarehouse().getIdDetails().getPartNumber() }}</td>
            <td>{{ information.getIdAutoPartsWarehouse().getIdDetails().getManufacturer() }}</td>
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

            <form action=\"/editСartAutoPartsWarehouseSold\" name=\"edit_cart_auto_parts_warehouse_sold\">

              <td><button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"id\" value=\"{{ information.getId() }}\">{{
                  ux_icon('bx:edit', {'height': '30', 'width': '30'}) }}</button></td>

            </form>
            <form action=\"/deleteСartAutoPartsWarehouseSold\" name=\"delete_cart_auto_parts_warehouse_sold\">

              <td><button class=\"btn btn-outline-danger\" type=\"submit\" name=\"id\" value=\"{{ information.getId() }}\">{{
                  ux_icon('iconoir:delete-circle', {'height': '30', 'width': '30'}) }}</button></td>

            </form>
          </tr>
          {% endif %}
          {% endfor %}

        </tbody>
        <tfoot>
          {% if cartAutoParts %}
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Общая<br>сумма</td>
            <td>{{ (sum_price_sold_cart_auto_parts / 100)|default('') }}</td>
            <td></td>
            <td></td>
          </tr>
          {% endif %}
        </tfoot>
      </table>
    </div>
  </div>
  {% if cartAutoParts %}
  {#Форма продажи деталей в корзине#}
  <div class=\"container-fluid text-center my-2 pt-2\">
    {{ form_start(form_completion_sale, {'action': path('completion_sale')}) }}

    <div class=\"row\">
      <div class=\"col-sm-12 col-lg-12 col-xl-12\">
        {{ form_widget(form_completion_sale.button_completion_sale,
        { 'label': 'Продать', 'attr': {'class': 'btn btn-danger w-100'}}) }}
      </div>
    </div>

    {{ form_end(form_completion_sale) }}
  </div>
  {% endif %}
  {% endblock table %}", "autoPartsWarehouse/cartAutoPartsWarehouseSold.html.twig", "/var/www/templates/autoPartsWarehouse/cartAutoPartsWarehouseSold.html.twig");
    }
}
