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

/* Device/show.html */
class __TwigTemplate_2b7b031ce91211f41fdb7703307ac87f76e123309f8a450a62c8a309a842df21 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Device/show.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["devices"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "model_name", [], "any", false, false, false, 2), "html", null, true);
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        // line 5
        echo "
<input  id=\"myInput\" type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"Pretraga\">
<br>
      <table class=\"table table-bordered table-hover\">
         
          <thead>
            <tr>
              <th  style = \" background-color: lightgray; padding: 15px;\" scope=\"col\">Br</th>
              <th scope=\"col\">Model Type</th>
              <th scope=\"col\">Model Name</th>
              <th scope=\"col\">Bar Code</th>
              <th scope=\"col\">Serial Number</th>
              <th scope=\"col\">Ram</th>
              <th scope=\"col\">Processor</th>
              <th scope=\"col\">Inch</th>

              <th scope=\"col\">Ports</th>
              <th scope=\"col\">Korisnik</th>
              <th scope=\"col\">Location</th>

              

              
            </tr>
          </thead>
          ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["devices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 31
            echo "          ";
            $context["br"] = (($context["br"] ?? null) + 1);
            // line 32
            echo "          <tbody id=\"myTable\">
            <tr>
              <td  style = \" padding: 15px;\">";
            // line 34
            echo twig_escape_filter($this->env, ($context["br"] ?? null), "html", null, true);
            echo "</td>
              <th scope=\"row\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_type_name", [], "any", false, false, false, 35), "html", null, true);
            echo "</th>
              
              <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "model/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_id", [], "any", false, false, false, 37), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_name", [], "any", false, false, false, 37));
            echo "</td>
              <td>";
            // line 38
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "bar_code", [], "any", false, false, false, 38)), "-"), "html", null, true);
            echo "</td>
              <td>";
            // line 39
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "serial_number", [], "any", false, false, false, 39)), "-"), "html", null, true);
            echo "</td>
              <td>";
            // line 40
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "ram", [], "any", false, false, false, 40)), "-"), "html", null, true);
            echo "</td>
              <td>";
            // line 41
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "processor", [], "any", false, false, false, 41)), "-"), "html", null, true);
            echo "</td>
              <td>";
            // line 42
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "inch", [], "any", false, false, false, 42)), "-"), "html", null, true);
            echo "</td>
              <td>";
            // line 43
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "ports", [], "any", false, false, false, 43)), "-"), "html", null, true);
            echo "</td>
              <td>";
            // line 44
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "korisnik", [], "any", false, false, false, 44)), "-"), "html", null, true);
            echo "</td>

              <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "ekspoziture/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "location_name", [], "any", false, false, false, 46), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "location_name", [], "any", false, false, false, 46), "html", null, true);
            echo " </a></td> 

            </tr>
         
          </tbody>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </table>









      

<!--
<table style=\"border-style: dotted\" >
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["devices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 67
            echo "    

    
      <tr>
        
        <th>Model Type</th>
        <th>model name</th>
        <th>bar_code</th> 
        <th>serial_number</th>
        
      </tr>
      <tr>
        <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_type_name", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
        <td> <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "model/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_id", [], "any", false, false, false, 80), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_name", [], "any", false, false, false, 80));
            echo "</td></a>
        <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "bar_code", [], "any", false, false, false, 81));
            echo "</td>
        <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "serial_number", [], "any", false, false, false, 82));
            echo " </td>
      </tr>
    
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    </table>
  </div>
        
        
    -->    ";
    }

    public function getTemplateName()
    {
        return "Device/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 86,  204 => 82,  200 => 81,  192 => 80,  188 => 79,  174 => 67,  170 => 66,  154 => 52,  138 => 46,  133 => 44,  129 => 43,  125 => 42,  121 => 41,  117 => 40,  113 => 39,  109 => 38,  101 => 37,  96 => 35,  92 => 34,  88 => 32,  85 => 31,  81 => 30,  54 => 5,  51 => 4,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Device/show.html", "C:\\magacin app\\views\\Device\\show.html");
    }
}
