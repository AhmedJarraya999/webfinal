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

/* stay/_form.html.twig */
class __TwigTemplate_e42b139b5cb5216963044afbf80a02cea9271eb697a5cc8a799f9f3a005c4fbc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "


</br>
    <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "capacity", [], "any", false, false, false, 8), 'label');
        echo "
        </div>
        <div class=\"col\">
             ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "capacity", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), 'label');
        echo "
        </div>
        <div class=\"col\">
             ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    
    <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            Start At
        </div>
        <div class=\"col\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "startdateav", [], "any", false, false, false, 28), "date", [], "any", false, false, false, 28), "day", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "startdateav", [], "any", false, false, false, 31), "date", [], "any", false, false, false, 31), "month", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "startdateav", [], "any", false, false, false, 34), "date", [], "any", false, false, false, 34), "year", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
     <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            End At
        </div>
        <div class=\"col\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "enddateav", [], "any", false, false, false, 42), "date", [], "any", false, false, false, 42), "day", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col\">
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "enddateav", [], "any", false, false, false, 45), "date", [], "any", false, false, false, 45), "month", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "enddateav", [], "any", false, false, false, 48), "date", [], "any", false, false, false, 48), "year", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    
    <div class=\"form-group\" style=\"margin: 2%; text-align: left\">
        <label >";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "photo", [], "any", false, false, false, 53), 'label');
        echo "</label>
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "photo", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div style=\"display: none\">
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'rest');
        echo "
    </div>
    
    
";
        // line 66
        echo "    ";
        if (twig_in_filter("app_stay_new", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "get", [0 => "_route"], "method", false, false, false, 66))) {
            // line 67
            echo "    <button type=\"submit\" class=\"btn btn-success\" style=\"width: 195px;background:!important; color: white !important\">
        Add a stay
        <img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/images/plus.png"), "html", null, true);
            echo "\" alt=\"Image\" class=\"maskImg\" />
    </button>
    ";
        }
        // line 72
        echo "    </br>
    </br>
           
";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "stay/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 75,  160 => 72,  154 => 69,  150 => 67,  147 => 66,  140 => 57,  134 => 54,  130 => 53,  122 => 48,  116 => 45,  110 => 42,  99 => 34,  93 => 31,  87 => 28,  75 => 19,  69 => 16,  61 => 11,  55 => 8,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form) }}


</br>
    <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            {{ form_label(form.capacity) }}
        </div>
        <div class=\"col\">
             {{ form_widget(form.capacity, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
    <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            {{ form_label(form.description) }}
        </div>
        <div class=\"col\">
             {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
    
    <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            Start At
        </div>
        <div class=\"col\">
            {{ form_widget(form.startdateav.date.day, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col\">
            {{ form_widget(form.startdateav.date.month, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col\">
            {{ form_widget(form.startdateav.date.year, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
     <div class=\"form-group row\" style=\"margin: 2%; text-align: left\">
        <div class=\"col\">
            End At
        </div>
        <div class=\"col\">
            {{ form_widget(form.enddateav.date.day, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col\">
            {{ form_widget(form.enddateav.date.month, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col\">
            {{ form_widget(form.enddateav.date.year, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
    
    <div class=\"form-group\" style=\"margin: 2%; text-align: left\">
        <label >{{ form_label(form.photo) }}</label>
        {{ form_widget(form.photo, {'attr': {'class': 'form-control'}}) }}
    </div>
    <div style=\"display: none\">
        {{ form_rest(form) }}
    </div>
    
    
{#
    <a href=\"{{ path('app_stay_index') }}\" style=\"width: 200x\" class=\"btn btn-primary\">
        Back to list
        <img src=\"/front/images/return.png\" alt=\"Image\" class=\"maskImg\" />
    </a>#}
    {% if \"app_stay_new\" in app.request.get('_route') %}
    <button type=\"submit\" class=\"btn btn-success\" style=\"width: 195px;background:!important; color: white !important\">
        Add a stay
        <img src=\"{{ asset('/front/images/plus.png') }}\" alt=\"Image\" class=\"maskImg\" />
    </button>
    {% endif %}
    </br>
    </br>
           
{{ form_end(form) }}
", "stay/_form.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\stay\\_form.html.twig");
    }
}
