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

/* emails/booking.html.twig */
class __TwigTemplate_570bcecc125ecdebdc5ffbbcfa9939482d177771ccd3f4fe8f992810274aa296 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/booking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/booking.html.twig"));

        // line 1
        echo "<h2>
    You’re booked! Pack your bags – see you on [";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 2, $this->source); })()), "firstDate", [], "any", false, false, false, 2), "m/d/Y"), "html", null, true);
        echo "]
</h2>

<h4>
    Hi [";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), "firstname", [], "any", false, false, false, 6), "html", null, true);
        echo "],</h4>
<p>It’s confirmed, we’ll see you on [";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 7, $this->source); })()), "firstDate", [], "any", false, false, false, 7), "m/d/Y"), "html", null, true);
        echo "]! 
    Thank you for booking with us. You’ll find details of your reservation enclosed below.
    <br/>
    If you need to get in touch, you can email or phone us directly. 
        We look forward to welcoming you soon!
    <br/>
    Thanks again,
    <br/>
    The team at [Company Name]
    <br/>
    <table style=\"border: 1px solid black; width: 100%\">
        <tr>
            <td style=\"width: 25%; border: 1px solid black;\">
                From
            </td>
            <td style=\"width: 25% border: 1px solid black;\">
                To
            </td>
            <td style=\"width: 50% border: 1px solid black;\">
                Stay description
            </td>
        </tr>
        <tr>
            <td style=\"width: 25%; border: 1px solid black;\">
                ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 31, $this->source); })()), "firstDate", [], "any", false, false, false, 31), "m/d/Y"), "html", null, true);
        echo "
            </td>
            <td style=\"width: 25% border: 1px solid black;\">
                ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 34, $this->source); })()), "endDate", [], "any", false, false, false, 34), "m/d/Y"), "html", null, true);
        echo "
            </td>
            <td style=\"width: 50% border: 1px solid black;\">
                ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stay"]) || array_key_exists("stay", $context) ? $context["stay"] : (function () { throw new RuntimeError('Variable "stay" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
        </tr>
    </table>
</p>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  90 => 34,  84 => 31,  57 => 7,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>
    You’re booked! Pack your bags – see you on [{{ booking.firstDate | date(\"m/d/Y\") }}]
</h2>

<h4>
    Hi [{{ user.firstname }}],</h4>
<p>It’s confirmed, we’ll see you on [{{ booking.firstDate | date(\"m/d/Y\") }}]! 
    Thank you for booking with us. You’ll find details of your reservation enclosed below.
    <br/>
    If you need to get in touch, you can email or phone us directly. 
        We look forward to welcoming you soon!
    <br/>
    Thanks again,
    <br/>
    The team at [Company Name]
    <br/>
    <table style=\"border: 1px solid black; width: 100%\">
        <tr>
            <td style=\"width: 25%; border: 1px solid black;\">
                From
            </td>
            <td style=\"width: 25% border: 1px solid black;\">
                To
            </td>
            <td style=\"width: 50% border: 1px solid black;\">
                Stay description
            </td>
        </tr>
        <tr>
            <td style=\"width: 25%; border: 1px solid black;\">
                {{ booking.firstDate | date(\"m/d/Y\") }}
            </td>
            <td style=\"width: 25% border: 1px solid black;\">
                {{ booking.endDate | date(\"m/d/Y\") }}
            </td>
            <td style=\"width: 50% border: 1px solid black;\">
                {{ stay.description }}</td>
        </tr>
    </table>
</p>", "emails/booking.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\emails\\booking.html.twig");
    }
}
