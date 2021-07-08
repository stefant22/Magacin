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

/* Revers/revers.html */
class __TwigTemplate_8ac1f8486aa3693ec2f5d835f976c7540f96a69454d511a4f307dadb9db98d12 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Revers/revers.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["revers"] ?? null), "revers_id", [], "any", false, false, false, 2), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["revers"] ?? null), "revers_holder", [], "any", false, false, false, 2), "html", null, true);
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        $context["br"] = 0;
        // line 5
        echo "<br>
<br>

<div class=\"row\">
    <div class=\"col-md-4 \">  
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets\\img\\sava-logo-1.jpg\" alt=\"\">
            <br>
            <br>
            <br>
     
            <h5>datum : ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["revers"] ?? null), "date", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
        echo "</h5>

    </div>
    <div class=\"col-md-4 text-center\">
            <br>
            <br>
     
        <h1>REVERS</h1>
        <br>
        <br>
        <br>
        
        
<h3>- ";
        // line 28
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["revers"] ?? null), "type", [], "any", false, false, false, 28)), "html", null, true);
        echo " -</h3>
<br>

</div>



<div class=\"col-md-4 text-right\">
    <h5>INTERNO</h5>
    <br>
    <br>
    <br>
    <br>
   
    <br>
    <h5 >Br.Reversa: ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["revers"] ?? null), "revers_id", [], "any", false, false, false, 43), "html", null, true);
        echo "</h5>
</div>
</div>
<br>
    <br>
    <br>
    <br>
<br>
<div>  <h5>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["revers"] ?? null), "revers_holder", [], "any", false, false, false, 51), "html", null, true);
        echo "<span> na lokaciji/ekspozituri ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["revers"] ?? null), "location_name", [], "any", false, false, false, 51), "html", null, true);
        echo "  se ";
        echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["revers"] ?? null), "type", [], "any", false, false, false, 51), "zenje", "right"), "html", null, true);
        echo "žuje sa sledećim osnovnim sredstvima :</span></h5>  </div>
<br>
<table class=\"text-center revers\"style=\"width:100%;  \">

      
            <tr style = \" padding: 15px;\">
                <th  style = \" background-color: lightgray; padding: 15px;\" scope=\"col\">Br</th>
                <th   style = \" background-color: lightgray; padding: 15px;\"scope=\"col\">Tip</th>
                <th  style = \" background-color: lightgray; padding: 15px;\" scope=\"col\">Model</th>
                <th  style = \" background-color: lightgray; padding: 15px;\" scope=\"col\">Bar kod</th>
             
    
    
    
            </tr>
      
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["devices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 68
            echo "        ";
            $context["br"] = (($context["br"] ?? null) + 1);
            // line 69
            echo "    
            <tr  style = \" padding: 15px;\">
                <td  style = \" padding: 15px;\">";
            // line 71
            echo twig_escape_filter($this->env, ($context["br"] ?? null), "html", null, true);
            echo "</td>
                <td  style = \" padding: 15px;\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_type_name", [], "any", false, false, false, 72));
            echo "</td>
                <td  style = \" padding: 15px;\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "model_name", [], "any", false, false, false, 73));
            echo "</td>
                <td  style = \" padding: 15px;\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "bar_code", [], "any", false, false, false, 74));
            echo "</td>
           
    
    
            </tr>
    
     
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    
    </table>
    <br>
   <div class=\"text-center\"> <a class='dugme ' href=\"javascript:window.print();\">  <button  type=\"button\" class=\"btn btn-primary \"> Stampaj</button></a> </div>
    <br>
    <br>
    <br>

    <h4 class=\"text-center\">Šef službe : Branislav Tomić</h4>

    <h4 class=\"text-center\">Administrator : ";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["revers"] ?? null), "administrator", [], "any", false, false, false, 92), "html", null, true);
        echo "</h4>

<h4 class=\"text-center\">";
        // line 94
        echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["revers"] ?? null), "type", [], "any", false, false, false, 94), "zenje", "right"), "html", null, true);
        echo "žio : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["revers"] ?? null), "revers_holder", [], "any", false, false, false, 94), "html", null, true);
        echo "</h4>


<footer class=\" container fixed-bottom m-0 p-0\">
    
        <br>
        <br>
        <br>
        <br>
        <br>
    <div class=\"row donjiDeo\">
            <h3 style=\"word-wrap: break-word  justify-content-center\" class=\"p-5\">Ovaj revers važi bez potpisa</h3> 
            
    <div class=\"col-md-10 m-0 p-0\">
        <p style=\"word-wrap: break-word\">SAVA NEŽIVOTNO OSIGURANJE a.d.o. Beograd, Bul. vojvode Mišića 51, 11000 Beograd, www.sava-osiguranje.rs</p>
        <p style=\"word-wrap: break-word\">TR: 205-8273-04 Komercijalna banka a.d. Beograd, MB: 17407813, PIB: 100002516, član SAVA RE GRUPE</p>
    </div>
    <div class=\"col-md-2 m-0 p-0\">
            <img style=\"display:block; z-index: 2;\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets\\img\\dfffff.jpg\" alt=\"\">

    </div>

</div>
      </footer> 

";
    }

    public function getTemplateName()
    {
        return "Revers/revers.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 112,  195 => 94,  190 => 92,  178 => 82,  164 => 74,  160 => 73,  156 => 72,  152 => 71,  148 => 69,  145 => 68,  141 => 67,  118 => 51,  107 => 43,  89 => 28,  73 => 15,  65 => 10,  58 => 5,  56 => 4,  53 => 3,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Revers/revers.html", "C:\\magacin app\\views\\Revers\\revers.html");
    }
}
