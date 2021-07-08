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

/* Revers/show.html */
class __TwigTemplate_db10fd349ea335d27f109559ff8c114802243a6e9bbbaf85a958ed81a640bb92 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Revers/show.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Reversi";
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "<form method=\"POST\">
    <div class=\"form-row\">
        <div class=\"col\">
                <label for=\"type\">Zaduzenje/Razduzenje: </label>
                <select name=\"type\" class=\"form-control\">             
                        <option type=\"text\" id=\"zaduzenje\" name=\"type\" value=\"zaduzenje\">Zaduzenje</option>
                        <option type=\"text\" id=\"zaduzenje\" name=\"type\" value=\"razduzenje\">Razduzenje</option>     
                    </select>
                    <label for=\"revers_holder\">Zaduzio/Razduzio: </label>
            <input id=\"revers_holder\" name=\"revers_holder\" type=\"text\" class=\"form-control\" placeholder=\"Zaduzio/Razduzio\">
            
            <label for=\"location_id\">Ekspozitura : </label>
            <select name=\"location_id\" class=\"form-control\">
              
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 19
            echo "                <option type=\"text\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 19), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 19), "html", null, true);
            echo "\"
                    value=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "location_name", [], "any", false, false, false, 20), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </select>


            <label for=\"administrator\">Administrator : </label>
            
            <select name=\"administrator\" class=\"form-control\">
              
              
                <option type=\"text\" name=\"administrator\" value=\"Marko Sovrovic\">Marko Sovrović</option>
                    <option type=\"text\"  name=\"administrator\" value=\"Zarko Nikolic\">Žarko Nikolić</option>
                    <option type=\"text\"  name=\"administrator\"  value=\"Stefan Tovilovic\">Stefan Tovilović</option>
             
            </select>
           
            <button type=\"submit\" class=\"btn btn-primary mb-2\">Dodaj revers</button>

        </div>

    </div>
</form>
<br>
<input  id=\"myInput\" type=\"text\" class=\"form-control\"  aria-describedby=\"emailHelp\" placeholder=\"Pretraga\">
<br>


<table class=\"table table-hover\">

    <thead>
        <tr>
            <th scope=\"col\">Broj Reversa</th>
            <th scope=\"col\">Zaduzio</th>
            <th scope=\"col\">Datum</th>
            <th scope=\"col\">Lokacija</th>
            <th scope=\"col\">Tip</th>
            <th scope=\"col\">+</th>
         <!--   <th scope=\"col\">Izmeni</th> -->

        </tr>
    </thead>
    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reverses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["revers"]) {
            // line 62
            echo "    <tbody id=\"myTable\">
        <tr>
            <td> <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "revers/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revers"], "revers_id", [], "any", false, false, false, 64), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revers"], "revers_id", [], "any", false, false, false, 64));
            echo " </a> </td>
            <td> <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "zaduzenja/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revers"], "revers_holder", [], "any", false, false, false, 65), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revers"], "revers_holder", [], "any", false, false, false, 65));
            echo "</a></td>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revers"], "date", [], "any", false, false, false, 66), "d/m/Y/H:m"), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "ekspoziture/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revers"], "location_name", [], "any", false, false, false, 67), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revers"], "location_name", [], "any", false, false, false, 67), "html", null, true);
            echo " </a></td>   
            <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revers"], "type", [], "any", false, false, false, 68));
            echo "</td>
            <td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "dodaj-opremu/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revers"], "revers_id", [], "any", false, false, false, 69), "html", null, true);
            echo "\">Dodaj opremu </a></td>
        <!--  <td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "dodaj-opremu/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revers"], "revers_id", [], "any", false, false, false, 70), "html", null, true);
            echo "\">Edit </a></td> -->


        </tr>

    </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "Revers/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 77,  178 => 70,  172 => 69,  168 => 68,  160 => 67,  156 => 66,  148 => 65,  140 => 64,  136 => 62,  132 => 61,  91 => 22,  81 => 20,  74 => 19,  70 => 18,  54 => 4,  51 => 3,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Revers/show.html", "C:\\magacin app\\views\\Revers\\show.html");
    }
}
