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
class __TwigTemplate_f646421a445e430f250a5c59f19d3a08b0f75c761a6b82250914bc2ab7458125 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
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

\t";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
  <footer class=\"pt-5 my-5 text-muted\">
    Created by Lucas Didier
  </footer>
</div>

\t\t";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "\t</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t\t<div class=\"col-lg-8 mx-auto p-3 py-md-5\">
      <header class=\"pb-3 mb-5 border-bottom\">
        <nav class=\"navbar justify-content-between\">
          <span class=\"navbar-brand mb-0 h1\">Crypto Tracker</span>
          <div>
            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "            <a href=\"#\" class=\"mx-3\"><i class=\"bi bi-pencil-square\"></i></a>
            <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product");
            echo "\" class=\"mx-3\"><i class=\"bi bi-plus-circle\"></i></a>
            <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"mx-3\">Me déconnecter</a>
            ";
        } else {
            // line 22
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"mx-3\">M'inscrire</a>
            <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"mx-3\">Me connecter</a>
            ";
        }
        // line 25
        echo "          </div>
        </nav>
      </header>

  <main>
    <div class=\"row g-5\">
      <div class=\"col-md-6\">
        <h2>Solde :</h2>
      </div>
    </div>
  </main>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
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
        return array (  139 => 45,  132 => 44,  113 => 25,  108 => 23,  103 => 22,  98 => 20,  94 => 19,  91 => 18,  89 => 17,  82 => 12,  75 => 11,  66 => 47,  64 => 44,  56 => 38,  54 => 11,  42 => 1,);
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

\t{% block body %}
\t\t<div class=\"col-lg-8 mx-auto p-3 py-md-5\">
      <header class=\"pb-3 mb-5 border-bottom\">
        <nav class=\"navbar justify-content-between\">
          <span class=\"navbar-brand mb-0 h1\">Crypto Tracker</span>
          <div>
            {% if app.user %}
            <a href=\"#\" class=\"mx-3\"><i class=\"bi bi-pencil-square\"></i></a>
            <a href=\"{{ path('add_product') }}\" class=\"mx-3\"><i class=\"bi bi-plus-circle\"></i></a>
            <a href=\"{{ path('app_logout') }}\" class=\"mx-3\">Me déconnecter</a>
            {% else %}
            <a href=\"{{ path('app_register') }}\" class=\"mx-3\">M'inscrire</a>
            <a href=\"{{ path('app_login') }}\" class=\"mx-3\">Me connecter</a>
            {% endif %}
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

  {% endblock %}

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
