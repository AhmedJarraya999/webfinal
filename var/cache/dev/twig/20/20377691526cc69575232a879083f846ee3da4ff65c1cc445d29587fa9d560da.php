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

/* experience/index.html.twig */
class __TwigTemplate_fbfe5d1f77112ce0755289d0b8afeee125073e9d647d65611f44c11267655565 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "experience/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "experience/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "experience/index.html.twig", 1);
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

        echo "Experience index";
        
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
        echo "    <div class=\"site-section\">
        <div class=\"container\">

            <input type=\"text\" class=\"form-control\" placeholder=\"Search\" id=\"searchDynamic\">


            <div class=\"row\">
                <div class=\"col-md-20 blog-content\">
                    <br>
                    <h1>Experience </h1>
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experience_new_front");
        echo "\" class=\"btn btn-primary\">Add Experience</a>
                    <div class=\"row\" id=\"experienceDynamic\">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const experienceHolder = document.getElementById('experienceDynamic');
        const searchField = document.getElementById('searchDynamic');
        console.log(searchField.value);
        function getExperiences(e) {
            const title = searchField.value;
            const PATH = title ? \"/experience/sayebni/\" + title : \"/experience/searchAll\";
            fetch(PATH, {
                method: 'GET',
            }).then(res => res.json()).then((data) => {
                
                experienceHolder.innerHTML = \"\";
                data.forEach(
                    
                    experience => {

                         const showexp = \"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experience_show_front-details", ["id" => "__code"]);
        echo "\".replaceAll('__code', experience.id);
                    const makecomment = \"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_exp", ["experience" => "__code"]);
        echo "\".replaceAll('__code', experience.id);
                    
                   
                        experienceHolder.innerHTML += `<div class=\"col-lg-4 col-md-6 mb-4\">
                                   <div class=\"post-entry-1 h-100\">
                                     <div class=\"post-entry-1-contents\">
                                     <h2><a href=\"/experience/Front/\${experience.id}\"> \${experience.title}</a></h2>
                                      <span class=\"meta d-inline-block mb-3\">\${experience.date} by \${experience.user}   </span>
                                      <p>\${experience.content}</p><a href=\"\${showexp}\" class=\"btn btn-info\" style=\"margin:5px;width:400px\">See More ?</a>
                                      <a href=\"\${makecomment}\" class=\"btn btn-primary\" style=\"margin:5px;width:400px\">Make a comment</a>
                                      
                                     
  
                                     </div>
                                   </div>
                                </div>`
                                
                                
                    })
            }
            
        )
        
            
            .catch((err) => console.log(err));
        }

        getExperiences(null)
        searchField.addEventListener('change', getExperiences)
        const showPath = \"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experience_show_front", ["id" => "__code"]);
        echo "\".replaceAll('__code', row.id);
                   
    </script>
    </script>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "experience/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 71,  132 => 42,  128 => 41,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Experience index{% endblock %}

{% block body %}
    <div class=\"site-section\">
        <div class=\"container\">

            <input type=\"text\" class=\"form-control\" placeholder=\"Search\" id=\"searchDynamic\">


            <div class=\"row\">
                <div class=\"col-md-20 blog-content\">
                    <br>
                    <h1>Experience </h1>
                    <a href=\"{{ path('app_experience_new_front') }}\" class=\"btn btn-primary\">Add Experience</a>
                    <div class=\"row\" id=\"experienceDynamic\">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const experienceHolder = document.getElementById('experienceDynamic');
        const searchField = document.getElementById('searchDynamic');
        console.log(searchField.value);
        function getExperiences(e) {
            const title = searchField.value;
            const PATH = title ? \"/experience/sayebni/\" + title : \"/experience/searchAll\";
            fetch(PATH, {
                method: 'GET',
            }).then(res => res.json()).then((data) => {
                
                experienceHolder.innerHTML = \"\";
                data.forEach(
                    
                    experience => {

                         const showexp = \"{{ path('app_experience_show_front-details', {'id': '__code'}) }}\".replaceAll('__code', experience.id);
                    const makecomment = \"{{ path('comment_exp', {'experience': '__code'}) }}\".replaceAll('__code', experience.id);
                    
                   
                        experienceHolder.innerHTML += `<div class=\"col-lg-4 col-md-6 mb-4\">
                                   <div class=\"post-entry-1 h-100\">
                                     <div class=\"post-entry-1-contents\">
                                     <h2><a href=\"/experience/Front/\${experience.id}\"> \${experience.title}</a></h2>
                                      <span class=\"meta d-inline-block mb-3\">\${experience.date} by \${experience.user}   </span>
                                      <p>\${experience.content}</p><a href=\"\${showexp}\" class=\"btn btn-info\" style=\"margin:5px;width:400px\">See More ?</a>
                                      <a href=\"\${makecomment}\" class=\"btn btn-primary\" style=\"margin:5px;width:400px\">Make a comment</a>
                                      
                                     
  
                                     </div>
                                   </div>
                                </div>`
                                
                                
                    })
            }
            
        )
        
            
            .catch((err) => console.log(err));
        }

        getExperiences(null)
        searchField.addEventListener('change', getExperiences)
        const showPath = \"{{ path('app_experience_show_front', {'id': '__code'}) }}\".replaceAll('__code', row.id);
                   
    </script>
    </script>

    
{% endblock %}



", "experience/index.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\experience\\index.html.twig");
    }
}
