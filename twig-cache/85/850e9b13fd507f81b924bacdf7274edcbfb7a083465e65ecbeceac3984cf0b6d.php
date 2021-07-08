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

/* Location/show.html */
class __TwigTemplate_dc2e7cb3dc15de1a5dfb3ae8d98a620b7a526c74a5e2526f7239769afce73b2c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Location/show.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["ekspozitura"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "location_name", [], "any", false, false, false, 2), "html", null, true);
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        // line 7
        echo "


<h4>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["ekspozitura"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "location_name", [], "any", false, false, false, 10), "html", null, true);
        echo "</h4>

<table class=\"table table-bordered table-hover\">

    <thead>
      <tr>
        <th scope=\"col\">Model Type</th>
        <th scope=\"col\">Model Name</th>
        <th scope=\"col\">Bar Code</th>
     
        <th scope=\"col\">Ram</th>
        <th scope=\"col\">Processor</th>
     
   
  
        <th scope=\"col\">trenutna ekspozitura</th>
        <th scope=\"col\">zaduzio</th>
      </tr>
    </thead>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ekspozitura"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["eks"]) {
            // line 30
            echo "    <tbody>
      <tr>
        <th scope=\"row\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eks"], "model_type_name", [], "any", false, false, false, 32), "html", null, true);
            echo "</th>
        <td> <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "model/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eks"], "model_id", [], "any", false, false, false, 33), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eks"], "model_name", [], "any", false, false, false, 33));
            echo " </a></td>
        </td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eks"], "bar_code", [], "any", false, false, false, 35)), "-"), "html", null, true);
            echo "</td>

        <td>";
            // line 37
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eks"], "ram", [], "any", false, false, false, 37)), "-"), "html", null, true);
            echo "</td>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eks"], "processor", [], "any", false, false, false, 38)), "-"), "html", null, true);
            echo "</td>
    

        <td>";
            // line 41
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eks"], "location_name", [], "any", false, false, false, 41)), "-"), "html", null, true);
            echo "</td>  
        <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "zaduzenja/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eks"], "korisnik", [], "any", false, false, false, 42), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eks"], "korisnik", [], "any", false, false, false, 42), "html", null, true);
            echo "</a></td>   
  
      </tr>
  
    </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo " 
  </table>
  <div class=\"text-center\"> <a class='dugme ' href=\"javascript:window.print();\">  <button  type=\"button\" class=\"btn btn-primary \"> Stampaj</button></a> </div>




";
    }

    public function getTemplateName()
    {
        return "Location/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  121 => 42,  117 => 41,  111 => 38,  107 => 37,  102 => 35,  93 => 33,  89 => 32,  85 => 30,  81 => 29,  59 => 10,  54 => 7,  51 => 6,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Location/show.html", "C:\\magacin app\\views\\Location\\show.html");
    }
}
