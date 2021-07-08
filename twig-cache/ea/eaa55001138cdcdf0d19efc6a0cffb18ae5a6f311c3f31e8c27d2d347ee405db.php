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

/* _global/index.html */
class __TwigTemplate_acb99431303b1e3138865303d6a0aacf02eb4eb20ae255f28f264fe0f1c9c910 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/img/ASP-ico.ico\" />
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/style.css\">
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\"
    integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\">
  </script>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
  <script>
  \$(document).ready(function(){
  \$(\"#myInput\").on(\"keyup\", function() {
    var value = \$(this).val().toLowerCase();
    \$(\"#myTable tr\").filter(function() {
      \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});



    </script>





  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <title>";
        // line 33
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>

<body>
  <main>
    <nav class=\"navbar sticky-top navbar-expand-lg navbar-dark  \" style=\"background-color: #3ca082; color:white;\">
      <a class=\"navbar-brand\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\">
        <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets\\img\\sava-logo.png\" alt=\"\">
      </a>
      <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item  \">
            <a class=\"nav-link\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "model_type/1\">Računari </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "model_type/2\">Monitori </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "model_type/3\">Telefoni </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "model_type/4\">Štampači </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "model_type/5\">Laptopovi </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "model_type/6\">Skeneri </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "model/add_model\">Dodaj Model </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "device/add_device\">Dodaj uređaj </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 69
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "reversi\">Reversi </a>

          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "magacin-stanje\">Stanje u Magacinu </a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "zaTehnicki-stanje\">Stanje za tehnicki </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "deviceHistory\">History </a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "ekspoziture\">Ekspoziture </a>
          </li>

        </ul>
      </div>
      <form method=\"post\" action=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "search\" class=\"form-inline my-2 my-lg-0\">
        <input name=\"q\" id=\"q\" class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Korisnik\">
        <button class=\"btn btn-outline-light\" type=\"submit\">Pretraga Korisnika</button>
      </form>
    </nav>

    <div class=\"container text-center\">
      <br>

      ";
        // line 99
        $this->displayBlock('main', $context, $blocks);
        // line 102
        echo "
    </div>
  </main>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js\"></script>
  <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/js/bootstrap.js\"></script>

  <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/js/bootstrap.js\"></script>
  <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/javascript/javascript.js\"></script>
</body>

</html>";
    }

    // line 33
    public function block_title($context, array $blocks = [])
    {
        echo "Svi uređaji ";
    }

    // line 99
    public function block_main($context, array $blocks = [])
    {
        // line 100
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 100,  228 => 99,  222 => 33,  214 => 109,  210 => 108,  205 => 106,  199 => 102,  197 => 99,  185 => 90,  177 => 85,  170 => 81,  164 => 78,  157 => 74,  149 => 69,  143 => 66,  137 => 63,  131 => 60,  125 => 57,  119 => 54,  113 => 51,  107 => 48,  101 => 45,  93 => 40,  89 => 39,  80 => 33,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "C:\\magacin app\\views\\_global\\index.html");
    }
}
