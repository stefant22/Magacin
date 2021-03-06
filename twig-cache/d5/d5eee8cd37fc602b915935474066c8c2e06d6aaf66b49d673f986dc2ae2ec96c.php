<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Device/zaTehnickiStanje.html */
class __TwigTemplate_8163fcedcb949ec015b78c87db29bd8aa502ce17f2fb525f32bf6dafcd8708f8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate([0 => "_global/index.html"], "Device/zaTehnickiStanje.html", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Stanje za tehnicki ";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        // line 6
        echo "<br>
<meta http-equiv=\"refresh\" content=\"20\" >

<div class=\"row\">

  <div class=\"col-md-6 text-center\">
    Racunari :
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th scope=\"col\">Tip</th>
          <th scope=\"col\">Model</th>
          <th scope=\"col\">Br komada</th>
        </tr>
      </thead>
      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["devices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 22
            echo "      <tbody>
        <tr>
          <td>";
            // line 24
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["device"], "model_type_name", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["device"], "model_type_name", [], "any", false, false, false, 24), "-")) : ("-")), "html", null, true);
            echo "</td>
          <td data-toggle=\"tooltip\" data-html=\"true\" data-placement=\"bottom\" title=\"Ram : ";
            // line 25
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["device"], "ram", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["device"], "ram", [], "any", false, false, false, 25), "-")) : ("-")), "html", null, true);
            echo " <br> Procesor : ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["device"], "processor", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["device"], "processor", [], "any", false, false, false, 25), "-")) : ("-")), "html", null, true);
            echo " <br>  Ports: ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["device"], "ports", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["device"], "ports", [], "any", false, false, false, 25), "-")) : ("-")), "html", null, true);
            echo " <br> Description: ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["device"], "model_description", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["device"], "model_description", [], "any", false, false, false, 25), "-")) : ("-")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["device"], "model_name", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["device"], "model_name", [], "any", false, false, false, 25), "-")) : ("-")), "html", null, true);
            echo "</td>
          <td>";
            // line 26
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["device"], "br", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["device"], "br", [], "any", false, false, false, 26), "-")) : ("-")), "html", null, true);
            echo "</td>
        </tr>
      </tbody>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </table>

    Stampaci :
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th scope=\"col\">Tip</th>
          <th scope=\"col\">Model</th>
          <th scope=\"col\">Br komada</th>
        </tr>
      </thead>
      ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stampaci"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stampac"]) {
            // line 42
            echo "      <tbody>
        <tr>
          <td>";
            // line 44
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["stampac"], "model_type_name", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["stampac"], "model_type_name", [], "any", false, false, false, 44), "-")) : ("-")), "html", null, true);
            echo "</td>
          <td>";
            // line 45
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["stampac"], "model_name", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["stampac"], "model_name", [], "any", false, false, false, 45), "-")) : ("-")), "html", null, true);
            echo "</td>
          <td>";
            // line 46
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["stampac"], "br", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["stampac"], "br", [], "any", false, false, false, 46), "-")) : ("-")), "html", null, true);
            echo "</td>
        </tr>
      </tbody>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stampac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </table>


    </div>

  <br>

  <div class=\"col-md-6 text-center\">
     Monitori :
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <th scope=\"col\">Tip</th>
            <th scope=\"col\">Model</th>
            <th scope=\"col\">Br komada</th>
          </tr>
        </thead>
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["monitori"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["monitor"]) {
            // line 68
            echo "        <tbody>
          <tr>
            <td>";
            // line 70
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["monitor"], "model_type_name", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["monitor"], "model_type_name", [], "any", false, false, false, 70), "-")) : ("-")), "html", null, true);
            echo "</td>
            <td data-toggle=\"tooltip\" data-html=\"true\" data-placement=\"bottom\" title=\"Inch: ";
            // line 71
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["monitor"], "inch", [], "any", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["monitor"], "inch", [], "any", false, false, false, 71), "-")) : ("-")), "html", null, true);
            echo " <br> Ports: ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["monitor"], "ports", [], "any", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["monitor"], "ports", [], "any", false, false, false, 71), "-")) : ("-")), "html", null, true);
            echo "<br> Description: ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["monitor"], "model_description", [], "any", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["monitor"], "model_description", [], "any", false, false, false, 71), "-")) : ("-")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["monitor"], "model_name", [], "any", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["monitor"], "model_name", [], "any", false, false, false, 71), "-")) : ("-")), "html", null, true);
            echo "</td>
            <td>";
            // line 72
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["monitor"], "br", [], "any", true, true, false, 72)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["monitor"], "br", [], "any", false, false, false, 72), "-")) : ("-")), "html", null, true);
            echo "</td>
          </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "      </table>

   


    </div>
    <div class=\"text-center\"> <a class='dugme ' href=\"javascript:window.print();\">  <button  type=\"button\" class=\"btn btn-primary \"> Stampaj</button></a> </div>

";
    }

    public function getTemplateName()
    {
        return "Device/zaTehnickiStanje.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 76,  184 => 72,  174 => 71,  170 => 70,  166 => 68,  162 => 67,  143 => 50,  133 => 46,  129 => 45,  125 => 44,  121 => 42,  117 => 41,  104 => 30,  94 => 26,  82 => 25,  78 => 24,  74 => 22,  70 => 21,  53 => 6,  50 => 5,  44 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Device/zaTehnickiStanje.html", "C:\\magacin app\\views\\Device\\zaTehnickiStanje.html");
    }
}
