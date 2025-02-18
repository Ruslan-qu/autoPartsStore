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

/* sales/cartWarehouse.html.twig */
class __TwigTemplate_ced418002678fe60cf0f4466df85fd6c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sales/cartWarehouse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sales/cartWarehouse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sales/cartWarehouse.html.twig", 1);
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
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [["delete", "Error", "successfully"]], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 14
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                yield "  <h2 class=\"mt-3 ms-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</h2>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 22
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 23
        yield "
  ";
        // line 25
        yield "
  <div class=\"container-fluid text-center pt-3\">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover table-striped-columns table-sm align-middle 
        border-info shadow p-3 mb-3 bg-body-tertiary rounded\">
        <thead class=\"table-secondary\">

          ";
        // line 32
        if ((isset($context["cartAutoParts"]) || array_key_exists("cartAutoParts", $context) ? $context["cartAutoParts"] : (function () { throw new RuntimeError('Variable "cartAutoParts" does not exist.', 32, $this->source); })())) {
            // line 33
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
            // line 45
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("bx:edit", ["height" => "30", "width" => "30"]);
            yield "</th>
            <th scope=\"col\">";
            // line 46
            yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("iconoir:delete-circle", ["height" => "30", "width" => "30"]);
            yield "</th>
          </tr>
          ";
        }
        // line 49
        yield "

        </thead>
        <tbody class=\"table-group-divider\">
          ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartAutoParts"]) || array_key_exists("cartAutoParts", $context) ? $context["cartAutoParts"] : (function () { throw new RuntimeError('Variable "cartAutoParts" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 54
            yield "          ";
            if ($context["information"]) {
                // line 55
                yield "
          <tr>
            <td>";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, false, false, 57), "getIdDetails", [], "method", false, false, false, 57), "getPartNumber", [], "method", false, false, false, 57), "html", null, true);
                yield "</td>
            <td>";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, false, false, 58), "getIdDetails", [], "method", false, false, false, 58), "getManufacturer", [], "method", false, false, false, 58), "html", null, true);
                yield "</td>
            <td>";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 59), "getIdDetails", [], "method", false, true, false, 59), "getIdPartName", [], "method", false, true, false, 59), "getPartName", [], "method", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 59), "getIdDetails", [], "method", false, true, false, 59), "getIdPartName", [], "method", false, true, false, 59), "getPartName", [], "method", false, false, false, 59), "")) : ("")), "html", null, true);
                yield "
            </td>
            <td>";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 61), "getIdDetails", [], "method", false, true, false, 61), "getIdCarBrand", [], "method", false, true, false, 61), "getCarBrand", [], "method", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 61), "getIdDetails", [], "method", false, true, false, 61), "getIdCarBrand", [], "method", false, true, false, 61), "getCarBrand", [], "method", false, false, false, 61), "")) : ("")), "html", null, true);
                yield "
            </td>
            <td>";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 63), "getIdDetails", [], "method", false, true, false, 63), "getIdSide", [], "method", false, true, false, 63), "getSide", [], "method", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 63), "getIdDetails", [], "method", false, true, false, 63), "getIdSide", [], "method", false, true, false, 63), "getSide", [], "method", false, false, false, 63), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 64), "getIdDetails", [], "method", false, true, false, 64), "getIdBody", [], "method", false, true, false, 64), "getBody", [], "method", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 64), "getIdDetails", [], "method", false, true, false, 64), "getIdBody", [], "method", false, true, false, 64), "getBody", [], "method", false, false, false, 64), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 65), "getIdDetails", [], "method", false, true, false, 65), "getIdAxle", [], "method", false, true, false, 65), "getAxle", [], "method", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getIdAutoPartsWarehouse", [], "method", false, true, false, 65), "getIdDetails", [], "method", false, true, false, 65), "getIdAxle", [], "method", false, true, false, 65), "getAxle", [], "method", false, false, false, 65), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getDateSold", [], "method", false, false, false, 66), "d-m-Y"), ""), "html", null, true);
                yield "</td>
            <td>";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantitySold", [], "method", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getQuantitySold", [], "method", false, false, false, 67), "")) : ("")), "html", null, true);
                yield "</td>
            <td>";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getPriceSold", [], "method", false, false, false, 68) / 100), ""), "html", null, true);
                yield "</td>

            <form action=\"/editСartAutoPartsWarehouseSold\" name=\"edit_cart_auto_parts_warehouse_sold\">

              <td><button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"id\" value=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 72), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("bx:edit", ["height" => "30", "width" => "30"]);
                // line 73
                yield "</button></td>

            </form>
            <form action=\"/deleteСartAutoPartsWarehouseSold\" name=\"delete_cart_auto_parts_warehouse_sold\">

              <td><button class=\"btn btn-outline-danger\" type=\"submit\" name=\"id\" value=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "getId", [], "method", false, false, false, 78), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("iconoir:delete-circle", ["height" => "30", "width" => "30"]);
                // line 79
                yield "</button></td>

            </form>
          </tr>
          ";
            }
            // line 84
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "
        </tbody>
        <tfoot>
          ";
        // line 88
        if ((isset($context["cartAutoParts"]) || array_key_exists("cartAutoParts", $context) ? $context["cartAutoParts"] : (function () { throw new RuntimeError('Variable "cartAutoParts" does not exist.', 88, $this->source); })())) {
            // line 89
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
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(((isset($context["sum_price_sold_cart_auto_parts"]) || array_key_exists("sum_price_sold_cart_auto_parts", $context) ? $context["sum_price_sold_cart_auto_parts"] : (function () { throw new RuntimeError('Variable "sum_price_sold_cart_auto_parts" does not exist.', 99, $this->source); })()) / 100), ""), "html", null, true);
            yield "</td>
            <td></td>
            <td></td>
          </tr>
          ";
        }
        // line 104
        yield "        </tfoot>
      </table>
    </div>
  </div>
  ";
        // line 108
        if ((isset($context["cartAutoParts"]) || array_key_exists("cartAutoParts", $context) ? $context["cartAutoParts"] : (function () { throw new RuntimeError('Variable "cartAutoParts" does not exist.', 108, $this->source); })())) {
            // line 109
            yield "  ";
            // line 110
            yield "  <div class=\"container-fluid text-center my-2 pt-2\">
    ";
            // line 111
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_completion_sale"]) || array_key_exists("form_completion_sale", $context) ? $context["form_completion_sale"] : (function () { throw new RuntimeError('Variable "form_completion_sale" does not exist.', 111, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("completion_sale")]);
            yield "

    <div class=\"row\">
      <div class=\"col-sm-12 col-lg-12 col-xl-12\">
        ";
            // line 115
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_completion_sale"]) || array_key_exists("form_completion_sale", $context) ? $context["form_completion_sale"] : (function () { throw new RuntimeError('Variable "form_completion_sale" does not exist.', 115, $this->source); })()), "button_completion_sale", [], "any", false, false, false, 115), 'widget', ["label" => "Продать", "attr" => ["class" => "btn btn-danger w-100"]]);
            // line 116
            yield "
      </div>
    </div>

    ";
            // line 120
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_completion_sale"]) || array_key_exists("form_completion_sale", $context) ? $context["form_completion_sale"] : (function () { throw new RuntimeError('Variable "form_completion_sale" does not exist.', 120, $this->source); })()), 'form_end');
            yield "
  </div>
  ";
        }
        // line 123
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
        return "sales/cartWarehouse.html.twig";
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
        return array (  373 => 123,  367 => 120,  361 => 116,  359 => 115,  352 => 111,  349 => 110,  347 => 109,  345 => 108,  339 => 104,  331 => 99,  319 => 89,  317 => 88,  312 => 85,  306 => 84,  299 => 79,  295 => 78,  288 => 73,  284 => 72,  277 => 68,  273 => 67,  269 => 66,  265 => 65,  261 => 64,  257 => 63,  252 => 61,  247 => 59,  243 => 58,  239 => 57,  235 => 55,  232 => 54,  228 => 53,  222 => 49,  216 => 46,  212 => 45,  198 => 33,  196 => 32,  187 => 25,  184 => 23,  174 => 22,  162 => 18,  156 => 17,  147 => 15,  142 => 14,  138 => 13,  135 => 12,  125 => 11,  113 => 8,  103 => 7,  83 => 5,  63 => 3,  40 => 1,);
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

  {% for messages in app.flashes(['delete','Error','successfully']) %}
  {% for message in messages %}
  <h2 class=\"mt-3 ms-3\">{{ message }}</h2>
  {% endfor %}
  {% endfor %}

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
  {% endblock table %}", "sales/cartWarehouse.html.twig", "/var/www/templates/sales/cartWarehouse.html.twig");
    }
}
