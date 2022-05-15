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

/* booking/_form.html.twig */
class __TwigTemplate_55fb55607fb5cfb1a3a56974d46f2befc182dbb68a3a9ec02ccd841dcf707891 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

<div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            First Date
        </div>
        <div class=\"col\">
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "firstDate", [], "any", false, false, false, 8), "date", [], "any", false, false, false, 8), "day", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "firstDate", [], "any", false, false, false, 11), "date", [], "any", false, false, false, 11), "month", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "firstDate", [], "any", false, false, false, 14), "date", [], "any", false, false, false, 14), "year", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
     <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            End Date
        </div>
        <div class=\"col\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "endDate", [], "any", false, false, false, 22), "date", [], "any", false, false, false, 22), "day", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "endDate", [], "any", false, false, false, 25), "date", [], "any", false, false, false, 25), "month", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "endDate", [], "any", false, false, false, 28), "date", [], "any", false, false, false, 28), "year", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div style=\"display: none\">
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'rest');
        echo "
    </div>
    </br>


    
    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_index");
        echo "\" class=\" btn btn-primary\" style=\"margin:5px; width:95% \" ><img src=\"/front/images/return.png\" alt=\"Image\"
  class=\"maskImg\"</a>   Back To List</a>
    <br></br>
    <button class=\" btn btn-success\" style=\"margin:5px; width:95%\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_new");
        echo "\"><img src=\"/front/images/save.png\" alt=\"Image\"
  class=\"maskImg\"</a>  Save</button>
  
  ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        echo " 
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "booking/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  110 => 41,  104 => 38,  95 => 32,  88 => 28,  82 => 25,  76 => 22,  65 => 14,  59 => 11,  53 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}

<div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            First Date
        </div>
        <div class=\"col\">
            {{ form_widget(form.firstDate.date.day, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col\">
            {{ form_widget(form.firstDate.date.month, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col\">
            {{ form_widget(form.firstDate.date.year, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
     <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            End Date
        </div>
        <div class=\"col\">
            {{ form_widget(form.endDate.date.day, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col\">
            {{ form_widget(form.endDate.date.month, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col\">
            {{ form_widget(form.endDate.date.year, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
    <div style=\"display: none\">
        {{ form_rest(form) }}
    </div>
    </br>


    
    <a href=\"{{ path('app_stay_index') }}\" class=\" btn btn-primary\" style=\"margin:5px; width:95% \" ><img src=\"/front/images/return.png\" alt=\"Image\"
  class=\"maskImg\"</a>   Back To List</a>
    <br></br>
    <button class=\" btn btn-success\" style=\"margin:5px; width:95%\" href=\"{{ path('app_booking_new') }}\"><img src=\"/front/images/save.png\" alt=\"Image\"
  class=\"maskImg\"</a>  Save</button>
  
  {{ form_end(form) }} 
", "booking/_form.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\booking\\_form.html.twig");
    }
}
