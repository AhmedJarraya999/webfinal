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

/* stay/showv2.html.twig */
class __TwigTemplate_52879aed49318210f29e06daae9827dac4467cbbc636ee7eb437fb380706d7e4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/showv2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/showv2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stay/showv2.html.twig", 1);
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
        echo "   <div class=\"container rounded bg-white mt-5 mb-5\" >
     
        <div class=\"row\" >
            <div class=\"col-md-3 border-right\">
                <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
                    <img class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
                    <span class=\"font-weight-bold\"></br>";
        // line 12
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 12, $this->source); })()), "users", [], "any", false, false, false, 12), "firstname", [], "any", false, false, false, 12) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 12, $this->source); })()), "users", [], "any", false, false, false, 12), "lastname", [], "any", false, false, false, 12)), "html", null, true);
        echo "</span>
                    <span class=\"text-black-50\"> Email : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 13, $this->source); })()), "users", [], "any", false, false, false, 13), "email", [], "any", false, false, false, 13), "html", null, true);
        echo "</span>
                    <span> Username : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 14, $this->source); })()), "users", [], "any", false, false, false, 14), "username", [], "any", false, false, false, 14), "html", null, true);
        echo " </span>
                    <span> Mobile phone : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 15, $this->source); })()), "users", [], "any", false, false, false, 15), "phone", [], "any", false, false, false, 15), "html", null, true);
        echo "</span>
                    <span class=\"labels\"></br><p>Introduction about the host </p> <p> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 16, $this->source); })()), "users", [], "any", false, false, false, 16), "introduction", [], "any", false, false, false, 16), "html", null, true);
        echo " </p> </span>
                    <span ><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accounthoststay", ["stay" => twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\" class=\"btn btn-success mr-2 mb-2\">View host profile</a></span>
                </div>
            </div>
           
          
        
         <div class=\"col-md-9 border-right\">
                <div class=\"p-3 py-5\">
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                      
                    </div>
                    <hr />
                    <div class=\"row mt-3\">
                        <div class=\"col-md-12\">
                           
                                <div class=\"row\" style=\"display: flex;align-items: center;\">
                                 
                                  <table class=\"table\">
 </div>
       </br>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Capacity</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 44, $this->source); })()), "capacity", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
              
            </tr>
            <tr>
                <th>Startdateav</th>
                <td>";
        // line 55
        ((twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 55, $this->source); })()), "startdateav", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 55, $this->source); })()), "startdateav", [], "any", false, false, false, 55), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Enddateav</th>
                <td>";
        // line 59
        ((twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 59, $this->source); })()), "enddateav", [], "any", false, false, false, 59)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 59, $this->source); })()), "enddateav", [], "any", false, false, false, 59), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            
            </tr>
            
        </tbody>
    </table>
     <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_index");
        echo "\" class=\"btn btn-primary\"style=\"margin:5px;width:90%\"  >back 
     <img src=\"/front/images/return.png\" alt=\"Image\" class=\"maskImg\" /></a>

  </br>
    ";
        // line 69
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUEST")) {
            // line 70
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_stay", ["stay" => twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\" class=\"btn btn-info\" style=\"margin:5px;width:90%;\">Book now
        <img src=\"/front/images/book.png\" alt=\"Image\" class=\"maskImg\" >
        </a>
    ";
        }
        // line 74
        echo "                                </div>
                       
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
        return "stay/showv2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 74,  191 => 70,  189 => 69,  182 => 65,  173 => 59,  166 => 55,  156 => 48,  149 => 44,  142 => 40,  116 => 17,  112 => 16,  108 => 15,  104 => 14,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Stay{% endblock %}

{% block body %}
   <div class=\"container rounded bg-white mt-5 mb-5\" >
     
        <div class=\"row\" >
            <div class=\"col-md-3 border-right\">
                <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
                    <img class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
                    <span class=\"font-weight-bold\"></br>{{ stay.users.firstname ~ ' ' ~ stay.users.lastname }}</span>
                    <span class=\"text-black-50\"> Email : {{ stay.users.email }}</span>
                    <span> Username : {{ stay.users.username }} </span>
                    <span> Mobile phone : {{ stay.users.phone }}</span>
                    <span class=\"labels\"></br><p>Introduction about the host </p> <p> {{ stay.users.introduction }} </p> </span>
                    <span ><a href=\"{{ path('accounthoststay', {'stay': stay.id}) }}\" class=\"btn btn-success mr-2 mb-2\">View host profile</a></span>
                </div>
            </div>
           
          
        
         <div class=\"col-md-9 border-right\">
                <div class=\"p-3 py-5\">
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                      
                    </div>
                    <hr />
                    <div class=\"row mt-3\">
                        <div class=\"col-md-12\">
                           
                                <div class=\"row\" style=\"display: flex;align-items: center;\">
                                 
                                  <table class=\"table\">
 </div>
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
     <a href=\"{{ path('app_stay_index') }}\" class=\"btn btn-primary\"style=\"margin:5px;width:90%\"  >back 
     <img src=\"/front/images/return.png\" alt=\"Image\" class=\"maskImg\" /></a>

  </br>
    {% if is_granted('ROLE_GUEST') %}
        <a href=\"{{ path('app_booking_stay', {'stay': stay.id}) }}\" class=\"btn btn-info\" style=\"margin:5px;width:90%;\">Book now
        <img src=\"/front/images/book.png\" alt=\"Image\" class=\"maskImg\" >
        </a>
    {% endif %}
                                </div>
                       
                        </div>  
                    </div>
                </div>
            </div>
    

{% endblock %}
", "stay/showv2.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\stay\\showv2.html.twig");
    }
}
