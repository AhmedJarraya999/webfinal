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

/* stay/index.html.twig */
class __TwigTemplate_53c9aa78dbad9c9a6d9bb739da475cc20e9b91fd611fa61097e5b31aea9a07a8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stay/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Stay index
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("stay/_filtre.html.twig", "stay/index.html.twig", 14)->display($context);
        // line 15
        echo "
    <div class=\"row\" id=\"stay-carts-list\" style=\"display: flex;align-items: center;background-color:white;padding:100px; border: 60px solid orange\">
        
    </div>
    
  ";
        // line 37
        echo "            <div class=\"row\" style=\"width: 100%\" id=\"stays-not-found\">
                <p> No stays found to display with this search criteria</p>
            </div>            


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "   <script>
        const upBtn = document.querySelector('.up-button');
        const downBtn = document.querySelector('.down-button');
        const sidebar = document.querySelector('.sidebar');
        const mainSlide = document.querySelector('.main-slide');
        const slideCount = mainSlide.querySelectorAll('div').length;
        const container = document.querySelector('#slidecontainer');
   </script> 

   <script>
        const fetchStaysFromApi = () => {
            const text = \$('#stay-description').val();
            const date = \$('#stay-date').val();
            \$.post(\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_search");
        echo "\", {text, date}, function(response){ 
                drawTable(response);
            });
        }
        const drawTable = (data) => {
            const table = \$(`#stays-list`);
            const body = \$(`#stays-list > tbody`)
            const baseImgPath = \"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/"), "html", null, true);
        echo "\";
            body.empty();
            \$('#stay-carts-list').empty();
            if(data.length > 0){
                table.css({'display': 'block'});
                \$('#stay-carts-list').css({'display': 'flex'});
                \$('#stays-not-found').css({'display': 'none'});
                data.forEach( row => {
                    // table row creation
                    const showPath = \"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_show", ["id" => "__code"]);
        echo "\".replaceAll('__code', row.id);
                    const editPath = \"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_edit", ["id" => "__code"]);
        echo "\".replaceAll('__code', row.id);
                    const bookingPath = \"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_stay", ["stay" => "__code"]);
        echo "\".replaceAll('__code', row.id);
                    const imgSrc = baseImgPath + '/' + row.photo;
                    const startDate = new Date(row.startdateav.date);
                    const endDate = new Date(row.enddateav.date);
                    let tr = \$(`<tr></tr>`);
                    tr.append(`<td> \${row.id} </td>`);
                    tr.append(`<td> \${row.capacity} </td>`);
                    tr.append(`<td> \${row.description} </td>`);
                    tr.append(`<td> <img width='80px' height='80px' src=\"\${imgSrc}\" alt=\"Image\" class=\"img-fluid\">
                    </td>`);
                    tr.append(`<td> \${startDate.toLocaleDateString(\"fr\")} </td>`);
                    tr.append(`<td> \${endDate.toLocaleDateString(\"fr\")} </td>`);
                    tr.append(`<td>
                        <a href=\"\${showPath}\">show</a>
                        <a href=\"\${editPath}\">edit</a>
                        <a href=\"\${bookingPath}\">booking</a>
                    </td>`);
                    body.append(tr);
                    // div image carousel creation 
                    const c =  \$(`<div class=\"col-lg-4 col-md-6 mb-4 aos-init aos-animate\" data-aos=\"fade-up\">
                        <div class=\"listing-item\">
                            <div class=\"listing-image\">
                                <img src=\"\${imgSrc}\" alt=\"Image\" class=\"img-fluid\"></div>
                                <div class=\"listing-item-content\">
                                    <a class=\"px-3 mb-3 category bg-primary\" href=\"\${showPath}\">Consult</a>
                                    <h2 class=\"mb-1\">
                                        <a href=\"\${showPath}\">\${row.description}</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>`);
                    \$('#stay-carts-list').append(c);
                });
            }else{
                table.css({'display': 'none'});
                \$('#stay-carts-list').css({'display': 'none'});
                \$('#stays-not-found').css({'display': 'block'});
            }
        }
        
        fetchStaysFromApi();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stay/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 76,  190 => 75,  186 => 74,  174 => 65,  164 => 58,  149 => 45,  139 => 44,  124 => 37,  117 => 15,  115 => 14,  112 => 13,  102 => 12,  91 => 9,  81 => 8,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Stay index
{% endblock %}


{% block stylesheets %}
    
{% endblock %}

{% block body %}

    {% include 'stay/_filtre.html.twig' %}

    <div class=\"row\" id=\"stay-carts-list\" style=\"display: flex;align-items: center;background-color:white;padding:100px; border: 60px solid orange\">
        
    </div>
    
  {#  <table class=\"table\" id=\"stays-list\" style=\"display: none\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Capacity</th>
                        <th width=\"40%\">Description</th>
                        <th>Photo</th>
                        <th>Startdateav</th>
                        <th>Enddateav</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody >
                   
                </tbody>
            </table>
            #}
            <div class=\"row\" style=\"width: 100%\" id=\"stays-not-found\">
                <p> No stays found to display with this search criteria</p>
            </div>            


{% endblock %}

{% block javascripts %}
   <script>
        const upBtn = document.querySelector('.up-button');
        const downBtn = document.querySelector('.down-button');
        const sidebar = document.querySelector('.sidebar');
        const mainSlide = document.querySelector('.main-slide');
        const slideCount = mainSlide.querySelectorAll('div').length;
        const container = document.querySelector('#slidecontainer');
   </script> 

   <script>
        const fetchStaysFromApi = () => {
            const text = \$('#stay-description').val();
            const date = \$('#stay-date').val();
            \$.post(\"{{ path('app_stay_search') }}\", {text, date}, function(response){ 
                drawTable(response);
            });
        }
        const drawTable = (data) => {
            const table = \$(`#stays-list`);
            const body = \$(`#stays-list > tbody`)
            const baseImgPath = \"{{ asset('uploads/') }}\";
            body.empty();
            \$('#stay-carts-list').empty();
            if(data.length > 0){
                table.css({'display': 'block'});
                \$('#stay-carts-list').css({'display': 'flex'});
                \$('#stays-not-found').css({'display': 'none'});
                data.forEach( row => {
                    // table row creation
                    const showPath = \"{{ path('app_stay_show', {'id': '__code'}) }}\".replaceAll('__code', row.id);
                    const editPath = \"{{ path('app_stay_edit', {'id': '__code'}) }}\".replaceAll('__code', row.id);
                    const bookingPath = \"{{ path('app_booking_stay', {'stay': '__code'}) }}\".replaceAll('__code', row.id);
                    const imgSrc = baseImgPath + '/' + row.photo;
                    const startDate = new Date(row.startdateav.date);
                    const endDate = new Date(row.enddateav.date);
                    let tr = \$(`<tr></tr>`);
                    tr.append(`<td> \${row.id} </td>`);
                    tr.append(`<td> \${row.capacity} </td>`);
                    tr.append(`<td> \${row.description} </td>`);
                    tr.append(`<td> <img width='80px' height='80px' src=\"\${imgSrc}\" alt=\"Image\" class=\"img-fluid\">
                    </td>`);
                    tr.append(`<td> \${startDate.toLocaleDateString(\"fr\")} </td>`);
                    tr.append(`<td> \${endDate.toLocaleDateString(\"fr\")} </td>`);
                    tr.append(`<td>
                        <a href=\"\${showPath}\">show</a>
                        <a href=\"\${editPath}\">edit</a>
                        <a href=\"\${bookingPath}\">booking</a>
                    </td>`);
                    body.append(tr);
                    // div image carousel creation 
                    const c =  \$(`<div class=\"col-lg-4 col-md-6 mb-4 aos-init aos-animate\" data-aos=\"fade-up\">
                        <div class=\"listing-item\">
                            <div class=\"listing-image\">
                                <img src=\"\${imgSrc}\" alt=\"Image\" class=\"img-fluid\"></div>
                                <div class=\"listing-item-content\">
                                    <a class=\"px-3 mb-3 category bg-primary\" href=\"\${showPath}\">Consult</a>
                                    <h2 class=\"mb-1\">
                                        <a href=\"\${showPath}\">\${row.description}</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>`);
                    \$('#stay-carts-list').append(c);
                });
            }else{
                table.css({'display': 'none'});
                \$('#stay-carts-list').css({'display': 'none'});
                \$('#stays-not-found').css({'display': 'block'});
            }
        }
        
        fetchStaysFromApi();
    </script>
{% endblock %}", "stay/index.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\stay\\index.html.twig");
    }
}
