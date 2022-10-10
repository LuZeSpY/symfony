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
class __TwigTemplate_ddb079a25afb59805cc95c45d665da7efbb81af053c34be09161e9264880fd5a extends Template
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
        // line 65
        echo "
  <footer class=\"pt-5 my-5 text-muted\">
    Created by Me
  </footer>
</div>

\t\t";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
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
            echo "            <a href=\"#\" class=\"btn btn-outline-primary mx-3\"><i class=\"bi bi-pencil-square\"></i></a>
            <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product");
            echo "\" class=\"btn btn-outline-primary mx-3\"><i class=\"bi bi-plus-circle\"></i></a>
\t\t\t<a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chart");
            echo "\" class=\"btn btn-outline-primary mx-3\"><i class=\"bi bi-graph-up\"></i> Vos investissements</a>
            <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-outline-primary mx-3\">Me déconnecter</a>
            ";
        } else {
            // line 23
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn btn-outline-primary mx-3\">M'inscrire</a>
            <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-outline-primary mx-3\">Me connecter</a>
            ";
        }
        // line 26
        echo "          </div>
        </nav>
      </header>

  <main>
    <div class=\"album py-5\" id=\"france\">
\t\t<div class=\"container\">
            <h1 class=\"mb-5\">Cours des cryptomonnaies</h1>
\t\t\t<div class=\"row g-3\">
\t\t\t\t<div class=\"row my-3\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
              <span>Mis à jour le ";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 38, $this->source); })()), "status", [], "any", false, false, false, 38), "timestamp", [], "any", false, false, false, 38), "d/m/Y", "Europe/Paris"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 38, $this->source); })()), "status", [], "any", false, false, false, 38), "timestamp", [], "any", false, false, false, 38), "H:i:s", "Europe/Paris"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t<h5 class=\"card-title\">Prix du BTC : ";
        // line 39
        echo twig_escape_filter($this->env, twig_join_filter(twig_array_map($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 39, $this->source); })()), "data", [], "any", false, false, false, 39), function ($_____) use ($context, $macros) { $context["_"] = $_____; return (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["_"]) || array_key_exists("_", $context) ? $context["_"] : (function () { throw new RuntimeError('Variable "_" does not exist.', 39, $this->source); })()), "symbol", [], "any", false, false, false, 39), "BTC")); }), function ($_____) use ($context, $macros) { $context["_"] = $_____; return $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_"]) || array_key_exists("_", $context) ? $context["_"] : (function () { throw new RuntimeError('Variable "_" does not exist.', 39, $this->source); })()), "quote", [], "any", false, false, false, 39), "EUR", [], "any", false, false, false, 39), "price", [], "any", false, false, false, 39), "EUR", ["rounding_mode" => "floor"], "fr"); })), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"row my-3\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
              <span>Mis à jour le ";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 46, $this->source); })()), "status", [], "any", false, false, false, 46), "timestamp", [], "any", false, false, false, 46), "d/m/Y", "Europe/Paris"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 46, $this->source); })()), "status", [], "any", false, false, false, 46), "timestamp", [], "any", false, false, false, 46), "H:i:s", "Europe/Paris"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t<h5 class=\"card-title\">Prix du ETH : ";
        // line 47
        echo twig_escape_filter($this->env, twig_join_filter(twig_array_map($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 47, $this->source); })()), "data", [], "any", false, false, false, 47), function ($_____) use ($context, $macros) { $context["_"] = $_____; return (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["_"]) || array_key_exists("_", $context) ? $context["_"] : (function () { throw new RuntimeError('Variable "_" does not exist.', 47, $this->source); })()), "symbol", [], "any", false, false, false, 47), "ETH")); }), function ($_____) use ($context, $macros) { $context["_"] = $_____; return $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_"]) || array_key_exists("_", $context) ? $context["_"] : (function () { throw new RuntimeError('Variable "_" does not exist.', 47, $this->source); })()), "quote", [], "any", false, false, false, 47), "EUR", [], "any", false, false, false, 47), "price", [], "any", false, false, false, 47), "EUR", ["rounding_mode" => "floor"], "fr"); })), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"row my-3\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
              <span>Mis à jour le ";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54), "timestamp", [], "any", false, false, false, 54), "d/m/Y", "Europe/Paris"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54), "timestamp", [], "any", false, false, false, 54), "H:i:s", "Europe/Paris"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t<h5 class=\"card-title\">Prix du XRP : ";
        // line 55
        echo twig_escape_filter($this->env, twig_join_filter(twig_array_map($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 55, $this->source); })()), "data", [], "any", false, false, false, 55), function ($_____) use ($context, $macros) { $context["_"] = $_____; return (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["_"]) || array_key_exists("_", $context) ? $context["_"] : (function () { throw new RuntimeError('Variable "_" does not exist.', 55, $this->source); })()), "symbol", [], "any", false, false, false, 55), "XRP")); }), function ($_____) use ($context, $macros) { $context["_"] = $_____; return $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_"]) || array_key_exists("_", $context) ? $context["_"] : (function () { throw new RuntimeError('Variable "_" does not exist.', 55, $this->source); })()), "quote", [], "any", false, false, false, 55), "EUR", [], "any", false, false, false, 55), "price", [], "any", false, false, false, 55), "EUR", ["rounding_mode" => "floor"], "fr"); })), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
  </main>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
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
        return array (  193 => 72,  186 => 71,  169 => 55,  163 => 54,  153 => 47,  147 => 46,  137 => 39,  131 => 38,  117 => 26,  112 => 24,  107 => 23,  102 => 21,  98 => 20,  94 => 19,  91 => 18,  89 => 17,  82 => 12,  75 => 11,  66 => 74,  64 => 71,  56 => 65,  54 => 11,  42 => 1,);
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
            <a href=\"#\" class=\"btn btn-outline-primary mx-3\"><i class=\"bi bi-pencil-square\"></i></a>
            <a href=\"{{ path('add_product') }}\" class=\"btn btn-outline-primary mx-3\"><i class=\"bi bi-plus-circle\"></i></a>
\t\t\t<a href=\"{{ path('app_chart') }}\" class=\"btn btn-outline-primary mx-3\"><i class=\"bi bi-graph-up\"></i> Vos investissements</a>
            <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-primary mx-3\">Me déconnecter</a>
            {% else %}
            <a href=\"{{ path('app_register') }}\" class=\"btn btn-outline-primary mx-3\">M'inscrire</a>
            <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-primary mx-3\">Me connecter</a>
            {% endif %}
          </div>
        </nav>
      </header>

  <main>
    <div class=\"album py-5\" id=\"france\">
\t\t<div class=\"container\">
            <h1 class=\"mb-5\">Cours des cryptomonnaies</h1>
\t\t\t<div class=\"row g-3\">
\t\t\t\t<div class=\"row my-3\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
              <span>Mis à jour le {{ response.status.timestamp|date(\"d/m/Y\", \"Europe/Paris\") }} à {{ response.status.timestamp|date(\"H:i:s\", \"Europe/Paris\") }}</span>
\t\t\t\t\t\t\t<h5 class=\"card-title\">Prix du BTC : {{ response.data|filter(_ => _.symbol == 'BTC')|map(_ => _.quote.EUR.price|format_currency('EUR', {rounding_mode: 'floor'}, locale='fr'))|join() }}</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"row my-3\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
              <span>Mis à jour le {{ response.status.timestamp|date(\"d/m/Y\", \"Europe/Paris\") }} à {{ response.status.timestamp|date(\"H:i:s\", \"Europe/Paris\") }}</span>
\t\t\t\t\t\t\t<h5 class=\"card-title\">Prix du ETH : {{ response.data|filter(_ => _.symbol == 'ETH')|map(_ => _.quote.EUR.price|format_currency('EUR', {rounding_mode: 'floor'}, locale='fr'))|join() }}</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"row my-3\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
              <span>Mis à jour le {{ response.status.timestamp|date(\"d/m/Y\", \"Europe/Paris\") }} à {{ response.status.timestamp|date(\"H:i:s\", \"Europe/Paris\") }}</span>
\t\t\t\t\t\t\t<h5 class=\"card-title\">Prix du XRP : {{ response.data|filter(_ => _.symbol == 'XRP')|map(_ => _.quote.EUR.price|format_currency('EUR', {rounding_mode: 'floor'}, locale='fr'))|join() }}</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
  </main>

  {% endblock %}

  <footer class=\"pt-5 my-5 text-muted\">
    Created by Me
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
