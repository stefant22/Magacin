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

/* Device/magacinStanje.html */
class __TwigTemplate_6fc768faaa6046b2b339eac4bd173627852a0422d18dddaa93e0584c49245455 extends \Twig\Template
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
        return $this->loadTemplate([0 => "_global/index.html"], "Device/magacinStanje.html", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Stanje u magacinu ";
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

  <br>

  
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["monitori"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["monitor"]) {
            // line 45
            echo "        <tbody>
          <tr>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["monitor"], "model_type_name", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["monitor"], "model_type_name", [], "any", false, false, false, 47), "-")) : ("-")), "html", null, true);
            echo "</td>
            <td data-toggle=\"tooltip\" data-html=\"true\" data-placement=\"bottom\" title=\"Inch: ";
            // line 48
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["monitor"], "inch", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["monitor"], "inch", [], "any", false, false, false, 48), "-")) : ("-")), "html", null, true);
            echo " <br> Ports: ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["monitor"], "ports", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["monitor"], "ports", [], "any", false, false, false, 48), "-")) : ("-")), "html", null, true);
            echo "<br> Description: ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["monitor"], "model_description", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["monitor"], "model_description", [], "any", false, false, false, 48), "-")) : ("-")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["monitor"], "model_name", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["monitor"], "model_name", [], "any", false, false, false, 48), "-")) : ("-")), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["monitor"], "br", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["monitor"], "br", [], "any", false, false, false, 49), "-")) : ("-")), "html", null, true);
            echo "</td>
          </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "      </table>
      
      Telefoni :
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <th scope=\"col\">Tip</th>
            <th scope=\"col\">Model</th>
            <th scope=\"col\">Br komada</th>
          </tr>
        </thead>
        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["telefoni"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["telefon"]) {
            // line 65
            echo "        <tbody>
          <tr>
            <td>";
            // line 67
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["telefon"], "model_type_name", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["telefon"], "model_type_name", [], "any", false, false, false, 67), "-")) : ("-")), "html", null, true);
            echo "</td>
            <td>";
            // line 68
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["telefon"], "model_name", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["telefon"], "model_name", [], "any", false, false, false, 68), "-")) : ("-")), "html", null, true);
            echo "</td>
            <td>";
            // line 69
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["telefon"], "br", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["telefon"], "br", [], "any", false, false, false, 69), "-")) : ("-")), "html", null, true);
            echo "</td>
          </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['telefon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "      </table>
    </div>

  <div class=\"col-md-6 text-center\">
      Laptopovi :
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <th scope=\"col\">Tip</th>
            <th scope=\"col\">Model</th>
            <th scope=\"col\">Br komada</th>
          </tr>
        </thead>
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["laptopovi"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["laptop"]) {
            // line 87
            echo "        <tbody>
          <tr>
            <td>";
            // line 89
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["laptop"], "model_type_name", [], "any", true, true, false, 89)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["laptop"], "model_type_name", [], "any", false, false, false, 89), "-")) : ("-")), "html", null, true);
            echo "</td>
            <td data-toggle=\"tooltip\" data-html=\"true\" data-placement=\"bottom\" title=\"Ram : ";
            // line 90
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["laptop"], "ram", [], "any", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["laptop"], "ram", [], "any", false, false, false, 90), "-")) : ("-")), "html", null, true);
            echo " <br> Procesor : ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["laptop"], "processor", [], "any", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["laptop"], "processor", [], "any", false, false, false, 90), "-")) : ("-")), "html", null, true);
            echo " <br> Ports: ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["laptop"], "ports", [], "any", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["laptop"], "ports", [], "any", false, false, false, 90), "-")) : ("-")), "html", null, true);
            echo "  <br> Description: ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["laptop"], "model_description", [], "any", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["laptop"], "model_description", [], "any", false, false, false, 90), "-")) : ("-")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["laptop"], "model_name", [], "any", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["laptop"], "model_name", [], "any", false, false, false, 90), "-")) : ("-")), "html", null, true);
            echo "</td>
            <td>";
            // line 91
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["laptop"], "br", [], "any", true, true, false, 91)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["laptop"], "br", [], "any", false, false, false, 91), "-")) : ("-")), "html", null, true);
            echo "</td>
          </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['laptop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "      </table>
      <br>

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
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stampaci"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stampac"]) {
            // line 108
            echo "        <tbody>
          <tr>
            <td>";
            // line 110
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["stampac"], "model_type_name", [], "any", true, true, false, 110)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["stampac"], "model_type_name", [], "any", false, false, false, 110), "-")) : ("-")), "html", null, true);
            echo "</td>
            <td>";
            // line 111
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["stampac"], "model_name", [], "any", true, true, false, 111)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["stampac"], "model_name", [], "any", false, false, false, 111), "-")) : ("-")), "html", null, true);
            echo "</td>
            <td>";
            // line 112
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["stampac"], "br", [], "any", true, true, false, 112)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["stampac"], "br", [], "any", false, false, false, 112), "-")) : ("-")), "html", null, true);
            echo "</td>
          </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stampac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "      </table>


      Skeneri :
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <th scope=\"col\">Tip</th>
            <th scope=\"col\">Model</th>
            <th scope=\"col\">Br komada</th>
          </tr>
        </thead>
        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["skeneri"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["skener"]) {
            // line 129
            echo "        <tbody>
          <tr>
            <td>";
            // line 131
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["skener"], "model_type_name", [], "any", true, true, false, 131)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["skener"], "model_type_name", [], "any", false, false, false, 131), "-")) : ("-")), "html", null, true);
            echo "</td>
            <td>";
            // line 132
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["skener"], "model_name", [], "any", true, true, false, 132)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["skener"], "model_name", [], "any", false, false, false, 132), "-")) : ("-")), "html", null, true);
            echo "</td>
            <td>";
            // line 133
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["skener"], "br", [], "any", true, true, false, 133)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["skener"], "br", [], "any", false, false, false, 133), "-")) : ("-")), "html", null, true);
            echo "</td>
          </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "      </table>
    </div>



</div>


";
    }

    public function getTemplateName()
    {
        return "Device/magacinStanje.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 137,  310 => 133,  306 => 132,  302 => 131,  298 => 129,  294 => 128,  280 => 116,  270 => 112,  266 => 111,  262 => 110,  258 => 108,  254 => 107,  240 => 95,  230 => 91,  218 => 90,  214 => 89,  210 => 87,  206 => 86,  191 => 73,  181 => 69,  177 => 68,  173 => 67,  169 => 65,  165 => 64,  152 => 53,  142 => 49,  132 => 48,  128 => 47,  124 => 45,  120 => 44,  104 => 30,  94 => 26,  82 => 25,  78 => 24,  74 => 22,  70 => 21,  53 => 6,  50 => 5,  44 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Device/magacinStanje.html", "C:\\magacin app\\views\\Device\\magacinStanje.html");
    }
}
