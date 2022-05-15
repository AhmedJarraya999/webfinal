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

/* profile/myprof.html.twig */
class __TwigTemplate_d69d43d240c0ce06154f1dcc40dd0e8fb3f94309d480c74b198fc94d52613d78 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myprof.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myprof.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/myprof.html.twig", 1);
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

        echo "Page de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "firstname", [], "any", false, false, false, 3), "html", null, true);
        
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
     <div class=\"container rounded bg-white mt-5 mb-5\" >
     
        <div class=\"row\" >
            <div class=\"col-md-3 border-right\">
                <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
                    <img class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
                    <span class=\"font-weight-bold\">";
        // line 13
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "firstname", [], "any", false, false, false, 13) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "lastname", [], "any", false, false, false, 13)), "html", null, true);
        echo "</span>
                    <span class=\"text-black-50\"> Email : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "</span>
                    <span> Username : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), "html", null, true);
        echo " </span>
                    <span> Mobile phone : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "phone", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
                    <span class=\"labels\"></br><p>Introduction</p> <p> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "introduction", [], "any", false, false, false, 17), "html", null, true);
        echo " </p> </span>
                    ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18) == twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)))) {
            // line 19
            echo "                    <span><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_profile");
            echo "\" class=\"btn btn-primary mr-2 mb-2\">Edit</a></span>
                    ";
        }
        // line 21
        echo "                </div>
            </div>
        
            <div class=\"col-md-9 border-right\">
                <div class=\"p-3 py-5\">
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_HOST")) {
            // line 28
            echo "                        <span class=\"badge badge-primary\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "stays", [], "any", false, false, false, 28)), "html", null, true);
            echo " annonces</span>
                        <span class=\"badge badge-primary\">";
            // line 29
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "experiences", [], "any", false, false, false, 29)), "html", null, true);
            echo " experiences</span>
                        ";
        }
        // line 31
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUEST")) {
            // line 32
            echo "                        <span class=\"badge badge-primary\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "bookings", [], "any", false, false, false, 32)), "html", null, true);
            echo " réservations</span>
                        <span class=\"badge badge-primary\">";
            // line 33
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "experiences", [], "any", false, false, false, 33)), "html", null, true);
            echo " experiences</span>
                        ";
        }
        // line 35
        echo "                    </div>
                    <hr />
                    <div class=\"row mt-3\">
                        <div class=\"col-md-12\">
                            ";
        // line 39
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "stays", [], "any", false, false, false, 39)) > 0)) {
            // line 40
            echo "                                  <h3>list of stays from user <strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "firstname", [], "any", false, false, false, 40), "html", null, true);
            echo "</strong></h3>
                                </br>
                                <div class=\"row\" style=\"display: flex;align-items: center;\">
                                
                                </br>
                                </br>
                                </br>
                                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "stays", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["stay"]) {
                // line 48
                echo "</br>

<div class=\"col-md-4\">
    <div class=\"card bg-light mb-3\">
        <div class=\"card-header text-center\">
                <small>Pas encore noté</small>
        </div>
        
        
            <img  src=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["stay"], "photo", [], "any", false, false, false, 57))), "html", null, true);
                echo "\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\"> </img>
        </a>

        <div class=\"card-body\">
            <h4 class=\"card-title\">
              
            </h4>
            <p class=\"card-text\">
              Capacity:  ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "capacity", [], "any", false, false, false, 65), "html", null, true);
                echo "
            </p>
            <p class=\"card-text\">
              Start avaliability:  ";
                // line 68
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "startdateav", [], "any", false, false, false, 68)), "html", null, true);
                echo "
            </p>
            <p class=\"card-text\">
              End availability:  ";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "enddateav", [], "any", false, false, false, 71)), "html", null, true);
                echo "
            </p>
            ";
                // line 73
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stay"], "users", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73)))) {
                    // line 74
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_show", ["id" => twig_get_attribute($this->env, $this->source, $context["stay"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                    echo "}\"   class=\"btn btn-primary float-right\">  More Details !!!!</a>
";
                }
                // line 76
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76) == twig_get_attribute($this->env, $this->source, $context["stay"], "users", [], "any", false, false, false, 76)))) {
                    // line 77
                    echo "               </br>
               </br>
                <a href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["stay"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                    echo "\" class=\"btn btn-secondary\">Modifiy my stay! </a>
            ";
                }
                // line 81
                echo "        </div>
    </div>
</div>                       
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stay'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo " </div>
  </br>
                                <h3>list of experiences from user <strong> ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "firstname", [], "any", false, false, false, 87), "html", null, true);
            echo "</strong></h3>
                                <div class=\"row\" style=\"display: flex;align-items: center;background-color:white;\">
                                  
                                    ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "experiences", [], "any", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
                // line 91
                echo "                                    <div class=\"col-md-4\">
                                    <div class=\"card bg-light mb-3\">
                                     <div class=\"card-body\">
                                       <h4 class=\"card-title\"><a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experience_show_front-details", ["id" => twig_get_attribute($this->env, $this->source, $context["experience"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "title", [], "any", false, false, false, 94), "html", null, true);
                echo "</a> </h4>
                                     
                                        <span> Published : ";
                // line 96
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "date", [], "any", false, false, false, 96), "Y-m-d"), "html", null, true);
                echo " </span>
                                        </br>
                                        <span> Number of likes : ";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "likes", [], "any", false, false, false, 98), "html", null, true);
                echo " </span>
                                        
                                     
                                     </div>
                                     </div>
                                     </div>

                                     </br>
                                
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                                </div>



                            ";
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 112
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 112, $this->source); })()), "bookings", [], "any", false, false, false, 112)) > 0)) {
            echo "    
                             <h3>List of bookings from user<strong> ";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "firstname", [], "any", false, false, false, 113), "html", null, true);
            echo "</strong></h3>
                                <div class=\"row\" style=\"display: flex;align-items: center;background-color:white;\">
                                  
                                    ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 116, $this->source); })()), "bookings", [], "any", false, false, false, 116));
            foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
                // line 117
                echo "                                    <div class=\"col-md-4\">
                                    <div class=\"card bg-light mb-3\">
                                     <div class=\"card-body\">
                                       <h4 class=\"card-title\"><a href=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_show", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 120)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 120), "html", null, true);
                echo "</a> </h4>
                                     
                                        <span> Start At : ";
                // line 122
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "firstDate", [], "any", false, false, false, 122), "Y-m-d"), "html", null, true);
                echo " </span>
                                        </br>
                                        <span> End At : ";
                // line 124
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "endDate", [], "any", false, false, false, 124), "Y-m-d"), "html", null, true);
                echo " </span>
                                        
                                     
                                     </div>
                                     </div>
                                     </div>

                                     </br>
                                
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                                </div>
                                </br>
                                <h3>list of experiences from user <strong> ";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "firstname", [], "any", false, false, false, 136), "html", null, true);
            echo "</strong></h3>
                                <div class=\"row\" style=\"display: flex;align-items: center;background-color:white;\">
                                  
                                    ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "experiences", [], "any", false, false, false, 139));
            foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
                // line 140
                echo "                                    <div class=\"col-md-4\">
                                    <div class=\"card bg-light mb-3\">
                                     <div class=\"card-body\">
                                       <h4 class=\"card-title\"><a href=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experience_show_front-details", ["id" => twig_get_attribute($this->env, $this->source, $context["experience"], "id", [], "any", false, false, false, 143)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "title", [], "any", false, false, false, 143), "html", null, true);
                echo "</a> </h4>
                                     
                                        <span> Published : ";
                // line 145
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "date", [], "any", false, false, false, 145), "Y-m-d"), "html", null, true);
                echo " </span>
                                        </br>
                                        <span> Number of likes  : ";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience"], "likes", [], "any", false, false, false, 147), "html", null, true);
                echo " </span>
                                        
                                     
                                     </div>
                                     </div>
                                     </div>

                                     </br>
                                
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                                </div>
                            ";
        } else {
            // line 159
            echo "                                <div class=\"alert alert-warning\">
                                    
                                        ";
            // line 161
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_HOST")) {
                // line 162
                echo "                                        <p><strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })()), "firstname", [], "any", false, false, false, 162), "html", null, true);
                echo "</strong> n'a pas encore d'annonce sur le site !</p>
                                         </br>
                                         
                                        <p> <strong>";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 165, $this->source); })()), "firstname", [], "any", false, false, false, 165), "html", null, true);
                echo "</strong> n'a pas encore publié aucune experience sur le site !</p>
                                        ";
            }
            // line 167
            echo "                                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUEST")) {
                // line 168
                echo "                                        <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 168, $this->source); })()), "firstname", [], "any", false, false, false, 168), "html", null, true);
                echo "</strong> n'a pas encore de réservations sur le site !
                                    
                                              </br>
                                         </br>
                                        <p> <strong>";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 172, $this->source); })()), "firstname", [], "any", false, false, false, 172), "html", null, true);
                echo "</strong> n'a pas encore publié aucune experience sur le site !</p>
                                        ";
            }
            // line 174
            echo "                                  
                                </div>
                            ";
        }
        // line 177
        echo "                        </div>  
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
        return "profile/myprof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 177,  435 => 174,  430 => 172,  422 => 168,  419 => 167,  414 => 165,  407 => 162,  405 => 161,  401 => 159,  397 => 157,  381 => 147,  376 => 145,  369 => 143,  364 => 140,  360 => 139,  354 => 136,  350 => 134,  334 => 124,  329 => 122,  322 => 120,  317 => 117,  313 => 116,  307 => 113,  303 => 112,  297 => 108,  281 => 98,  276 => 96,  269 => 94,  264 => 91,  260 => 90,  254 => 87,  250 => 85,  241 => 81,  236 => 79,  232 => 77,  229 => 76,  223 => 74,  221 => 73,  216 => 71,  210 => 68,  204 => 65,  193 => 57,  182 => 48,  178 => 47,  167 => 40,  165 => 39,  159 => 35,  154 => 33,  149 => 32,  146 => 31,  141 => 29,  136 => 28,  134 => 27,  126 => 21,  120 => 19,  118 => 18,  114 => 17,  110 => 16,  106 => 15,  102 => 14,  98 => 13,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page de {{user.firstname}}{% endblock %}

{% block body %}

     <div class=\"container rounded bg-white mt-5 mb-5\" >
     
        <div class=\"row\" >
            <div class=\"col-md-3 border-right\">
                <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\">
                    <img class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\" />
                    <span class=\"font-weight-bold\">{{ user.firstname ~ ' ' ~ user.lastname }}</span>
                    <span class=\"text-black-50\"> Email : {{ user.email }}</span>
                    <span> Username : {{ user.username }} </span>
                    <span> Mobile phone : {{ user.phone }}</span>
                    <span class=\"labels\"></br><p>Introduction</p> <p> {{ user.introduction }} </p> </span>
                    {% if app.user and app.user.id == user.id %}
                    <span><a href=\"{{ path('update_profile') }}\" class=\"btn btn-primary mr-2 mb-2\">Edit</a></span>
                    {% endif %}
                </div>
            </div>
        
            <div class=\"col-md-9 border-right\">
                <div class=\"p-3 py-5\">
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        {% if is_granted('ROLE_HOST') %}
                        <span class=\"badge badge-primary\">{{user.stays | length}} annonces</span>
                        <span class=\"badge badge-primary\">{{user.experiences | length}} experiences</span>
                        {% endif %}
                        {% if is_granted('ROLE_GUEST') %}
                        <span class=\"badge badge-primary\">{{user.bookings | length}} réservations</span>
                        <span class=\"badge badge-primary\">{{user.experiences | length}} experiences</span>
                        {% endif %}
                    </div>
                    <hr />
                    <div class=\"row mt-3\">
                        <div class=\"col-md-12\">
                            {% if user.stays | length > 0 %}
                                  <h3>list of stays from user <strong> {{user.firstname}}</strong></h3>
                                </br>
                                <div class=\"row\" style=\"display: flex;align-items: center;\">
                                
                                </br>
                                </br>
                                </br>
                                    {% for stay in user.stays %}
</br>

<div class=\"col-md-4\">
    <div class=\"card bg-light mb-3\">
        <div class=\"card-header text-center\">
                <small>Pas encore noté</small>
        </div>
        
        
            <img  src=\"{{ asset('uploads/'~stay.photo) }}\" alt=\"Image de l'appartement\" style=\"height: 200px; width: 100%; display: block\"> </img>
        </a>

        <div class=\"card-body\">
            <h4 class=\"card-title\">
              
            </h4>
            <p class=\"card-text\">
              Capacity:  {{ stay.capacity }}
            </p>
            <p class=\"card-text\">
              Start avaliability:  {{ stay.startdateav | date }}
            </p>
            <p class=\"card-text\">
              End availability:  {{ stay.enddateav | date }}
            </p>
            {% if app.user and app.user.id == stay.users.id %}
            <a href=\"{{ path('app_stay_show',  {'id': stay.id}) }}}\"   class=\"btn btn-primary float-right\">  More Details !!!!</a>
{% endif %}
            {% if app.user and app.user == stay.users %}
               </br>
               </br>
                <a href=\"{{ path('app_stay_edit', {'id': stay.id}) }}\" class=\"btn btn-secondary\">Modifiy my stay! </a>
            {% endif %}
        </div>
    </div>
</div>                       
  {% endfor %}
 </div>
  </br>
                                <h3>list of experiences from user <strong> {{user.firstname}}</strong></h3>
                                <div class=\"row\" style=\"display: flex;align-items: center;background-color:white;\">
                                  
                                    {% for experience in user.experiences %}
                                    <div class=\"col-md-4\">
                                    <div class=\"card bg-light mb-3\">
                                     <div class=\"card-body\">
                                       <h4 class=\"card-title\"><a href=\"{{ path('app_experience_show_front-details',  {'id': experience.id}) }}\"> {{ experience.title }}</a> </h4>
                                     
                                        <span> Published : {{ experience.date |date('Y-m-d') }} </span>
                                        </br>
                                        <span> Number of likes : {{experience.likes}} </span>
                                        
                                     
                                     </div>
                                     </div>
                                     </div>

                                     </br>
                                
                                    {% endfor %}
                                </div>



                            {% elseif user.bookings | length > 0 %}    
                             <h3>List of bookings from user<strong> {{user.firstname}}</strong></h3>
                                <div class=\"row\" style=\"display: flex;align-items: center;background-color:white;\">
                                  
                                    {% for booking in user.bookings %}
                                    <div class=\"col-md-4\">
                                    <div class=\"card bg-light mb-3\">
                                     <div class=\"card-body\">
                                       <h4 class=\"card-title\"><a href=\"{{ path('app_booking_show',  {'id': booking.id}) }}\"> {{ booking.id }}</a> </h4>
                                     
                                        <span> Start At : {{ booking.firstDate |date('Y-m-d') }} </span>
                                        </br>
                                        <span> End At : {{ booking.endDate |date('Y-m-d') }} </span>
                                        
                                     
                                     </div>
                                     </div>
                                     </div>

                                     </br>
                                
                                    {% endfor %}
                                </div>
                                </br>
                                <h3>list of experiences from user <strong> {{user.firstname}}</strong></h3>
                                <div class=\"row\" style=\"display: flex;align-items: center;background-color:white;\">
                                  
                                    {% for experience in user.experiences %}
                                    <div class=\"col-md-4\">
                                    <div class=\"card bg-light mb-3\">
                                     <div class=\"card-body\">
                                       <h4 class=\"card-title\"><a href=\"{{ path('app_experience_show_front-details',  {'id': experience.id}) }}\"> {{ experience.title }}</a> </h4>
                                     
                                        <span> Published : {{ experience.date |date('Y-m-d') }} </span>
                                        </br>
                                        <span> Number of likes  : {{experience.likes}} </span>
                                        
                                     
                                     </div>
                                     </div>
                                     </div>

                                     </br>
                                
                                    {% endfor %}
                                </div>
                            {% else %}
                                <div class=\"alert alert-warning\">
                                    
                                        {% if is_granted('ROLE_HOST') %}
                                        <p><strong>{{user.firstname}}</strong> n'a pas encore d'annonce sur le site !</p>
                                         </br>
                                         
                                        <p> <strong>{{user.firstname}}</strong> n'a pas encore publié aucune experience sur le site !</p>
                                        {% endif %}
                                        {% if is_granted('ROLE_GUEST') %}
                                        <strong>{{user.firstname}}</strong> n'a pas encore de réservations sur le site !
                                    
                                              </br>
                                         </br>
                                        <p> <strong>{{user.firstname}}</strong> n'a pas encore publié aucune experience sur le site !</p>
                                        {% endif %}
                                  
                                </div>
                            {% endif %}
                        </div>  
                    </div>
                </div>
            </div>
            
        </div>
    </div>

{% endblock %}", "profile/myprof.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\profile\\myprof.html.twig");
    }
}
