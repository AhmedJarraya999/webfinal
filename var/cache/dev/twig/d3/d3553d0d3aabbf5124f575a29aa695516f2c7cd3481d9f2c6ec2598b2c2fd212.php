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

/* base.html.twig */
class __TwigTemplate_73a16cdcd4de02fb88a4b2027971f46f90e2f70a30e649be71563f74d71442dd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

  <head>
    <title>Trips &mdash; Website Template by Colorlib</title>
    <meta charset=\"utf-8\">
    
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"/front/fonts/icomoon/style.css\">

    <link rel=\"stylesheet\" href=\"/front/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/front/css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"/front/css/jquery.fancybox.min.css\">
    <link rel=\"stylesheet\" href=\"/front/css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"/front/css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"/front/fonts/flaticon/font/flaticon.css\">
    <link rel=\"stylesheet\" href=\"/front/css/aos.css\">

    <!-- MAIN CSS -->
    <link rel=\"stylesheet\" href=\"/front/css/style.css\">
    <style>
      .fullWidthForm form {
        width: 100%;
      }
      .fullWidthForm {
        padding: 5%;
      }
    </style>
    ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "  </head>

  <body data-spy=\"scroll\" data-target=\".site-navbar-target\" data-offset=\"300\">

    <div class=\"site-wrap\" id=\"home-section\">

      <div class=\"site-mobile-menu site-navbar-target\">
        <div class=\"site-mobile-menu-header\">
          <div class=\"site-mobile-menu-close mt-3\">
            <span class=\"icon-close2 js-menu-toggle\"></span>
          </div>
        </div>
        <div class=\"site-mobile-menu-body\"></div>
      </div>

      <header class=\"site-navbar site-navbar-target\" role=\"banner\">

        <div class=\"container\">
          <div class=\"row align-items-center position-relative\">

            <div class=\"col-3 \">
              <div class=\"site-logo\">
                <a href=\"index.html\" class=\"font-weight-bold\">
                  <img src=\"/front/images/logo.png\" alt=\"Image\" class=\"img-fluid\">
                </a>
              </div>
            </div>

            <div class=\"col-9  text-right\">
             

              <span class=\"d-inline-block d-lg-none\"><a href=\"#\" class=\"text-white site-menu-toggle js-menu-toggle py-5 text-white\"><span class=\"icon-menu h3 text-white\"></span></a></span>

             

              <nav class=\"site-navigation text-right ml-auto d-none d-lg-block\" role=\"navigation\">
                <ul class=\"site-menu main-menu js-clone-nav ml-auto \">
                  <!-- home page path  -->
                  ";
        // line 75
        if (twig_in_filter("home", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "get", [0 => "_route"], "method", false, false, false, 75))) {
            // line 76
            echo "                    <li class=\"active\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_index");
            echo "\" class=\"nav-link\">Home</a></li> 
                  ";
        } else {
            // line 78
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_index");
            echo "\" class=\"nav-link\">Home</a></li> 
                  ";
        }
        // line 79
        echo "  
                  
                  ";
        // line 81
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_HOST")) {
            // line 82
            echo "                    <!-- new stay path  -->
                    ";
            // line 83
            if (twig_in_filter("app_stay", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "get", [0 => "_route"], "method", false, false, false, 83))) {
                // line 84
                echo "                      <li class=\"active\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_index");
                echo "\" class=\"nav-link\">My Stay</a></li>
                    ";
            } else {
                // line 86
                echo "                      <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_new");
                echo "\" class=\"nav-link\">My Stay</a></li>
                    ";
            }
            // line 88
            echo "                  ";
        }
        // line 89
        echo "
                  ";
        // line 90
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUEST")) {
            // line 91
            echo "                    <!-- booking path -->
                    ";
            // line 92
            if (twig_in_filter("Booking", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "get", [0 => "_route"], "method", false, false, false, 92))) {
                // line 93
                echo "                      <li class=\"active\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MyBookings");
                echo "\" class=\"nav-link\">My Bookings</a></li>
                    ";
            } else {
                // line 95
                echo "                      <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MyBookings");
                echo "\" class=\"nav-link\">My Bookings</a></li>
                    ";
            }
            // line 97
            echo "                  ";
        }
        // line 98
        echo "                  
                  <li ><a href=\"index.html\" class=\"nav-link\">Rankings</a></li>
                  <li ><a href=\"index.html\" class=\"nav-link\">Feedbacks</a></li>

                  ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102)) {
            // line 103
            echo "                  <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
            echo "\" class=\"nav-link\">My Profile</a></li>
                  ";
        }
        // line 105
        echo "                  <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experience_index_front");
        echo "\" class=\"nav-link\">Experiences</a></li>
                 

                  ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108)) {
            // line 109
            echo "                    <li title=\"logout\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                     <img src=\"/icons/logout.svg\"> </a> 
                    </li>
                  ";
        }
        // line 113
        echo "                </ul>
              </nav>
            </div>

           
          </div>
        </div>

      </header>



    <div class=\"ftco-blocks-cover-1\">
      <div class=\"site-section-cover overlay\" style=\"background-image: url('/front/images/hero_3.jpg')\">
         <div class=\"container\">
          <div class=\"row align-items-center\">
            <div >
              <h1 class=\"mb-3 text-white\">Exploring The World In Comfort</h1>
              <p> Star Tours , your guide to find the perfect stay. </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"site-section\" style=\"max-height:10px;\">

      <div class=\"container\">
        <div class=\"row justify-content-center text-center\">
          <div class=\"col-md-7\" >
            <div class=\"heading-39101 mb-5\">
              <span class=\"backdrop text-center\">Journey</span>
              <span class=\"subtitle-39191\">Journey</span>
              <h3>Your Journey Starts Here</h3>
            </div>
          </div>
        </div>
       

      </div>
    </div>
    </div>
    
    ";
        // line 156
        $this->displayBlock('body', $context, $blocks);
        // line 268
        echo "     <footer class=\"site-footer bg-light\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3\">
            <h2 class=\"footer-heading mb-3\">Instagram</h2>
            <div class=\"row\">
              <div class=\"col-4 gal_col\">
                <a href=\"#\"><img src=\"images/insta_1.jpg\" alt=\"Image\" class=\"img-fluid\"></a>
              </div>
              <div class=\"col-4 gal_col\">
                <a href=\"#\"><img src=\"images/insta_2.jpg\" alt=\"Image\" class=\"img-fluid\"></a>
              </div>
              <div class=\"col-4 gal_col\">
                <a href=\"#\"><img src=\"images/insta_3.jpg\" alt=\"Image\" class=\"img-fluid\"></a>
              </div>
              <div class=\"col-4 gal_col\">
                <a href=\"#\"><img src=\"images/insta_4.jpg\" alt=\"Image\" class=\"img-fluid\"></a>
              </div>
              <div class=\"col-4 gal_col\">
                <a href=\"#\"><img src=\"images/insta_5.jpg\" alt=\"Image\" class=\"img-fluid\"></a>
              </div>
              <div class=\"col-4 gal_col\">
                <a href=\"#\"><img src=\"images/insta_6.jpg\" alt=\"Image\" class=\"img-fluid\"></a>
              </div>
            </div>
          </div>
          <div class=\"col-lg-8 ml-auto\">
            <div class=\"row\">
              <div class=\"col-lg-6 ml-auto\">
                <h2 class=\"footer-heading mb-4\">Quick Links</h2>
                <ul class=\"list-unstyled\">
                  <li><a href=\"#\">About Us</a></li>
                  <li><a href=\"#\">Testimonials</a></li>
                  <li><a href=\"#\">Terms of Service</a></li>
                  <li><a href=\"#\">Privacy</a></li>
                  <li><a href=\"#\">Contact Us</a></li>
                </ul>
              </div>
              <div class=\"col-lg-6\">
                <h2 class=\"footer-heading mb-4\">Newsletter</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt odio iure animi ullam quam, deleniti rem!</p>
                <form action=\"#\" class=\"d-flex\" class=\"subscribe\">
                  <input type=\"text\" class=\"form-control mr-3\" placeholder=\"Email\">
                  <input type=\"submit\" value=\"Send\" class=\"btn btn-primary\">
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <div class=\"row pt-5 mt-5 text-center\">
          <div class=\"col-md-12\">
            <div class=\"border-top pt-5\">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart text-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    <script src=\"/front/js/jquery-3.3.1.min.js\"></script>
    <script src=\"/front/js/jquery-migrate-3.0.0.js\"></script>
    <script src=\"/front/js/popper.min.js\"></script>
    <script src=\"/front/js/bootstrap.min.js\"></script>
    <script src=\"/front/js/owl.carousel.min.js\"></script>
    <script src=\"/front/js/jquery.sticky.js\"></script>
    <script src=\"/front/js/jquery.waypoints.min.js\"></script>
    <script src=\"/front/js/jquery.animateNumber.min.js\"></script>
    <script src=\"/front/js/jquery.fancybox.min.js\"></script>
    <script src=\"/front/js/jquery.stellar.min.js\"></script>
    <script src=\"/front/js/jquery.easing.1.3.js\"></script>
    <script src=\"/front/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"/front/js/isotope.pkgd.min.js\"></script>
    <script src=\"/front/js/aos.js\"></script>

    <script src=\"/front/js/main.js\"></script>

    ";
        // line 350
        $this->displayBlock('javascripts', $context, $blocks);
        // line 353
        echo "  </body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 156
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 157
        echo "         <div class=\"site-section\">
      <div class=\"container\">

       
        <div class=\"row\">
          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"post-entry-1 h-100\">
              <a href=\"single.html\">
                <img src=\"images/img_1.jpg\" alt=\"Image\"
                 class=\"img-fluid\">
              </a>
              <div class=\"post-entry-1-contents\">
                
                <h2><a href=\"single.html\">Lorem ipsum dolor sit amet</a></h2>
                <span class=\"meta d-inline-block mb-3\">July 17, 2019 <span class=\"mx-2\">by</span> <a href=\"#\">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"post-entry-1 h-100\">
              <a href=\"single.html\">
                <img src=\"images/img_2.jpg\" alt=\"Image\"
                 class=\"img-fluid\">
              </a>
              <div class=\"post-entry-1-contents\">
                
                <h2><a href=\"single.html\">Lorem ipsum dolor sit amet</a></h2>
                <span class=\"meta d-inline-block mb-3\">July 17, 2019 <span class=\"mx-2\">by</span> <a href=\"#\">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"post-entry-1 h-100\">
              <a href=\"single.html\">
                <img src=\"images/img_3.jpg\" alt=\"Image\"
                 class=\"img-fluid\">
              </a>
              <div class=\"post-entry-1-contents\">
                
                <h2><a href=\"single.html\">Lorem ipsum dolor sit amet</a></h2>
                <span class=\"meta d-inline-block mb-3\">July 17, 2019 <span class=\"mx-2\">by</span> <a href=\"#\">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"post-entry-1 h-100\">
              <a href=\"single.html\">
                <img src=\"images/img_1.jpg\" alt=\"Image\"
                 class=\"img-fluid\">
              </a>
              <div class=\"post-entry-1-contents\">
                
                <h2><a href=\"single.html\">Lorem ipsum dolor sit amet</a></h2>
                <span class=\"meta d-inline-block mb-3\">July 17, 2019 <span class=\"mx-2\">by</span> <a href=\"#\">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"post-entry-1 h-100\">
              <a href=\"single.html\">
                <img src=\"images/img_2.jpg\" alt=\"Image\"
                 class=\"img-fluid\">
              </a>
              <div class=\"post-entry-1-contents\">
                
                <h2><a href=\"single.html\">Lorem ipsum dolor sit amet</a></h2>
                <span class=\"meta d-inline-block mb-3\">July 17, 2019 <span class=\"mx-2\">by</span> <a href=\"#\">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"post-entry-1 h-100\">
              <a href=\"single.html\">
                <img src=\"images/img_3.jpg\" alt=\"Image\"
                 class=\"img-fluid\">
              </a>
              <div class=\"post-entry-1-contents\">
                
                <h2><a href=\"single.html\">Lorem ipsum dolor sit amet</a></h2>
                <span class=\"meta d-inline-block mb-3\">July 17, 2019 <span class=\"mx-2\">by</span> <a href=\"#\">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

        </div>

        
        <div class=\"col-12 mt-5 text-center\">
          <span class=\"p-3\">1</span>
          <a href=\"#\" class=\"p-3\">2</a>
          <a href=\"#\" class=\"p-3\">3</a>
          <a href=\"#\" class=\"p-3\">4</a>
        </div>
        

        
        
      </div>
      

      
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 350
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 351
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 351,  518 => 350,  398 => 157,  388 => 156,  377 => 35,  367 => 34,  355 => 353,  353 => 350,  269 => 268,  267 => 156,  222 => 113,  214 => 109,  212 => 108,  205 => 105,  199 => 103,  197 => 102,  191 => 98,  188 => 97,  182 => 95,  176 => 93,  174 => 92,  171 => 91,  169 => 90,  166 => 89,  163 => 88,  157 => 86,  151 => 84,  149 => 83,  146 => 82,  144 => 81,  140 => 79,  134 => 78,  128 => 76,  126 => 75,  86 => 37,  84 => 34,  56 => 9,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

  <head>
    <title>Trips &mdash; Website Template by Colorlib</title>
    <meta charset=\"utf-8\">
    
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"/front/fonts/icomoon/style.css\">

    <link rel=\"stylesheet\" href=\"/front/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/front/css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"/front/css/jquery.fancybox.min.css\">
    <link rel=\"stylesheet\" href=\"/front/css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"/front/css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"/front/fonts/flaticon/font/flaticon.css\">
    <link rel=\"stylesheet\" href=\"/front/css/aos.css\">

    <!-- MAIN CSS -->
    <link rel=\"stylesheet\" href=\"/front/css/style.css\">
    <style>
      .fullWidthForm form {
        width: 100%;
      }
      .fullWidthForm {
        padding: 5%;
      }
    </style>
    {% block stylesheets %}

    {% endblock %}
  </head>

  <body data-spy=\"scroll\" data-target=\".site-navbar-target\" data-offset=\"300\">

    <div class=\"site-wrap\" id=\"home-section\">

      <div class=\"site-mobile-menu site-navbar-target\">
        <div class=\"site-mobile-menu-header\">
          <div class=\"site-mobile-menu-close mt-3\">
            <span class=\"icon-close2 js-menu-toggle\"></span>
          </div>
        </div>
        <div class=\"site-mobile-menu-body\"></div>
      </div>

      <header class=\"site-navbar site-navbar-target\" role=\"banner\">

        <div class=\"container\">
          <div class=\"row align-items-center position-relative\">

            <div class=\"col-3 \">
              <div class=\"site-logo\">
                <a href=\"index.html\" class=\"font-weight-bold\">
                  <img src=\"/front/images/logo.png\" alt=\"Image\" class=\"img-fluid\">
                </a>
              </div>
            </div>

            <div class=\"col-9  text-right\">
             

              <span class=\"d-inline-block d-lg-none\"><a href=\"#\" class=\"text-white site-menu-toggle js-menu-toggle py-5 text-white\"><span class=\"icon-menu h3 text-white\"></span></a></span>

             

              <nav class=\"site-navigation text-right ml-auto d-none d-lg-block\" role=\"navigation\">
                <ul class=\"site-menu main-menu js-clone-nav ml-auto \">
                  <!-- home page path  -->
                  {% if \"home\" in app.request.get('_route') %}
                    <li class=\"active\"><a href=\"{{ path('app_stay_index') }}\" class=\"nav-link\">Home</a></li> 
                  {% else %}
                    <li><a href=\"{{ path('app_stay_index') }}\" class=\"nav-link\">Home</a></li> 
                  {% endif %}  
                  
                  {% if is_granted('ROLE_HOST') %}
                    <!-- new stay path  -->
                    {% if \"app_stay\" in app.request.get('_route') %}
                      <li class=\"active\"><a href=\"{{ path('app_stay_index') }}\" class=\"nav-link\">My Stay</a></li>
                    {% else %}
                      <li><a href=\"{{ path('app_stay_new') }}\" class=\"nav-link\">My Stay</a></li>
                    {% endif %}
                  {% endif %}

                  {% if is_granted('ROLE_GUEST') %}
                    <!-- booking path -->
                    {% if \"Booking\" in app.request.get('_route') %}
                      <li class=\"active\"><a href=\"{{ path('MyBookings') }}\" class=\"nav-link\">My Bookings</a></li>
                    {% else %}
                      <li><a href=\"{{ path('MyBookings') }}\" class=\"nav-link\">My Bookings</a></li>
                    {% endif %}
                  {% endif %}
                  
                  <li ><a href=\"index.html\" class=\"nav-link\">Rankings</a></li>
                  <li ><a href=\"index.html\" class=\"nav-link\">Feedbacks</a></li>

                  {% if app.user %}
                  <li><a href=\"{{ path('account_index') }}\" class=\"nav-link\">My Profile</a></li>
                  {% endif %}
                  <li><a href=\"{{ path('app_experience_index_front') }}\" class=\"nav-link\">Experiences</a></li>
                 

                  {% if app.user %}
                    <li title=\"logout\"><a href=\"{{ path('app_logout') }}\">
                     <img src=\"/icons/logout.svg\"> </a> 
                    </li>
                  {% endif %}
                </ul>
              </nav>
            </div>

           
          </div>
        </div>

      </header>



    <div class=\"ftco-blocks-cover-1\">
      <div class=\"site-section-cover overlay\" style=\"background-image: url('/front/images/hero_3.jpg')\">
         <div class=\"container\">
          <div class=\"row align-items-center\">
            <div >
              <h1 class=\"mb-3 text-white\">Exploring The World In Comfort</h1>
              <p> Star Tours , your guide to find the perfect stay. </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"site-section\" style=\"max-height:10px;\">

      <div class=\"container\">
        <div class=\"row justify-content-center text-center\">
          <div class=\"col-md-7\" >
            <div class=\"heading-39101 mb-5\">
              <span class=\"backdrop text-center\">Journey</span>
              <span class=\"subtitle-39191\">Journey</span>
              <h3>Your Journey Starts Here</h3>
            </div>
          </div>
        </div>
       

      </div>
    </div>
    </div>
    
    {% block body %}
         <div class=\"site-section\">
      <div class=\"container\">

       
        <div class=\"row\">
          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"post-entry-1 h-100\">
              <a href=\"single.html\">
                <img src=\"images/img_1.jpg\" alt=\"Image\"
                 class=\"img-fluid\">
              </a>
              <div class=\"post-entry-1-contents\">
                
                <h2><a href=\"single.html\">Lorem ipsum dolor sit amet</a></h2>
                <span class=\"meta d-inline-block mb-3\">July 17, 2019 <span class=\"mx-2\">by</span> <a href=\"#\">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"post-entry-1 h-100\">
              <a href=\"single.html\">
                <img src=\"images/img_2.jpg\" alt=\"Image\"
                 class=\"img-fluid\">
              </a>
              <div class=\"post-entry-1-contents\">
                
                <h2><a href=\"single.html\">Lorem ipsum dolor sit amet</a></h2>
                <span class=\"meta d-inline-block mb-3\">July 17, 2019 <span class=\"mx-2\">by</span> <a href=\"#\">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"post-entry-1 h-100\">
              <a href=\"single.html\">
                <img src=\"images/img_3.jpg\" alt=\"Image\"
                 class=\"img-fluid\">
              </a>
              <div class=\"post-entry-1-contents\">
                
                <h2><a href=\"single.html\">Lorem ipsum dolor sit amet</a></h2>
                <span class=\"meta d-inline-block mb-3\">July 17, 2019 <span class=\"mx-2\">by</span> <a href=\"#\">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"post-entry-1 h-100\">
              <a href=\"single.html\">
                <img src=\"images/img_1.jpg\" alt=\"Image\"
                 class=\"img-fluid\">
              </a>
              <div class=\"post-entry-1-contents\">
                
                <h2><a href=\"single.html\">Lorem ipsum dolor sit amet</a></h2>
                <span class=\"meta d-inline-block mb-3\">July 17, 2019 <span class=\"mx-2\">by</span> <a href=\"#\">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"post-entry-1 h-100\">
              <a href=\"single.html\">
                <img src=\"images/img_2.jpg\" alt=\"Image\"
                 class=\"img-fluid\">
              </a>
              <div class=\"post-entry-1-contents\">
                
                <h2><a href=\"single.html\">Lorem ipsum dolor sit amet</a></h2>
                <span class=\"meta d-inline-block mb-3\">July 17, 2019 <span class=\"mx-2\">by</span> <a href=\"#\">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"post-entry-1 h-100\">
              <a href=\"single.html\">
                <img src=\"images/img_3.jpg\" alt=\"Image\"
                 class=\"img-fluid\">
              </a>
              <div class=\"post-entry-1-contents\">
                
                <h2><a href=\"single.html\">Lorem ipsum dolor sit amet</a></h2>
                <span class=\"meta d-inline-block mb-3\">July 17, 2019 <span class=\"mx-2\">by</span> <a href=\"#\">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

        </div>

        
        <div class=\"col-12 mt-5 text-center\">
          <span class=\"p-3\">1</span>
          <a href=\"#\" class=\"p-3\">2</a>
          <a href=\"#\" class=\"p-3\">3</a>
          <a href=\"#\" class=\"p-3\">4</a>
        </div>
        

        
        
      </div>
      

      
    {% endblock %}
     <footer class=\"site-footer bg-light\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3\">
            <h2 class=\"footer-heading mb-3\">Instagram</h2>
            <div class=\"row\">
              <div class=\"col-4 gal_col\">
                <a href=\"#\"><img src=\"images/insta_1.jpg\" alt=\"Image\" class=\"img-fluid\"></a>
              </div>
              <div class=\"col-4 gal_col\">
                <a href=\"#\"><img src=\"images/insta_2.jpg\" alt=\"Image\" class=\"img-fluid\"></a>
              </div>
              <div class=\"col-4 gal_col\">
                <a href=\"#\"><img src=\"images/insta_3.jpg\" alt=\"Image\" class=\"img-fluid\"></a>
              </div>
              <div class=\"col-4 gal_col\">
                <a href=\"#\"><img src=\"images/insta_4.jpg\" alt=\"Image\" class=\"img-fluid\"></a>
              </div>
              <div class=\"col-4 gal_col\">
                <a href=\"#\"><img src=\"images/insta_5.jpg\" alt=\"Image\" class=\"img-fluid\"></a>
              </div>
              <div class=\"col-4 gal_col\">
                <a href=\"#\"><img src=\"images/insta_6.jpg\" alt=\"Image\" class=\"img-fluid\"></a>
              </div>
            </div>
          </div>
          <div class=\"col-lg-8 ml-auto\">
            <div class=\"row\">
              <div class=\"col-lg-6 ml-auto\">
                <h2 class=\"footer-heading mb-4\">Quick Links</h2>
                <ul class=\"list-unstyled\">
                  <li><a href=\"#\">About Us</a></li>
                  <li><a href=\"#\">Testimonials</a></li>
                  <li><a href=\"#\">Terms of Service</a></li>
                  <li><a href=\"#\">Privacy</a></li>
                  <li><a href=\"#\">Contact Us</a></li>
                </ul>
              </div>
              <div class=\"col-lg-6\">
                <h2 class=\"footer-heading mb-4\">Newsletter</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt odio iure animi ullam quam, deleniti rem!</p>
                <form action=\"#\" class=\"d-flex\" class=\"subscribe\">
                  <input type=\"text\" class=\"form-control mr-3\" placeholder=\"Email\">
                  <input type=\"submit\" value=\"Send\" class=\"btn btn-primary\">
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <div class=\"row pt-5 mt-5 text-center\">
          <div class=\"col-md-12\">
            <div class=\"border-top pt-5\">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart text-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    <script src=\"/front/js/jquery-3.3.1.min.js\"></script>
    <script src=\"/front/js/jquery-migrate-3.0.0.js\"></script>
    <script src=\"/front/js/popper.min.js\"></script>
    <script src=\"/front/js/bootstrap.min.js\"></script>
    <script src=\"/front/js/owl.carousel.min.js\"></script>
    <script src=\"/front/js/jquery.sticky.js\"></script>
    <script src=\"/front/js/jquery.waypoints.min.js\"></script>
    <script src=\"/front/js/jquery.animateNumber.min.js\"></script>
    <script src=\"/front/js/jquery.fancybox.min.js\"></script>
    <script src=\"/front/js/jquery.stellar.min.js\"></script>
    <script src=\"/front/js/jquery.easing.1.3.js\"></script>
    <script src=\"/front/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"/front/js/isotope.pkgd.min.js\"></script>
    <script src=\"/front/js/aos.js\"></script>

    <script src=\"/front/js/main.js\"></script>

    {% block javascripts %}

    {% endblock %}
  </body>

</html>", "base.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\base.html.twig");
    }
}
