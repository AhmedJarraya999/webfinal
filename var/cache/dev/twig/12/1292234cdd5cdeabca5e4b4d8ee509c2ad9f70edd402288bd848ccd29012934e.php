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

/* experience/show.html.twig */
class __TwigTemplate_edacbadec4085fbf06344b21ffc9d08f8828c10732a087ea097f6d2ad1fa33cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "experience/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "experience/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "experience/show.html.twig", 1);
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

        echo "Experience";
        
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
        echo "    <h1>Experience</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 20, $this->source); })()), "content", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Likes</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 24, $this->source); })()), "likes", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 28, $this->source); })()), "date", [], "any", false, false, false, 28)), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div class=\"col\">
            <div class=\"card bg-light\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">liste des commentaires</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Content</th>
                                <th>Author</th>
                                <th>comment date</th>
                                <th>likes number</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 49, $this->source); })()), "comments", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 50
            echo "                            <tr>
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                
                                <td>
                                
                                ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 56), "getFirstname", [], "method", false, false, false, 56), "html", null, true);
            echo " </td>
                          <td> ";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 57)), "html", null, true);
            echo "</td>  
                           <td> ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "likes", [], "any", false, false, false, 58), "html", null, true);
            echo "</td> 
                          
                                
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>

    <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experience_index_front");
        echo "\">back to list</a>

    ";
        // line 73
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "experience/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 73,  194 => 70,  185 => 63,  174 => 58,  170 => 57,  166 => 56,  159 => 52,  155 => 51,  152 => 50,  148 => 49,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Experience{% endblock %}

{% block body %}
    <h1>Experience</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ experience.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ experience.title }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ experience.content }}</td>
            </tr>
            <tr>
                <th>Likes</th>
                <td>{{ experience.likes }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{experience.date | date}}</td>
            </tr>
        </tbody>
    </table>
    <div class=\"col\">
            <div class=\"card bg-light\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">liste des commentaires</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Content</th>
                                <th>Author</th>
                                <th>comment date</th>
                                <th>likes number</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for comment in experience.comments %}
                            <tr>
                                <td>{{comment.id}}</td>
                                <td>{{comment.content}}</td>
                                
                                <td>
                                
                                {{comment.user.getFirstname()}} </td>
                          <td> {{comment.date | date}}</td>  
                           <td> {{comment.likes}}</td> 
                          
                                
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>

    <a href=\"{{ path('app_experience_index_front') }}\">back to list</a>

    {#<a href=\"{{ path('app_experience_edit', {'id': experience.id}) }}\">edit</a>#}

    {#{{ include('experience/_delete_form.html.twig') }}#}
{% endblock %}
", "experience/show.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\experience\\show.html.twig");
    }
}
