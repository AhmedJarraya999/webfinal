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

/* registration/register.html.twig */
class __TwigTemplate_483ebe31fa7b745acaf84de5450bf1f56c965f90a0a405f9e202aa83f59e7dad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
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
        echo "<div class=\"signup-container\">
</br>
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
    </br>
    <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), "username", [], "any", false, false, false, 12), 'label');
        echo "
        </div>
        <div class=\"col\">
             ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "choose your username"]]);
        echo "
        </div>
    </div>

    <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "plainPassword", [], "any", false, false, false, 21), 'label');
        echo "
        </div>
        <div class=\"col\">
             ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "plainPassword", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "choose your password..."]]);
        echo "
        </div>
    </div>
     <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "firstname", [], "any", false, false, false, 29), 'label');
        echo "
        </div>
        <div class=\"col\">
             ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "firstname", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "choose your username"]]);
        echo "
        </div>
    </div>
     <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "lastname", [], "any", false, false, false, 37), 'label');
        echo "
        </div>
        <div class=\"col\">
             ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "lastname", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "choose your lastname"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'label');
        echo "
        </div>
        <div class=\"col\">
             ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "choose your email"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "phone", [], "any", false, false, false, 53), 'label');
        echo "
        </div>
        <div class=\"col\">
             ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "phone", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " your phone with your country code "]]);
        echo "
        </div>
    </div>
        
   <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "roles", [], "any", false, false, false, 62), 'label');
        echo "
        </div>
        <div class=\"col\">
             ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "roles", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
       <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "captchaCode", [], "any", false, false, false, 70), 'label');
        echo "
        </div>
        <div class=\"col\">
             ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "captchaCode", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Type the code below"]]);
        echo "
        </div>
    </div>
        </br>
        <button class =\"btn btn-primary\"  href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">
           <img src=\"/front/images/add-user.png\" alt=\"Image\" class=\"maskImg\" />
                Register 
        </button>
         <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"contact-us-link\"><i class=\"flaticon-airplane49\"></i>    &nbsp;  Already have an account ?</a>
    ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), 'form_end');
        echo "
    </br>
   
</div>
 
   
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 82,  219 => 81,  212 => 77,  205 => 73,  199 => 70,  191 => 65,  185 => 62,  176 => 56,  170 => 53,  162 => 48,  156 => 45,  148 => 40,  142 => 37,  134 => 32,  128 => 29,  120 => 24,  114 => 21,  105 => 15,  99 => 12,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
<div class=\"signup-container\">
</br>
    {{ form_start(registrationForm) }}
    </br>
    <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            {{ form_label(registrationForm.username) }}
        </div>
        <div class=\"col\">
             {{ form_widget(registrationForm.username, {'attr': {'class': 'form-control','placeholder' :'choose your username'}}) }}
        </div>
    </div>

    <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            {{ form_label(registrationForm.plainPassword) }}
        </div>
        <div class=\"col\">
             {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control','placeholder' :'choose your password...' }}) }}
        </div>
    </div>
     <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            {{ form_label(registrationForm.firstname) }}
        </div>
        <div class=\"col\">
             {{ form_widget(registrationForm.firstname, {'attr': {'class': 'form-control','placeholder' :'choose your username'}}) }}
        </div>
    </div>
     <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            {{ form_label(registrationForm.lastname) }}
        </div>
        <div class=\"col\">
             {{ form_widget(registrationForm.lastname, {'attr': {'class': 'form-control','placeholder' :'choose your lastname'}}) }}
        </div>
    </div>
    <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            {{ form_label(registrationForm.email) }}
        </div>
        <div class=\"col\">
             {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control','placeholder' :'choose your email'}}) }}
        </div>
    </div>
    <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            {{ form_label(registrationForm.phone) }}
        </div>
        <div class=\"col\">
             {{ form_widget(registrationForm.phone, {'attr': {'class': 'form-control','placeholder' :' your phone with your country code '}}) }}
        </div>
    </div>
        
   <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            {{ form_label(registrationForm.roles) }}
        </div>
        <div class=\"col\">
             {{ form_widget(registrationForm.roles, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
       <div class=\"form-group row\" style=\"margin: 2%; text-align: center\">
        <div class=\"col\">
            {{ form_label(registrationForm.captchaCode) }}
        </div>
        <div class=\"col\">
             {{ form_widget(registrationForm.captchaCode, {'attr': {'class': 'form-control','placeholder' :'Type the code below'}}) }}
        </div>
    </div>
        </br>
        <button class =\"btn btn-primary\"  href=\"{{path('app_register')}}\">
           <img src=\"/front/images/add-user.png\" alt=\"Image\" class=\"maskImg\" />
                Register 
        </button>
         <a href=\"{{ path('app_login') }}\" class=\"contact-us-link\"><i class=\"flaticon-airplane49\"></i>    &nbsp;  Already have an account ?</a>
    {{ form_end(registrationForm) }}
    </br>
   
</div>
 
   
    
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\registration\\register.html.twig");
    }
}
