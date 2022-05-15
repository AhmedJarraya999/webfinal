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

/* stay/show.html.twig */
class __TwigTemplate_55c7dd20c18d805cf370b9d1ee49c604b5e872fa4aff6ccb2d7c475d0ac0ca16 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stay/show.html.twig", 1);
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

        echo "Stay";
        
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
        echo "<div class=\"showstay-container\">

<p style=\"font-size:25px;font-family:Arial Black;color:#ffa233\">More informations about the stay</p>
</br>

<br></br>

    <table class=\"table\">
     <img style=\"width:10px height:10px margin:10px ;\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 14, $this->source); })()), "photo", [], "any", false, false, false, 14))), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-fluid\"></div>
       </br>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Capacity</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 23, $this->source); })()), "capacity", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
              
            </tr>
            <tr>
                <th>Startdateav</th>
                <td>";
        // line 34
        ((twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 34, $this->source); })()), "startdateav", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 34, $this->source); })()), "startdateav", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Enddateav</th>
                <td>";
        // line 38
        ((twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 38, $this->source); })()), "enddateav", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 38, $this->source); })()), "enddateav", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            
            </tr>
            
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_index");
        echo "\" class=\"btn btn-primary\"style=\"margin:30px;width:400px\"  >back 
     <img src=\"/front/images/return.png\" alt=\"Image\" class=\"maskImg\" /></a>

  </br>
    ";
        // line 49
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUEST")) {
            // line 50
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_stay", ["stay" => twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-info\" style=\"margin:5px;width:400px\">Book now
        <img src=\"/front/images/book.png\" alt=\"Image\" class=\"maskImg\" >
        </a>
    ";
        }
        // line 54
        echo " 
   ";
        // line 56
        echo "    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stay/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 56,  164 => 54,  156 => 50,  154 => 49,  147 => 45,  137 => 38,  130 => 34,  120 => 27,  113 => 23,  106 => 19,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Stay{% endblock %}

{% block body %}
<div class=\"showstay-container\">

<p style=\"font-size:25px;font-family:Arial Black;color:#ffa233\">More informations about the stay</p>
</br>

<br></br>

    <table class=\"table\">
     <img style=\"width:10px height:10px margin:10px ;\" src=\"{{ asset('uploads/' ~ stay.photo) }}\" alt=\"Image\" class=\"img-fluid\"></div>
       </br>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ stay.id }}</td>
            </tr>
            <tr>
                <th>Capacity</th>
                <td>{{ stay.capacity }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ stay.description }}</td>
            </tr>
            <tr>
              
            </tr>
            <tr>
                <th>Startdateav</th>
                <td>{{ stay.startdateav ? stay.startdateav|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Enddateav</th>
                <td>{{ stay.enddateav ? stay.enddateav|date('Y-m-d') : '' }}</td>
            
            </tr>
            
        </tbody>
    </table>

    <a href=\"{{ path('app_stay_index') }}\" class=\"btn btn-primary\"style=\"margin:30px;width:400px\"  >back 
     <img src=\"/front/images/return.png\" alt=\"Image\" class=\"maskImg\" /></a>

  </br>
    {% if is_granted('ROLE_GUEST') %}
        <a href=\"{{ path('app_booking_stay', {'stay': stay.id}) }}\" class=\"btn btn-info\" style=\"margin:5px;width:400px\">Book now
        <img src=\"/front/images/book.png\" alt=\"Image\" class=\"maskImg\" >
        </a>
    {% endif %}
 
   {# {{ include('stay/_delete_form.html.twig') }} #}
    </div>
    </div>
{% endblock %}
", "stay/show.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\stay\\show.html.twig");
    }
}
