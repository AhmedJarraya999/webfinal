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

/* admin_stay/index.html.twig */
class __TwigTemplate_ebc75c20fa0a663c82e2d077f6bbcc05ca8ccdb61296465e84848059759bafe4 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_stay/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_stay/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin_stay/index.html.twig", 1);
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

        echo "Stays Administration!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px / 1.5 sans-serif;
        }
        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\"/> <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://use.fontawesome.com/releases/v5.3.1/css/all.css"), "html", null, true);
        echo "\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\" />
    </style>

    <div class=\"container-fluid\"></br>
    <h1 class=\"my-5\">Admin Stays Management</h1>

   
</br>
<table class=\"table table-hover\">
    <thead>
        <tr>
            <th>Id
            </th>
            <th class=\"text-center\">Author</th>
            <th class=\"text-center\">
                Number of Bookings</th>
            <th class=\"text-center\">start date av</th>
            <th class=\"text-center\">end date av</th>
            <th class=\"text-center\">Rate</th>
            <th class=\"text-center\">Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stays"]) || array_key_exists("stays", $context) ? $context["stays"] : (function () { throw new RuntimeError('Variable "stays" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stay"]) {
            // line 42
            echo "            <tr>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <img style=\"margin:15px\" class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\"/>
                    ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stay"], "users", [], "any", false, false, false, 46), "getFirstname", [], "method", false, false, false, 46), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <span class=\"badge badge-primary rounded\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "getNbBooked", [], "method", false, false, false, 48), "html", null, true);
            echo "</span>
                </td>
                <td class=\"text-center\">";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "startdateav", [], "any", false, false, false, 50)), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "enddateav", [], "any", false, false, false, 51)), "html", null, true);
            echo "</td>

                <td class=\"text-center\">
                    <span class=\"badge badge-primary rounded\">to do
                    </td>

                    <td class=\"text-center\">
                        <a style=\"margin:15px width:30px\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stay_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["stay"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" class=\" btn btn-primary\">
                            <i class=\"fas fa-edit\"></i>
                        </a>

                        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ads_delete", ["stay" => twig_get_attribute($this->env, $this->source, $context["stay"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" class=\" btn btn-danger\">
                            <i class=\"fas fa-trash\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "<script>
    const editPath = \"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_edit", ["id" => "__code"]);
        echo "\".replaceAll('__code', row.id);
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_stay/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 75,  210 => 74,  200 => 73,  187 => 68,  175 => 62,  168 => 58,  158 => 51,  154 => 50,  149 => 48,  144 => 46,  138 => 43,  135 => 42,  131 => 41,  103 => 18,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Stays Administration!
{% endblock %}

{% block body %}
    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px / 1.5 sans-serif;
        }
        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
        <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\"/> <link rel=\"stylesheet\" href=\"{{ asset('https://use.fontawesome.com/releases/v5.3.1/css/all.css') }}\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\" />
    </style>

    <div class=\"container-fluid\"></br>
    <h1 class=\"my-5\">Admin Stays Management</h1>

   
</br>
<table class=\"table table-hover\">
    <thead>
        <tr>
            <th>Id
            </th>
            <th class=\"text-center\">Author</th>
            <th class=\"text-center\">
                Number of Bookings</th>
            <th class=\"text-center\">start date av</th>
            <th class=\"text-center\">end date av</th>
            <th class=\"text-center\">Rate</th>
            <th class=\"text-center\">Actions</th>
        </tr>
    </thead>
    <tbody>
        {% for stay in stays %}
            <tr>
                <td>{{ stay.id }}</td>
                <td class=\"text-center\">
                    <img style=\"margin:15px\" class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\"/>
                    {{ stay.users.getFirstname() }}</td>
                <td class=\"text-center\">
                    <span class=\"badge badge-primary rounded\">{{ stay.getNbBooked() }}</span>
                </td>
                <td class=\"text-center\">{{ stay.startdateav | date }}</td>
                <td class=\"text-center\">{{ stay.enddateav | date }}</td>

                <td class=\"text-center\">
                    <span class=\"badge badge-primary rounded\">to do
                    </td>

                    <td class=\"text-center\">
                        <a style=\"margin:15px width:30px\" href=\"{{ path('app_admin_stay_edit', {'id': stay.id}) }}\" class=\" btn btn-primary\">
                            <i class=\"fas fa-edit\"></i>
                        </a>

                        <a href=\"{{ path('admin_ads_delete', {'stay': stay.id}) }}\" class=\" btn btn-danger\">
                            <i class=\"fas fa-trash\"></i>
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}

{% block javascripts %}
<script>
    const editPath = \"{{ path('app_stay_edit', {'id': '__code'}) }}\".replaceAll('__code', row.id);
</script>
{% endblock %}
", "admin_stay/index.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\admin_stay\\index.html.twig");
    }
}
