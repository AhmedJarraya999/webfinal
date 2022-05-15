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

/* user/profile.html.twig */
class __TwigTemplate_d38ff21d06daf25be2b8fa9daca6e7e12da9d1556cfb8ff07ff1de9146c34d7e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
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

        echo "Modification du profil utilisateur";
        
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
        echo "  <div class=\"container rounded bg-white mt-5 mb-5\">
     ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9)) {
            // line 10
            echo "            <div class=\"col-md-12 p-3 py-5\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                    <div class=\"alert alert-success\">
                        ";
                // line 13
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            </div>
            ";
        }
        // line 18
        echo "            <div class=\"col-md-3 border-right\">
                <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
                    <img class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
                    <span class=\"font-weight-bold\">";
        // line 21
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "firstname", [], "any", false, false, false, 21) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "lastname", [], "any", false, false, false, 21)), "html", null, true);
        echo "</span>
                    <span class=\"text-black-50\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), "html", null, true);
        echo "</span>
                    <span> </span>
                </div>
            </div>
            <div class=\"col-md-5 border-right\">
                <div class=\"p-3 py-5\">
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <h4 class=\"text-right\">Profile Settings</h4>
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-md-6\">
                            <label class=\"labels\">Firstname</label>
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "firstname", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            <label class=\"labels\">Lastname</label>
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "lastname", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-12\">
                            <label class=\"labels\">Mobile Phone</label>
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "phone", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-md-12\">
                            <label class=\"labels\">Introduction</label>
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "introduction", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>  
                    </div>
                    <div class=\"mt-5 text-center\">
                        <button class=\"btn btn-primary profile-button\" type=\"submit\">Save Profile</button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"p-3 py-5\">
                    <div class=\"col-md-12\">
                        <label class=\"labels\">Email ID</label>
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "email", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>  
                    <div class=\"col-md-12\">
                        <label class=\"labels\">Username</label>
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "username", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"col-md-12\">
                        <label class=\"labels\">Password</label><br>
                        <small> NB : leave it empty if you don't want to change the password </small>
                        <input type=\"password\" name=\"plainPassword\" class=\"form-control\" placeholder=\"new password\" value=\"\"></div>
                    </div>
                    <div class=\"col-md-12\">
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "captchaCode", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>  
                    <div style=\"display: none\">
                     ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'rest');
        echo "
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 80,  207 => 75,  201 => 72,  190 => 64,  183 => 60,  168 => 48,  161 => 44,  152 => 38,  145 => 34,  130 => 22,  126 => 21,  121 => 18,  117 => 16,  108 => 13,  105 => 12,  101 => 11,  98 => 10,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modification du profil utilisateur{% endblock %}

{% block body %}
  <div class=\"container rounded bg-white mt-5 mb-5\">
     {{ form_start(form) }}
        <div class=\"row\">
            {%  if app.flashes('success') %}
            <div class=\"col-md-12 p-3 py-5\">
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">
                        {{ message }}
                    </div>
                {% endfor %}
            </div>
            {% endif %}
            <div class=\"col-md-3 border-right\">
                <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
                    <img class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
                    <span class=\"font-weight-bold\">{{ user.firstname ~ ' ' ~ user.lastname }}</span>
                    <span class=\"text-black-50\">{{ user.email }}</span>
                    <span> </span>
                </div>
            </div>
            <div class=\"col-md-5 border-right\">
                <div class=\"p-3 py-5\">
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <h4 class=\"text-right\">Profile Settings</h4>
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-md-6\">
                            <label class=\"labels\">Firstname</label>
                            {{ form_widget(form.firstname, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-md-6\">
                            <label class=\"labels\">Lastname</label>
                            {{ form_widget(form.lastname, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-12\">
                            <label class=\"labels\">Mobile Phone</label>
                            {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-md-12\">
                            <label class=\"labels\">Introduction</label>
                            {{ form_widget(form.introduction, {'attr': {'class': 'form-control'}}) }}
                        </div>  
                    </div>
                    <div class=\"mt-5 text-center\">
                        <button class=\"btn btn-primary profile-button\" type=\"submit\">Save Profile</button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"p-3 py-5\">
                    <div class=\"col-md-12\">
                        <label class=\"labels\">Email ID</label>
                        {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                    </div>  
                    <div class=\"col-md-12\">
                        <label class=\"labels\">Username</label>
                        {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"col-md-12\">
                        <label class=\"labels\">Password</label><br>
                        <small> NB : leave it empty if you don't want to change the password </small>
                        <input type=\"password\" name=\"plainPassword\" class=\"form-control\" placeholder=\"new password\" value=\"\"></div>
                    </div>
                    <div class=\"col-md-12\">
                        {{ form_widget(form.captchaCode, {'attr': {'class': 'form-control'}}) }}
                    </div>  
                    <div style=\"display: none\">
                     {{ form_rest(form) }}
                    </div>
                </div>
            </div>
        </div>
        {{ form_end(form) }}
    </div>

{% endblock %}", "user/profile.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\user\\profile.html.twig");
    }
}
