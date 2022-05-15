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

/* stay/Adminedit.html.twig */
class __TwigTemplate_21fb4a35f779c0807bcb7271d81bc36b6c0a6274f12f22538f2ac7ad74e2d77e extends \Twig\Template
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
            '_ad_images_widget' => [$this, 'block__ad_images_widget'],
            '_ad_images_entry_row' => [$this, 'block__ad_images_entry_row'],
            '_ad_images_entry_widget' => [$this, 'block__ad_images_entry_widget'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/Adminedit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/Adminedit.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "stay/Adminedit.html.twig", 1);
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

        echo "Modification de l'annonce numéro ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"container\">
</br>


    <h1 class=\"my-5\">Modification du stay numéro ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
    
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
     

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card bg-light\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Corriger l'annonce ?</h4>
                </div>
                <div class=\"card-body\">
                   ";
        // line 25
        echo twig_include($this->env, $context, "stay/_form.html.twig");
        echo "

                    <button type=\"submit\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stay");
        echo "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-check\"></i>
                        Enregistrer les modifications
                    </button>
                    <div class=\"mt-5 text-center\">
                        
                        <a class=\"btn btn-primary\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stay");
        echo "\">back to list</a>
                        ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)) {
            // line 35
            echo "                        <a class=\"btn btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ads_delete", ["stay" => twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" onclick=\"beforeRemove()\"><i class=\"fas fa-trash\"></i> delete</a>
                        ";
        }
        // line 37
        echo "                    </div>
                </div>
            </div>  
        </div>
        <div class=\"col\">
            <div class=\"card bg-light\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Les réservations</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Date de réservation</th>
                               
                                <th> Premier jour de séjour</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 58, $this->source); })()), "bookings", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 59
            echo "                            <tr>
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                
                                
                                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "bookingDate", [], "any", false, false, false, 63), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "firstDate", [], "any", false, false, false, 64)), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_booking_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-pen\"></i>
                                    </a>
                                </td>
                                 <td>
                                    <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_booking_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"card bg-light mt-5\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Feedbacks</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Author</th>
                                <th>Note</th>
                                <th>Commentaire</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["stay"], "bookings", [], "any", false, false, false, 97));
        foreach ($context['_seq'] as $context["_key"] => $context["stay"]) {
            // line 98
            echo "                            <tr>
                                <td>id comment</td>
                                <td>author</td>
                                <td>note</td>
                                <td>content</td>
                                <td>
                                    <a href=\"#\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-pen\"></i>
                                    </a>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block__ad_images_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_widget"));

        // line 123
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block__ad_images_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_entry_row"));

        // line 127
        echo "    <div id=\"block_";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 127, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block__ad_images_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_entry_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ad_images_entry_widget"));

        // line 133
        echo "    <div class=\"row align-items-center mb-3\">
        <div class=\"col-4\">
            ";
        // line 135
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 135, $this->source); })())) {
            // line 136
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 136, $this->source); })()), "url", [], "any", false, false, false, 136), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\">
            ";
        }
        // line 138
        echo "        </div>
        <div class=\"col-6\">
            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "caption", [], "any", false, false, false, 140), 'row');
        echo "
        </div>
        <div class=\"col\">
            <button type=\"button\" class=\"btn btn-danger\" data-action=\"delete\" data-target=\"#block_";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 143, $this->source); })()), "html", null, true);
        echo "\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 150
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 151
        echo "
    <script>
        \$(document).ready(function() {
            \$('[data-action=\"delete\"]').on('click', function(){
                const target = this.dataset.target;
                \$(target).remove();
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stay/Adminedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 151,  377 => 150,  361 => 143,  355 => 140,  351 => 138,  345 => 136,  343 => 135,  339 => 133,  329 => 132,  316 => 128,  311 => 127,  301 => 126,  288 => 123,  278 => 122,  264 => 117,  255 => 110,  238 => 98,  234 => 97,  212 => 77,  200 => 71,  192 => 66,  187 => 64,  183 => 63,  177 => 60,  174 => 59,  170 => 58,  147 => 37,  141 => 35,  139 => 34,  135 => 33,  126 => 27,  121 => 25,  108 => 15,  103 => 13,  96 => 8,  86 => 7,  66 => 3,  55 => 1,  53 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Modification de l'annonce numéro {{stay.id}}{% endblock %}

{% form_theme form _self %}

{% block body %}

<div class=\"container\">
</br>


    <h1 class=\"my-5\">Modification du stay numéro {{stay.id}}</h1>
    
    {{ form_start(form) }}
     

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card bg-light\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Corriger l'annonce ?</h4>
                </div>
                <div class=\"card-body\">
                   {{ include('stay/_form.html.twig')}}

                    <button type=\"submit\" href=\"{{ path('app_admin_stay') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-check\"></i>
                        Enregistrer les modifications
                    </button>
                    <div class=\"mt-5 text-center\">
                        
                        <a class=\"btn btn-primary\" href=\"{{ path('app_admin_stay') }}\">back to list</a>
                        {% if stay.id %}
                        <a class=\"btn btn-danger\" href=\"{{path('admin_ads_delete',{'stay': stay.id})}}\" onclick=\"beforeRemove()\"><i class=\"fas fa-trash\"></i> delete</a>
                        {% endif %}
                    </div>
                </div>
            </div>  
        </div>
        <div class=\"col\">
            <div class=\"card bg-light\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Les réservations</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Date de réservation</th>
                               
                                <th> Premier jour de séjour</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for booking in stay.bookings %}
                            <tr>
                                <td>{{booking.id}}</td>
                                
                                
                                <td>{{booking.bookingDate | date('d/m/Y H:i')}}</td>
                                <td>{{booking.firstDate | date}}</td>
                                <td>
                                    <a href=\"{{ path('app_admin_booking_edit', {'id': booking.id}) }}\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-pen\"></i>
                                    </a>
                                </td>
                                 <td>
                                    <a href=\"{{ path('app_admin_booking_delete', {'id': booking.id}) }}\" class=\"btn btn-danger\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"card bg-light mt-5\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Feedbacks</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Author</th>
                                <th>Note</th>
                                <th>Commentaire</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for stay in stay.bookings %}
                            <tr>
                                <td>id comment</td>
                                <td>author</td>
                                <td>note</td>
                                <td>content</td>
                                <td>
                                    <a href=\"#\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-pen\"></i>
                                    </a>
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{ form_end(form) }}
</div>

{% endblock %}

{% block _ad_images_widget %}
    {{ form_widget(form) }}
{% endblock %}

{% block _ad_images_entry_row %}
    <div id=\"block_{{id}}\">
        {{ form_widget(form) }}
    </div>
{% endblock %}

{% block _ad_images_entry_widget %}
    <div class=\"row align-items-center mb-3\">
        <div class=\"col-4\">
            {% if value %}
                <img src=\"{{value.url}}\" class=\"img-fluid\" alt=\"\">
            {% endif %}
        </div>
        <div class=\"col-6\">
            {{ form_row(form.caption) }}
        </div>
        <div class=\"col\">
            <button type=\"button\" class=\"btn btn-danger\" data-action=\"delete\" data-target=\"#block_{{id}}\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </div>
    </div>
{% endblock %}

{% block javascripts %}

    <script>
        \$(document).ready(function() {
            \$('[data-action=\"delete\"]').on('click', function(){
                const target = this.dataset.target;
                \$(target).remove();
            });
        });
    </script>

{% endblock %}", "stay/Adminedit.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\stay\\Adminedit.html.twig");
    }
}
