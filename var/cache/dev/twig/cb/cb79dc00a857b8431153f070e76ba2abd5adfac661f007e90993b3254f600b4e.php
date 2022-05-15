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

/* admin_booking/index.html.twig */
class __TwigTemplate_63ed08469baa006a384055b294923e0cdd68297c96efe8cb8dd7aef6dbf16983 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_booking/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_booking/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin_booking/index.html.twig", 1);
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

        echo "Bookings Administration!";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
     <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
</style>


<div  class=\"container-fluid\">
</br>
<h1 class=\"my-5\">Admin Bookings Management</h1>
<table class=\"table table-hover\">

<thead>
<tr>
<th>Id </th>
<th class=\"text-center\" >Host</th>
<th class=\"text-center\"> Booking Date</th>
<th class=\"text-center\">Guest</th>
<th class=\"text-center\">Starting Date</th>
<th class=\"text-center\">Ending Date</th>
<th  class=\"text-center\">Actions</th>
</tr>
</thead>
<tbody>
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 32
            echo "<tr>
<td class=\"text-center\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
<td class=\"text-center\" >
 <img   class=\"rounded-circle mt-5\"  src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "stay", [], "any", false, false, false, 36), "users", [], "any", false, false, false, 36), "getFirstname", [], "method", false, false, false, 36), "html", null, true);
            echo "</td>
<td class=\"text-center\" >
  <span class=\"badge badge-primary rounded\">";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "bookingDate", [], "any", false, false, false, 38)), "html", null, true);
            echo "</span>
</td> 
<td class=\"text-center\">
 <img   class=\"rounded-circle mt-5\"  src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "user", [], "any", false, false, false, 42), "html", null, true);
            echo "
</td>
<td class=\"text-center\" ><span class=\"badge badge-primary rounded\">";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "firstDate", [], "any", false, false, false, 44)), "html", null, true);
            echo "</span></td>

<td class=\"text-center\" ><span class=\"badge badge-primary rounded\">";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "endDate", [], "any", false, false, false, 46)), "html", null, true);
            echo " </td>


<td  class=\"text-center\" >


  <a style=\"margin:15px width:30px\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_booking_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\" btn btn-primary\">
                            <i class=\"fas fa-edit\"></i>
                        </a>



<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_booking_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" class=\" btn btn-danger\">
                            <i class=\"fas fa-trash\"></i>
                        </a>
</td>


</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</tbody>
</table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_booking/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 66,  171 => 58,  162 => 52,  153 => 46,  148 => 44,  143 => 42,  136 => 38,  131 => 36,  125 => 33,  122 => 32,  118 => 31,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Bookings Administration!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
     <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
</style>


<div  class=\"container-fluid\">
</br>
<h1 class=\"my-5\">Admin Bookings Management</h1>
<table class=\"table table-hover\">

<thead>
<tr>
<th>Id </th>
<th class=\"text-center\" >Host</th>
<th class=\"text-center\"> Booking Date</th>
<th class=\"text-center\">Guest</th>
<th class=\"text-center\">Starting Date</th>
<th class=\"text-center\">Ending Date</th>
<th  class=\"text-center\">Actions</th>
</tr>
</thead>
<tbody>
{% for booking in bookings %}
<tr>
<td class=\"text-center\">{{booking.id}}</td>
<td class=\"text-center\" >
 <img   class=\"rounded-circle mt-5\"  src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
{{  booking.stay.users.getFirstname()}}</td>
<td class=\"text-center\" >
  <span class=\"badge badge-primary rounded\">{{booking.bookingDate | date}}</span>
</td> 
<td class=\"text-center\">
 <img   class=\"rounded-circle mt-5\"  src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
{{booking.user}}
</td>
<td class=\"text-center\" ><span class=\"badge badge-primary rounded\">{{booking.firstDate | date}}</span></td>

<td class=\"text-center\" ><span class=\"badge badge-primary rounded\">{{booking.endDate | date}} </td>


<td  class=\"text-center\" >


  <a style=\"margin:15px width:30px\" href=\"{{ path('app_admin_booking_edit', {'id': booking.id}) }}\" class=\" btn btn-primary\">
                            <i class=\"fas fa-edit\"></i>
                        </a>



<a href=\"{{ path('app_admin_booking_delete', {'id': booking.id}) }}\" class=\" btn btn-danger\">
                            <i class=\"fas fa-trash\"></i>
                        </a>
</td>


</tr>
{% endfor %}
</tbody>
</table>
</div>
{% endblock %}

", "admin_booking/index.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\admin_booking\\index.html.twig");
    }
}
