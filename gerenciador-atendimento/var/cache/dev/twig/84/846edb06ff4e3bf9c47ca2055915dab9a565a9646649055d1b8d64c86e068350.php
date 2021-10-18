<?php

/* security/login.html.twig */
class __TwigTemplate_5109c22651606d2d15398d73f89288021a08189d58641cfef22d961e2b105394 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        $context["logo"] = "images/logo-proximo2.png";
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\" />
        <title>PROXIMO - Gerenciamento Atendimento.</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"bg-dark\">
        <div class=\"container\">
            <form id=\"login-form\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_check");
        echo "\" method=\"post\" class=\"form-signin\">
            
                <h2 id=\"logo\" class=\"form-signin-heading\">
                    <img class=\"img-logo\" alt=\"Novo SGA\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new Twig_Error_Runtime('Variable "logo" does not exist.', 17, $this->source); })())), "html", null, true);
        echo "\">
                </h2>
                ";
        // line 19
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 21, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 21, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 24
        echo "                <div id=\"login\">
                    <input type=\"text\" name=\"_username\" class=\"form-control my-1\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.username"), "html", null, true);
        echo "\" autofocus value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\">
                    <input type=\"password\" name=\"_password\" class=\"form-control my-1 mb-4\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.password"), "html", null, true);
        echo "\">
                    <button class=\"btn btn-lg btn-outline-light btn-block\" type=\"submit\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.button.submit"), "html", null, true);
        echo "</button>
                </div>
            </form>
        </div>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  88 => 26,  82 => 25,  79 => 24,  73 => 21,  70 => 20,  68 => 19,  63 => 17,  57 => 14,  50 => 10,  46 => 9,  42 => 8,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set logo = \"images/logo-proximo2.png\" %}

<!DOCTYPE html>
<html lang=\"{{ locale }}\">
    <head>
        <meta charset=\"utf-8\" />
        <title>PROXIMO - Gerenciamento Atendimento.</title>
        <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon.png') }}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/login.css') }}\" />
    </head>
    <body class=\"bg-dark\">
        <div class=\"container\">
            <form id=\"login-form\" action=\"{{ path('login_check') }}\" method=\"post\" class=\"form-signin\">
            
                <h2 id=\"logo\" class=\"form-signin-heading\">
                    <img class=\"img-logo\" alt=\"Novo SGA\" src=\"{{ asset(logo) }}\">
                </h2>
                {% if error %}
                    <div class=\"alert alert-danger\">
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}
                <div id=\"login\">
                    <input type=\"text\" name=\"_username\" class=\"form-control my-1\" placeholder=\"{{ 'label.username'|trans }}\" autofocus value=\"{{ last_username }}\">
                    <input type=\"password\" name=\"_password\" class=\"form-control my-1 mb-4\" placeholder=\"{{ 'label.password'|trans }}\">
                    <button class=\"btn btn-lg btn-outline-light btn-block\" type=\"submit\">{{ 'login.button.submit'|trans }}</button>
                </div>
            </form>
        </div>
    </body>
</html>", "security/login.html.twig", "C:\\xampp\\htdocs\\SGA\\gerenciador-atendimento\\templates\\security\\login.html.twig");
    }
}
