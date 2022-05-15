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

/* user/_form.html.twig */
class __TwigTemplate_065eafaf3fa93afd76498172a93023d3a824c11af600fa712ba9f0d611e5ca4d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 3)) {
            // line 4
            echo "            <div class=\"col-md-12 p-3 py-5\">
                ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "                    <div class=\"alert alert-success\">
                        ";
                // line 7
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            </div>
            ";
        }
        // line 12
        echo "            <div class=\"col-md-3 border-right\">
                <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
                    <img class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
                    <span class=\"font-weight-bold\">";
        // line 15
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "firstname", [], "any", false, false, false, 15) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "lastname", [], "any", false, false, false, 15)), "html", null, true);
        echo "</span>
                    <span class=\"text-black-50\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
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
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "firstname", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            <label class=\"labels\">Lastname</label>
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "lastname", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-6\">
                            <label class=\"labels\">Mobile Phone</label>
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "phone", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            <label class=\"labels\">Role</label>
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "roles", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"row mt-3\">    
                        <div class=\"col-md-12\">
                            <label class=\"labels\">Introduction</label>
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "introduction", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>  
                    </div>
                    <div class=\"mt-5 text-center\">
                        <button class=\"btn btn-primary\" type=\"button\" onclick=\"\$('form[name=\\'user\\']').submit()\">
                            ";
        // line 53
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 53, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "
                        </button>
                        <a class=\"btn btn-primary\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">back to list</a>
                        ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)) {
            // line 57
            echo "                        <a class=\"btn btn-primary\" href=\"#\" ";
            echo ">delete</a>
                        ";
        }
        // line 59
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"p-3 py-5\">
                    <div class=\"col-md-12\">
                        <label class=\"labels\">Email ID</label>
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>  
                    <div class=\"col-md-12\">
                        <label class=\"labels\">Username</label>
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "username", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72)) {
            // line 73
            echo "                    <div class=\"col-md-12\">
                        <label class=\"labels\">Password</label><br>
                        <small> NB : leave it empty if you don't want to change the password </small>
                        <input type=\"password\" name=\"plainPassword\" class=\"form-control\" placeholder=\"new password\" value=\"\" />
                    </div>
                    ";
        } else {
            // line 79
            echo "                    <div class=\"col-md-12\">
                        <label class=\"labels\">Password</label><br>
                        <input type=\"password\" name=\"plainPassword\" class=\"form-control\" placeholder=\"new password\" value=\"\" />
                    </div>
                    ";
        }
        // line 84
        echo "                    <br>
                    <div class=\"col-md-12\">
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "captchaCode", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>  
                    <div style=\"display: none\">
                     ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'rest');
        echo "
                    </div>
                </div>
            </div>
        </div>
        
        ";
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
        echo "   

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 95,  201 => 89,  195 => 86,  191 => 84,  184 => 79,  176 => 73,  174 => 72,  169 => 70,  162 => 66,  153 => 59,  148 => 57,  146 => 56,  142 => 55,  137 => 53,  129 => 48,  120 => 42,  113 => 38,  104 => 32,  97 => 28,  82 => 16,  78 => 15,  73 => 12,  69 => 10,  60 => 7,  57 => 6,  53 => 5,  50 => 4,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
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
                        <div class=\"col-md-6\">
                            <label class=\"labels\">Mobile Phone</label>
                            {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-md-6\">
                            <label class=\"labels\">Role</label>
                            {{ form_widget(form.roles, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"row mt-3\">    
                        <div class=\"col-md-12\">
                            <label class=\"labels\">Introduction</label>
                            {{ form_widget(form.introduction, {'attr': {'class': 'form-control'}}) }}
                        </div>  
                    </div>
                    <div class=\"mt-5 text-center\">
                        <button class=\"btn btn-primary\" type=\"button\" onclick=\"\$('form[name=\\'user\\']').submit()\">
                            {{ button_label|default('Save') }}
                        </button>
                        <a class=\"btn btn-primary\" href=\"{{ path('app_user_index') }}\">back to list</a>
                        {% if user.id %}
                        <a class=\"btn btn-primary\" href=\"#\" {#onclick=\"beforeRemove()\"#}>delete</a>
                        {% endif %}
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
                    {% if user.id %}
                    <div class=\"col-md-12\">
                        <label class=\"labels\">Password</label><br>
                        <small> NB : leave it empty if you don't want to change the password </small>
                        <input type=\"password\" name=\"plainPassword\" class=\"form-control\" placeholder=\"new password\" value=\"\" />
                    </div>
                    {% else %}
                    <div class=\"col-md-12\">
                        <label class=\"labels\">Password</label><br>
                        <input type=\"password\" name=\"plainPassword\" class=\"form-control\" placeholder=\"new password\" value=\"\" />
                    </div>
                    {% endif %}
                    <br>
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

{#
<script>
    function beforeRemove() {
        if(confirm('Are you sure you want to delete this item?')) {
            window.href = \"{{ path('app_user_remove', {'user': user.id}) }}\";
        }
    }
    </script>
    #}", "user/_form.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\user\\_form.html.twig");
    }
}
