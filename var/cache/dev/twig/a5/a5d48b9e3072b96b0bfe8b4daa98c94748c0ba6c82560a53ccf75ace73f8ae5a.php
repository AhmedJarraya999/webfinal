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

/* admin_dashboard/index.html.twig */
class __TwigTemplate_d48e38cc1380532180938a0dd2a70a8b1ba5a4733077f4d695c1d1921126f6ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin_dashboard/index.html.twig", 1);
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

        echo "Tableau de bord";
        
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
        echo "
<div class=\"container-fluid pt-4\">
    <div class=\"pt-4\">
        <div class=\"px-3 pt-4\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"card bg-primary text-white mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"fas fa-users fa-3x\"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 19, $this->source); })()), "users", [], "any", false, false, false, 19), "html", null, true);
        echo " Users</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card text-white bg-success mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"fas fa-hotel fa-3x\"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 33, $this->source); })()), "ads", [], "any", false, false, false, 33), "html", null, true);
        echo " Stays</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card text-white bg-warning mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"fas fa-folder fa-3x\"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 47, $this->source); })()), "bookings", [], "any", false, false, false, 47), "html", null, true);
        echo " Reservations</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card text-white bg-success mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"fas fa-comments fa-3x\"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 61, $this->source); })()), "comments", [], "any", false, false, false, 61), "html", null, true);
        echo " Comments</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <hr>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"alert alert-success bg-success text-white\">
                        <h2 class=\"alert-heading my-3\">
                            <i class=\"fas fa-arrow-up\"></i>
                              Best stays
                        </h2>

                        <table class=\"table table-hover\">
                            <thead>
                                
                                <tr >
                                    <th >Host</th>
                                    <th >Photo</th>
                                    <th >Description</th>
                                    <th class=\"text-center\">N° reservations</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 88, $this->source); })()), "stays", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["stay"]) {
            // line 89
            echo "                                <tr>
                                    <td>
                                        <img src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" width=\"50px\" height=\"50px\" alt=\"\" class=\"avatar avatar-micro\" /> 
                                            ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stay"], "getUsers", [], "method", false, false, false, 92), "firstName", [], "any", false, false, false, 92), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stay"], "getUsers", [], "method", false, false, false, 92), "lastName", [], "any", false, false, false, 92), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <img style=\"width: 60px; height:60px; border-radius: 0%\" src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["stay"], "photo", [], "any", false, false, false, 95))), "html", null, true);
            echo "\" alt=\"\"> 
                                    </td>
                                    <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "description", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                                    <td class=\"text-center\" style=\"font-size: 16px\">
                                        <span class=\"badge badge-dark\">
                                            ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "getNbBooked", [], "method", false, false, false, 100), "html", null, true);
            echo "
                                        </span>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"alert alert-danger bg-danger text-white\">
                        <h2 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-down\"></i> Popular experiences </h2>

                        <table class=\"table table-hover\">
                            <thead>
                                
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>N° comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 126, $this->source); })()), "experiences", [], "any", false, false, false, 126));
        foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
            // line 127
            echo "                                <tr>
                                    <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exp"], "title", [], "any", false, false, false, 128), "html", null, true);
            echo "</td>
                                    <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exp"], "content", [], "any", false, false, false, 129), "html", null, true);
            echo "</td>
                                    <td>";
            // line 130
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["exp"], "user", [], "any", false, false, false, 130), "firstName", [], "any", false, false, false, 130) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["exp"], "user", [], "any", false, false, false, 130), "lastName", [], "any", false, false, false, 130)), "html", null, true);
            echo "</td>
                                    <td>";
            // line 131
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exp"], "date", [], "any", false, false, false, 131), "Y-m-d"), "html", null, true);
            echo "</td>
                                    <td class=\"text-center\">
                                        <span class=\"badge badge-dark\">
                                            ";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exp"], "nbComments", [], "any", false, false, false, 134), "html", null, true);
            echo "
                                        </span>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                                
                            </tbody>
                        </table>
                    </div>
                </div>
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
        return "admin_dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 139,  271 => 134,  265 => 131,  261 => 130,  257 => 129,  253 => 128,  250 => 127,  246 => 126,  223 => 105,  212 => 100,  206 => 97,  201 => 95,  193 => 92,  188 => 89,  184 => 88,  154 => 61,  137 => 47,  120 => 33,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Tableau de bord{% endblock %}

{% block body %}

<div class=\"container-fluid pt-4\">
    <div class=\"pt-4\">
        <div class=\"px-3 pt-4\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"card bg-primary text-white mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"fas fa-users fa-3x\"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">{{ stats.users }} Users</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card text-white bg-success mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"fas fa-hotel fa-3x\"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">{{ stats.ads }} Stays</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card text-white bg-warning mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"fas fa-folder fa-3x\"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">{{ stats.bookings }} Reservations</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card text-white bg-success mb-3 text-center\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <i class=\"fas fa-comments fa-3x\"></i>
                                </div>
                                <div class=\"col-8\">
                                    <h4 class=\"card-title\">{{ stats.comments }} Comments</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <hr>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"alert alert-success bg-success text-white\">
                        <h2 class=\"alert-heading my-3\">
                            <i class=\"fas fa-arrow-up\"></i>
                              Best stays
                        </h2>

                        <table class=\"table table-hover\">
                            <thead>
                                
                                <tr >
                                    <th >Host</th>
                                    <th >Photo</th>
                                    <th >Description</th>
                                    <th class=\"text-center\">N° reservations</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for stay in stats.stays %}
                                <tr>
                                    <td>
                                        <img src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" width=\"50px\" height=\"50px\" alt=\"\" class=\"avatar avatar-micro\" /> 
                                            {{stay.getUsers().firstName}} {{stay.getUsers().lastName}}
                                    </td>
                                    <td>
                                        <img style=\"width: 60px; height:60px; border-radius: 0%\" src=\"{{ asset('uploads/' ~ stay.photo) }}\" alt=\"\"> 
                                    </td>
                                    <td>{{stay.description}}</td>
                                    <td class=\"text-center\" style=\"font-size: 16px\">
                                        <span class=\"badge badge-dark\">
                                            {{stay.getNbBooked() }}
                                        </span>
                                    </td>
                                </tr>
                                {% endfor %}
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"alert alert-danger bg-danger text-white\">
                        <h2 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-down\"></i> Popular experiences </h2>

                        <table class=\"table table-hover\">
                            <thead>
                                
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>N° comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for exp in stats.experiences %}
                                <tr>
                                    <td>{{ exp.title }}</td>
                                    <td>{{ exp.content }}</td>
                                    <td>{{ exp.user.firstName ~ ' ' ~ exp.user.lastName }}</td>
                                    <td>{{ exp.date | date('Y-m-d') }}</td>
                                    <td class=\"text-center\">
                                        <span class=\"badge badge-dark\">
                                            {{ exp.nbComments }}
                                        </span>
                                    </td>
                                </tr>
                                {% endfor %}
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "admin_dashboard/index.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\admin_dashboard\\index.html.twig");
    }
}
