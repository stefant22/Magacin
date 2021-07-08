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

/* Model/getAdd.html */
class __TwigTemplate_d2d901fec9ed6380b073cdfa500a6643d5012b7b65502bfffea4caf0afc7e73c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Model/getAdd.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Dodaj Model";
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "<br>

<form  method=\"POST\">
    <div class=\"form-row\">
      <div class=\"col\">
        <input  id=\"model_name\"  name=\"model_name\" type=\"text\" class=\"form-control\" placeholder=\"Model name\">
        <select id=\"model_type_id\" name=\"model_type_id\" class=\"form-control\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "            <option type=\"text\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "model_type_id", [], "any", false, false, false, 12), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "model_type_id", [], "any", false, false, false, 12), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "model_type_id", [], "any", false, false, false, 12), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "model_type_name", [], "any", false, false, false, 12), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "          </select>
       
        <input id=\"model_description\" name=\"model_description\" type=\"text\" class=\"form-control\" placeholder=\"Model description\">

      </div>
      <div class=\"col\">
        <input id=\"ram\" name=\"ram\" type=\"text\" class=\"form-control\" placeholder=\"Ram\">
        <input id=\"processor\" name=\"processor\" type=\"text\" class=\"form-control\" placeholder=\"processor\">
        <input id=\"inch\" name=\"inch\" type=\"text\" class=\"form-control\" placeholder=\"inch\">
        <input id=\"ports\" name=\"ports\" type=\"text\" class=\"form-control\" placeholder=\"hdmi, vga , displayport\">



        <button type=\"submit\" class=\"btn btn-primary mb-2\">Dodaj Model</button>

        
   
        
       
 
        
      </div>
    </div>
  </form>


";
    }

    public function getTemplateName()
    {
        return "Model/getAdd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 14,  67 => 12,  63 => 11,  54 => 4,  51 => 3,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Model/getAdd.html", "C:\\magacin app\\views\\Model\\getAdd.html");
    }
}
