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

/* api/index.html.twig */
class __TwigTemplate_c87545cf500923d435b4a823c1127bca1d635d70dd914bae93dd737d84a0380d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "api/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Les chiffres du COVID-19 en France
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<div class=\"album py-5\" id=\"france\">
\t\t<div class=\"container\">
            <h1 class=\"mb-5\">Les chiffres du COVID-19 en France</h1>
\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm h-100\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre d’hospitalisations</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes actuellement hospitalisée</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\">Prix du BTC en EUR : ";
        // line 15
        echo twig_escape_filter($this->env, twig_join_filter(twig_array_map($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 15, $this->source); })()), "data", [], "any", false, false, false, 15), function ($_____) use ($context, $macros) { $context["_"] = $_____; return (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["_"]) || array_key_exists("_", $context) ? $context["_"] : (function () { throw new RuntimeError('Variable "_" does not exist.', 15, $this->source); })()), "symbol", [], "any", false, false, false, 15), "BTC")); }), function ($_____) use ($context, $macros) { $context["_"] = $_____; return $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_"]) || array_key_exists("_", $context) ? $context["_"] : (function () { throw new RuntimeError('Variable "_" does not exist.', 15, $this->source); })()), "quote", [], "any", false, false, false, 15), "EUR", [], "any", false, false, false, 15), "price", [], "any", false, false, false, 15), "EUR", ["rounding_mode" => "floor"]); })), "html", null, true);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre de Réa</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes actuellement en réanimation</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\"></h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre total de décès 😥</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes décédés depuis le début de la pandémie</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-dark text-light mx-2 rounded-pill\"></h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre totale de guéris</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes guéris depuis le début de la pandémie</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-success text-dark mx-2 rounded-pill\"></h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre de cas confirmés</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de cas confirmés depuis le début de la pandémie</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-info text-dark mx-2 rounded-pill\"></h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Source des données</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Source des données :<br></p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-secondary text-grey mx-2 rounded-pill\"></h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "api/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  74 => 5,  67 => 4,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Les chiffres du COVID-19 en France
{% endblock %}
{% block body %}
\t<div class=\"album py-5\" id=\"france\">
\t\t<div class=\"container\">
            <h1 class=\"mb-5\">Les chiffres du COVID-19 en France</h1>
\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm h-100\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre d’hospitalisations</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes actuellement hospitalisée</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\">Prix du BTC en EUR : {{ response.data|filter(_ => _.symbol == 'BTC')|map(_ => _.quote.EUR.price|format_currency('EUR', {rounding_mode: 'floor'}))|join() }}</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre de Réa</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes actuellement en réanimation</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\"></h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre total de décès 😥</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes décédés depuis le début de la pandémie</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-dark text-light mx-2 rounded-pill\"></h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre totale de guéris</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes guéris depuis le début de la pandémie</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-success text-dark mx-2 rounded-pill\"></h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre de cas confirmés</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de cas confirmés depuis le début de la pandémie</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-info text-dark mx-2 rounded-pill\"></h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Source des données</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Source des données :<br></p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-secondary text-grey mx-2 rounded-pill\"></h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
{% endblock %}", "api/index.html.twig", "C:\\xampp\\apps\\symfony\\templates\\api\\index.html.twig");
    }
}
