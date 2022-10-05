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

/* accueil.html.twig */
class __TwigTemplate_85a08f34f9d975e9707e31ef2d8623284a2131aeb00641a5515d87f8edf506ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta charset=\"UTF-8\">
\t\t<title>Crypto Tracker</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css\">
  </head>

\t<body>
\t\t<div class=\"col-lg-8 mx-auto p-3 py-md-5\">
      <header class=\"pb-3 mb-5 border-bottom\">
        <nav class=\"navbar justify-content-between\">
          <span class=\"navbar-brand mb-0 h1\">Crypto Tracker</span>
          <div>
            <a href=\"#\" class=\"mx-3 fa-2x\"><i class=\"bi bi-pencil-square\"></i></a>
            <a href=\"#\"><i class=\"bi bi-plus-circle\"></i></a>
          </div>
        </nav>
      </header>

  <main>
    <div class=\"row g-5\">
      <div class=\"col-md-6\">
        <h2>Solde :</h2>
      </div>
    </div>
  </main>
  <footer class=\"pt-5 my-5 text-muted\">
    Created by Lucas Didier
  </footer>
</div>

\t\t";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "\t</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW\" crossorigin=\"anonymous\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "accueil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  88 => 35,  79 => 38,  77 => 35,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta charset=\"UTF-8\">
\t\t<title>Crypto Tracker</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css\">
  </head>

\t<body>
\t\t<div class=\"col-lg-8 mx-auto p-3 py-md-5\">
      <header class=\"pb-3 mb-5 border-bottom\">
        <nav class=\"navbar justify-content-between\">
          <span class=\"navbar-brand mb-0 h1\">Crypto Tracker</span>
          <div>
            <a href=\"#\" class=\"mx-3 fa-2x\"><i class=\"bi bi-pencil-square\"></i></a>
            <a href=\"#\"><i class=\"bi bi-plus-circle\"></i></a>
          </div>
        </nav>
      </header>

  <main>
    <div class=\"row g-5\">
      <div class=\"col-md-6\">
        <h2>Solde :</h2>
      </div>
    </div>
  </main>
  <footer class=\"pt-5 my-5 text-muted\">
    Created by Lucas Didier
  </footer>
</div>

\t\t{% block javascripts %}
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW\" crossorigin=\"anonymous\"></script>
\t\t{% endblock %}
\t</body>
</html>
", "accueil.html.twig", "C:\\xampp\\apps\\symfony\\templates\\accueil.html.twig");
    }
}
