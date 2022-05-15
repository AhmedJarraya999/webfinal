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

/* user/show.html.twig */
class __TwigTemplate_263deb0e6767f5c76c332b3090914baf214e692aedc53dd246043c25adac3486 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "user/show.html.twig", 1);
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

        echo "User Details";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 6
        echo "   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
    
    <div class=\"container rounded bg-white mt-5 mb-5\" >
     
        <div class=\"row py-5\" style=\"padding-bottom : 0px\">
            <div class=\"col-md-3 border-right\">
                <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
                    <img class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
                    <span class=\"font-weight-bold\">";
        // line 17
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "firstname", [], "any", false, false, false, 17) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "lastname", [], "any", false, false, false, 17)), "html", null, true);
        echo "</span>
                    <span class=\"text-black-50\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), "html", null, true);
        echo "</span>
                    ";
        // line 20
        echo "                </div>
            </div>
            <div class=\"col-md-5 border-right\">
                <div class=\"p-3 py-5\">
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <h4 class=\"text-right\">General Information</h4>
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-md-6\">
                            <label class=\"labels\">Firstname</label> <br>
                            <label class=\"labels\"> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "firstname", [], "any", false, false, false, 30), "html", null, true);
        echo " </label>
                        </div>
                        <div class=\"col-md-6\">
                            <label class=\"labels\">Lastname</label>
                            <br>
                            <label class=\"labels\"> ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "lastname", [], "any", false, false, false, 35), "html", null, true);
        echo " </label>
                        </div>
                    </div>
                    <hr />
                    <div class=\"row mt-3\">
                        <div class=\"col-md-12\">
                            <label class=\"labels\">Mobile Phone</label>
                            <br>
                            <label class=\"labels\"> ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "phone", [], "any", false, false, false, 43), "html", null, true);
        echo " </label>
                        </div>
                    </div>
                    <hr />
                    <div class=\"row mt-3\">
                        <div class=\"col-md-12\">
                            <label class=\"labels\">Introduction</label>
                            <br>
                            <label class=\"labels\"> <p> ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "introduction", [], "any", false, false, false, 51), "html", null, true);
        echo " </p> </label>
                        </div>  
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"p-3 py-5\">
                    <div class=\"col-md-12\">
                        <label class=\"labels\">Email ID</label>
                        <br>
                        <label class=\"labels\"> <p> ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), "html", null, true);
        echo " </p> </label>
                    </div>  
                    <div class=\"col-md-12\">
                        <label class=\"labels\">Username</label>
                        <br>
                        <label class=\"labels\"> <p> ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "username", [], "any", false, false, false, 66), "html", null, true);
        echo " </p> </label>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 77
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 77,  210 => 76,  191 => 66,  183 => 61,  170 => 51,  159 => 43,  148 => 35,  140 => 30,  128 => 20,  124 => 18,  120 => 17,  101 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}User Details{% endblock %}

{% block styles %}
   
{% endblock %}

{% block body %} 
    
    <div class=\"container rounded bg-white mt-5 mb-5\" >
     
        <div class=\"row py-5\" style=\"padding-bottom : 0px\">
            <div class=\"col-md-3 border-right\">
                <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
                    <img class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
                    <span class=\"font-weight-bold\">{{ user.firstname ~ ' ' ~ user.lastname }}</span>
                    <span class=\"text-black-50\">{{ user.email }}</span>
                    {#<span> {{ user.roles[0] }} </span>#}
                </div>
            </div>
            <div class=\"col-md-5 border-right\">
                <div class=\"p-3 py-5\">
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <h4 class=\"text-right\">General Information</h4>
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-md-6\">
                            <label class=\"labels\">Firstname</label> <br>
                            <label class=\"labels\"> {{ user.firstname }} </label>
                        </div>
                        <div class=\"col-md-6\">
                            <label class=\"labels\">Lastname</label>
                            <br>
                            <label class=\"labels\"> {{ user.lastname }} </label>
                        </div>
                    </div>
                    <hr />
                    <div class=\"row mt-3\">
                        <div class=\"col-md-12\">
                            <label class=\"labels\">Mobile Phone</label>
                            <br>
                            <label class=\"labels\"> {{ user.phone }} </label>
                        </div>
                    </div>
                    <hr />
                    <div class=\"row mt-3\">
                        <div class=\"col-md-12\">
                            <label class=\"labels\">Introduction</label>
                            <br>
                            <label class=\"labels\"> <p> {{ user.introduction }} </p> </label>
                        </div>  
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"p-3 py-5\">
                    <div class=\"col-md-12\">
                        <label class=\"labels\">Email ID</label>
                        <br>
                        <label class=\"labels\"> <p> {{ user.email }} </p> </label>
                    </div>  
                    <div class=\"col-md-12\">
                        <label class=\"labels\">Username</label>
                        <br>
                        <label class=\"labels\"> <p> {{ user.username }} </p> </label>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block js %}
    
{% endblock %}
", "user/show.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\user\\show.html.twig");
    }
}
