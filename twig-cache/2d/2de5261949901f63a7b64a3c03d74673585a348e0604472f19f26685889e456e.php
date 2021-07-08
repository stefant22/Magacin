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

/* Model/show.html */
class __TwigTemplate_5d19aa9750af396c7c1d8675fc3cc7743fe9ecdda9cceb883564a19f7e3609b7 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Model/show.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["devices"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "model_type_name", [], "any", false, false, false, 2), "html", null, true);
        echo "i";
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "



<input  id=\"myInput\" type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"Pretraga\">
<br>
<table class=\"table table-bordered table-hover\">

  <thead>
    <tr>
      <th scope=\"col\">Model Type</th>
      <th scope=\"col\">Model Name</th>
      <th scope=\"col\">Bar Code</th>
      <th scope=\"col\">Serial Number</th>
      ";
        // line 18
        if (((twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["devices"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "model_type_id", [], "any", false, false, false, 18) == 1) || (twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["devices"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "model_type_id", [], "any", false, false, false, 18) == 5))) {
            // line 19
            echo "      <th scope=\"col\">Ram</th>
    
      <th scope=\"col\">Processor</th>
      ";
        }
        // line 23
        echo "      ";
        if (((twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["devices"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "model_type_id", [], "any", false, false, false, 23) == 5) || (twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["devices"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "model_type_id", [], "any", false, false, false, 23) == 2))) {
            // line 24
            echo "      <th scope=\"col\">Inch</th>
     

      <th scope=\"col\">Ports</th>
      ";
        }
        // line 29
        echo "      <th scope=\"col\">Garancija</th>
      <th scope=\"col\">Korisnik</th>
      <th scope=\"col\">Location</th>


    </tr>
  </thead>
  ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["devices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 37
            echo "  <tbody id=\"myTable\">
    <tr>
      <th scope=\"row\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_type_name", [], "any", false, false, false, 39), "html", null, true);
            echo "</th>
      <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "model/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_id", [], "any", false, false, false, 40), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_name", [], "any", false, false, false, 40));
            echo "</td>
      </td>
      <td>";
            // line 42
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "bar_code", [], "any", false, false, false, 42)), "-"), "html", null, true);
            echo "</td>
      <td>";
            // line 43
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "serial_number", [], "any", false, false, false, 43)), "-"), "html", null, true);
            echo "</td>
      ";
            // line 44
            if (((twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["devices"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "model_type_id", [], "any", false, false, false, 44) == 1) || (twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["devices"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "model_type_id", [], "any", false, false, false, 44) == 5))) {
                // line 45
                echo "

      <td>";
                // line 47
                echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "ram", [], "any", false, false, false, 47)), "-"), "html", null, true);
                echo "</td>
      <td>";
                // line 48
                echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "processor", [], "any", false, false, false, 48)), "-"), "html", null, true);
                echo "</td>
      ";
            }
            // line 50
            echo "      ";
            if (((twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["devices"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[0] ?? null) : null), "model_type_id", [], "any", false, false, false, 50) == 5) || (twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["devices"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[0] ?? null) : null), "model_type_id", [], "any", false, false, false, 50) == 2))) {
                // line 51
                echo "      
      <td>";
                // line 52
                echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "inch", [], "any", false, false, false, 52)), "-"), "html", null, true);
                echo "</td>

      <td>";
                // line 54
                echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "ports", [], "any", false, false, false, 54)), "-"), "html", null, true);
                echo "</td>
      ";
            }
            // line 56
            echo "      
      <td>";
            // line 57
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "garancija", [], "any", false, false, false, 57)), "-"), "html", null, true);
            echo "</td>
      <td>";
            // line 58
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "korisnik", [], "any", false, false, false, 58)), "-"), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "ekspoziture/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "location_name", [], "any", false, false, false, 59), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "location_name", [], "any", false, false, false, 59), "html", null, true);
            echo " </a></td>  

    </tr>

  </tbody>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "  
</table>
";
    }

    public function getTemplateName()
    {
        return "Model/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 65,  169 => 59,  165 => 58,  161 => 57,  158 => 56,  153 => 54,  148 => 52,  145 => 51,  142 => 50,  137 => 48,  133 => 47,  129 => 45,  127 => 44,  123 => 43,  119 => 42,  110 => 40,  106 => 39,  102 => 37,  98 => 36,  89 => 29,  82 => 24,  79 => 23,  73 => 19,  71 => 18,  55 => 4,  52 => 3,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Model/show.html", "C:\\magacin app\\views\\Model\\show.html");
    }
}
