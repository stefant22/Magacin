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

/* Device/edit.html */
class __TwigTemplate_2e26cd75d8c89c4a7efde890e3865a05ff7755823ff4191289220f280d68ab21 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Device/edit.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "edit ";
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        // line 5
        echo "
<form method=\"POST\">
    <div class=\"form-row\">
      <div class=\"col\">
          Bar Code: 
        <input type=\"text\" name=\"bar_code\" id=\"bar_code\" class=\"form-control\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infos"] ?? null), "bar_code", [], "any", false, false, false, 10), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infos"] ?? null), "bar_code", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
        <br>
        Serial Number:
        <input type=\"text\" name=\"serial_number\" class=\"form-control\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infos"] ?? null), "serial_number", [], "any", false, false, false, 13), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infos"] ?? null), "serial_number", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
        <br>
     

      </div>
      <div class=\"col\">
        Lokacija:
          <select id=\"location_id\" name=\"location_id\" class=\"form-control\">
              ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 22
            echo "                   <option type=\"text\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 22), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 22), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 22), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "location_name", [], "any", false, false, false, 22), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                 </select>
        
        <br>
        Garancija : 
        <input type=\"text\" name=\"garancija\" class=\"form-control\" placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infos"] ?? null), "garancija", [], "any", false, false, false, 28), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infos"] ?? null), "garancija", [], "any", false, false, false, 28), "html", null, true);
        echo "\">
         <br>
         Korisnik : 
        <input type=\"text\" name=\"korisnik\" class=\"form-control\" placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infos"] ?? null), "korisnik", [], "any", false, false, false, 31), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["infos"] ?? null), "korisnik", [], "any", false, false, false, 31), "html", null, true);
        echo "\">

        <button type=\"submit\" class=\"btn btn-primary mb-2\">Izmeni</button>
      </div>
    </div>

    
  </form>

";
    }

    public function getTemplateName()
    {
        return "Device/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  107 => 28,  101 => 24,  86 => 22,  82 => 21,  69 => 13,  61 => 10,  54 => 5,  51 => 4,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Device/edit.html", "C:\\magacin app\\views\\Device\\edit.html");
    }
}
