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

/* Device/getAdd.html */
class __TwigTemplate_64ce8094b4129378c7b9bb31a968428fd63e4b1818c6a4ce135c867246ed5327 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Device/getAdd.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Dodaj Uređaj ";
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        // line 5
        echo "<br>

<form  method=\"POST\">
    <div class=\"form-row\">
      <div class=\"col\">
        
        <select id=\"model_id\" name=\"model_id\" class=\"form-control\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["models"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 13
            echo "            <option type=\"text\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "model_id", [], "any", false, false, false, 13), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "model_id", [], "any", false, false, false, 13), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "model_id", [], "any", false, false, false, 13), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "model_name", [], "any", false, false, false, 13), "html", null, true);
            echo " &nbsp; &nbsp; - &nbsp; &nbsp; ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "model_type_name", [], "any", false, false, false, 13), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "          </select>
       
        <input id=\"bar_code\" name=\"bar_code\" type=\"text\" class=\"form-control\" placeholder=\"Bar kod\">
        <input id=\"serial_number\" name=\"serial_number\" type=\"text\" class=\"form-control\" placeholder=\"Serijski broj\">
        <input id=\"garancija\" name=\"garancija\" type=\"text\" class=\"form-control\" placeholder=\"garancija\">
        <input id=\"korisnik\" name=\"korisnik\" type=\"text\" class=\"form-control\" placeholder=\"korisnik\">
        
        <select id=\"location_id\" name=\"location_id\" class=\"form-control\">
          ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 24
            echo "               <option type=\"text\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "location_name", [], "any", false, false, false, 24), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "             </select>
             <br>
        <button type=\"submit\" class=\"btn btn-primary mb-2\">Dodaj uredjaj</button>
        

      </div>
    
    </div>
  </form>


";
    }

    public function getTemplateName()
    {
        return "Device/getAdd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 26,  98 => 24,  94 => 23,  84 => 15,  67 => 13,  63 => 12,  54 => 5,  51 => 4,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Device/getAdd.html", "C:\\magacin app\\views\\Device\\getAdd.html");
    }
}
