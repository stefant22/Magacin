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

/* Location/getAdd.html */
class __TwigTemplate_09bfa728f42219147f7b1f876ed99d590201e60ab6431a49c240d21022d8ea8e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Location/getAdd.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        // line 3
        echo "
<form  method=\"POST\">
    <div class=\"form-row\">
      <div class=\"col\">
    
       
        <input id=\"location\" name=\"location\" type=\"text\" class=\"form-control\" placeholder=\"Lokacija\">
        <input id=\"adress\" name=\"adress\" type=\"text\" class=\"form-control\" placeholder=\"Adresa\">

      
             <br>
        <button type=\"submit\" class=\"btn btn-primary mb-2\">Dodaj Lokaciju</button>
        

      </div>
    
    </div>
  </form>
  ";
    }

    public function getTemplateName()
    {
        return "Location/getAdd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  44 => 2,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Location/getAdd.html", "C:\\magacin app\\views\\Location\\getAdd.html");
    }
}
