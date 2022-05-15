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

/* baseAdmin.html.twig */
class __TwigTemplate_2540db408f9545cb6fcd9fa227da683482cc73bb5d86a9ea8da33d18b6b0eac6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'styles' => [$this, 'block_styles'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <!-- Requiblack meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>Skydash Admin</title>
        <!-- plugins:css -->
        <link rel=\"stylesheet\" href=\"/back/vendors/feather/feather.css\">
        <link rel=\"stylesheet\" href=\"/back/vendors/ti-icons/css/themify-icons.css\">
        <link rel=\"stylesheet\" href=\"/back/vendors/css/vendor.bundle.base.css\">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel=\"stylesheet\" href=\"/back/vendors/datatables.net-bs4/dataTables.bootstrap4.css\"> <link rel=\"stylesheet\" href=\"/back/vendors/ti-icons/css/themify-icons.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/back/js/select.dataTables.min.css\">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link
        rel=\"stylesheet\" href=\"/back/css/vertical-layout-light/style.css\"> <!-- endinject -->
        <link rel=\"shortcut icon\" href=\"/back/images/favicon.png\"/>
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\"> ";
        // line 24
        $this->displayBlock('styles', $context, $blocks);
        // line 25
        echo "        </head>
        <body>
            <div
                class=\"container-scroller\">
                <!-- partial:partials/_navbar.html -->
                <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
                    <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
                        <a class=\"navbar-brand brand-logo mr-5\" href=\"index.html\"><img src=\"/back/images/logo.svg\" class=\"mr-2\" alt=\"logo\"/></a>
                        <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"/back/images/logo-mini.svg\" alt=\"logo\"/></a>
                    </div>
                    <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
                        <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                            <span class=\"icon-menu\"></span>
                        </button>
                        <ul class=\"navbar-nav mr-lg-2\">
                            <li class=\"nav-item active\">
                                <a style=\"margin:40px\" class=\" nav-link\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">
                                    <i class=\"fas fa-chart-line\"></i>
                                    Dashboard
                                    <span class=\"sr-only\">(current)</span>
                                </a>
                            </li>
                            <li class=\"nav-item\" style=\"margin:30px\">
                                <div>
                                    ";
        // line 50
        echo "                                    <a class=\"nav-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">
                                        <i class=\"fas fa-users\"></i>
                                        Users</a>
                                </div>
                            </li>
                            <li class=\"nav-item\" style=\"margin:30px\">
                                <a class=\"nav-link\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stay");
        echo "\">
                                    <i class=\"fas fa-hotel\"></i>
                                    Stays</a>
                            </li>
                            <li class=\"nav-item\" style=\"margin:30px\">
                                <a class=\"nav-link\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_booking");
        echo "\">
                                    <i class=\"fas fa-folder\"></i>
                                    Bookings</a>
                            </li>

                            <li class=\"nav-item\" style=\"margin:30px\">
                                <a class=\"nav-link\" href=\"#\">
                                    <i class=\"fa-regular fa-star-sharp\"></i>
                                    Feedbacks</a>
                            </li>
                            <li class=\"nav-item\" style=\"margin:30px\">
                                <a class=\"nav-link\" href=\"#\">
                                    <i class=\"fa fa-slideshare\"></i>
                                    Experiences
                                </a>
                            </li>

                            <li class=\"nav-item\" style=\"margin:40px\">
                                <a class=\"nav-link\" href=\"#\">
                                    <i class=\"fas fa-comments\"></i>
                                    Comments</a>
                            </li>
                            <li class=\"nav-item\" style=\"margin:40px\">
                                <a class=\"nav-link\" href=\"#\">
                                    <i class=\"fa-regular fa-poo\"></i>
                                    Reclamations</a>
                            </li>

                        </ul>
                        <ul class=\"navbar-nav navbar-nav-right\">
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                                    <i class=\"icon-bell mx-0\"></i>
                                    <span class=\"count\"></span>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                                    <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
                                    <a class=\"dropdown-item preview-item\">
                                        <div class=\"preview-thumbnail\">
                                            <div class=\"preview-icon bg-success\">
                                                <i class=\"ti-info-alt mx-0\"></i>
                                            </div>
                                        </div>
                                        <div class=\"preview-item-content\">
                                            <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                                            <p class=\"font-weight-light small-text mb-0 text-muted\">
                                                Just now
                                            </p>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item preview-item\">
                                        <div class=\"preview-thumbnail\">
                                            <div class=\"preview-icon bg-warning\">
                                                <i class=\"ti-settings mx-0\"></i>
                                            </div>
                                        </div>
                                        <div class=\"preview-item-content\">
                                            <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                                            <p class=\"font-weight-light small-text mb-0 text-muted\">
                                                Private message
                                            </p>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item preview-item\">
                                        <div class=\"preview-thumbnail\">
                                            <div class=\"preview-icon bg-info\">
                                                <i class=\"ti-user mx-0\"></i>
                                            </div>
                                        </div>
                                        <div class=\"preview-item-content\">
                                            <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                                            <p class=\"font-weight-light small-text mb-0 text-muted\">
                                                2 days ago
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class=\"nav-item nav-profile dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
                                    <img src=\"images/faces/face28.jpg\" alt=\"profile\"/>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile");
        echo "\">
                                        <i class=\"ti-settings text-primary\"></i>
                                        Settings
                                    </a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                                        <i class=\"ti-power-off text-primary\"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                            <li class=\"nav-item nav-settings d-none d-lg-flex\">
                                <a class=\"nav-link\" href=\"#\">
                                    <i class=\"icon-ellipsis\"></i>
                                </a>
                            </li>
                        </ul>
                        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                            <span class=\"icon-menu\"></span>
                        </button>
                    </div>
                </nav>
                <!-- partial -->
                <div class=\"row\">
                    ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "session", [], "any", false, false, false, 167), "flashbag", [], "any", false, false, false, 167), "all", [], "any", false, false, false, 167));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 168
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 169
                echo "                          ";
                if (($context["label"] == "success")) {
                    // line 170
                    echo "                              <div class=\"alert alert-success alert-dismissible fade show\" style=\"position: absolute; bottom: 1%; left: 1%\">
                                  ";
                    // line 171
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo "
                              </div>
                          ";
                } elseif ((                // line 173
$context["label"] == "error")) {
                    // line 174
                    echo "                              <div class=\"alert alert-danger alert-dismissible fade show\" style=\"position: absolute; bottom: 1%; left: 1%\">
                                  ";
                    // line 175
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo "
                              </div>
                          ";
                } elseif ((                // line 177
$context["label"] == "warning")) {
                    // line 178
                    echo "                              <div class=\"alert alert-warning alert-dismissible fade show\" style=\"position: absolute; bottom: 1%; left: 1%\">
                                  ";
                    // line 179
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo "
                              </div>    
                          ";
                }
                // line 182
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "                </div>

                ";
        // line 186
        $this->displayBlock('body', $context, $blocks);
        // line 187
        echo "                <!-- plugins:js -->
                <script src=\"/back/vendors/js/vendor.bundle.base.js\"></script>
                <!-- endinject -->
                <!-- Plugin js for this page -->
                <script src=\"/back/vendors/chart.js/Chart.min.js\"></script>
                <script src=\"/back/vendors/datatables.net/jquery.dataTables.js\"></script>
                <script src=\"/back/vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script>
                <script src=\"/back/js/dataTables.select.min.js\"></script>

                <!-- End plugin js for this page -->
                <!-- inject:js -->
                <script src=\"/back/js/off-canvas.js\"></script>
                <script src=\"/back/js/hoverable-collapse.js\"></script>
                <script src=\"/back/js/template.js\"></script>
                <script src=\"/back/js/settings.js\"></script>
                <script src=\"/back/js/todolist.js\"></script>
                <!-- endinject -->
                <!-- Custom js for this page-->
                <script src=\"/back/js/dashboard.js\"></script>
                <script src=\"/back/js/Chart.roundedBarCharts.js\"></script>
                <!-- End custom js for this page-->
                <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
                <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/app.js"), "html", null, true);
        echo "\"></script>
                <script>
                  \$(document).ready(function(e){
                    setTimeout( () => {
                      \$('.alert-dismissible').toggleClass('show', 'hide');
                    }, 5000);
                  });
                  
                </script>
                ";
        // line 219
        $this->displayBlock('js', $context, $blocks);
        // line 220
        echo "            </body>
        </body>
    </html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 219
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 219,  367 => 186,  349 => 24,  336 => 220,  334 => 219,  322 => 210,  297 => 187,  295 => 186,  291 => 184,  285 => 183,  279 => 182,  273 => 179,  270 => 178,  268 => 177,  263 => 175,  260 => 174,  258 => 173,  253 => 171,  250 => 170,  247 => 169,  242 => 168,  238 => 167,  216 => 148,  209 => 144,  123 => 61,  115 => 56,  105 => 50,  94 => 41,  76 => 25,  74 => 24,  70 => 23,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <!-- Requiblack meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>Skydash Admin</title>
        <!-- plugins:css -->
        <link rel=\"stylesheet\" href=\"/back/vendors/feather/feather.css\">
        <link rel=\"stylesheet\" href=\"/back/vendors/ti-icons/css/themify-icons.css\">
        <link rel=\"stylesheet\" href=\"/back/vendors/css/vendor.bundle.base.css\">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel=\"stylesheet\" href=\"/back/vendors/datatables.net-bs4/dataTables.bootstrap4.css\"> <link rel=\"stylesheet\" href=\"/back/vendors/ti-icons/css/themify-icons.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/back/js/select.dataTables.min.css\">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link
        rel=\"stylesheet\" href=\"/back/css/vertical-layout-light/style.css\"> <!-- endinject -->
        <link rel=\"shortcut icon\" href=\"/back/images/favicon.png\"/>
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\"> {% block styles %}{% endblock %}
        </head>
        <body>
            <div
                class=\"container-scroller\">
                <!-- partial:partials/_navbar.html -->
                <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
                    <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
                        <a class=\"navbar-brand brand-logo mr-5\" href=\"index.html\"><img src=\"/back/images/logo.svg\" class=\"mr-2\" alt=\"logo\"/></a>
                        <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"/back/images/logo-mini.svg\" alt=\"logo\"/></a>
                    </div>
                    <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
                        <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                            <span class=\"icon-menu\"></span>
                        </button>
                        <ul class=\"navbar-nav mr-lg-2\">
                            <li class=\"nav-item active\">
                                <a style=\"margin:40px\" class=\" nav-link\" href=\"{{ path('admin_dashboard') }}\">
                                    <i class=\"fas fa-chart-line\"></i>
                                    Dashboard
                                    <span class=\"sr-only\">(current)</span>
                                </a>
                            </li>
                            <li class=\"nav-item\" style=\"margin:30px\">
                                <div>
                                    {#<img class=\"icon\"   src=\"/back/images/auth/group.png\" alt=\"profile\"/>#}
                                    <a class=\"nav-link\" href=\"{{ path('app_user_index') }}\">
                                        <i class=\"fas fa-users\"></i>
                                        Users</a>
                                </div>
                            </li>
                            <li class=\"nav-item\" style=\"margin:30px\">
                                <a class=\"nav-link\" href=\"{{ path('app_admin_stay') }}\">
                                    <i class=\"fas fa-hotel\"></i>
                                    Stays</a>
                            </li>
                            <li class=\"nav-item\" style=\"margin:30px\">
                                <a class=\"nav-link\" href=\"{{ path('app_admin_booking') }}\">
                                    <i class=\"fas fa-folder\"></i>
                                    Bookings</a>
                            </li>

                            <li class=\"nav-item\" style=\"margin:30px\">
                                <a class=\"nav-link\" href=\"#\">
                                    <i class=\"fa-regular fa-star-sharp\"></i>
                                    Feedbacks</a>
                            </li>
                            <li class=\"nav-item\" style=\"margin:30px\">
                                <a class=\"nav-link\" href=\"#\">
                                    <i class=\"fa fa-slideshare\"></i>
                                    Experiences
                                </a>
                            </li>

                            <li class=\"nav-item\" style=\"margin:40px\">
                                <a class=\"nav-link\" href=\"#\">
                                    <i class=\"fas fa-comments\"></i>
                                    Comments</a>
                            </li>
                            <li class=\"nav-item\" style=\"margin:40px\">
                                <a class=\"nav-link\" href=\"#\">
                                    <i class=\"fa-regular fa-poo\"></i>
                                    Reclamations</a>
                            </li>

                        </ul>
                        <ul class=\"navbar-nav navbar-nav-right\">
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                                    <i class=\"icon-bell mx-0\"></i>
                                    <span class=\"count\"></span>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                                    <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
                                    <a class=\"dropdown-item preview-item\">
                                        <div class=\"preview-thumbnail\">
                                            <div class=\"preview-icon bg-success\">
                                                <i class=\"ti-info-alt mx-0\"></i>
                                            </div>
                                        </div>
                                        <div class=\"preview-item-content\">
                                            <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                                            <p class=\"font-weight-light small-text mb-0 text-muted\">
                                                Just now
                                            </p>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item preview-item\">
                                        <div class=\"preview-thumbnail\">
                                            <div class=\"preview-icon bg-warning\">
                                                <i class=\"ti-settings mx-0\"></i>
                                            </div>
                                        </div>
                                        <div class=\"preview-item-content\">
                                            <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                                            <p class=\"font-weight-light small-text mb-0 text-muted\">
                                                Private message
                                            </p>
                                        </div>
                                    </a>
                                    <a class=\"dropdown-item preview-item\">
                                        <div class=\"preview-thumbnail\">
                                            <div class=\"preview-icon bg-info\">
                                                <i class=\"ti-user mx-0\"></i>
                                            </div>
                                        </div>
                                        <div class=\"preview-item-content\">
                                            <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                                            <p class=\"font-weight-light small-text mb-0 text-muted\">
                                                2 days ago
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class=\"nav-item nav-profile dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
                                    <img src=\"images/faces/face28.jpg\" alt=\"profile\"/>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                                    <a class=\"dropdown-item\" href=\"{{ path('admin_profile') }}\">
                                        <i class=\"ti-settings text-primary\"></i>
                                        Settings
                                    </a>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                                        <i class=\"ti-power-off text-primary\"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                            <li class=\"nav-item nav-settings d-none d-lg-flex\">
                                <a class=\"nav-link\" href=\"#\">
                                    <i class=\"icon-ellipsis\"></i>
                                </a>
                            </li>
                        </ul>
                        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                            <span class=\"icon-menu\"></span>
                        </button>
                    </div>
                </nav>
                <!-- partial -->
                <div class=\"row\">
                    {% for label, flashes in app.session.flashbag.all %}
                      {% for flash in flashes %}
                          {% if ( label == 'success' ) %}
                              <div class=\"alert alert-success alert-dismissible fade show\" style=\"position: absolute; bottom: 1%; left: 1%\">
                                  {{ flash }}
                              </div>
                          {% elseif ( label == 'error' ) %}
                              <div class=\"alert alert-danger alert-dismissible fade show\" style=\"position: absolute; bottom: 1%; left: 1%\">
                                  {{ flash }}
                              </div>
                          {% elseif ( label == 'warning' ) %}
                              <div class=\"alert alert-warning alert-dismissible fade show\" style=\"position: absolute; bottom: 1%; left: 1%\">
                                  {{ flash }}
                              </div>    
                          {% endif %}
                      {% endfor %}
                  {% endfor %}
                </div>

                {% block body %}{% endblock %}
                <!-- plugins:js -->
                <script src=\"/back/vendors/js/vendor.bundle.base.js\"></script>
                <!-- endinject -->
                <!-- Plugin js for this page -->
                <script src=\"/back/vendors/chart.js/Chart.min.js\"></script>
                <script src=\"/back/vendors/datatables.net/jquery.dataTables.js\"></script>
                <script src=\"/back/vendors/datatables.net-bs4/dataTables.bootstrap4.js\"></script>
                <script src=\"/back/js/dataTables.select.min.js\"></script>

                <!-- End plugin js for this page -->
                <!-- inject:js -->
                <script src=\"/back/js/off-canvas.js\"></script>
                <script src=\"/back/js/hoverable-collapse.js\"></script>
                <script src=\"/back/js/template.js\"></script>
                <script src=\"/back/js/settings.js\"></script>
                <script src=\"/back/js/todolist.js\"></script>
                <!-- endinject -->
                <!-- Custom js for this page-->
                <script src=\"/back/js/dashboard.js\"></script>
                <script src=\"/back/js/Chart.roundedBarCharts.js\"></script>
                <!-- End custom js for this page-->
                <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
                <script src=\"{{ asset('build/js/app.js') }}\"></script>
                <script>
                  \$(document).ready(function(e){
                    setTimeout( () => {
                      \$('.alert-dismissible').toggleClass('show', 'hide');
                    }, 5000);
                  });
                  
                </script>
                {% block js %}{% endblock %}
            </body>
        </body>
    </html>
", "baseAdmin.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\baseAdmin.html.twig");
    }
}
