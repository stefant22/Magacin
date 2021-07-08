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

/* Device/deviceHistory.html */
class __TwigTemplate_7abbc3f775c3f779a6fb164a279667b9374b0e2d52c9705d31773ddba9e5f04e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Device/deviceHistory.html", 1);
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
    <thead>
      <tr>
        
        <th scope=\"col\">Broj Reversa</th>
        <th scope=\"col\">Model Name</th>
        <th scope=\"col\">Bar Code</th>
        <th scope=\"col\">Lokacija</th>
        <th scope=\"col\">Date</th>
        <th scope=\"col\">Revers type</th>
        <th scope=\"col\">Korisnik</th>

      
        

        
      </tr>
    </thead>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["devices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 27
            echo "    ";
            $context["br"] = (($context["br"] ?? null) + 1);
            // line 28
            echo "    <tbody id=\"myTable\">
      <tr>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "revers_id", [], "any", false, false, false, 30)), "-"), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_name", [], "any", false, false, false, 31)), "-"), "html", null, true);
            echo "</td>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "bar_code", [], "any", false, false, false, 32)), "-"), "html", null, true);
            echo "</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "location_name", [], "any", false, false, false, 33)), "-"), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "date", [], "any", false, false, false, 34)), "-"), "html", null, true);
            echo "</td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "type", [], "any", false, false, false, 35)), "-"), "html", null, true);
            echo "</td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "revers_holder", [], "any", false, false, false, 36)), "-"), "html", null, true);
            echo "</td>
      
       

      </tr>
   
    </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  </table>





";
    }

    public function getTemplateName()
    {
        return "Device/deviceHistory.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 44,  112 => 36,  108 => 35,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  84 => 28,  81 => 27,  77 => 26,  54 => 5,  51 => 4,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Device/deviceHistory.html", "C:\\magacin app\\views\\Device\\deviceHistory.html");
    }
}
