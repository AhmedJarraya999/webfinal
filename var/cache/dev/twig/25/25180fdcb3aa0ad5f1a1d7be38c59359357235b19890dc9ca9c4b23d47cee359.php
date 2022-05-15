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

/* stay/_filtre.html.twig */
class __TwigTemplate_23cbcc52518593df9249b71bcce2069de4d436fac98375bfa36c7a32c3ac0ebc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/_filtre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stay/_filtre.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
    <div class=\"my-custom-class-for-errors\">
        
    </div>
    ";
        // line 10
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_HOST")) {
            // line 11
            echo "        <div class= \"col\">    
            <a class=\"btn btn-success\"  href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stay_new");
            echo "\">Create new</a>
        </div>
    ";
        }
        // line 15
        echo "</br>
</br>
";
        // line 18
        echo "    <div class=\"row\" style=\"padding-bottom: 3%\">
        <div class=\"col\">
        </div>
        <div class=\"col\">
            <input type=\"text\" id=\"stay-description\" class=\"form-control\" placeholder=\"a key word please\" />
        </div>
        <div class=\"col\" id=\"some-custom-id\">
            <input type=\"date\" id=\"stay-date\" class=\"form-control\" >
        </div>

        <div class=\"col\">
            <button onclick=\"fetchStaysFromApi()\" class=\"btn btn-primary w=100\">Look for a stay
                <img src=\"/front/images/magnifier.png\" alt=\"Image\" class=\"maskImg\"/>
            </button>
        </div>
        
        
        
        <div class=\"col\">
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stay/_filtre.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  81 => 15,  75 => 12,  72 => 11,  69 => 10,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

    <div class=\"my-custom-class-for-errors\">
        
    </div>
    {#
    mamchetlich 
    {% if app.user and app.user.getRoles==\"ROLE_HOST\" %}
#}
    {% if is_granted('ROLE_HOST') %}
        <div class= \"col\">    
            <a class=\"btn btn-success\"  href=\"{{ path('app_stay_new') }}\">Create new</a>
        </div>
    {% endif %}
</br>
</br>
{#{% endif %}#}
    <div class=\"row\" style=\"padding-bottom: 3%\">
        <div class=\"col\">
        </div>
        <div class=\"col\">
            <input type=\"text\" id=\"stay-description\" class=\"form-control\" placeholder=\"a key word please\" />
        </div>
        <div class=\"col\" id=\"some-custom-id\">
            <input type=\"date\" id=\"stay-date\" class=\"form-control\" >
        </div>

        <div class=\"col\">
            <button onclick=\"fetchStaysFromApi()\" class=\"btn btn-primary w=100\">Look for a stay
                <img src=\"/front/images/magnifier.png\" alt=\"Image\" class=\"maskImg\"/>
            </button>
        </div>
        
        
        
        <div class=\"col\">
        </div>
    </div>
{% endblock %}", "stay/_filtre.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\stay\\_filtre.html.twig");
    }
}
