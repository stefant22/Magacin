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

/* Revers/zad.html */
class __TwigTemplate_4ef2bd4b8169e86c8fd03238aff44cdcada128678e54b141e3f0d218bf02f7ad extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Revers/zad.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["podaci"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "revers_holder", [], "any", false, false, false, 2), "html", null, true);
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "


<h4>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["podaci"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "korisnik", [], "any", false, false, false, 7), "html", null, true);
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
      </tr>
    </thead>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["podaci"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["podatak"]) {
            // line 26
            echo "    <tbody>
      <tr>
        <th scope=\"row\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["podatak"], "model_type_name", [], "any", false, false, false, 28), "html", null, true);
            echo "</th>
        <td> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["podatak"], "model_name", [], "any", false, false, false, 29));
            echo "</td>
        </td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["podatak"], "bar_code", [], "any", false, false, false, 31)), "-"), "html", null, true);
            echo "</td>

        <td>";
            // line 33
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["podatak"], "ram", [], "any", false, false, false, 33)), "-"), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["podatak"], "processor", [], "any", false, false, false, 34)), "-"), "html", null, true);
            echo "</td>
    

        <td>";
            // line 37
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["podatak"], "location_name", [], "any", false, false, false, 37)), "-"), "html", null, true);
            echo "</td>
  
      </tr>
  
    </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['podatak'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo " 
  </table>
  <div class=\"text-center\"> <a class='dugme ' href=\"javascript:window.print();\">  <button  type=\"button\" class=\"btn btn-primary \"> Stampaj</button></a> </div>
";
    }

    public function getTemplateName()
    {
        return "Revers/zad.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 43,  112 => 37,  106 => 34,  102 => 33,  97 => 31,  92 => 29,  88 => 28,  84 => 26,  80 => 25,  59 => 7,  54 => 4,  51 => 3,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Revers/zad.html", "C:\\magacin app\\views\\Revers\\zad.html");
    }
}
