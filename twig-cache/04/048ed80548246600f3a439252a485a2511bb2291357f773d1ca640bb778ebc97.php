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

/* Device/search.html */
class __TwigTemplate_e290404e44e6203741c7c3d42cf5a2d1bceefdbbe0857da753a2042b498bf1ee extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("_global/index.html", "Device/search.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rezultat"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rez"]) {
            // line 5
            echo "<ul class=\"list-group\">
    <li class=\"list-group-item\"><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "zaduzenja/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rez"], "korisnik", [], "any", false, false, false, 6), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rez"], "korisnik", [], "any", false, false, false, 6), "html", null, true);
            echo "</a></li> 
   
  </ul>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rez'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Device/search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  51 => 5,  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Device/search.html", "C:\\magacin app\\views\\Device\\search.html");
    }
}
