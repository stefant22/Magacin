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

/* DeviceRevers/getAdd.html */
class __TwigTemplate_e5cb522fe20c881e0b4fb5dd8841a7835654853efe33bcc4fd00468b0b331d37 extends \Twig\Template
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
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("_global/index.html", "DeviceRevers/getAdd.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Dodaj uređaj";
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        // line 5
        echo "
<br>


<table class=\"table table-bordered text-center\">

  <thead style=\"background-color: lightgrey;\">
      <tr>
          <th scope=\"col\">Br</th>
          <th scope=\"col\">Tip</th>
          <th scope=\"col\">Model</th>
          <th scope=\"col\">Bar kod</th>
       



      </tr>
  </thead>
  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["revs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 24
            echo "  ";
            $context["br"] = (($context["br"] ?? null) + 1);
            // line 25
            echo "  <tbody>
      <tr>
          <td>";
            // line 27
            echo twig_escape_filter($this->env, ($context["br"] ?? null), "html", null, true);
            echo "</td>
          <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "model_type_name", [], "any", false, false, false, 28));
            echo "</td>
          <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "model_name", [], "any", false, false, false, 29));
            echo "</td>
          <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "bar_code", [], "any", false, false, false, 30));
            echo "</td>
     


      </tr>

  </tbody>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
</table>




<form  method=\"POST\">
        <div class=\"form-row\">
          <div class=\"col\">




           Bar code:
     ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["revers"] ?? null), "type", [], "any", false, false, false, 52) == "razduzenje")) {
            // line 53
            echo "            <select name=\"device_id\" class=\"form-control\">

              
      ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["nmag"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
                // line 57
                echo "                <option  type=\"text\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "device_id", [], "any", false, false, false, 57), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "location_id", [], "any", false, false, false, 57), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "device_id", [], "any", false, false, false, 57), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "bar_code", [], "any", false, false, false, 57), "html", null, true);
                echo " &nbsp; &nbsp; - &nbsp; &nbsp; ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_name", [], "any", false, false, false, 57), "html", null, true);
                echo "</option>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo " 

      


              </select>

              <select name=\"ispravan\" class=\"form-control\">
          
                <option  type=\"text\" id=\"ispravan\" value=\"da\" >Ispravan</option>
                <option  type=\"text\" id=\"neispravan\"  value=\"ne\" >Neispravan</option>
                <option  type=\"text\" id=\"zaTehnicki\"  value=\"zaTehnicki\" >Za Tehnicki</option>
   
              </select>

";
        }
        // line 74
        echo "


";
        // line 77
        if ((twig_get_attribute($this->env, $this->source, ($context["revers"] ?? null), "type", [], "any", false, false, false, 77) == "zaduzenje")) {
            // line 78
            echo "<select name=\"device_id\" class=\"form-control\">

  
";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mag"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
                // line 82
                echo "    <option  type=\"text\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "device_id", [], "any", false, false, false, 82), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "location_id", [], "any", false, false, false, 82), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "device_id", [], "any", false, false, false, 82), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "bar_code", [], "any", false, false, false, 82), "html", null, true);
                echo " &nbsp; &nbsp; - &nbsp; &nbsp; ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_name", [], "any", false, false, false, 82), "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo " 




  </select>

";
        }
        // line 91
        echo "            

              


              
     
             
             <br>
    
            <button type=\"submit\" class=\"btn btn-primary mb-2\">Dodaj uređaj</button>

           ";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["revs"] ?? null), "revers_holder", [], "any", false, false, false, 103), "html", null, true);
        echo "
    
          </div>
    
        </div>
      </form>
    
    <a href= \"";
        // line 110
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "reversi\">  <button type=\"submit\" class=\"btn btn-primary mb-2\"> Zavrsi revers </button> </a>
";
    }

    public function getTemplateName()
    {
        return "DeviceRevers/getAdd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 110,  230 => 103,  216 => 91,  206 => 83,  189 => 82,  185 => 81,  180 => 78,  178 => 77,  173 => 74,  155 => 58,  138 => 57,  134 => 56,  129 => 53,  127 => 52,  111 => 38,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 25,  78 => 24,  74 => 23,  54 => 5,  51 => 4,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "DeviceRevers/getAdd.html", "C:\\magacin app\\views\\DeviceRevers\\getAdd.html");
    }
}
