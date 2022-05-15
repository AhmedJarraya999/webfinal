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

/* emails/registration.html.twig */
class __TwigTemplate_955df67e3724b6d9f3e6e60ce99120f6be63610acafa0a672ebb69171374abd9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/registration.html.twig"));

        // line 1
        echo "<style>
    html,
    body {
        margin: 0 auto !important;
        padding: 0 !important;
        height: 100% !important;
        width: 100% !important;
    }
    /* What it does: Stops email clients resizing small text. */
    * {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }
    /* What it does: Centers email on Android 4.4 */
    div[style*=\"margin: 16px 0\"] {
        margin: 0 !important;
    }
    /* What it does: Stops Outlook from adding extra spacing to tables. */
    table,
    td {
        mso-table-lspace: 0 !important;
        mso-table-rspace: 0 !important;
    }
    table {
        border-spacing: 0 !important;
        border-collapse: collapse !important;
        table-layout: fixed !important;
        margin: 0 auto !important;
    }
    table table table {
        table-layout: auto;
    }
    img {
        -ms-interpolation-mode: bicubic;
    }
    *[x-apple-data-detectors], /* iOS */
    .x-gmail-data-detectors, /* Gmail */
    .x-gmail-data-detectors *,
    .aBn {
        border-bottom: 0 !important;
        cursor: default !important;
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }
    .a6S {
        display: none !important;
        opacity: 0.01 !important;
    }
    img.g-img+div {
        display: none !important;
    }
    /* What it does: Prevents underlining the button text in Windows 10 */
    .button-link {
        text-decoration: none !important;
    }
    @media only screen and(min-device-width: 375px) and(max-device-width: 413px) {
        .email-container {
            min-width: 375px !important;
        }
    }
</style>
<style>
    .button-td,
    .button-a {
        transition: all 100ms ease-in;
    }
    .button-td:hover,
    .button-a:hover {
        background: #555555 !important;
        border-color: #555555 !important;
    }
    /* Media Queries */
    @media screen and(max-width: 480px) {
        .fluid {
            width: 100% !important;
            max-width: 100% !important;
            height: auto !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }
        .stack-column,
        .stack-column-center {
            display: block !important;
            width: 100% !important;
            max-width: 100% !important;
            direction: ltr !important;
        }
        /* And center justify these ones. */
        .stack-column-center {
            text-align: center !important;
        }
        .center-on-narrow {
            text-align: center !important;
            display: block !important;
            margin-left: auto !important;
            margin-right: auto !important;
            float: none !important;
        }
        table.center-on-narrow {
            display: inline-block !important;
        }
        .email-container p {
            font-size: 17px !important;
            line-height: 22px !important;
        }
    }
</style>

<div width=\"100%\" bgcolor=\"#F1F1F1\" style=\"margin: 0; mso-line-height-rule: exactly;\">
    <center style=\"width: 100%; background: #F1F1F1; text-align: left;\">
        <div style=\"display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;\">
            Your account is active now
        </div>
        <div style=\"max-width: 680px; margin: auto;\" class=\"email-container\">
            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" width=\"100%\" style=\"max-width: 680px;\" class=\"email-container\">
                <tr>
                    <td bgcolor=\"#333333\">
                        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                            <tr>
                                <td style=\"padding: 30px 40px 30px 40px; text-align: center;\">
                                    <span style=\"color:#fff; font-size: 30px\">
                                        Trips.com
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td background=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/front/images/hero_1.jpg"), "html", null, true);
        echo "\" bgcolor=\"#222222\" align=\"center\" valign=\"top\" style=\"text-align: center; background-position: center center !important; background-size: cover !important;\">
                        <div>
                            <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" style=\"max-width:500px; margin: auto;\">
                                <tr>
                                    <td height=\"20\" style=\"font-size:20px; line-height:20px;\">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align=\"center\" valign=\"middle\">
                                        <table>
                                            <tr>
                                                <td valign=\"top\" style=\"text-align: center; padding: 60px 0 10px 20px;\">
                                                    <h1 style=\"margin: 0; font-family: 'Montserrat', sans-serif; font-size: 30px; line-height: 36px; color: #ffffff; font-weight: bold;\">WELCOME
                                                        ";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 146, $this->source); })()), "html", null, true);
        echo ",</h1>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td valign=\"top\" align=\"center\" style=\"text-align: center; padding: 15px 0px 60px 0px;\">
                                                    <center>
                                                        <table role=\"presentation\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"center-on-narrow\" style=\"text-align: center;\">
                                                            <tr>
                                                                <td style=\"border-radius: 50px; background: #26a4d3; text-align: center;\" class=\"button-td\">
                                                                    <a href=\"http://localhost:8000/login\" style=\"background: #26a4d3; border: 15px solid #26a4d3; font-family: 'Montserrat', sans-serif; font-size: 14px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 50px; font-weight: bold;\" class=\"button-a\">
                                                                        <span style=\"color:#ffffff;\" class=\"button-link\">&nbsp;&nbsp;&nbsp;&nbsp;ACCESS ACCOUNT&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </center>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td height=\"20\" style=\"font-size:20px; line-height:20px;\">&nbsp;</td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td bgcolor=\"#ffffff\">
                        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                            <tr>
                                <td style=\"padding: 40px 40px 20px 40px; text-align: left;\">
                                    <h1 style=\"margin: 0; font-family: 'Montserrat', sans-serif; font-size: 20px; line-height: 26px; color: #333333; font-weight: bold;\">YOUR ACCOUNT IS NOW ACTIVE</h1>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"padding: 0px 40px 20px 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; text-align: left; font-weight:bold;\">
                                    <p style=\"margin: 0;\">Thanks for choosing our website.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"padding: 0px 40px 20px 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; text-align: left; font-weight:normal;\">
                                    <p style=\"margin: 0;\">some text description about the website?<br></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- INTRO : END -->
                    <!-- CTA : BEGIN -->
                    <tr>
                        <td bgcolor=\"#26a4d3\">
                            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                                <tr>
                                    <td style=\"padding: 40px 40px 5px 40px; text-align: center;\">
                                        <h1 style=\"margin: 0; font-family: 'Montserrat', sans-serif; font-size: 20px; line-height: 24px; color: #ffffff; font-weight: bold;\">YOUR FEEDBACK MOTIVATE US TO MOVE AHEAD</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td style=\"padding: 0px 40px 20px 40px; font-family: sans-serif; font-size: 17px; line-height: 23px; color: #aad4ea; text-align: center; font-weight:normal;\">
                                        <p style=\"margin: 0;\">Let us know what you think of our website</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        valign=\"middle\" align=\"center\" style=\"text-align: center; padding: 0px 20px 40px 20px;\">
                                        <!-- Button : BEGIN -->
                                        <table role=\"presentation\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"center-on-narrow\">
                                            <tr>
                                                <td style=\"border-radius: 50px; background: #ffffff; text-align: center;\" class=\"button-td\">
                                                    <a href=\"#\" style=\"background: #ffffff; border: 15px solid #ffffff; font-family: 'Montserrat', sans-serif; font-size: 14px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 50px; font-weight: bold;\" class=\"button-a\">
                                                        <span style=\"color:#26a4d3;\" class=\"button-link\">&nbsp;&nbsp;&nbsp;&nbsp;GIVE FEEDBACK&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor=\"#ffffff\">
                            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                                <br>
                                    <tr>
                                        <td align=\"center\">
                                            <img src=\"https://img.icons8.com/dusk/64/000000/ms-share-point.png\" width=\"37\" height=\"37\" style=\"display: block; border: 0px;\"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align=\"center\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px; padding: 5px 0 10px 0;\">
                                            <p style=\"font-size: 14px; font-weight: 800; line-height: 18px; color: #333333;\">
                                                Trips.com<br>
                                                    Street, City,Country
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"padding: 0px 40px 10px 40px; font-family: sans-serif; font-size: 12px; line-height: 18px; color: #666666; text-align: center; font-weight:normal;\">
                                                <p style=\"margin: 0;\">This email was sent to you from contact@trips.com</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"padding: 0px 40px 40px 40px; font-family: sans-serif; font-size: 12px; line-height: 18px; color: #666666; text-align: center; font-weight:normal;\">
                                                <p style=\"margin: 0;\">Copyright &copy; 2021-2022
                                                    <b>Trips.com</b>, All Rights Reserved.</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </center>
            </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 146,  178 => 134,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    html,
    body {
        margin: 0 auto !important;
        padding: 0 !important;
        height: 100% !important;
        width: 100% !important;
    }
    /* What it does: Stops email clients resizing small text. */
    * {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }
    /* What it does: Centers email on Android 4.4 */
    div[style*=\"margin: 16px 0\"] {
        margin: 0 !important;
    }
    /* What it does: Stops Outlook from adding extra spacing to tables. */
    table,
    td {
        mso-table-lspace: 0 !important;
        mso-table-rspace: 0 !important;
    }
    table {
        border-spacing: 0 !important;
        border-collapse: collapse !important;
        table-layout: fixed !important;
        margin: 0 auto !important;
    }
    table table table {
        table-layout: auto;
    }
    img {
        -ms-interpolation-mode: bicubic;
    }
    *[x-apple-data-detectors], /* iOS */
    .x-gmail-data-detectors, /* Gmail */
    .x-gmail-data-detectors *,
    .aBn {
        border-bottom: 0 !important;
        cursor: default !important;
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }
    .a6S {
        display: none !important;
        opacity: 0.01 !important;
    }
    img.g-img+div {
        display: none !important;
    }
    /* What it does: Prevents underlining the button text in Windows 10 */
    .button-link {
        text-decoration: none !important;
    }
    @media only screen and(min-device-width: 375px) and(max-device-width: 413px) {
        .email-container {
            min-width: 375px !important;
        }
    }
</style>
<style>
    .button-td,
    .button-a {
        transition: all 100ms ease-in;
    }
    .button-td:hover,
    .button-a:hover {
        background: #555555 !important;
        border-color: #555555 !important;
    }
    /* Media Queries */
    @media screen and(max-width: 480px) {
        .fluid {
            width: 100% !important;
            max-width: 100% !important;
            height: auto !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }
        .stack-column,
        .stack-column-center {
            display: block !important;
            width: 100% !important;
            max-width: 100% !important;
            direction: ltr !important;
        }
        /* And center justify these ones. */
        .stack-column-center {
            text-align: center !important;
        }
        .center-on-narrow {
            text-align: center !important;
            display: block !important;
            margin-left: auto !important;
            margin-right: auto !important;
            float: none !important;
        }
        table.center-on-narrow {
            display: inline-block !important;
        }
        .email-container p {
            font-size: 17px !important;
            line-height: 22px !important;
        }
    }
</style>

<div width=\"100%\" bgcolor=\"#F1F1F1\" style=\"margin: 0; mso-line-height-rule: exactly;\">
    <center style=\"width: 100%; background: #F1F1F1; text-align: left;\">
        <div style=\"display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;\">
            Your account is active now
        </div>
        <div style=\"max-width: 680px; margin: auto;\" class=\"email-container\">
            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" width=\"100%\" style=\"max-width: 680px;\" class=\"email-container\">
                <tr>
                    <td bgcolor=\"#333333\">
                        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                            <tr>
                                <td style=\"padding: 30px 40px 30px 40px; text-align: center;\">
                                    <span style=\"color:#fff; font-size: 30px\">
                                        Trips.com
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td background=\"{{ asset('/front/images/hero_1.jpg') }}\" bgcolor=\"#222222\" align=\"center\" valign=\"top\" style=\"text-align: center; background-position: center center !important; background-size: cover !important;\">
                        <div>
                            <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" style=\"max-width:500px; margin: auto;\">
                                <tr>
                                    <td height=\"20\" style=\"font-size:20px; line-height:20px;\">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align=\"center\" valign=\"middle\">
                                        <table>
                                            <tr>
                                                <td valign=\"top\" style=\"text-align: center; padding: 60px 0 10px 20px;\">
                                                    <h1 style=\"margin: 0; font-family: 'Montserrat', sans-serif; font-size: 30px; line-height: 36px; color: #ffffff; font-weight: bold;\">WELCOME
                                                        {{ username }},</h1>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td valign=\"top\" align=\"center\" style=\"text-align: center; padding: 15px 0px 60px 0px;\">
                                                    <center>
                                                        <table role=\"presentation\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"center-on-narrow\" style=\"text-align: center;\">
                                                            <tr>
                                                                <td style=\"border-radius: 50px; background: #26a4d3; text-align: center;\" class=\"button-td\">
                                                                    <a href=\"http://localhost:8000/login\" style=\"background: #26a4d3; border: 15px solid #26a4d3; font-family: 'Montserrat', sans-serif; font-size: 14px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 50px; font-weight: bold;\" class=\"button-a\">
                                                                        <span style=\"color:#ffffff;\" class=\"button-link\">&nbsp;&nbsp;&nbsp;&nbsp;ACCESS ACCOUNT&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </center>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td height=\"20\" style=\"font-size:20px; line-height:20px;\">&nbsp;</td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td bgcolor=\"#ffffff\">
                        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                            <tr>
                                <td style=\"padding: 40px 40px 20px 40px; text-align: left;\">
                                    <h1 style=\"margin: 0; font-family: 'Montserrat', sans-serif; font-size: 20px; line-height: 26px; color: #333333; font-weight: bold;\">YOUR ACCOUNT IS NOW ACTIVE</h1>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"padding: 0px 40px 20px 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; text-align: left; font-weight:bold;\">
                                    <p style=\"margin: 0;\">Thanks for choosing our website.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"padding: 0px 40px 20px 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; text-align: left; font-weight:normal;\">
                                    <p style=\"margin: 0;\">some text description about the website?<br></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- INTRO : END -->
                    <!-- CTA : BEGIN -->
                    <tr>
                        <td bgcolor=\"#26a4d3\">
                            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                                <tr>
                                    <td style=\"padding: 40px 40px 5px 40px; text-align: center;\">
                                        <h1 style=\"margin: 0; font-family: 'Montserrat', sans-serif; font-size: 20px; line-height: 24px; color: #ffffff; font-weight: bold;\">YOUR FEEDBACK MOTIVATE US TO MOVE AHEAD</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td style=\"padding: 0px 40px 20px 40px; font-family: sans-serif; font-size: 17px; line-height: 23px; color: #aad4ea; text-align: center; font-weight:normal;\">
                                        <p style=\"margin: 0;\">Let us know what you think of our website</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        valign=\"middle\" align=\"center\" style=\"text-align: center; padding: 0px 20px 40px 20px;\">
                                        <!-- Button : BEGIN -->
                                        <table role=\"presentation\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"center-on-narrow\">
                                            <tr>
                                                <td style=\"border-radius: 50px; background: #ffffff; text-align: center;\" class=\"button-td\">
                                                    <a href=\"#\" style=\"background: #ffffff; border: 15px solid #ffffff; font-family: 'Montserrat', sans-serif; font-size: 14px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 50px; font-weight: bold;\" class=\"button-a\">
                                                        <span style=\"color:#26a4d3;\" class=\"button-link\">&nbsp;&nbsp;&nbsp;&nbsp;GIVE FEEDBACK&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor=\"#ffffff\">
                            <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                                <br>
                                    <tr>
                                        <td align=\"center\">
                                            <img src=\"https://img.icons8.com/dusk/64/000000/ms-share-point.png\" width=\"37\" height=\"37\" style=\"display: block; border: 0px;\"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align=\"center\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px; padding: 5px 0 10px 0;\">
                                            <p style=\"font-size: 14px; font-weight: 800; line-height: 18px; color: #333333;\">
                                                Trips.com<br>
                                                    Street, City,Country
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"padding: 0px 40px 10px 40px; font-family: sans-serif; font-size: 12px; line-height: 18px; color: #666666; text-align: center; font-weight:normal;\">
                                                <p style=\"margin: 0;\">This email was sent to you from contact@trips.com</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"padding: 0px 40px 40px 40px; font-family: sans-serif; font-size: 12px; line-height: 18px; color: #666666; text-align: center; font-weight:normal;\">
                                                <p style=\"margin: 0;\">Copyright &copy; 2021-2022
                                                    <b>Trips.com</b>, All Rights Reserved.</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </center>
            </div>", "emails/registration.html.twig", "C:\\Users\\jaray\\3D Objects\\codenameone\\jarrayasymfo-main\\templates\\emails\\registration.html.twig");
    }
}
