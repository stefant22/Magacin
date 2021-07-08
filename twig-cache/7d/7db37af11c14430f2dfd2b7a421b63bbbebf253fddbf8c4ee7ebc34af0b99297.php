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

/* Main/home.html */
class __TwigTemplate_fea0748798fbff5ad58e67a3b4aa128937ceff89a41f109eb027fc52356c8c16 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Main/home.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Svi uređaji";
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        // line 7
        echo "



<input  id=\"myInput\" type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"Pretraga\">
<br>
<table class=\" table table-bordered table-hover fixed-table-body\">

  <thead>
    <tr>
      <th scope=\"col\">Model Type</th>
      <th scope=\"col\">Model Name</th>
      <th scope=\"col\">Bar Code</th>

      <th scope=\"col\">Ram</th>
      <th scope=\"col\">Processor</th>
      <th scope=\"col\">Inch</th>
      <th scope=\"col\">Ports</th>

      <th scope=\"col\">Description</th>

      <th scope=\"col\">Garancija</th>
      <th scope=\"col\">Location</th>
      <th scope=\"col\">Korisnik</th>
      <th scope=\"col\">History</th>
      <th scope=\"col\">Edit</th>
    </tr>
  </thead>
  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["devices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 36
            echo "  <tbody id=\"myTable\">
    <tr>
      <th scope=\"row\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_type_name", [], "any", false, false, false, 38), "html", null, true);
            echo "</th>
      <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "model/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_id", [], "any", false, false, false, 39), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_name", [], "any", false, false, false, 39));
            echo "</td>

      <td>";
            // line 41
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "bar_code", [], "any", false, false, false, 41)), "-"), "html", null, true);
            echo "</td>

      <td>";
            // line 43
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "ram", [], "any", false, false, false, 43)), "-"), "html", null, true);
            echo "</td>
      <td>";
            // line 44
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "processor", [], "any", false, false, false, 44)), "-"), "html", null, true);
            echo "</td>
      <td>";
            // line 45
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "inch", [], "any", false, false, false, 45)), "-"), "html", null, true);
            echo "</td>
      <td>";
            // line 46
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "ports", [], "any", false, false, false, 46)), "-"), "html", null, true);
            echo "</td>
      <td>";
            // line 47
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_description", [], "any", false, false, false, 47)), "-"), "html", null, true);
            echo "</td>
      <td>";
            // line 48
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "garancija", [], "any", false, false, false, 48)), "-"), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "ekspoziture/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "location_name", [], "any", false, false, false, 49), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "location_name", [], "any", false, false, false, 49), "html", null, true);
            echo " </a></td>
      <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "zaduzenja/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "korisnik", [], "any", false, false, false, 50), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "korisnik", [], "any", false, false, false, 50), "html", null, true);
            echo "</a></td>
      <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "history/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "device_id", [], "any", false, false, false, 51), "html", null, true);
            echo "\">History</a></td>

      <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "device_id", [], "any", false, false, false, 53), "html", null, true);
            echo "\">Edit</td>

    </tr>

  </tbody>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "Main/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 59,  157 => 53,  150 => 51,  142 => 50,  134 => 49,  130 => 48,  126 => 47,  122 => 46,  118 => 45,  114 => 44,  110 => 43,  105 => 41,  96 => 39,  92 => 38,  88 => 36,  84 => 35,  54 => 7,  51 => 6,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/home.html", "C:\\magacin app\\views\\Main\\home.html");
    }
}
