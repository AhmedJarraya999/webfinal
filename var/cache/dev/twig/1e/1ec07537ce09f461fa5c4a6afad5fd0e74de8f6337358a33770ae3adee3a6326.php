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

/* admin_account/index.html.twig */
class __TwigTemplate_763a675fdc12cea39229ead9272a8580c429321585d3815d8a2fbbb007d67896 extends \Twig\Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_account/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_account/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin_account/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion au site";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-md-3\">&nbsp;</div>
        <div class=\"col-md-6\">
            <div class=\"bg-light py-3 px-3\">
                <h1>Connectez vous !</h1>

                ";
        // line 15
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "                    <div class=\"alert alert-danger\">Une erreur est survenue, le nom d'utilisateur ou alors le mot de passe est invalide</div>
                ";
        }
        // line 18
        echo "
                <form action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_login");
        echo "\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"email\">Email</label>
                        <input type=\"text\" name=\"_username\" id=\"email\" class=\"form-control\" placeholder=\"Adresse email ...\" required value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Mot de passe</label>
                        <input type=\"password\" name=\"_password\" id=\"password\" placeholder=\"Mot de passe ...\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-success\">Connexion !</button>
                        <a href=\"#\" class=\"btn btn-link\">Je n'ai pas encore de compte !</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 22,  108 => 19,  105 => 18,  101 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Connexion au site{% endblock %}

{% block body %}

<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-md-3\">&nbsp;</div>
        <div class=\"col-md-6\">
            <div class=\"bg-light py-3 px-3\">
                <h1>Connectez vous !</h1>

                {% if hasError %}
                    <div class=\"alert alert-danger\">Une erreur est survenue, le nom d'utilisateur ou alors le mot de passe est invalide</div>
                {% endif %}

                <form action=\"{{ path('admin_account_login') }}\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"email\">Email</label>
                        <input type=\"text\" name=\"_username\" id=\"email\" class=\"form-control\" placeholder=\"Adresse email ...\" required value=\"{{username}}\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Mot de passe</label>
                        <input type=\"password\" name=\"_password\" id=\"password\" placeholder=\"Mot de passe ...\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-success\">Connexion !</button>
                        <a href=\"#\" class=\"btn btn-link\">Je n'ai pas encore de compte !</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

{% endblock %}", "admin_account/index.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\admin_account\\index.html.twig");
    }
}
