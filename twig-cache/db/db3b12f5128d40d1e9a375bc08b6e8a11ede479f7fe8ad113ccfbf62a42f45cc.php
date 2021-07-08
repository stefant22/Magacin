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

/* Location/ekspoziture.html */
class __TwigTemplate_17298d8a8abcd0afb75dc98c04ff23920eb3fb5987b3aff3dc1059e2e4f5cc40 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Location/ekspoziture.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Ekspoziture";
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        // line 7
        echo "
<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "ekspoziture/add_location\">Dodaj Novu Lokaciju </a>

<table class=\"table\">
    <thead>


      <tr>
 
        <th >Lokacija</th>
        <th >Adresa</th>
        
       
      </tr>
    </thead>
    <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 24
            echo "      <tr>
        
 
        <td> <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "ekspoziture/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "location_name", [], "any", false, false, false, 27), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "location_name", [], "any", false, false, false, 27), "html", null, true);
            echo " </a></td>
        
        <td> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loc"], "adress", [], "any", false, false, false, 29), "html", null, true);
            echo " </td>
      </tr>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
  </table>

";
    }

    public function getTemplateName()
    {
        return "Location/ekspoziture.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  93 => 29,  84 => 27,  79 => 24,  75 => 23,  57 => 8,  54 => 7,  51 => 6,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Location/ekspoziture.html", "C:\\magacin app\\views\\Location\\ekspoziture.html");
    }
}
